<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Komposisi;
use App\KomposisiDetail;

use App\Http\Requests;

use Session;

class KomposisisController extends Controller
{
/**
* Display a listing of the resource
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request, Builder $htmlBuilder)
{
    if ($request->ajax()) {
        // $komposisis = Komposisi::select(['kode','spk_num','kode_warna','customer_id','prod_date','length','width','thickness','quantity','calspeed','keterangan','user_id']);

        $komposisis = Komposisi::with('customer');

        return Datatables::of($komposisis)

        ->addColumn('nama', function ($komposisi){
            return $komposisi->nama;
        })

        ->addColumn('action', function ($komposisi){
            return view('datatable._action2',[
                'model'             =>  $komposisi,
                'form_url'          =>  route('komposisis.destroy', $komposisi->id),
                'detail_url'        =>  route('komposisis.show', $komposisi->id),
                'edit_url'          =>  route('komposisis.edit', $komposisi->id),
                'confirm_message'   =>  'Yakin mau menghapus '. $komposisi->kode_warna . '?'
            ]);
        })->make(true);
    }


    $html = $htmlBuilder        
    ->addColumn(['data'=>'kode','name'=>'kode','title'=>'Kode'])
    ->addColumn(['data'=>'spk_num','name'=>'spk_num','title'=>'No SPK'])
    ->addColumn(['data'=>'kode_warna','name'=>'kode_warna','title'=>'Kode Warna'])
    ->addColumn(['data'=>'customer.nama','name'=>'customer.nama','title'=>'Customer'])
    ->addColumn(['data'=>'prod_date','name'=>'prod_date','title'=>'Prod. Date'])
    // ->addColumn(['data'=>'length','name'=>'length','title'=>'Length'])
    // ->addColumn(['data'=>'width','name'=>'width','title'=>'Width'])
    ->addColumn(['data'=>'thickness','name'=>'thickness','title'=>'Thick'])
    ->addColumn(['data'=>'quantity','name'=>'quantity','title'=>'Qty'])
    // ->addColumn(['data'=>'calspeed','name'=>'calspeed','title'=>'Cal. Speed'])
    ->addColumn(['data'=>'keterangan','name'=>'keterangan','title'=>'Ket.'])
    ->addColumn(['data'=>'action','name'=>'action','title'=>'Action','orderable'=>false,'searchable'=>false]);

    return view('komposisis.index')->with(compact('html'));
}


/**
* Show the form for creating a new resource
*
* @return \Illuminate\Http\Response
*/

public function create(Request $request)
{    
    
    //tambah kode komposisi sesuai id
    $prefix = 'KMPS';
    $kode   = Komposisi::max('id');

    if($kode != 0){        
        $kode   = $kode+1;
        $kode   = str_pad($kode, 4, 0, STR_PAD_LEFT);
        $kode   = $prefix.$kode;
    } else{
        $kode   = $prefix.'0001';
    }
    // dd($kode);
    
    return view('komposisis.create')->with(compact('kode'));
}

/**
* @param  Simpan data pada database
* @return [type]
*/
public function store(Request $request)
{
    $this->validate($request, [
        'kode'          => 'required',
        'spk_num'       => 'required',
        'kode_warna'    => 'required',
        'customer_id'   => 'required',
        'prod_date'     => 'required',
        'length'        => 'required|numeric',
        'width'         => 'required|numeric',
        'thickness'     => 'required|numeric',
        'quantity'      => 'required|numeric',
        'calspeed'      => 'required|numeric',
        'keterangan'    => 'required',
        'user_id'       => 'required'
    ]);

    $komposisi              = new komposisi();
    $komposisi->kode        = $request->kode;
    $komposisi->spk_num     = $request->spk_num;
    $komposisi->kode_warna  = $request->kode_warna;
    $komposisi->customer_id = $request->customer_id;
    $komposisi->prod_date   = $request->prod_date;
    $komposisi->length      = $request->length;
    $komposisi->width       = $request->width;
    $komposisi->thickness   = $request->thickness;
    $komposisi->quantity    = $request->quantity;
    $komposisi->calspeed    = $request->calspeed;
    $komposisi->keterangan  = $request->keterangan;
    $komposisi->user_id     = $request->user_id;

    if ($komposisi->save()){
        $id = $komposisi->id;
        foreach ($request->no_mesin as $key => $v) {
            $data = array(
                'komposisi_id'=> $id ?:0,
                'no_mesin'    => $v ?:0,
                'melt_pump'   => $request->melt_pump [$key] ?:0,
                'mat_com1'    => $request->mat_com1 [$key] ?:0,
                'mat_com2'    => $request->mat_com2 [$key] ?:0,
                'mat_com3'    => $request->mat_com3 [$key] ?:0,
                'mat_com4'    => $request->mat_com4 [$key] ?:0,
                'mat_com5'    => $request->mat_com5 [$key] ?:0,
                'mat_com6'    => $request->mat_com6 [$key] ?:0,
                'per_com1'    => $request->per_com1 [$key] ?:0,
                'per_com2'    => $request->per_com2 [$key] ?:0,
                'per_com3'    => $request->per_com3 [$key] ?:0,
                'per_com4'    => $request->per_com4 [$key] ?:0,
                'per_com5'    => $request->per_com5 [$key] ?:0,
                'per_com6'    => $request->per_com6 [$key] ?:0,
            );

            KomposisiDetail::insert($data);            
        }

        // dd($data);

        Session::flash("flash_notification", [
            "level"     => "success",
            "message"   => "Berhasil menyimpan $komposisi->kode_warna"
        ]);

        return redirect()->route('komposisis.index');
    }
}

/**
* Display the specified resource
* 
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{    
    //cari id komposisi
    $komposisi = Komposisi::with('komposisidetails')->findOrFail($id);
    $komposisidetails = Komposisi::with('komposisidetails')->findOrFail($id)->komposisidetails;

    // dd($komposisi);    
    // dd($komposisidetails);
    
    return view('komposisis.detail')->with(compact('komposisi','komposisidetails'));
}


/**
* Show the form for editing the specified resource
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
    $komposisi = Komposisi::with('komposisidetails')->findOrFail($id);
    $komposisidetails = Komposisi::with('komposisidetails')->findOrFail($id)->komposisidetails;

    // dd($komposisi);    
    // dd($komposisidetails);
    
    return view('komposisis.edit')->with(compact('komposisi','komposisidetails'));

}

/**
* Update the specified resource in storage
* 
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    $this->validate($request, [         
        'kode'		    => 'required',
        'spk_num'       => 'required',
        'kode_warna'	=> 'required',
        'customer_id'	=> 'required',
        'prod_date'		=> 'required',
        'length'		=> 'required|numeric',
        'width'			=> 'required|numeric',
        'thickness'		=> 'required|numeric',
        'quantity'		=> 'required|numeric',
        'calspeed'		=> 'required|numeric',
        'keterangan'	=> 'required',
        'user_id'		=> 'required'
    ]);

    $komposisi = Komposisi::with('komposisidetails')->findOrFail($id);

    $komposisi->update($request->all());
    
    $id = $komposisi->id;
    foreach ($request->no_mesin as $key => $v) {
        $data = KomposisiDetail::where('id', $komposisi->komposisidetails[$key]->id )->first();

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

        $data->save();
    } 

    Session::flash("flash_notification", [
        "level"     => "success",
        "message"   => "Berhasil menyimpan $komposisi->kode_warna"
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
    if(!Komposisi::destroy($id))
        return redirect()->back();

        Session::flash("flash_notification", [
            "level"     =>"success",
            "message"   =>"Komposisi material telah dihapus"
        ]);

        return redirect()->route('komposisis.index');
    }
}

