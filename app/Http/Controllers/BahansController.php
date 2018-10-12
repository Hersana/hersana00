<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bahan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use PDF;

class BahansController extends Controller
{
    /**
    * Display a listing of the resource
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $bahans = Bahan::with('stok');

            return Datatables::of($bahans)

            ->addColumn('action', function ($bahan){
                return view('datatable._action',[
                    'model'				=>	$bahan,
                    'form_url'			=>	route('bahans.destroy', $bahan->id),
                    'edit_url'			=>	route('bahans.edit', $bahan->id),
                    'confirm_message'	=>	'Yakin mau menghapus '. $bahan->nama . '?'
                ]);
            })->make(true);
        }

        $html = $htmlBuilder
        ->addColumn(['data' => 'kode', 'name' => 'kode', 'title' => 'Kode'])
        ->addColumn(['data' => 'nama', 'name' => 'nama', 'title' => 'Nama'])
        ->addColumn(['data' => 'keterangan', 'name' => 'keterangan', 'title' => 'Keterangan'])    	
        ->addColumn(['data' => 'action', 'name' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false]);

        return view('bahans.index')->with(compact('html'));
    }

    /**
    * Show the form for creating a new resource
    *
    * @return \Illuminate\Http\Response
    */

    public function create()
    {
        return view('bahans.create');
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
            'kode'			=> 'required|unique:bahans',
            'nama'			=> 'required|unique:bahans',
            'keterangan'	=> 'required',
            'user_id'		=> 'required'
        ]);

        $bahan = Bahan::create($request->all());

        Session::flash("flash_notification", [
            "level"		=> "success",
            "message"	=> "Berhasil menyimpan $bahan->nama"
        ]);
        return redirect()->route('bahans.index');
    }


    /**
    * Display the specified resource
    * 
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
    # code...
    }


    /**
    * Show the form for editing the specified resource
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $bahan = Bahan::find($id);        
        return view('bahans.edit')->with(compact('bahan'));
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
            'kode'			=> 'required',
            'nama'			=> 'required',
            'keterangan'	=> 'required'            
        ]);

        $bahan = Bahan::find($id);
        $bahan->update($request->all());

        Session::flash("flash_notification", [
            "level"		=> "success",
            "message"	=> "Berhasil menyimpan $bahan->nama"
        ]);

        return redirect()->route('bahans.index');
    }

    /**
    * remove the specified resource from storage
    * 
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        if(!Bahan::destroy($id))
            return redirect()->back();

        Session::flash("flash_notification", [
            "level"		=>"success",
            "message"	=>"Bahan Baku telah dihapus"
        ]);

        return redirect()->route('bahans.index');
    }

    

}