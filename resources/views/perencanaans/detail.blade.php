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
                        <li><a href="{{ url('/admin/perencanaans') }}">Perencanaan Material</a></li>
                        <li class="active">Detail Perencanaan</li>
                    </ul>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">Detail Perencanaan</h2>
                        </div>

                        <div class="panel-body">

                            {!! Form::model($perencanaan, [
                                'url'   => route('perencanaans.show', $perencanaan->id),
                                'method'=>'put',
                                'class' =>'form-horizontal'])
                                !!}

                            @include('perencanaans._form3')

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection

@section('script')

<script>
// function cetak(){
//   window.print();
// }
</script>

@endsection
