@extends('layouts.app')

@section('content')

<section id="main-content">
    <section class="wrapper">

        <div class="container">
            <div class="row">
                <br>
                <div class="col-md-10">
                  {{-- breadcrumb = menu horizontal dengan tanda panah (dashboard > customer) --}}
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li><a href="{{ url('/admin/komposisis') }}">Komposisi Material</a></li>
                        <li class="active">Ubah Komposisi</li>
                    </ul>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">Ubah Komposisi</h2>
                        </div>  

                        <div class="panel-body">
                            {!! Form::model($komposisi, [
                                'url'   => route('komposisis.update', $komposisi->id),
                                'method'=>'put',
                                'class' =>'form-horizontal'])
                            !!}

                            @include('komposisis._form2')

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection