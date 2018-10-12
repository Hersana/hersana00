{{-- kode, kode_warna, quantity --}}
<div class="form-row">
   <div class="row">
      <div class="col {{ $errors->has('kode') ? ' has-error' : '' }}">
         {!! Form::label('kode', 'Kode Komposisi', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::text('kode', null, ['class'=>'form-control']) !!}
            {!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
         </div>
      </div>

      <div class="col{{ $errors->has('kode_warna') ? ' has-error' : '' }}">
         {!! Form::label('kode_warna', 'Color Code', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::text('kode_warna', null, ['class'=>'form-control']) !!}
            {!! $errors->first('kode_warna', '<p class="help-block">:message</p>') !!}
         </div>
      </div>

      <div class="col{{ $errors->has('quantity') ? ' has-error' : '' }}">
         {!! Form::label('quantity', 'Quantity', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('quantity', null, ['class'=>'form-control']) !!}
            {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
         </div>
      </div> 
   </div>

   {{-- spk_num, length, calender speed --}}
   <div class="row">

      <div class="col{{ $errors->has('spk_num') ? ' has-error' : '' }}">
         {!! Form::label('spk_num', 'WS Num', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::text('spk_num', null , ['class'=>'form-control']) !!}
            {!! $errors->first('spk_num', '<p class="help-block">:message</p>') !!}
         </div>
      </div>

      <div class="col{{ $errors->has('length') ? ' has-error' : '' }}">
         {!! Form::label('length', 'Length (mm)', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('length', null, ['class'=>'form-control']) !!}
            {!! $errors->first('length', '<p class="help-block">:message</p>') !!}
         </div>
      </div>

      <div class="col{{ $errors->has('calspeed') ? ' has-error' : '' }}">
         {!! Form::label('calspeed', 'Calender Speed', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('calspeed', null, ['class'=>'form-control', 'step'=>'0.1']) !!}
            {!! $errors->first('calspeed', '<p class="help-block">:message</p>') !!}
         </div>
      </div>         

   </div>

   {{-- customer_id, width, keterangan --}}
   <div class="row">
      <div class="col{!! $errors->has('customer_id') ? 'has-error' : '' !!}">
         {!! Form::label('customer_id', 'Customer', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::select('customer_id', [''=>'-----']+App\Customer::pluck('nama','id')->all(), null, ['class'=>'js-selectize']) !!}
            {!! $errors->first('customer_id', '<p class="help-block">:message</p>') !!}
         </div>
      </div>  

      <div class="col{{ $errors->has('width') ? ' has-error' : '' }}">
         {!! Form::label('width', 'Width (mm)', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('width', null, ['class'=>'form-control']) !!}
            {!! $errors->first('width', '<p class="help-block">:message</p>') !!}
         </div>
      </div>          

      <div class="col{{ $errors->has('keterangan') ? ' has-error' : '' }}">
         {!! Form::label('keterangan', 'Note', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::text('keterangan', null, ['class'=>'form-control']) !!}
            {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
         </div>
      </div>
   </div>

   {{-- prod_date. thickness --}}
   <div class="row"> 
      <div class="col{{ $errors->has('prod_date') ? ' has-error' : '' }}">
         {!! Form::label('prod_date', 'Prod Date', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::date('prod_date', new \DateTime(), ['class'=>'form-control']) !!}
            {!! $errors->first('prod_date', '<p class="help-block">:message</p>') !!}
         </div>
      </div>

      <div class="col{{ $errors->has('thickness') ? ' has-error' : '' }}">
         {!! Form::label('thickness', 'Thickness (mm)', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('thickness', null, ['class'=>'form-control', 'step'=>'0.1']) !!}
            {!! $errors->first('thickness', '<p class="help-block">:message</p>') !!}
         </div>
      </div>
   </div>

   {{-- User ID --}}
   <div class="row" hidden="">
      <div class="col{{ $errors->has('user_id') ? ' has-error' : '' }}" hidden="">
         {!! Form::label('user_id', 'User', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::text('user_id', Auth::user()->id, ['class'=>'form-control']) !!}
            {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
         </div>
      </div>
   </div>

   <br>

   @foreach($komposisidetails as $key => $komposisidetail)

   {{-- Collapsible Panel Layer --}}

   <div class="panel-group">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h4 class="panel-title">
               <a data-toggle="collapse" href="#layer{{ $key+1 }}">Layer {{ $key+1 }}</a>
            </h4>
         </div>

         <div id="layer{{ $key+1 }}" class="panel-collapse collapse">
            <div class="panel-body">
               {{-- ID Master --}}
               <div class="form-group{{ $errors->has('komposisi_id') ? ' has-error' : '' }}" hidden="">
                  {!! Form::label('komposisi_id', 'ID Master', ['class'=>'col-md-1 control-label']) !!}
                  <div class="col-md-3">
                     {!! Form::text('komposisi_id', $komposisidetail->komposisi_id, ['class'=>'form-control']) !!}
                     {!! $errors->first('komposisi_id', '<p class="help-block">:message</p>') !!}
                  </div>
               </div>

               {{-- No Mesin --}}
               <div class="row">
                  <div class="col{!! $errors->has('no_mesin[0]') ? 'has-error' : '' !!}">                  
                     {!! Form::label('no_mesin[0]', 'Extruder', ['class'=>'col-md-1 control-label', 'onkeyup'=>'checkNumber()']) !!}
                     <div class="col-md-2">
                        {!! Form::select('no_mesin[0]',
                           array(
                              ''=>'-----',
                              '1'=>'1', 
                              '2'=>'2',
                              '3'=>'3',
                              '4'=>'4'), 
                              $komposisidetail->no_mesin, ['class'=>'js-selectize']) !!}
                              {!! $errors->first('no_mesin[0]', '<p class="help-block">:message</p>') !!}
                           </div>
                        </div>
                     </div>

                     {{-- MPS --}}
                     <div class="row">
                        <div class="col{!! $errors->has('melt_pump[0]') ? 'has-error' : '' !!}">                  
                           {!! Form::label('melt_pump[0]', 'MPS', ['class'=>'col-md-1 control-label']) !!}
                           <div class="col-md-2">
                              {!! Form::number('melt_pump[0]', $komposisidetail->melt_pump, ['min'=>'0', 'class'=>'form-control']) !!}
                              {!! $errors->first('melt_pump[0]', '<p class="help-block">:message</p>') !!}       
                           </div>
                        </div>
                     </div>

                     {{-- Label Material & Persentase --}}
                     <div class="form-group">
                        {!! Form::label('mat_com', 'Material', ['class'=>'col-md-4 control-label']) !!}
                        {!! Form::label('per_com', 'Percentage', ['class'=>'col-md-1 control-label']) !!}
                     </div>

                     {{-- COM 1 --}}    
                     <div class="row">
                        <div class="form-inline {!! $errors->has('mat_com1[0]') ? 'has-error' : '' !!}">                  
                           {!! Form::label('mat_com1[0]', 'Com 1', ['class'=>'col-md-1 control-label']) !!}
                           <div class="col-md-3">
                              {!! Form::select('mat_com1[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $komposisidetail->mat_com1, ['class'=>'js-selectize']) !!}
                              {!! $errors->first('mat_com1[0]', '<p class="help-block">:message</p>') !!}
                           </div>
                           {!! Form::number('per_com1[0]', $komposisidetail->per_com1, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control']) !!}
                        </div>
                     </div>

                     {{-- COM 2 --}}                           
                     <div class="row">
                        <div class="form-inline {!! $errors->has('mat_com2[0]') ? 'has-error' : '' !!}">                  
                           {!! Form::label('mat_com2[0]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                           <div class="col-md-3">
                              {!! Form::select('mat_com2[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $komposisidetail->mat_com2, ['class'=>'js-selectize']) !!}
                              {!! $errors->first('mat_com2[0]', '<p class="help-block">:message</p>') !!}
                           </div>
                           {!! Form::number('per_com2[0]', $komposisidetail->per_com2, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control']) !!}
                        </div>
                     </div>

                     {{-- COM 3 --}}
                     <div class="row">
                        <div class="form-inline {!! $errors->has('mat_com3[0]') ? 'has-error' : '' !!}">                  
                           {!! Form::label('mat_com3[0]', 'Com 3', ['class'=>'col-md-1 control-label']) !!}
                           <div class="col-md-3">
                              {!! Form::select('mat_com3[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $komposisidetail->mat_com3, ['class'=>'js-selectize']) !!}
                              {!! $errors->first('mat_com3[0]', '<p class="help-block">:message</p>') !!}
                           </div>
                           {!! Form::number('per_com3[0]', $komposisidetail->per_com3, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control']) !!}
                        </div>
                     </div>

                     {{-- COM 4 --}}
                     <div class="row">
                        <div class="form-inline {!! $errors->has('mat_com4[0]') ? 'has-error' : '' !!}">                  
                           {!! Form::label('mat_com4[0]', 'Com 4', ['class'=>'col-md-1 control-label']) !!}
                           <div class="col-md-3">
                              {!! Form::select('mat_com4[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $komposisidetail->mat_com4, [
                                 'class'=>'js-selectize']) !!}
                                 {!! $errors->first('mat_com4[0]', '<p class="help-block">:message</p>') !!}
                              </div>
                              {!! Form::number('per_com4[0]', $komposisidetail->per_com4, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control']) !!}
                           </div>
                        </div>

                        {{-- COM 5 --}}
                        <div class="row">
                           <div class="form-inline {!! $errors->has('mat_com5[0]') ? 'has-error' : '' !!}">                  
                              {!! Form::label('mat_com5[0]', 'Com 5', ['class'=>'col-md-1 control-label']) !!}
                              <div class="col-md-3">
                                 {!! Form::select('mat_com5[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $komposisidetail->mat_com5, ['class'=>'js-selectize']) !!}
                                 {!! $errors->first('mat_com5[0]', '<p class="help-block">:message</p>') !!}
                              </div>
                              {!! Form::number('per_com5[0]', $komposisidetail->per_com5, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control']) !!}
                           </div>
                        </div>

                        {{-- COM 6 --}}               
                        <div class="row">
                           <div class="form-inline {!! $errors->has('mat_com6[0]') ? 'has-error' : '' !!}">                  
                              {!! Form::label('mat_com6[0]', 'Com 6', ['class'=>'col-md-1 control-label']) !!}
                              <div class="col-md-3">
                                 {!! Form::select('mat_com6[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $komposisidetail->mat_com6, ['class'=>'js-selectize']) !!}
                                 {!! $errors->first('mat_com6[0]', '<p class="help-block">:message</p>') !!}
                              </div>
                              {!! Form::number('per_com6[0]', $komposisidetail->per_com6, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control']) !!}
                           </div>
                        </div>

                     </div>                
                  </div>
               </div>
            </div>

            @endforeach


            {{-- Submit Button --}}
            <div class="form-group">
               <div class="col-md-4 col-md-offset-10">
                  <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a> 
                  {{-- <a href="javascript:window.print();" type="button" class="btn">PRINT</a> --}}
               </div>
            </div>