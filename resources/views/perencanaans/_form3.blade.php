<div class="form-row">
   {{-- row ke-1 --}}
   <div class="row">
      {{-- komposisi_id --}}
      <div class="col{!! $errors->has('komposisi_id') ? 'has-error' : '' !!}">
         {!! Form::label('komposisi_id', 'Kode Komposisi', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::select('komposisi_id', [''=>'Pilih Disini']+App\Komposisi::pluck('kode','id')->all(), null, ['class'=>'form-control kodekomposisi',
               'ng-model' => 'komposisiid']) !!}
            {!! $errors->first('komposisi_id', '<p class="help-block">:message</p>') !!}
         </div>
      </div>
      {{-- kode_warna --}}
      <div class="col{{ $errors->has('kode_warna') ? ' has-error' : '' }}">
         {!! Form::label('kode_warna', 'Color Code', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::text('kode_warna', null , ['class'=>'form-control kode_warna','placeholder'=>'kode', 'ng-model' => 'kodewarna']) !!}
            {!! $errors->first('kode_warna', '<p class="help-block">:message</p>') !!}
         </div>
      </div>        
      {{-- quantity --}}
      <div class="col{{ $errors->has('quantity') ? ' has-error' : '' }}">
         {!! Form::label('quantity', 'Quantity', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('quantity', null, ['min'=>'0', 'class'=>'form-control quantity','placeholder'=>'sheets', 'ng-model' => 'quantity', 'ng-change' => 'hitungMaster()']) !!}
            {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
         </div>
      </div>
   </div>

   {{-- row ke-2 --}}
   <div class="row">
      {{-- kode perencanaan --}}
      <div class="col {{ $errors->has('kode') ? ' has-error' : '' }}">
         {!! Form::label('kode', 'Kode Perencanaan', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::text('kode', null, ['class'=>'form-control']) !!}
            {!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
         </div>
      </div>
      {{-- length --}}
      <div class="col{{ $errors->has('length') ? ' has-error' : '' }}">
         {!! Form::label('length', 'Length (mm)', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('length', null, ['class'=>'form-control length','min'=>'0', 'placeholder'=>'mm', 'ng-model'=>'length', 'ng-change'=>'hitungMaster()']) !!}
            {!! $errors->first('length', '<p class="help-block">:message</p>') !!}
         </div>
      </div>        
      {{-- calspeed --}}
      <div class="col{{ $errors->has('calspeed') ? ' has-error' : '' }}">
         {!! Form::label('calspeed', 'Calender Speed', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('calspeed', null, ['class'=>'form-control calspeed','min'=>'0', 'placeholder'=>'RPM', 'step'=>'0.1', 'ng-model'=>'calspeed', 'ng-change'=>'hitungMaster()']) !!}
            {!! $errors->first('calspeed', '<p class="help-block">:message</p>') !!}
         </div>
      </div>                
   </div>

   {{-- row ke-3 --}}
   <div class="row">
      {{-- spk_num --}}
      <div class="col{{ $errors->has('spk_num') ? ' has-error' : '' }}">
         {!! Form::label('spk_num', 'WS Num', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::text('spk_num', null , ['class'=>'form-control spk_num', 'placeholder'=>'Worksheet Num', 'ng-model'=>'spknum']) !!}
            {!! $errors->first('spk_num', '<p class="help-block">:message</p>') !!}
         </div>
      </div>
      {{-- width --}}
      <div class="col{{ $errors->has('width') ? ' has-error' : '' }}">
         {!! Form::label('width', 'Width (mm)', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('width', null, ['class'=>'form-control width','min'=>'0', 'placeholder'=>'mm', 'ng-model'=>'width']) !!}
            {!! $errors->first('width', '<p class="help-block">:message</p>') !!}
         </div>
      </div>
      {{-- allowance --}}
      <div class="col{{ $errors->has('allowance') ? ' has-error' : '' }}">
         {!! Form::label('allowance', 'Allowance (hr)', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('allowance', null, ['class'=>'form-control allowance','min'=>'0', 'placeholder'=>'hour', 'ng-model'=>'allowance', 'ng-change'=>'hitungMaster()']) !!}
            {!! $errors->first('allowance', '<p class="help-block">:message</p>') !!}
         </div>
      </div>        
   </div>        

   {{-- row ke-4 --}}
   <div class="row">
      {{-- customer_id --}}
      <div class="col{!! $errors->has('customer_id') ? 'has-error' : '' !!}">
         {!! Form::label('customer_id', 'Customer', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::select('customer_id',[''=>'-----']+App\Customer::pluck('nama','id')->all(), null, ['class'=>'form-control customer_id','ng-model'=>'customer']) !!}
            {!! $errors->first('customer_id', '<p class="help-block">:message</p>') !!}
         </div>
      </div>
      {{-- thickness --}}
      <div class="col{{ $errors->has('thickness') ? ' has-error' : '' }}">
         {!! Form::label('thickness', 'Thickness (mm)', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::number('thickness', null , ['class'=>'form-control thickness','min'=>'0', 'placeholder'=>'mm', 'step'=>'0.1', 'ng-model'=>'thickness']) !!}
            {!! $errors->first('thickness', '<p class="help-block">:message</p>') !!}
         </div>
      </div>
      {{-- keterangan --}}
      <div class="col{{ $errors->has('keterangan') ? ' has-error' : '' }}">
         {!! Form::label('keterangan', 'Note', ['class'=>'col-md-1 control-label']) !!}
         <div class="col-md-3">
            {!! Form::text('keterangan', null, ['class'=>'form-control keterangan','placeholder'=>'-', 'ng-model'=>'keterangan']) !!}
            {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
         </div>
      </div>    
   </div>

   {{-- row ke-5 --}}
   <div class="row">
      {{-- User ID --}}
      <div class="row" hidden="">
         <div class="col{{ $errors->has('user_id') ? ' has-error' : '' }}" hidden="">
            {!! Form::label('user_id', 'User', ['class'=>'col-md-1 control-label']) !!}
            {!! Form::text('user_id', Auth::user()->id, ['class'=>'form-control']) !!}
            {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}            
         </div>
      </div>
   </div>
</div>

<br>


@foreach($perencanaandetails as $key => $perencanaandetail)

{{-- Collapsible Panel Layer 1 --}}

<div class="panel-group">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h4 class="panel-title">
            <a data-toggle="collapse" href="#layer{{$key+1}}">Layer {{$key+1}}</a>
         </h4>
      </div>

      <div id="layer{{$key+1}}" class="panel-collapse collapse">
         <div class="panel-body">

            {{-- ID Master --}}
            <div class="form-group{{ $errors->has('perencanaan_id') ? ' has-error' : '' }}" hidden="">
               {!! Form::label('perencanaan_id', 'ID Master', ['class'=>'col-md-1 control-label']) !!}
               <div class="col-md-3">
                  {!! Form::text('perencanaan_id', $perencanaandetail->perencanaan_id, ['class'=>'form-control perencanaan_id','placeholder'=>'ID Master']) !!}
                  {!! $errors->first('perencanaan_id', '<p class="help-block">:message</p>') !!}
               </div>
            </div>

            {{-- No Mesin --}}
            <div class="row">
               <div class="col{!! $errors->has('no_mesin[]') ? 'has-error' : '' !!}">                  
                  {!! Form::label('no_mesin[]', 'Extruder', ['class'=>'col-md-1 control-label', 'onkeyup'=>'checkNumber()']) !!}
                  <div class="col-md-2">
                     {!! Form::select('no_mesin[]',
                        array(
                           ''=>'-----',
                           '1'=>'1', 
                           '2'=>'2',
                           '3'=>'3',
                           '4'=>'4'), 
                         $perencanaandetail->no_mesin, [
                           'class'=>'form-control no_mesin_1', 
                           'ng-model'=>'nomesin1',
                           'ng-change'=>'hitungLayer1()']) !!}
                           {!! $errors->first('no_mesin[]', '<p class="help-block">:message</p>') !!}
                        </div>
                     </div>
                  </div>

                  {{-- MPS --}}
                  <div class="row">
                     <div class="col{!! $errors->has('melt_pump[]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('melt_pump[]', 'MPS', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                           {!! Form::number('melt_pump[]',  $perencanaandetail->melt_pump, [
                              'min'=>'0', 
                              'class'=>'form-control melt_pump_1',
                              'placeholder'=>'MPS', 
                              'ng-model'=>'meltpump1', 
                              'ng-change'=>'hitungLayer1()']) !!}
                              {!! $errors->first('melt_pump[]', '<p class="help-block">:message</p>') !!}       
                           </div>
                        </div>
                     </div>

                     {{-- Label Material & Persentase --}}
                     <div class="form-group">
                        {!! Form::label('mat_com', 'Material', ['class'=>'col-md-3 control-label']) !!}
                        {!! Form::label('per_com', 'Percentage', ['class'=>'col-md-1 control-label']) !!}
                        {!! Form::label('needhour_com', 'Needs per Hour', ['class'=>'col-md-3 control-label']) !!}
                        {!! Form::label('need_com', 'Total Needs', ['class'=>'col-md-2 control-label']) !!}
                     </div>

                     {{-- COM 1 --}}    
                     <div class="row">
                        <div class="form-inline {!! $errors->has('mat_com1[]') ? 'has-error' : '' !!}">

                           {!! Form::label('mat_com1[]', 'Com 1', ['class'=>'col-md-1 control-label']) !!}
                           <div class="col-md-2">
                              {!! Form::select('mat_com1[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com1, ['class'=>'form-control mat_com1_1', 'ng-model'=>'matcom11']) !!}
                                 {!! $errors->first('mat_com1[]', '<p class="help-block">:message</p>') !!}
                              </div>

                              <div class="col-md-1">
                                 {!! Form::number('per_com1[]', $perencanaandetail->per_com1, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com1_1','placeholder'=>'%','ng-model'=>'percom11', 'ng-change'=>'hitungLayer1()']) !!}
                              </div>
                              <div class="col-md-3">
                                 {!! Form::number('needhour_com1[]', $perencanaandetail->needhour_com1, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com1_1','placeholder'=>'kg', 'ng-model'=>'needhourcom11']) !!}
                              </div>
                              <div class="col-md-2">
                                 {!! Form::number('need_com1[]', $perencanaandetail->need_com1, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com1_1','placeholder'=>'kg', 'ng-model'=>'needcom11']) !!}
                              </div>
                           </div>
                        </div>

                        {{-- COM 2 --}}                           
                        <div class="row">
                           <div class="form-inline {!! $errors->has('mat_com2[]') ? 'has-error' : '' !!}">                  
                              {!! Form::label('mat_com2[]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                              <div class="col-md-2">
                                 {!! Form::select('mat_com2[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com2, ['class'=>'form-control mat_com2_1', 'ng-model'=>'matcom21']) !!}
                                    {!! $errors->first('mat_com2[]', '<p class="help-block">:message</p>') !!}
                                 </div>
                                 <div class="col-md-1">
                                    {!! Form::number('per_com2[]', $perencanaandetail->per_com2, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com2_1','placeholder'=>'%', 'ng-model'=>'percom21', 'ng-change'=>'hitungLayer1()']) !!}
                                 </div>
                                 <div class="col-md-3">
                                    {!! Form::number('needhour_com2[]', $perencanaandetail->needhour_com2, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com2_1','placeholder'=>'kg', 'ng-model'=>'needhourcom21']) !!}
                                 </div>
                                 <div class="col-md-2">
                                    {!! Form::number('need_com2[]', $perencanaandetail->need_com2, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com2_1','placeholder'=>'kg', 'ng-model'=>'needcom21']) !!}
                                 </div>
                              </div>
                           </div>

                           {{-- COM 3 --}}
                           <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com3[]') ? 'has-error' : '' !!}">                  
                                 {!! Form::label('mat_com3[]', 'Com 3', ['class'=>'col-md-1 control-label']) !!}
                                 <div class="col-md-2">
                                    {!! Form::select('mat_com3[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com3, ['class'=>'form-control mat_com3_1',
                                       'ng-model'=>'matcom31']) !!}
                                    {!! $errors->first('mat_com3[]', '<p class="help-block">:message</p>') !!}
                                 </div>
                                 <div class="col-md-1">
                                    {!! Form::number('per_com3[]', $perencanaandetail->per_com3, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com3_1','placeholder'=>'%', 'ng-model'=>'percom31', 'ng-change'=>'hitungLayer1()']) !!}
                                 </div>
                                 <div class="col-md-3">
                                    {!! Form::number('needhour_com3[]', $perencanaandetail->needhour_com3, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com3_1','placeholder'=>'kg', 'ng-model'=>'needhourcom31']) !!}
                                 </div>
                                 <div class="col-md-2">
                                    {!! Form::number('need_com3[]', $perencanaandetail->need_com3, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com3_1','placeholder'=>'kg', 'ng-model'=>'needcom31']) !!}
                                 </div>
                              </div>
                           </div>

                           {{-- COM 4 --}}
                           <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com4[]') ? 'has-error' : '' !!}">                  
                                 {!! Form::label('mat_com4[]', 'Com 4', ['class'=>'col-md-1 control-label']) !!}
                                 <div class="col-md-2">
                                    {!! Form::select('mat_com4[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com4, ['class'=>'form-control mat_com4_1', 'ng-model' => 'matcom41']) !!}
                                    {!! $errors->first('mat_com4[]', '<p class="help-block">:message</p>') !!}
                                 </div>
                                 <div class="col-md-1">
                                    {!! Form::number('per_com4[]', $perencanaandetail->per_com4, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com4_1','placeholder'=>'%', 'ng-model'=>'percom41', 'ng-change'=>'hitungLayer1()']) !!}
                                 </div>
                                 <div class="col-md-3">
                                    {!! Form::number('needhour_com4[]', $perencanaandetail->needhour_com4, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com4_1','placeholder'=>'kg', 'ng-model'=>'needhourcom41']) !!}
                                 </div>
                                 <div class="col-md-2">
                                    {!! Form::number('need_com4[]]', $perencanaandetail->need_com4, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com4_1','placeholder'=>'kg', 'ng-model'=>'needcom41']) !!}
                                 </div>
                              </div>
                           </div>

                           {{-- COM 5 --}}
                           <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com5[]') ? 'has-error' : '' !!}">                  
                                 {!! Form::label('mat_com5[]', 'Com 5', ['class'=>'col-md-1 control-label']) !!}
                                 <div class="col-md-2">
                                    {!! Form::select('mat_com5[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com5, ['class'=>'form-control mat_com5_1', 'ng-model'=>'matcom51']) !!}
                                    {!! $errors->first('mat_com5[]', '<p class="help-block">:message</p>') !!}
                                 </div>
                                 <div class="col-md-1">
                                    {!! Form::number('per_com5[]', $perencanaandetail->per_com5, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com5_1','placeholder'=>'%', 'ng-model'=>'percom51', 'ng-change'=>'hitungLayer1()']) !!}
                                 </div>
                                 <div class="col-md-3">
                                    {!! Form::number('needhour_com5[]', $perencanaandetail->needhour_com5, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com5_1','placeholder'=>'kg', 'ng-model'=>'needhourcom51']) !!}
                                 </div>
                                 <div class="col-md-2">
                                    {!! Form::number('need_com5[]', $perencanaandetail->need_com5, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com5_1','placeholder'=>'kg', 'ng-model'=>'needcom51']) !!}
                                 </div>
                              </div>
                           </div>

                           {{-- COM 6 --}}               
                           <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com6[]') ? 'has-error' : '' !!}">                  
                                 {!! Form::label('mat_com6[]', 'Com 6', ['class'=>'col-md-1 control-label']) !!}
                                 <div class="col-md-2">
                                    {!! Form::select('mat_com6[]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), $perencanaandetail->mat_com6, ['class'=>'form-control mat_com6_1', 'ng-model' => 'matcom61']) !!}
                                    {!! $errors->first('mat_com6[]', '<p class="help-block">:message</p>') !!}
                                 </div>
                                 <div class="col-md-1">
                                    {!! Form::number('per_com6[]', $perencanaandetail->per_com6, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com6_1','placeholder'=>'%', 'ng-model'=>'percom61', 'ng-change'=>'hitungLayer1()']) !!}
                                 </div>
                                 <div class="col-md-3">
                                    {!! Form::number('needhour_com6[]', $perencanaandetail->needhour_com6, ['min'=>'0', 'class'=>'col-md-1 form-control needhour_com6_1','placeholder'=>'kg', 'ng-model'=>'needhourcom61']) !!}
                                 </div>
                                 <div class="col-md-2">
                                    {!! Form::number('need_com6[]', $perencanaandetail->need_com6, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com6_1','placeholder'=>'kg', 'ng-model'=>'needcom61']) !!}
                                 </div>
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