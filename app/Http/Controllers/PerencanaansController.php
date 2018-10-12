<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Perencanaan;
use App\PerencanaanDetail;
use App\Komposisi;
use App\KomposisiDetail;
// use DB;

use App\Http\Requests;
use Session;

// use Illuminate\Support\Facades\Auth;

class PerencanaansController extends Controller
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
        // ->addColumn(['data' => 'length', 'name'=>'length', 'title'=>'Panjang (mm)'])
        // ->addColumn(['data' => 'width', 'name'=>'width', 'title'=>'Lebar (mm)'])
        ->addColumn(['data' => 'thickness', 'name'=>'thickness', 'title'=>'Thick. (mm)'])
        ->addColumn(['data' => 'quantity', 'name'=>'quantity', 'title'=>'Qty'])
        ->addColumn(['data' => 'allowance', 'name'=>'allowance', 'title'=>'Allow. (hr)'])
        ->addColumn(['data' => 'calspeed', 'name'=>'calspeed', 'title'=>'CalSpeed'])
        ->addColumn(['data' => 'keterangan', 'name'=>'keterangan', 'title'=>'Ket.'])           
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'Action', 'orderable'=>false, 'searchable'=>false]);


        return view('perencanaans.index')->with(compact('html'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(Request $request)
    {
        //tambah kode komposisi sesuai id
        $prefix = 'PRCN';
        $kode   = Perencanaan::max('id');
        // dd($kode);
        if($kode != 0){        
            $kode   = $kode+1;
            $kode   = str_pad($kode, 4, 0, STR_PAD_LEFT);
            $kode   = $prefix.$kode;
        } else{
            $kode   = $prefix.'0001';
        }
        // dd($kode);

        return view('perencanaans.create')->with(compact('kode'));

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'komposisi_id'      =>'required',
            'customer_id'       =>'required',
            'kode'              =>'required',
            'spk_num'           =>'required',            
            'kode_warna'        =>'required',
            'length'            =>'required|numeric',
            'width'             =>'required|numeric',
            'thickness'         =>'required|numeric',
            'quantity'          =>'required|numeric',            
            'allowance'         =>'required|numeric',
            'calspeed'          =>'required|numeric',
            'keterangan'        =>'nullable',
            'user_id'           =>'required'
        ]);

        // dd($request);

        $perencanaan                = new perencanaan();
        $perencanaan->komposisi_id  = $request->komposisi_id;        
        $perencanaan->customer_id   = $request->customer_id;
        $perencanaan->kode          = $request->kode;        
        $perencanaan->spk_num       = $request->spk_num;
        $perencanaan->kode_warna    = $request->kode_warna;
        $perencanaan->length        = $request->length;
        $perencanaan->width         = $request->width;
        $perencanaan->thickness     = $request->thickness;
        $perencanaan->quantity      = $request->quantity;
        $perencanaan->allowance     = $request->allowance;
        $perencanaan->calspeed      = $request->calspeed;
        $perencanaan->keterangan    = $request->keterangan;
        $perencanaan->user_id       = $request->user_id;

        if ($perencanaan->save()){
            $id = $perencanaan->id;
            foreach ($request->no_mesin as $key => $v) {
                $data = array(
                    'perencanaan_id'    => $id ?:0,
                    'no_mesin'          => $v ?:0,
                    'melt_pump'         => $request->melt_pump [$key] ?:0,
                    'mat_com1'          => $request->mat_com1 [$key] ?:0,
                    'mat_com2'          => $request->mat_com2 [$key] ?:0,
                    'mat_com3'          => $request->mat_com3 [$key] ?:0,
                    'mat_com4'          => $request->mat_com4 [$key] ?:0,
                    'mat_com5'          => $request->mat_com5 [$key] ?:0,
                    'mat_com6'          => $request->mat_com6 [$key] ?:0,
                    'per_com1'          => $request->per_com1 [$key] ?:0,
                    'per_com2'          => $request->per_com2 [$key] ?:0,
                    'per_com3'          => $request->per_com3 [$key] ?:0,
                    'per_com4'          => $request->per_com4 [$key] ?:0,
                    'per_com5'          => $request->per_com5 [$key] ?:0,
                    'per_com6'          => $request->per_com6 [$key] ?:0,
                    'needhour_com1'     => $request->needhour_com1 [$key] ?:0,
                    'needhour_com2'     => $request->needhour_com2 [$key] ?:0,
                    'needhour_com3'     => $request->needhour_com3 [$key] ?:0,
                    'needhour_com4'     => $request->needhour_com4 [$key] ?:0,
                    'needhour_com5'     => $request->needhour_com5 [$key] ?:0,
                    'needhour_com6'     => $request->needhour_com6 [$key] ?:0,
                    'need_com1'         => $request->need_com1 [$key] ?:0,
                    'need_com2'         => $request->need_com2 [$key] ?:0,
                    'need_com3'         => $request->need_com3 [$key] ?:0,
                    'need_com4'         => $request->need_com4 [$key] ?:0,
                    'need_com5'         => $request->need_com5 [$key] ?:0,
                    'need_com6'         => $request->need_com6 [$key] ?:0,
                );

                PerencanaanDetail::insert($data);            
            }

            Session::flash("flash_notification", [
                "level"     =>"success",
                "message"   =>"Berhasil menyimpan $perencanaan->kode"
            ]);
            return redirect()->route('perencanaans.index');
        }
    }


    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //cari id perencanaan
        $perencanaan = Perencanaan::with('perencanaandetails')->findOrFail($id);
        $perencanaandetails = Perencanaan::with('perencanaandetails')->findOrFail($id)->perencanaandetails;

        return view('perencanaans.detail')->with(compact('perencanaan','perencanaandetails'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $perencanaan = Perencanaan::with('perencanaandetails')->findOrFail($id);
        $perencanaandetails = Perencanaan::with('perencanaandetails')->findOrFail($id)->perencanaandetails;
        // dd($perencanaan);
        // dd($perencanaandetails);

        return view('perencanaans.edit')->with(compact('perencanaan','perencanaandetails'));
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
        $this->validate($request, [         
            'komposisi_id'      =>'required',
            'customer_id'       =>'required',
            'kode'              =>'required',
            'spk_num'           =>'required',            
            'kode_warna'        =>'required',
            'length'            =>'required|numeric',
            'width'             =>'required|numeric',
            'thickness'         =>'required|numeric',
            'quantity'          =>'required|numeric',            
            'allowance'         =>'required|numeric',
            'calspeed'          =>'required|numeric',
            'keterangan'        =>'nullable',
            'user_id'           =>'required'
        ]);

    $perencanaan = Perencanaan::with('perencanaandetails')->findOrFail($id);

    $perencanaan->update($request->all());
    
    $id = $perencanaan->id;
    foreach ($request->no_mesin as $key => $v) {
        $data = PerencanaanDetail::where('id', $perencanaan->perencanaandetails[$key]->id )->first();

        $data->no_mesin  = $request->no_mesin[$key]?:0;
        $data->melt_pump = $request->melt_pump [$key] ?:0;
        $data->mat_com1 = $request->mat_com1 [$key] ?:0;
        $data->mat_com2 = $request->mat_com2 [$key] ?:0;
        $data->mat_com3 = $request->mat_com3 [$key] ?:0;
        $data->mat_com4 = $request->mat_com4 [$key] ?:0;
        $data->mat_com5 = $request->mat_com5 [$key] ?:0;
        $data->mat_com6 = $request->mat_com6 [$key] ?:0;
        $data->per_com1 = $request->per_com1 [$key] ?:0;
        $data->per_com2 = $request->per_com2 [$key] ?:0;
        $data->per_com3 = $request->per_com3 [$key] ?:0;
        $data->per_com4 = $request->per_com4 [$key] ?:0;
        $data->per_com5 = $request->per_com5 [$key] ?:0;
        $data->per_com6 = $request->per_com6 [$key] ?:0;

        $data->needhour_com1 = $request->needhour_com1 [$key] ?:0;
        $data->needhour_com2 = $request->needhour_com2 [$key] ?:0;
        $data->needhour_com3 = $request->needhour_com3 [$key] ?:0;
        $data->needhour_com4 = $request->needhour_com4 [$key] ?:0;
        $data->needhour_com5 = $request->needhour_com5 [$key] ?:0;
        $data->needhour_com6 = $request->needhour_com6 [$key] ?:0;

        $data->need_com1 = $request->need_com1 [$key] ?:0;
        $data->need_com2 = $request->need_com2 [$key] ?:0;
        $data->need_com3 = $request->need_com3 [$key] ?:0;
        $data->need_com4 = $request->need_com4 [$key] ?:0;
        $data->need_com5 = $request->need_com5 [$key] ?:0;
        $data->need_com6 = $request->need_com6 [$key] ?:0;

        $data->save();
    } 

    Session::flash("flash_notification", [
        "level"     => "success",
        "message"   => "Berhasil menyimpan $perencanaan->kode"
    ]);

    return redirect()->route('komposisis.index');
    }

    /**
    * remove the specified resource from storage
    * 
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        if(!Perencanaan::destroy($id))
            return redirect()->back();

        Session::flash("flash_notification", [
            "level"     =>"success",
            "message"   =>"Perencanaan telah dihapus"
        ]);

        return redirect()->route('perencanaans.index');
    }

    /**
    * Menampilkan data pada form perencanaan dari tabel komposisi menggunakan javascript
    *
    * @return \Illuminate\Http\Response
    */
    public function findDataKomposisi(Request $request)
    {
        $dataKomposisi = Komposisi::all()->where('id',$request->id)->first();
        $dataDetail    = KomposisiDetail::all()->where('komposisi_id',$request->id);
        $hasilDetail = $dataDetail->values();
        return response()->json([
            'komposisi'=>$dataKomposisi,
            'detail'=>$hasilDetail]);
    }


    /**
    * Menampilkan data pada form edit perencanaan dari tabel perencanaan
    *
    * @return \Illuminate\Http\Response
    */
    public function findDataPerencanaan(Request $request)
    {
        $dataPerencanaan = Perencanaan::all()->where('id',$request->id)->first();
        $dataDetail    = PerencanaanDetail::all()->where('perencanaan_id',$request->id);
        $hasilDetail = $dataDetail->values();
        return response()->json([
            'komposisi'=>$dataPerencanaan,
            'detail'=>$hasilDetail]);
    }


};