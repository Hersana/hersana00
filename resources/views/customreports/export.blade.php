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
                            <h2 class="panel-title">Report</h2>
                        </div>

                        <div class="panel-body">
                            
                           {!! Form::open([
                            'url'     => route('export.customreports.post'),
                            'method'  => 'post',
                            'class'   => 'form-horizontal']) 
                            !!}               

                            @include('customreports._form')
                            

                            {!! Form::close() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
@endsection

@section('scripts')
    
<script type="text/javascript">
   $(document).ready(function() {
      $(document).on('change','.kodeperencanaan',function() {
         var id = $(this).val();
         var a = $(this).parents();
         console.log(id);

         $.ajax({
            type: 'get',
            url: '{!! URL::to('admin/findDataPerencanaan') !!}',               
            data: {'id':id},
            dataType:'json',
            success:function(data){

                console.log(data);
                
               // MASTER
               a.find('.kode_warna').val(data.perencanaan.kode_warna).trigger('change');
               a.find('.length').val(data.perencanaan.length).trigger('change');
               a.find('.width').val(data.perencanaan.width).trigger('change');
               a.find('.quantity').val(data.perencanaan.quantity).trigger('change');
               // a.find('.calspeed').val(data.komposisi.calspeed).trigger('change');
               a.find('.spk_num').val(data.perencanaan.spk_num).trigger('change');
               a.find('.customer_id').val(data.perencanaan.customer_id).trigger('change');
               a.find('.thickness').val(data.perencanaan.thickness).trigger('change');
               a.find('.keterangan').val(data.perencanaan.keterangan).trigger('change');
               // default value for allowance = 0
               // a.find('.allowance').val(0).trigger('change');
            },
            error:function() {
               console.log("gagal");
            }                          
         }); 
         //$scope.$apply(data);           
      });
   });
</script>

@endsection

