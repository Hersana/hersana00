@extends('layouts.app')

@section('content')
        
<section id="main-content">
    <section class="wrapper">

        <div class="container">
            <div class="row">
            <br>
                <div class="col-md-10">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li class="active">Perencanaan</li>
                    </ul>

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h2 class="panel-title">Perencanaan</h2>
                        </div>

                        <div class="panel-body">

                            <p><a class="btn btn-primary" href="{{ url('/admin/perencanaans/create') }}">Tambah</a></p>

                            {!! $html->table(['class'=>'table-striped']) !!}
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
@endsection

@section('scripts')
    {!! $html->scripts() !!}
@endsection

