<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Perencanaan;
use App\PerencanaanDetail;
use App\Komposisi;
use App\KomposisiDetail;

use App\Http\Requests;
use Session;
use PDF;

class CustomReportController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
        //Penggunaan method with() akan meload relasi dari Book ke Author dengan teknik eager loading
        // $perencanaans = Perencanaan::with('customer','komposisi');

            $perencanaans = Perencanaan::with('komposisi','customer');

            return Datatables::of($perencanaans)

            ->addColumn('action', function($perencanaan){
                return view('datatable._action2', [
                    'model'           => $perencanaan,
                    'form_url'        => route('perencanaans.destroy', $perencanaan->id),
                    'detail_url'      => route('perencanaans.show', $perencanaan->id),
                    'edit_url'        => route('perencanaans.edit', $perencanaan->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $perencanaan->kode . '?',                 
                ]);
            })->make(true);
        }

        $html = $htmlBuilder 
        ->addColumn(['data' => 'kode', 'name'=>'kode', 'title'=>'Kode'])
        // ->addColumn(['data' => 'komposisi_id', 'name'=>'komposisi_id', 'title'=>'Komposisi ID'])
        ->addColumn(['data' => 'customer.nama', 'name'=>'customer.nama', 'title'=>'Customer'])
        ->addColumn(['data' => 'spk_num', 'name'=>'spk_num', 'title'=>'No SPK'])
        ->addColumn(['data' => 'kode_warna', 'name'=>'kode_warna', 'title'=>'Kode Warna'])
        ->addColumn(['data' => 'length', 'name'=>'length', 'title'=>'Panjang (mm)'])
        ->addColumn(['data' => 'width', 'name'=>'width', 'title'=>'Lebar (mm)'])
        ->addColumn(['data' => 'thickness', 'name'=>'thickness', 'title'=>'Thick. (mm)'])
        ->addColumn(['data' => 'quantity', 'name'=>'quantity', 'title'=>'Qty'])
        ->addColumn(['data' => 'allowance', 'name'=>'allowance', 'title'=>'Allow. (hr)'])
        // ->addColumn(['data' => 'calspeed', 'name'=>'calspeed', 'title'=>'CalSpeed'])
        ->addColumn(['data' => 'keterangan', 'name'=>'keterangan', 'title'=>'Ket.'])           
        // ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'Action', 'orderable'=>false, 'searchable'=>false])
        ;


        return view('customreports.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function findDataPerencanaan(Request $request)
    {
        $Perencanaan = Perencanaan::all()->where('id',$request->id)->first();        
        return response()->json(['perencanaan'=>$Perencanaan]);
    }
}
