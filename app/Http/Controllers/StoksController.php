<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Yajra\Datatables\Html\Builder;
// use Yajra\Datatables\Datatables;
// use App\Stok;
// // use App\Bahan;

// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Auth;

// use App\Http\Requests;


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Stok;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class StoksController extends Controller
{
    /**
    * Display a listing of the resource
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request, Builder $htmlBuilder)
    {

        if ($request->ajax()) {
            $stoks = Stok::with('bahan');
            // $stoks = Stok::select(['bahan_id','jumlah','user_id']);

            return Datatables::of($stoks)

            ->addColumn('action', function ($stok){
                return view('datatable._action',[
                    'model'             =>  $stok,
                    'form_url'          =>  route('stoks.destroy', $stok->id),
                    'edit_url'          =>  route('stoks.edit', $stok->id),
                    'confirm_message'   =>  'Yakin mau menghapus '. $stok->id . '?'
                ]);
            })->make(true);
        }        

        $html = $htmlBuilder
        ->addColumn(['data'=>'bahan.nama','name'=>'bahan.nama','title'=>'Bahan Baku'])
        ->addColumn(['data'=>'jumlah','name'=>'jumlah','title'=>'Jumlah'])
        ->addColumn(['data'=>'action','name'=>'action','title'=>'Action','orderable'=>false,'searchable'=>false]);

        return view('stoks.index')->with(compact('html'));
    }


    /**
    * Show the form for creating a new resource
    *
    * @return \Illuminate\Http\Response
    */

    public function create()
    {
        return view('stoks.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'bahan_id'  => 'required|unique:stoks',          
            'jumlah'    => 'required|numeric',
            'user_id'   => 'required'
        ]);

        $stok = Stok::create($request->all());

        Session::flash("flash_notification", [
            "level"     => "success",
            "message"   => "Berhasil menyimpan $stok->jumlah"
        ]);
        return redirect()->route('stoks.index');
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
        $stok = Stok::find($id);
        return view('stoks.edit')->with(compact('stok'));
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
            'bahan_id'  => 'required',
            'jumlah'    => 'required|numeric',
            'user_id'   => 'required',
        ]);

        $stok = Stok::find($id);
        $stok->update($request->all());

        Session::flash("flash_notification", [
            "level"     => "success",
            "message"   => "Berhasil menyimpan $stok->jumlah"
        ]);

        return redirect()->route('stoks.index');
    }

    /**
    * remove the specified resource from storage
    * 
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        if(!Stok::destroy($id))
            return redirect()->back();

        Session::flash("flash_notification", [
            "level"     =>"success",
            "message"   =>"Stok Bahan Baku telah dihapus"
        ]);

        return redirect()->route('stoks.index');
    }


}
