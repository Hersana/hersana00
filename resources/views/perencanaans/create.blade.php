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
                  <li><a href="{{ url('/admin/perencanaans') }}">Perencanaan</a></li>
                  <li class="active">Tambah Perencanaan</li>
               </ul>

               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h2 class="panel-title">Tambah Perencanaan</h2>
                  </div>

                  <div class="panel-body" ng-app="FirstApp" ng-controller="mainController">
                     {!! Form::open([
                        'url'     => route('perencanaans.store'),
                        'method'  => 'post',
                        'class'   => 'form-horizontal']) 
                        !!}               
                        
                     @include('perencanaans._form')

                     {!! Form::close() !!}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>

@endsection

@section('scripts')

<script type="text/javascript">
   $(document).ready(function() {
      $(document).on('change','.kodekomposisi',function() {
         var id = $(this).val();
         var a = $(this).parents();
         console.log(id);  
         
         var gearpump1 = 176;
         var gearpump2 = 46.3;
         var gearpump3 = 25.6;
         var gearpump4 = 25.6;
         
         $.ajax({
            type: 'get',
            url: '{!! URL::to('admin/findDataKomposisi') !!}',               
            data: {'id':id},
            dataType:'json',
            success:function(data){

                console.log(data);
                // console.log(data.komposisi);                   
                // console.log(data.komposisi.id);
                // console.log(data.detail[0].no_mesin);
                
               // MASTER
               a.find('.kode_warna').val(data.komposisi.kode_warna).trigger('change');
               a.find('.length').val(data.komposisi.length).trigger('change');
               a.find('.width').val(data.komposisi.width).trigger('change');
               a.find('.quantity').val(data.komposisi.quantity).trigger('change');
               a.find('.calspeed').val(data.komposisi.calspeed).trigger('change');
               a.find('.spk_num').val(data.komposisi.spk_num).trigger('change');
               a.find('.customer_id').val(data.komposisi.customer_id).trigger('change');
               a.find('.thickness').val(data.komposisi.thickness).trigger('change');
               a.find('.keterangan').val(data.komposisi.keterangan).trigger('change');
               // default value for allowance = 0
               a.find('.allowance').val(0).trigger('change');

               if (data.detail[0].mat_com1 == 0) {data.detail[0].mat_com1 = null};
               if (data.detail[0].mat_com2 == 0) {data.detail[0].mat_com2 = null};
               if (data.detail[0].mat_com3 == 0) {data.detail[0].mat_com3 = null};
               if (data.detail[0].mat_com4 == 0) {data.detail[0].mat_com4 = null};
               if (data.detail[0].mat_com5 == 0) {data.detail[0].mat_com5 = null};
               if (data.detail[0].mat_com6 == 0) {data.detail[0].mat_com6 = null};

               if (data.detail[1].mat_com1 == 0) {data.detail[1].mat_com1 = null};
               if (data.detail[1].mat_com2 == 0) {data.detail[1].mat_com2 = null};
               if (data.detail[1].mat_com3 == 0) {data.detail[1].mat_com3 = null};
               if (data.detail[1].mat_com4 == 0) {data.detail[1].mat_com4 = null};
               if (data.detail[1].mat_com5 == 0) {data.detail[1].mat_com5 = null};
               if (data.detail[1].mat_com6 == 0) {data.detail[1].mat_com6 = null};

               if (data.detail[2].mat_com1 == 0) {data.detail[2].mat_com1 = null};
               if (data.detail[2].mat_com2 == 0) {data.detail[2].mat_com2 = null};
               if (data.detail[2].mat_com3 == 0) {data.detail[2].mat_com3 = null};
               if (data.detail[2].mat_com4 == 0) {data.detail[2].mat_com4 = null};
               if (data.detail[2].mat_com5 == 0) {data.detail[2].mat_com5 = null};
               if (data.detail[2].mat_com6 == 0) {data.detail[2].mat_com6 = null};

               if (data.detail[3].mat_com1 == 0) {data.detail[3].mat_com1 = null};
               if (data.detail[3].mat_com2 == 0) {data.detail[3].mat_com2 = null};
               if (data.detail[3].mat_com3 == 0) {data.detail[3].mat_com3 = null};
               if (data.detail[3].mat_com4 == 0) {data.detail[3].mat_com4 = null};
               if (data.detail[3].mat_com5 == 0) {data.detail[3].mat_com5 = null};
               if (data.detail[3].mat_com6 == 0) {data.detail[3].mat_com6 = null};

               // hitung durasi produksi
               var durasi = 0;

               // durasi = ((length / 1000) * quantity / calender speed /60) + allowance
               durasi = ((data.komposisi.length / 1000) * data.komposisi.quantity / data.komposisi.calspeed / 60);

               // needhour (kg/jam) = volume gear pump * density * mps * 60 / 1000;
               // durasi (jam) = (length/1000) * quantity /calspeed/60

               // console.log(durasi);


               // LAYER 1
               a.find('.no_mesin_1').val(data.detail[0].no_mesin).trigger('change');
               a.find('.melt_pump_1').val(data.detail[0].melt_pump).trigger('change');

               var output1 = 0;
               if(data.detail[0].no_mesin==1){
                  //output = gear pump volume * MPS * density * 60 / 1000
                  output1 = gearpump1 * data.detail[0].melt_pump * 1.11 * 60 / 1000;
               }
               else if(data.detail[0].no_mesin==2){
                  output1 = gearpump2 * data.detail[0].melt_pump * 1.11 * 60 / 1000;
               }
               else if(data.detail[0].no_mesin==3){
                  output1 = gearpump3 * data.detail[0].melt_pump * 1.19 * 60 / 1000;
               }
               else if(data.detail[0].no_mesin==4){
                  output1 = gearpump4 * data.detail[0].melt_pump * 1.19 * 60 / 1000;
               }
               else{
                  alert("gagal");
               }
               // console.log(output1);

               a.find('.mat_com1_1').val(data.detail[0].mat_com1).trigger('change');
               a.find('.mat_com2_1').val(data.detail[0].mat_com2).trigger('change');
               a.find('.mat_com3_1').val(data.detail[0].mat_com3).trigger('change');
               a.find('.mat_com4_1').val(data.detail[0].mat_com4).trigger('change');
               a.find('.mat_com5_1').val(data.detail[0].mat_com5).trigger('change');
               a.find('.mat_com6_1').val(data.detail[0].mat_com6).trigger('change');

               a.find('.per_com1_1').val(data.detail[0].per_com1).trigger('change');
               a.find('.per_com2_1').val(data.detail[0].per_com2).trigger('change');
               a.find('.per_com3_1').val(data.detail[0].per_com3).trigger('change');
               a.find('.per_com4_1').val(data.detail[0].per_com4).trigger('change');
               a.find('.per_com5_1').val(data.detail[0].per_com5).trigger('change');
               a.find('.per_com6_1').val(data.detail[0].per_com6).trigger('change');
               
               //hitung need per jam
               a.find('.needhour_com1_1').val(parseFloat(data.detail[0].per_com1*output1/100).toFixed(2)).trigger('change');
               a.find('.needhour_com2_1').val(parseFloat(data.detail[0].per_com2*output1/100).toFixed(2)).trigger('change');
               a.find('.needhour_com3_1').val(parseFloat(data.detail[0].per_com3*output1/100).toFixed(2)).trigger('change');
               a.find('.needhour_com4_1').val(parseFloat(data.detail[0].per_com4*output1/100).toFixed(2)).trigger('change');
               a.find('.needhour_com5_1').val(parseFloat(data.detail[0].per_com5*output1/100).toFixed(2)).trigger('change');
               a.find('.needhour_com6_1').val(parseFloat(data.detail[0].per_com6*output1/100).toFixed(2)).trigger('change');

               //hitung need per order
               a.find('.need_com1_1').val(parseFloat(data.detail[0].per_com1*output1/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com2_1').val(parseFloat(data.detail[0].per_com2*output1/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com3_1').val(parseFloat(data.detail[0].per_com3*output1/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com4_1').val(parseFloat(data.detail[0].per_com4*output1/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com5_1').val(parseFloat(data.detail[0].per_com5*output1/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com6_1').val(parseFloat(data.detail[0].per_com6*output1/100*durasi).toFixed(2)).trigger('change');


               // LAYER 2
               a.find('.no_mesin_2').val(data.detail[1].no_mesin).trigger('change');
               a.find('.melt_pump_2').val(data.detail[1].melt_pump).trigger('change');

               var output2 = 0;
               if(data.detail[1].no_mesin==1){
                  //output = gear pump volume * MPS * density * 60 / 1000
                  output2 = gearpump1 * data.detail[1].melt_pump * 1.11 * 60 / 1000;
               }
               else if(data.detail[1].no_mesin==2){
                  output2 = gearpump2 * data.detail[1].melt_pump * 1.11 * 60 / 1000;
               }
               else if(data.detail[1].no_mesin==3){
                  output2 = gearpump3 * data.detail[1].melt_pump * 1.19 * 60 / 1000;
               }
               else if(data.detail[1].no_mesin==4){
                  output2 = gearpump4 * data.detail[1].melt_pump * 1.19 * 60 / 1000;
               }
               else{
                  alert("gagal");
               }
               // console.log(output2);

               a.find('.mat_com1_2').val(data.detail[1].mat_com1).trigger('change');
               a.find('.mat_com2_2').val(data.detail[1].mat_com2).trigger('change');
               a.find('.mat_com3_2').val(data.detail[1].mat_com3).trigger('change');
               a.find('.mat_com4_2').val(data.detail[1].mat_com4).trigger('change');
               a.find('.mat_com5_2').val(data.detail[1].mat_com5).trigger('change');
               a.find('.mat_com6_2').val(data.detail[1].mat_com6).trigger('change');

               a.find('.per_com1_2').val(data.detail[1].per_com1).trigger('change');
               a.find('.per_com2_2').val(data.detail[1].per_com2).trigger('change');
               a.find('.per_com3_2').val(data.detail[1].per_com3).trigger('change');
               a.find('.per_com4_2').val(data.detail[1].per_com4).trigger('change');
               a.find('.per_com5_2').val(data.detail[1].per_com5).trigger('change');
               a.find('.per_com6_2').val(data.detail[1].per_com6).trigger('change');
               
               //hitung need per jam
               a.find('.needhour_com1_2').val(parseFloat(data.detail[1].per_com1*output2/100).toFixed(2)).trigger('change');
               a.find('.needhour_com2_2').val(parseFloat(data.detail[1].per_com2*output2/100).toFixed(2)).trigger('change');
               a.find('.needhour_com3_2').val(parseFloat(data.detail[1].per_com3*output2/100).toFixed(2)).trigger('change');
               a.find('.needhour_com4_2').val(parseFloat(data.detail[1].per_com4*output2/100).toFixed(2)).trigger('change');
               a.find('.needhour_com5_2').val(parseFloat(data.detail[1].per_com5*output2/100).toFixed(2)).trigger('change');
               a.find('.needhour_com6_2').val(parseFloat(data.detail[1].per_com6*output2/100).toFixed(2)).trigger('change');

               //hitung need per order
               a.find('.need_com1_2').val(parseFloat(data.detail[1].per_com1*output2/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com2_2').val(parseFloat(data.detail[1].per_com2*output2/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com3_2').val(parseFloat(data.detail[1].per_com3*output2/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com4_2').val(parseFloat(data.detail[1].per_com4*output2/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com5_2').val(parseFloat(data.detail[1].per_com5*output2/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com6_2').val(parseFloat(data.detail[1].per_com6*output2/100*durasi).toFixed(2)).trigger('change');


               // LAYER 3
               a.find('.no_mesin_3').val(data.detail[2].no_mesin).trigger('change');
               a.find('.melt_pump_3').val(data.detail[2].melt_pump).trigger('change');

               var output3 = 0;
               if(data.detail[2].no_mesin==1){
                  //output = gear pump volume * MPS * density * 60 / 1000
                  output3 = gearpump1 * data.detail[2].melt_pump * 1.11 * 60 / 1000;
               }
               else if(data.detail[2].no_mesin==2){
                  output3 = gearpump2 * data.detail[2].melt_pump * 1.11 * 60 / 1000;
               }
               else if(data.detail[2].no_mesin==3){
                  output3 = gearpump3 * data.detail[2].melt_pump * 1.19 * 60 / 1000;
               }
               else if(data.detail[2].no_mesin==4){
                  output3 = gearpump4 * data.detail[2].melt_pump * 1.19 * 60 / 1000;
               }
               else{
                  alert("gagal");
               }
               // console.log(output3);

               a.find('.mat_com1_3').val(data.detail[2].mat_com1).trigger('change');
               a.find('.mat_com2_3').val(data.detail[2].mat_com2).trigger('change');
               a.find('.mat_com3_3').val(data.detail[2].mat_com3).trigger('change');
               a.find('.mat_com4_3').val(data.detail[2].mat_com4).trigger('change');
               a.find('.mat_com5_3').val(data.detail[2].mat_com5).trigger('change');
               a.find('.mat_com6_3').val(data.detail[2].mat_com6).trigger('change');

               a.find('.per_com1_3').val(data.detail[2].per_com1).trigger('change');
               a.find('.per_com2_3').val(data.detail[2].per_com2).trigger('change');
               a.find('.per_com3_3').val(data.detail[2].per_com3).trigger('change');
               a.find('.per_com4_3').val(data.detail[2].per_com4).trigger('change');
               a.find('.per_com5_3').val(data.detail[2].per_com5).trigger('change');
               a.find('.per_com6_3').val(data.detail[2].per_com6).trigger('change');

               //hitung need per jam
               a.find('.needhour_com1_3').val(parseFloat(data.detail[2].per_com1*output3/100).toFixed(2)).trigger('change');
               a.find('.needhour_com2_3').val(parseFloat(data.detail[2].per_com2*output3/100).toFixed(2)).trigger('change');
               a.find('.needhour_com3_3').val(parseFloat(data.detail[2].per_com3*output3/100).toFixed(2)).trigger('change');
               a.find('.needhour_com4_3').val(parseFloat(data.detail[2].per_com4*output3/100).toFixed(2)).trigger('change');
               a.find('.needhour_com5_3').val(parseFloat(data.detail[2].per_com5*output3/100).toFixed(2)).trigger('change');
               a.find('.needhour_com6_3').val(parseFloat(data.detail[2].per_com6*output3/100).toFixed(2)).trigger('change');

               //hitung need per order
               a.find('.need_com1_3').val(parseFloat(data.detail[2].per_com1*output3/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com2_3').val(parseFloat(data.detail[2].per_com2*output3/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com3_3').val(parseFloat(data.detail[2].per_com3*output3/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com4_3').val(parseFloat(data.detail[2].per_com4*output3/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com5_3').val(parseFloat(data.detail[2].per_com5*output3/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com6_3').val(parseFloat(data.detail[2].per_com6*output3/100*durasi).toFixed(2)).trigger('change');

               
               // LAYER 4
               a.find('.no_mesin_4').val(data.detail[3].no_mesin).trigger('change');
               a.find('.melt_pump_4').val(data.detail[3].melt_pump).trigger('change');

               var output4 = 0;
               if(data.detail[3].no_mesin==1){
                  //output = gear pump volume * MPS * density * 60 / 1000
                  output4 = gearpump1 * data.detail[3].melt_pump * 1.11 * 60 / 1000;
               }
               else if(data.detail[3].no_mesin==2){
                  output4 = gearpump2 * data.detail[3].melt_pump * 1.11 * 60 / 1000;
               }
               else if(data.detail[3].no_mesin==3){
                  output4 = gearpump3 * data.detail[3].melt_pump * 1.19 * 60 / 1000;
               }
               else if(data.detail[3].no_mesin==4){
                  output4 = gearpump4 * data.detail[3].melt_pump * 1.19 * 60 / 1000;
               }
               else{
                  alert("gagal");
               }
               // console.log(output4);

               a.find('.mat_com1_4').val(data.detail[3].mat_com1).trigger('change');
               a.find('.mat_com2_4').val(data.detail[3].mat_com2).trigger('change');
               a.find('.mat_com3_4').val(data.detail[3].mat_com3).trigger('change');
               a.find('.mat_com4_4').val(data.detail[3].mat_com4).trigger('change');
               a.find('.mat_com5_4').val(data.detail[3].mat_com5).trigger('change');
               a.find('.mat_com6_4').val(data.detail[3].mat_com6).trigger('change');

               a.find('.per_com1_4').val(data.detail[3].per_com1).trigger('change');
               a.find('.per_com2_4').val(data.detail[3].per_com2).trigger('change');
               a.find('.per_com3_4').val(data.detail[3].per_com3).trigger('change');   
               a.find('.per_com4_4').val(data.detail[3].per_com4).trigger('change');
               a.find('.per_com5_4').val(data.detail[3].per_com5).trigger('change');
               a.find('.per_com6_4').val(data.detail[3].per_com6).trigger('change');

               //hitung need per jam
               a.find('.needhour_com1_4').val(parseFloat(data.detail[3].per_com1*output4/100).toFixed(2)).trigger('change');
               a.find('.needhour_com2_4').val(parseFloat(data.detail[3].per_com2*output4/100).toFixed(2)).trigger('change');
               a.find('.needhour_com3_4').val(parseFloat(data.detail[3].per_com3*output4/100).toFixed(2)).trigger('change');
               a.find('.needhour_com4_4').val(parseFloat(data.detail[3].per_com4*output4/100).toFixed(2)).trigger('change');
               a.find('.needhour_com5_4').val(parseFloat(data.detail[3].per_com5*output4/100).toFixed(2)).trigger('change');
               a.find('.needhour_com6_4').val(parseFloat(data.detail[3].per_com6*output4/100).toFixed(2)).trigger('change');

               //hitung need per order
               a.find('.need_com1_4').val(parseFloat(data.detail[3].per_com1*output4/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com2_4').val(parseFloat(data.detail[3].per_com2*output4/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com3_4').val(parseFloat(data.detail[3].per_com3*output4/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com4_4').val(parseFloat(data.detail[3].per_com4*output4/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com5_4').val(parseFloat(data.detail[3].per_com5*output4/100*durasi).toFixed(2)).trigger('change');
               a.find('.need_com6_4').val(parseFloat(data.detail[3].per_com6*output4/100*durasi).toFixed(2)).trigger('change');

            },
            error:function() {
               console.log("gagal");
            }                          
         }); 
         //$scope.$apply(data);           
      });
   });

</script>

<script src="{{ asset('js/controllers/mainController.js') }}"></script>

@endsection