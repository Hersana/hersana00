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
                        <li><a href="{{ url('/admin/authors') }}">Penulis</a></li>
                        <li class="active">Penulis</li>
                    </ul>

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h2 class="panel-title">Penulis</h2>
                        </div>

                        <div class="panel-body">
                            {!! Form::model($author, [
                                'url'   => route('authors.show', $author->id),
                                'method'=> 'get', 
                                'class' => 'form-horizontal']) 
                            !!}

                            {{-- START FORM --}}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name', 'Nama', ['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-4">
                                    {!! Form::text('name', $author->nama, ['class'=>'form-control', 'readonly']) !!}
                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-2">
                                    {!! Form::submit('Print', ['class'=>'btn btn-primary']) !!}
                                </div>
                            </div>

                            {{-- END FORM --}}
                            
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection

