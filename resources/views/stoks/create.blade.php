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
                        <li><a href="{{ url('/admin/stoks') }}">Stok</a></li>
                        <li class="active">Tambah Stok</li>
                    </ul>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">Tambah Stok</h2>                  
                        </div>

                        <div class="panel-body">

                            {!! Form::open([
                                'url'    => route('stoks.store'),
                                'method' => 'post', 
                                'class'  => 'form-horizontal']) 
                            !!}
                    
                            @include('stoks._form')
                    
                            {!! Form::close() !!}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection
