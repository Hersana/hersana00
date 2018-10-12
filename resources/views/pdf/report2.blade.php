<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('img/tip1.png') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>    
    {{-- <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel='stylesheet' type='text/css'> --}}
    {{-- <link href="{{ asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'> --}}
    {{-- <link href="{{ asset('css/jquery.dataTables.css') }}" rel='stylesheet' type='text/css'> --}}
    {{-- <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/selectize.css') }}" rel='stylesheet' type='text/css'> --}}
    {{-- <link href="{{ asset('css/theme/assets/css/zabuto_calendar.css') }}" rel='stylesheet' type='text/css'> --}}
    {{-- <link href="{{ asset('css/theme/assets/js/gritter/css/jquery.gritter.css') }}" rel='stylesheet' type='text/css'> --}}
    {{-- <link href="{{ asset('css/theme/assets/lineicons/style.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/theme/assets/css/style.css') }}" rel='stylesheet' type='text/css'> --}}
    {{-- <link href="{{ asset('css/theme/assets/css/style-responsive.css') }}" rel='stylesheet' type='text/css'> --}}


</head>

<body>
    <div class="container">
        <!--header start-->
        <header class="">                
            <!--logo start-->
            <img src="{{ asset('img/tip1.png') }}" alt="PT Tiara Indoprima" width="60px">
            <a href="{{ url('')}} " class="logo"><b>PT Tiara Indoprima</b></a>
            <!--logo end-->

        </header>


        {{-- Identitas Perencanaan --}}
        <div class="form-row">

            <div class="">
                <h3>Identitas Perencanaan</h3>
            </div>

            {{-- row ke-1 --}}
            <div class="row">
                {{-- kode perencanaan --}}
                <div class="col {{ $errors->has('kode') ? ' has-error' : '' }}">
                    <label for="kode" class="col-md-1 control-label">Kode Perencanaan</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{$perencanaan->kode}}">
                    </div>
                </div>
                {{-- length --}}
                <div class="col{{ $errors->has('length') ? ' has-error' : '' }}">
                    <label for="length" class="col-md-1 control-label">Length (mm)</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{$perencanaan->length}}">
                    </div>
                </div>
                {{-- allowance --}}
                <div class="col{{ $errors->has('allowance') ? ' has-error' : '' }}">
                    <label for="allowance" class="col-md-1 control-label">Allowance (hr)</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{$perencanaan->allowance}}">
                    </div>
                </div>
            </div>

            {{-- row ke-2 --}}
            <div class="row">
                {{-- spk_num --}}
                <div class="col{{ $errors->has('spk_num') ? ' has-error' : '' }}">
                    <label for="spk_num" class="col-md-1 control-label">SPK Num</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{$perencanaan->spk_num}}">
                    </div>
                </div>                          
                {{-- width --}}
                <div class="col{{ $errors->has('width') ? ' has-error' : '' }}">
                    <label for="width" class="col-md-1 control-label">Width (mm)</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{$perencanaan->width}}">
                    </div>
                </div>  
                {{-- calspeed --}}
                <div class="col{{ $errors->has('calspeed') ? ' has-error' : '' }}">
                    <label for="calspeed" class="col-md-1 control-label">Calender (rpm)</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{$perencanaan->calspeed}}">
                    </div>
                </div>
            </div>

            {{-- row ke-3 --}}
            <div class="row">
                {{-- kode_warna --}}
                <div class="col{{ $errors->has('kode_warna') ? ' has-error' : '' }}">
                    <label for="kode_warna" class="col-md-1 control-label">Color Code</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{$perencanaan->kode_warna}}">
                    </div>
                </div>
                {{-- thickness --}}
                <div class="col{{ $errors->has('thickness') ? ' has-error' : '' }}">
                    <label for="thickness" class="col-md-1 control-label">Thickness (mm)</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{$perencanaan->thickness}}">
                    </div>
                </div>
                {{-- keterangan --}}
                <div class="col{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                    <label for="keterangan" class="col-md-1 control-label">Keterangan</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{$perencanaan->keterangan}}">
                    </div>
                </div>
            </div>

            {{-- row ke-4 --}}
            <div class="row">                          
                {{-- customer_id --}}
                <div class="col{!! $errors->has('customer_id') ? 'has-error' : '' !!}">
                    <label for="Customer" class="col-md-1 control-label">Customer</label>
                    <div class="col-md-3">
                        {!! Form::select('customer_id',[''=>'-----']+App\Customer::pluck('nama','id')->all(), $perencanaan->customer_id, ['class'=>'form-control customer_id']) !!}
                        {!! $errors->first('customer_id', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>     
                {{-- quantity --}}
                <div class="col{{ $errors->has('quantity') ? ' has-error' : '' }}">
                    <label for="quantity" class="col-md-1 control-label">Quantity (sheets)</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{$perencanaan->quantity}}">
                    </div>
                </div>
            </div>
        </div>
        
        <hr>        

        {{-- Kesimpulan Perencanaan Kebutuhan --}}

        {{-- <div class="">
            <h3>Kesimpulan Perencanaan Kebutuhan{{$perencanaan->kode}}
            </h3>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Material</th>
                        <th>Kebutuhan Total</th>
                        <th>Stok Akhir</th>
                        <th>Sisa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sums as $key => $sum)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$sum->nama}}</td>
                        <td>{{$sum->jumlah}}</td>
                        <td>{{$sum->stok}}</td>
                        <td>{{$sum->stok - $sum->jumlah}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>

        <hr> --}}
        

        {{-- Detail Perencanaan Kebutuhan --}}
        
        {{-- <div class="">
            <h3>Detail Perencanaan</h3>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr class="active">
                        <th>Layer</th>
                        <th>Extruder</th>
                        <th>MPS</th>
                        <th>Com</th>
                        <th>Material Name</th>
                        <th>Percentage</th>
                        <th>Needs per Hour (kgs)</th>
                        <th>Total Needs (kgs)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perencanaandetails as $key => $perencanaandetail)
                    <tr>
                        <td rowspan="6">{{$key+1}}</td>
                        <td rowspan="6">{{$perencanaandetail->no_mesin}}</td>
                        <td rowspan="6">{{$perencanaandetail->melt_pump}}</td>
                        <td>Com 1</td>                        
                        <td>{!! Form::select('mat_com1[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com1, ['class'=>'form-control']) !!}</td>
                        <td>{{$perencanaandetail->per_com1}}</td>
                        <td>{{$perencanaandetail->needhour_com1}}</td>
                        <td>{{$perencanaandetail->need_com1}}</td>                    
                    </tr>
                    <tr>
                        <td>Com 2</td>
                        <td>{!! Form::select('mat_com2[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com2, ['class'=>'form-control']) !!}</td>
                        <td>{{$perencanaandetail->per_com2}}</td>
                        <td>{{$perencanaandetail->needhour_com2}}</td>
                        <td>{{$perencanaandetail->need_com2}}</td>                    
                    </tr>
                    <tr>
                        <td>Com 3</td>
                        <td>{!! Form::select('mat_com3[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com3, ['class'=>'form-control']) !!}</td>
                        <td>{{$perencanaandetail->per_com3}}</td>
                        <td>{{$perencanaandetail->needhour_com3}}</td>
                        <td>{{$perencanaandetail->need_com3}}</td>                    
                    </tr>
                    <tr>
                        <td>Com 4</td>
                        <td>{!! Form::select('mat_com4[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com4, ['class'=>'form-control']) !!}</td>
                        <td>{{$perencanaandetail->per_com4}}</td>
                        <td>{{$perencanaandetail->needhour_com4}}</td>
                        <td>{{$perencanaandetail->need_com4}}</td>                    
                    </tr>
                    <tr>
                        <td>Com 5</td>
                        <td>{!! Form::select('mat_com5[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com5, ['class'=>'form-control']) !!}</td>
                        <td>{{$perencanaandetail->per_com5}}</td>
                        <td>{{$perencanaandetail->needhour_com5}}</td>
                        <td>{{$perencanaandetail->need_com5}}</td>                    
                    </tr>
                    <tr>
                        <td>Com 6</td>
                        <td>{!! Form::select('mat_com6[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com6, ['class'=>'form-control']) !!}</td>
                        <td>{{$perencanaandetail->per_com6}}</td>
                        <td>{{$perencanaandetail->needhour_com6}}</td>
                        <td>{{$perencanaandetail->need_com6}}</td>      
                    </tr>
                    @endforeach
                </tbody>
            </table>            
        </div>       --}}  

        <!-- Scripts -->
    </div>
</body>
</html>
