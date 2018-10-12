<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class CustomerController extends Controller
{
    /**
    * Display a lsting of the resource.
    *
    * @return \illuminate\Http\Response
    */

    public function index (Request $request, Builder $htmlBuilder)
    {
    	if ($request->ajax()) {
    		$customers = Customer::select(['id','kode','nama','negara','keterangan']);

    		return Datatables::of($customers)
    			->addColumn('action', function ($customer){
    				return view('datatable._action',[
    					'model'				=>	$customer,
    					'form_url'			=>	route('customers.destroy', $customer->id),
    					'edit_url'			=>	route('customers.edit', $customer->id),
    					'confirm_message'	=>	'Yakin mau menghapus '. $customer->nama . '?'
    				]);
    			})->make(true);
    	}

    	$html = $htmlBuilder
		->addColumn(['data' => 'kode', 'name' => 'kode', 'title' => 'Kode'])
		->addColumn(['data' => 'nama', 'name' => 'nama', 'title' => 'Nama'])
		->addColumn(['data' => 'negara', 'name' => 'negara', 'title' => 'Negara'])
		->addColumn(['data' => 'keterangan', 'name' => 'keterangan', 'title' => 'Keterangan', 'orderable' => false])
		->addColumn(['data' => 'action', 'name' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false]);
        
		return view('customers.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'kode'	      =>'required|max:4|unique:customers',
    		'nama'	      =>'required|unique:customers',
    		'negara'      =>'required',
    		'keterangan'  =>'required',
    		'user_id'     =>'required'
    		]);

    	$customer = Customer::create($request->all());

    	Session::flash("flash_notification", [
    		"level"	  =>"success",
    		"message" =>"Berhasil menyimpan $customer->nama"
    	]);
    	return redirect()->route('customers.index');
    }


    /**
     * Show the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function Show($id)
    {
    	//
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
    	$customer = Customer::find($id);
    	return view ('customers.edit')->with(compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'kode'	   =>	'required',
    		'nama'	   =>	'required',
    		'negara'   =>	'required',
    		'keterangan'=>	'required'
    	]);

    	$customer = Customer::find($id);
    	$customer->update($request->all());

    	Session::flash("flash_notification", [
    		"level" => "success",
    		"message" => "Berhasil menyimpan $customer->nama"
    	]);

    	return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	if(!Customer::destroy($id))
    		return redirect()->back();

    	Session::flash("flash_notification", [
    		"level"	=> "success",
    		"message"	=> "Data telah dihapus"
    	]);

    	return redirect()->route('customers.index');
    }
}
