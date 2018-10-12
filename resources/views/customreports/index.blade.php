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
                        <li class="active">Report</li>
                    </ul>

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h2 class="panel-title">Custom Report</h2>
                        </div>

                        <div class="panel-body">

                            <h4>Custom Filter</h4>

                            {{-- {!! Form::model($komposisi, [
                                'url'   => route('komposisis.update', $komposisi->id),
                                'method'=>'put',
                                'class' =>'form-horizontal'])
                            !!} --}}

                            @include('customreports._form')

                            <hr>

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

