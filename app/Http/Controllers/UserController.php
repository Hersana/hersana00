<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class UserController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $users = User::all();

            return Datatables::of($users)

            ->addColumn('action', function($user){
                return view('datatable._action', [
                    'model'           => $user,
                    'form_url'        => route('users.destroy', $user->id),
                    'edit_url'        => route('users.edit', $user->id),
                    // 'detail_url'      => route('authors.show', $user->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $user->name . ' ?'
                ]);
            })->make(true);
        }

        $html = $htmlBuilder
        ->addColumn(['data' => 'name', 'name'=>'name', 'title'=>'Nama'])
        ->addColumn(['data' => 'email', 'name'=>'email', 'title'=>'Email'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);

        return view('authors.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Membuat sample admin
        $admin = new User();
        $admin->name = 'Hersana';
        $admin->email = 'hersana27@gmail.com';
        $admin->password = bcrypt('hersana');
        $admin->save();
        $admin->attachRole($adminRole);    }

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
}
