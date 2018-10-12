{{-- Komposisi Master --}}

{{-- // outputs '01' --}}
<div class="form-row">     
     {{-- kode, kode_warna, quantity --}}

          <div class="row">
               <div class="col {{ $errors->has('kode') ? ' has-error' : '' }}">
                    {!! Form::label('kode', 'Kode Komposisi', ['class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                         {!! Form::text('kode', $kode, ['class'=>'form-control', 'placeholder'=>'']) !!}
                         {!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
                    </div>
               </div>

               <div class="col{{ $errors->has('kode_warna') ? ' has-error' : '' }}">
                    {!! Form::label('kode_warna', 'Color Code', ['class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                         {!! Form::text('kode_warna', null, ['class'=>'form-control','placeholder'=>'']) !!}
                         {!! $errors->first('kode_warna', '<p class="help-block">:message</p>') !!}
                    </div>
               </div>

               <div class="col{{ $errors->has('quantity') ? ' has-error' : '' }}">
                    {!! Form::label('quantity', 'Quantity', ['min'=>'0', 'class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                         {!! Form::number('quantity', null, ['class'=>'form-control','placeholder'=>'']) !!}
                         {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
                    </div>
              </div> 
          </div>

     {{-- spk_num, length, calender speed --}}
          <div class="row">

               <div class="col{{ $errors->has('spk_num') ? ' has-error' : '' }}">
                    {!! Form::label('spk_num', 'WS Num', ['class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                         {!! Form::text('spk_num', null , ['class'=>'form-control', 'placeholder'=>'']) !!}
                         {!! $errors->first('spk_num', '<p class="help-block">:message</p>') !!}
                    </div>
               </div>

               <div class="col{{ $errors->has('length') ? ' has-error' : '' }}">
                    {!! Form::label('length', 'Length (mm)', ['min'=>'0', 'class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                         {!! Form::number('length', null, ['class'=>'form-control','placeholder'=>'']) !!}
                         {!! $errors->first('length', '<p class="help-block">:message</p>') !!}
                    </div>
               </div>

               <div class="col{{ $errors->has('calspeed') ? ' has-error' : '' }}">
                    {!! Form::label('calspeed', 'Calender Speed', ['min'=>'0', 'class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                         {!! Form::number('calspeed', null, ['class'=>'form-control','placeholder'=>'', 'step'=>'0.1']) !!}
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
                    {!! Form::label('width', 'Width (mm)', ['min'=>'0', 'class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                         {!! Form::number('width', null, ['class'=>'form-control','placeholder'=>'']) !!}
                         {!! $errors->first('width', '<p class="help-block">:message</p>') !!}
                    </div>
               </div>          
               
              <div class="col{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                    {!! Form::label('keterangan', 'Note', ['class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                         {!! Form::text('keterangan', null, ['class'=>'form-control','placeholder'=>'']) !!}
                         {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
                    </div>
               </div>
          </div>

     {{-- prod_date. thickness --}}
          <div class="row">           

               <div class="col{{ $errors->has('prod_date') ? ' has-error' : '' }}">
                    {!! Form::label('prod_date', 'Prod Date', ['class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                         {!! Form::date('prod_date', new \DateTime(), ['class'=>'form-control','placeholder'=>'']) !!}
                         {!! $errors->first('prod_date', '<p class="help-block">:message</p>') !!}
                    </div>
               </div>

               <div class="col{{ $errors->has('thickness') ? ' has-error' : '' }}">
                    {!! Form::label('thickness', 'Thickness (mm)', ['min'=>'0', 'class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                         {!! Form::number('thickness', null, ['class'=>'form-control','placeholder'=>'', 'step'=>'0.1']) !!}
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

</div>
<br>


{{-- Collapsible Panel Layer 1 --}}

     <div class="panel-group">
          <div class="panel panel-default">
               <div class="panel-heading">
                    <h4 class="panel-title">
                         <a data-toggle="collapse" href="#layer1">Layer 1</a>
                    </h4>
               </div>

               <div id="layer1" class="panel-collapse collapse">
                    <div class="panel-body">
                                   
                         {{-- ID Master --}}
                         <div class="form-group{{ $errors->has('komposisi_id') ? ' has-error' : '' }}" hidden="">
                              {!! Form::label('komposisi_id', 'ID Master', ['class'=>'col-md-1 control-label']) !!}
                              <div class="col-md-3">
                                   {!! Form::text('komposisi_id', null, ['class'=>'form-control','placeholder'=>'ID Master']) !!}
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
                                             null, ['class'=>'js-selectize']) !!}
                                        {!! $errors->first('no_mesin[0]', '<p class="help-block">:message</p>') !!}
                                   </div>
                              </div>
                         </div>

                         {{-- MPS --}}
                         <div class="row">
                              <div class="col{!! $errors->has('melt_pump[0]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('melt_pump[0]', 'MPS', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-2">
                                        {!! Form::number('melt_pump[0]', null, ['min'=>'0', 'class'=>'form-control','placeholder'=>'MPS']) !!}
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
                                        {!! Form::select('mat_com1[0]', [''=>'-----']+App\Bahan::pluck('nama','id',0)->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com1[0]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com1[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 2 --}}                           
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com2[0]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com2[0]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com2[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com2[0]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com2[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 3 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com3[0]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com3[0]', 'Com 3', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com3[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com3[0]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com3[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 4 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com4[0]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com4[0]', 'Com 4', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com4[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com4[0]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com4[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 5 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com5[0]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com5[0]', 'Com 5', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com5[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com5[0]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com5[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 6 --}}               
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com6[0]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com6[0]', 'Com 6', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com6[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com6[0]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com6[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>
                    </div>                   
               </div>
          </div>
     </div>

{{-- Collapsible Panel Layer 2 --}}

     <div class="panel-group">
          <div class="panel panel-default">
               <div class="panel-heading">
                    <h4 class="panel-title">
                         <a data-toggle="collapse" href="#layer2">Layer 2</a>
                    </h4>
               </div>
               
               <div id="layer2" class="panel-collapse collapse">
                    <div class="panel-body">
                                   
                         {{-- ID Master --}}
                         <div class="form-group{{ $errors->has('komposisi_id') ? ' has-error' : '' }}" hidden="">
                              {!! Form::label('komposisi_id', 'ID Master', ['class'=>'col-md-1 control-label']) !!}
                              <div class="col-md-3">
                                   {!! Form::text('komposisi_id', null, ['class'=>'form-control','placeholder'=>'ID Master']) !!}
                                   {!! $errors->first('komposisi_id', '<p class="help-block">:message</p>') !!}
                              </div>
                         </div>

                         {{-- No Mesin --}}
                         <div class="row">
                              <div class="col{!! $errors->has('no_mesin[1]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('no_mesin[1]', 'Extruder', ['class'=>'col-md-1 control-label', 'onkeyup'=>'checkNumber()']) !!}
                                   <div class="col-md-2">
                                        {!! Form::select('no_mesin[1]',
                                             array(
                                                  ''=>'-----',
                                                 '1'=>'1', 
                                                 '2'=>'2',
                                                 '3'=>'3',
                                                 '4'=>'4'), 
                                             null, ['class'=>'js-selectize']) !!}
                                        {!! $errors->first('no_mesin[1]', '<p class="help-block">:message</p>') !!}
                                   </div>
                              </div>
                         </div>

                         {{-- MPS --}}
                         <div class="row">
                              <div class="col{!! $errors->has('melt_pump[1]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('melt_pump[1]', 'MPS', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-2">
                                        {!! Form::number('melt_pump[1]', null, ['min'=>'0', 'class'=>'form-control','placeholder'=>'MPS']) !!}
                                        {!! $errors->first('melt_pump[1]', '<p class="help-block">:message</p>') !!}       
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
                              <div class="form-inline {!! $errors->has('mat_com1[1]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com1[1]', 'Com 1', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com1[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com1[1]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com1[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 2 --}}                           
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com2[1]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com2[1]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com2[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com2[1]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com2[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 3 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com3[1]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com3[1]', 'Com 3', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com3[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com3[1]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com3[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 4 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com4[1]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com4[1]', 'Com 4', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com4[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com4[1]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com4[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 5 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com5[1]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com5[1]', 'Com 5', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com5[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com5[1]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com5[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 6 --}}               
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com6[1]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com6[1]', 'Com 6', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com6[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com6[1]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com6[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>
                    </div>                   
               </div>
          </div>
     </div>

{{-- Collapsible Panel Layer 3 --}}

     <div class="panel-group">
          <div class="panel panel-default">
               <div class="panel-heading">
                    <h4 class="panel-title">
                         <a data-toggle="collapse" href="#layer3">Layer 3</a>
                    </h4>
               </div>
               
               <div id="layer3" class="panel-collapse collapse">
                    <div class="panel-body">
                                   
                         {{-- ID Master --}}
                         <div class="form-group{{ $errors->has('komposisi_id') ? ' has-error' : '' }}" hidden="">
                              {!! Form::label('komposisi_id', 'ID Master', ['class'=>'col-md-1 control-label']) !!}
                              <div class="col-md-3">
                                   {!! Form::text('komposisi_id', null, ['class'=>'form-control','placeholder'=>'ID Master']) !!}
                                   {!! $errors->first('komposisi_id', '<p class="help-block">:message</p>') !!}
                              </div>
                         </div>

                         {{-- No Mesin --}}
                         <div class="row">
                              <div class="col{!! $errors->has('no_mesin[2]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('no_mesin[2]', 'Extruder', ['class'=>'col-md-1 control-label', 'onkeyup'=>'checkNumber()']) !!}
                                   <div class="col-md-2">
                                        {!! Form::select('no_mesin[2]',
                                             array(
                                                  ''=>'-----',
                                                 '1'=>'1', 
                                                 '2'=>'2',
                                                 '3'=>'3',
                                                 '4'=>'4'), 
                                             null, [
                                                'class'=>'js-selectize']) !!}
                                        {!! $errors->first('no_mesin[2]', '<p class="help-block">:message</p>') !!}
                                   </div>
                              </div>
                         </div>

                         {{-- MPS --}}
                         <div class="row">
                              <div class="col{!! $errors->has('melt_pump[2]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('melt_pump[2]', 'MPS', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-2">
                                        {!! Form::number('melt_pump[2]', null, ['min'=>'0', 'class'=>'form-control','placeholder'=>'MPS']) !!}
                                        {!! $errors->first('melt_pump[2]', '<p class="help-block">:message</p>') !!}       
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
                              <div class="form-inline {!! $errors->has('mat_com1[2]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com1[2]', 'Com 1', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com1[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com1[2]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com1[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 2 --}}                           
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com2[2]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com2[2]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com2[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com2[2]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com2[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 3 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com3[2]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com3[2]', 'Com 3', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com3[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com3[2]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com3[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 4 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com4[2]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com4[2]', 'Com 4', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com4[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com4[2]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com4[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 5 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com5[2]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com5[2]', 'Com 5', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com5[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com5[2]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com5[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 6 --}}               
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com6[2]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com6[2]', 'Com 6', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com6[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com6[2]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com6[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>
                    </div>                   
               </div>
          </div>
     </div>

{{-- Collapsible Panel Layer 4 --}}

     <div class="panel-group">
          <div class="panel panel-default">
               <div class="panel-heading">
                    <h4 class="panel-title">
                         <a data-toggle="collapse" href="#layer4">Layer 4</a>
                    </h4>
               </div>
               
               <div id="layer4" class="panel-collapse collapse">
                    <div class="panel-body">
                                   
                         {{-- ID Master --}}
                         <div class="form-group{{ $errors->has('komposisi_id') ? ' has-error' : '' }}" hidden="">
                              {!! Form::label('komposisi_id', 'ID Master', ['class'=>'col-md-1 control-label']) !!}
                              <div class="col-md-3">
                                   {!! Form::text('komposisi_id', null, ['class'=>'form-control','placeholder'=>'ID Master']) !!}
                                   {!! $errors->first('komposisi_id', '<p class="help-block">:message</p>') !!}
                              </div>
                         </div>

                         {{-- No Mesin --}}
                         <div class="row">
                              <div class="col{!! $errors->has('no_mesin[3]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('no_mesin[3]', 'Extruder', ['class'=>'col-md-1 control-label', 'onkeyup'=>'checkNumber()']) !!}
                                   <div class="col-md-2">
                                        {!! Form::select('no_mesin[3]',
                                             array(
                                                  ''=>'------',
                                                 '1'=>'1', 
                                                 '2'=>'2',
                                                 '3'=>'3',
                                                 '4'=>'4'), 
                                             null, [
                                                'class'=>'js-selectize']) !!}
                                        {!! $errors->first('no_mesin[3]', '<p class="help-block">:message</p>') !!}
                                   </div>
                              </div>
                         </div>

                         {{-- MPS --}}
                         <div class="row">
                              <div class="col{!! $errors->has('melt_pump[3]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('melt_pump[3]', 'MPS', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-2">
                                        {!! Form::number('melt_pump[3]', null, ['min'=>'0', 'class'=>'form-control','placeholder'=>'MPS']) !!}
                                        {!! $errors->first('melt_pump[3]', '<p class="help-block">:message</p>') !!}       
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
                              <div class="form-inline {!! $errors->has('mat_com1[3]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com1[3]', 'Com 1', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com1[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com1[3]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com1[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 2 --}}                           
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com2[3]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com2[3]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com2[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com2[3]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com2[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 3 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com3[3]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com3[3]', 'Com 3', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com3[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com3[3]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com3[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 4 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com4[3]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com4[3]', 'Com 4', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com4[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com4[3]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com4[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 5 --}}
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com5[3]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com5[3]', 'Com 5', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com5[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com5[3]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com5[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>

                         {{-- COM 6 --}}               
                         <div class="row">
                              <div class="form-inline {!! $errors->has('mat_com6[3]') ? 'has-error' : '' !!}">                  
                                   {!! Form::label('mat_com6[3]', 'Com 6', ['class'=>'col-md-1 control-label']) !!}
                                   <div class="col-md-3">
                                        {!! Form::select('mat_com6[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'js-selectize' ]) !!}
                                        {!! $errors->first('mat_com6[3]', '<p class="help-block">:message</p>') !!}
                                   </div>
                                   {!! Form::number('per_com6[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control','placeholder'=>'%']) !!}
                              </div>
                         </div>
                    </div>                   
               </div>
          </div>
     </div>


{{-- Submit Button --}}
     <div class="form-group">
       <div class="col-md-4 col-md-offset-10">
         {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
       </div>
     </div>
