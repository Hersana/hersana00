<div class="form-row">
    {{-- row ke-1 --}}
    <div class="row">
        {{-- komposisi_id --}}
        <div class="col{!! $errors->has('komposisi_id') ? 'has-error' : '' !!}">
            {!! Form::label('komposisi_id', 'Kode Komposisi', ['class'=>'col-md-1 control-label']) !!}
            <div class="col-md-3">
                {!! Form::select('komposisi_id', [''=>'Pilih Disini']+App\Komposisi::pluck('kode','id')->all(), null, [
                    'class'=>'form-control kodekomposisi',
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
                {!! Form::text('kode', $kode, ['class'=>'form-control']) !!}
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
                {!! Form::select('customer_id',[''=>'-----']+App\Customer::pluck('nama','id')->all(), null, [
                    'class'=>'form-control customer_id',
                    'ng-model'=>'customer']) !!}
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
                <div class="col-md-3">
                    {!! Form::text('user_id', Auth::user()->id, ['class'=>'form-control']) !!}
                    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
</div>

                    {{-- TEST ONLY --}}
                    {{-- <div class="row">
                        {!! Form::label('mat_com2[0]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com2[0]', [''=>'Pilih Bahan']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com2_1',
                                'ng-model'=>'matcom21']) !!}
                            {!! $errors->first('mat_com2[0]', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div> --}}

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
                <div class="form-group{{ $errors->has('perencanaan_id') ? ' has-error' : '' }}" hidden="">
                    {!! Form::label('perencanaan_id', 'ID Master', ['class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                        {!! Form::text('perencanaan_id', null, ['class'=>'form-control perencanaan_id','placeholder'=>'ID Master']) !!}
                        {!! $errors->first('perencanaan_id', '<p class="help-block">:message</p>') !!}
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
                                null, [
                                    'class'=>'form-control no_mesin_1',
                                    'ng-model' => 'nomesin1',
                                    'ng-change'=>'hitungLayer1()']) !!}
                            {!! $errors->first('no_mesin[0]', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                {{-- MPS --}}
                <div class="row">
                    <div class="col{!! $errors->has('melt_pump[0]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('melt_pump[0]', 'MPS', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::number('melt_pump[0]', null, [
                                'min'=>'0', 
                                'class'=>'form-control melt_pump_1',
                                'placeholder'=>'MPS', 
                                'ng-model'=>'meltpump1', 
                                'ng-change'=>'hitungLayer1()']) !!}
                            {!! $errors->first('melt_pump[0]', '<p class="help-block">:message</p>') !!}       
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
                    <div class="form-inline {!! $errors->has('mat_com1[0]') ? 'has-error' : '' !!}">
                        {!! Form::label('mat_com1[0]', 'Com 1', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com1[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'form-control mat_com1_1', 'ng-model'=>'matcom11']) !!}
                            {!! $errors->first('mat_com1[0]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com1[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com1_1','placeholder'=>'%','ng-model'=>'percom11', 'ng-change'=>'hitungLayer1()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com1[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com1_1','placeholder'=>'kg', 'ng-model'=>'needhourcom11']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com1[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com1_1','placeholder'=>'kg', 'ng-model'=>'needcom11']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 2 --}}                           
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com2[0]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com2[0]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com2[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [ 'class'=>'form-control mat_com2_1', 'ng-model'=>'matcom21']) !!}
                            {!! $errors->first('mat_com2[0]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com2[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com2_1','placeholder'=>'%', 'ng-model'=>'percom21', 'ng-change'=>'hitungLayer1()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com2[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com2_1','placeholder'=>'kg', 'ng-model'=>'needhourcom21']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com2[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com2_1','placeholder'=>'kg', 'ng-model'=>'needcom21']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 3 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com3[0]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com3[0]', 'Com 3', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com3[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [ 'class'=>'form-control mat_com3_1', 'ng-model'=>'matcom31']) !!}
                            {!! $errors->first('mat_com3[0]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com3[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com3_1','placeholder'=>'%', 'ng-model'=>'percom31', 'ng-change'=>'hitungLayer1()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com3[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com3_1','placeholder'=>'kg', 'ng-model'=>'needhourcom31']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com3[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com3_1','placeholder'=>'kg', 'ng-model'=>'needcom31']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 4 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com4[0]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com4[0]', 'Com 4', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com4[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'form-control mat_com4_1', 'ng-model'=>'matcom41']) !!}
                            {!! $errors->first('mat_com4[0]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com4[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com4_1','placeholder'=>'%', 'ng-model'=>'percom41', 'ng-change'=>'hitungLayer1()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com4[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com4_1','placeholder'=>'kg', 'ng-model'=>'needhourcom41']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com4[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com4_1','placeholder'=>'kg', 'ng-model'=>'needcom41']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 5 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com5[0]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com5[0]', 'Com 5', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com5[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'form-control mat_com5_1', 'ng-model'=>'matcom51']) !!}
                            {!! $errors->first('mat_com5[0]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com5[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com5_1','placeholder'=>'%', 'ng-model'=>'percom51', 'ng-change'=>'hitungLayer1()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com5[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com5_1','placeholder'=>'kg', 'ng-model'=>'needhourcom51']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com5[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com5_1','placeholder'=>'kg', 'ng-model'=>'needcom51']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 6 --}}               
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com6[0]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com6[0]', 'Com 6', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com6[0]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, ['class'=>'form-control mat_com6_1', 'ng-model'=>'matcom61']) !!}
                            {!! $errors->first('mat_com6[0]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com6[0]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com6_1','placeholder'=>'%', 'ng-model'=>'percom61', 'ng-change'=>'hitungLayer1()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com6[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com6_1','placeholder'=>'kg', 'ng-model'=>'needhourcom61']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com6[0]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com6_1','placeholder'=>'kg', 'ng-model'=>'needcom61']) !!}
                        </div>
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
                <div class="form-group{{ $errors->has('perencanaan_id') ? ' has-error' : '' }}" hidden="">
                    {!! Form::label('perencanaan_id', 'ID Master', ['class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                        {!! Form::text('perencanaan_id', null, ['class'=>'form-control perencanaan_id','placeholder'=>'ID Master']) !!}
                        {!! $errors->first('perencanaan_id', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                {{-- No Mesin --}}
                <div class="row">
                    <div class="col{!! $errors->has('no_mesin[1]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('no_mesin[1]', 'Extruder', ['class'=>'col-md-1 control-label', 'onkeyup'=>'checkNumber()']) !!}
                        <div class="col-md-2">
                            {!! Form::select('no_mesin[1]',
                                array(
                                    '1'=>'1', 
                                    '2'=>'2',
                                    '3'=>'3',
                                    '4'=>'4'), 
                                null, [
                                    'class'=>'form-control no_mesin_2',                                    
                                    'placeholder' => '---',
                                    'ng-model' => 'nomesin2',
                                    'ng-change'=>'hitungLayer2()']) !!}
                            {!! $errors->first('no_mesin[1]', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                {{-- MPS --}}
                <div class="row">
                    <div class="col{!! $errors->has('melt_pump[1]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('melt_pump[1]', 'MPS', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::number('melt_pump[1]', null, [
                                'min'=>'0', 
                                'class'=>'form-control melt_pump_2',
                                'placeholder'=>'MPS', 
                                'ng-model'=>'meltpump2', 
                                'ng-change'=>'hitungLayer2()']) !!}
                            {!! $errors->first('melt_pump[1]', '<p class="help-block">:message</p>') !!}       
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
                    <div class="form-inline {!! $errors->has('mat_com1[1]') ? 'has-error' : '' !!}">
                        {!! Form::label('mat_com1[1]', 'Com 1', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com1[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com1_2',
                                'ng-model'=>'matcom12']) !!}
                            {!! $errors->first('mat_com1[1]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com1[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com1_2','placeholder'=>'%','ng-model'=>'percom12', 'ng-change'=>'hitungLayer2()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com1[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com1_2','placeholder'=>'kg', 'ng-model'=>'needhourcom12']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com1[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com1_2','placeholder'=>'kg', 'ng-model'=>'needcom12']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 2 --}}                           
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com2[1]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com2[1]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com2[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com2_2',
                                'ng-model'=>'matcom22']) !!}
                            {!! $errors->first('mat_com2[1]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com2[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com2_2','placeholder'=>'%', 'ng-model'=>'percom22', 'ng-change'=>'hitungLayer2()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com2[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com2_2','placeholder'=>'kg', 'ng-model'=>'needhourcom22']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com2[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com2_2','placeholder'=>'kg', 'ng-model'=>'needcom22']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 3 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com3[1]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com3[1]', 'Com 3', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com3[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com3_2',
                                'ng-model'=>'matcom32']) !!}
                            {!! $errors->first('mat_com3[1]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com3[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com3_2','placeholder'=>'%', 'ng-model'=>'percom32', 'ng-change'=>'hitungLayer2()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com3[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com3_2','placeholder'=>'kg', 'ng-model'=>'needhourcom32']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com3[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com3_2','placeholder'=>'kg', 'ng-model'=>'needcom32']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 4 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com4[1]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com4[1]', 'Com 4', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com4[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com4_2',
                                'ng-model'=>'matcom42']) !!}
                            {!! $errors->first('mat_com4[1]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com4[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com4_2','placeholder'=>'%', 'ng-model'=>'percom42', 'ng-change'=>'hitungLayer2()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com4[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com4_2','placeholder'=>'kg', 'ng-model'=>'needhourcom42']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com4[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com4_2','placeholder'=>'kg', 'ng-model'=>'needcom42']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 5 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com5[1]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com5[1]', 'Com 5', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com5[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com5_2',
                                'ng-model'=>'matcom52']) !!}
                            {!! $errors->first('mat_com5[1]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com5[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com5_2','placeholder'=>'%', 'ng-model'=>'percom52', 'ng-change'=>'hitungLayer2()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com5[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com5_2','placeholder'=>'kg', 'ng-model'=>'needhourcom52']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com5[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com5_2','placeholder'=>'kg', 'ng-model'=>'needcom52']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 6 --}}               
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com6[1]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com6[1]', 'Com 6', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com6[1]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com6_2',
                                'ng-model'=>'matcom62']) !!}
                            {!! $errors->first('mat_com6[1]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com6[1]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com6_2','placeholder'=>'%', 'ng-model'=>'percom62', 'ng-change'=>'hitungLayer2()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com6[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com6_2','placeholder'=>'kg', 'ng-model'=>'needhourcom62']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com6[1]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com6_2','placeholder'=>'kg', 'ng-model'=>'needcom62']) !!}
                        </div>
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
                <div class="form-group{{ $errors->has('perencanaan_id') ? ' has-error' : '' }}" hidden="">
                    {!! Form::label('perencanaan_id', 'ID Master', ['class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                        {!! Form::text('perencanaan_id', null, ['class'=>'form-control perencanaan_id','placeholder'=>'ID Master']) !!}
                        {!! $errors->first('perencanaan_id', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                {{-- No Mesin --}}
                <div class="row">
                    <div class="col{!! $errors->has('no_mesin[2]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('no_mesin[2]', 'Extruder', ['class'=>'col-md-1 control-label', 'onkeyup'=>'checkNumber()']) !!}
                        <div class="col-md-2">
                            {!! Form::select('no_mesin[2]',
                                array(
                                    '1'=>'1', 
                                    '2'=>'2',
                                    '3'=>'3',
                                    '4'=>'4'), 
                                null, [
                                    'class'=>'form-control no_mesin_3',
                                    'placeholder' => '---',
                                    'ng-model' => 'nomesin3',
                                    'ng-change'=>'hitungLayer3()']) !!}
                            {!! $errors->first('no_mesin[2]', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                {{-- MPS --}}
                <div class="row">
                    <div class="col{!! $errors->has('melt_pump[2]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('melt_pump[2]', 'MPS', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::number('melt_pump[2]', null, [
                                'min'=>'0', 
                                'class'=>'form-control melt_pump_3',
                                'placeholder'=>'MPS', 
                                'ng-model'=>'meltpump3', 
                                'ng-change'=>'hitungLayer3()']) !!}
                            {!! $errors->first('melt_pump[2]', '<p class="help-block">:message</p>') !!}       
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
                    <div class="form-inline {!! $errors->has('mat_com1[2]') ? 'has-error' : '' !!}">
                        {!! Form::label('mat_com1[2]', 'Com 1', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com1[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com1_3',
                                'ng-model'=>'matcom13']) !!}
                            {!! $errors->first('mat_com1[2]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com1[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com1_3','placeholder'=>'%','ng-model'=>'percom13', 'ng-change'=>'hitungLayer3()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com1[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com1_3','placeholder'=>'kg', 'ng-model'=>'needhourcom13']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com1[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com1_3','placeholder'=>'kg', 'ng-model'=>'needcom13']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 2 --}}                           
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com2[2]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com2[2]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com2[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com2_3',
                                'ng-model'=>'matcom23']) !!}
                            {!! $errors->first('mat_com2[2]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com2[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com2_3','placeholder'=>'%', 'ng-model'=>'percom23', 'ng-change'=>'hitungLayer3()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com2[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com2_3','placeholder'=>'kg', 'ng-model'=>'needhourcom23']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com2[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com2_3','placeholder'=>'kg', 'ng-model'=>'needcom23']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 3 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com3[2]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com3[2]', 'Com 3', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com3[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com3_3',
                                'ng-model'=>'matcom33']) !!}
                            {!! $errors->first('mat_com3[2]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com3[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com3_3','placeholder'=>'%', 'ng-model'=>'percom33', 'ng-change'=>'hitungLayer3()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com3[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com3_3','placeholder'=>'kg', 'ng-model'=>'needhourcom33']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com3[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com3_3','placeholder'=>'kg', 'ng-model'=>'needcom33']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 4 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com4[2]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com4[2]', 'Com 4', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com4[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com4_3',
                                'ng-model'=>'matcom43']) !!}
                            {!! $errors->first('mat_com4[2]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com4[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com4_3','placeholder'=>'%', 'ng-model'=>'percom43', 'ng-change'=>'hitungLayer3()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com4[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com4_3','placeholder'=>'kg', 'ng-model'=>'needhourcom43']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com4[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com4_3','placeholder'=>'kg', 'ng-model'=>'needcom43']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 5 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com5[2]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com5[2]', 'Com 5', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com5[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com5_3',
                                'ng-model'=>'matcom53']) !!}
                            {!! $errors->first('mat_com5[2]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com5[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com5_3','placeholder'=>'%', 'ng-model'=>'percom53', 'ng-change'=>'hitungLayer3()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com5[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com5_3','placeholder'=>'kg', 'ng-model'=>'needhourcom53']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com5[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com5_3','placeholder'=>'kg', 'ng-model'=>'needcom53']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 6 --}}               
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com6[2]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com6[2]', 'Com 6', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com6[2]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com6_3',
                                'ng-model'=>'matcom63']) !!}
                            {!! $errors->first('mat_com6[2]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com6[2]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com6_3','placeholder'=>'%', 'ng-model'=>'percom63', 'ng-change'=>'hitungLayer3()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com6[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com6_3','placeholder'=>'kg', 'ng-model'=>'needhourcom63']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com6[2]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com6_3','placeholder'=>'kg', 'ng-model'=>'needcom63']) !!}
                        </div>
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
                <div class="form-group{{ $errors->has('perencanaan_id') ? ' has-error' : '' }}" hidden="">
                    {!! Form::label('perencanaan_id', 'ID Master', ['class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-3">
                        {!! Form::text('perencanaan_id', null, ['class'=>'form-control perencanaan_id','placeholder'=>'ID Master']) !!}
                        {!! $errors->first('perencanaan_id', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                {{-- No Mesin --}}
                <div class="row">
                    <div class="col{!! $errors->has('no_mesin[3]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('no_mesin[3]', 'Extruder', ['class'=>'col-md-1 control-label', 'onkeyup'=>'checkNumber()']) !!}
                        <div class="col-md-2">
                            {!! Form::select('no_mesin[3]',
                                array(
                                    '1'=>'1', 
                                    '2'=>'2',
                                    '3'=>'3',
                                    '4'=>'4'), 
                                null, [
                                    'class'=>'form-control no_mesin_4',
                                    'placeholder' => '---',
                                    'ng-model' => 'nomesin4',
                                    'ng-change'=>'hitungLayer4()']) !!}
                            {!! $errors->first('no_mesin[3]', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                {{-- MPS --}}
                <div class="row">
                    <div class="col{!! $errors->has('melt_pump[3]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('melt_pump[3]', 'MPS', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::number('melt_pump[3]', null, [
                                'min'=>'0', 
                                'class'=>'form-control melt_pump_4',
                                'placeholder'=>'MPS', 
                                'ng-model'=>'meltpump4',
                                'ng-change'=>'hitungLayer4()']) !!}
                            {!! $errors->first('melt_pump[3]', '<p class="help-block">:message</p>') !!}       
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
                    <div class="form-inline {!! $errors->has('mat_com1[3]') ? 'has-error' : '' !!}">
                        {!! Form::label('mat_com1[3]', 'Com 1', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com1[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com1_4',
                                'ng-model'=>'matcom14']) !!}
                            {!! $errors->first('mat_com1[3]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com1[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com1_4','placeholder'=>'%','ng-model'=>'percom14', 'ng-change'=>'hitungLayer4()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com1[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com1_4','placeholder'=>'kg', 'ng-model'=>'needhourcom14']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com1[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com1_4','placeholder'=>'kg', 'ng-model'=>'needcom14']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 2 --}}                           
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com2[3]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com2[3]', 'Com 2', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com2[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com2_4',
                                'ng-model'=>'matcom24']) !!}
                            {!! $errors->first('mat_com2[3]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com2[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com2_4','placeholder'=>'%', 'ng-model'=>'percom24', 'ng-change'=>'hitungLayer4()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com2[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com2_4','placeholder'=>'kg', 'ng-model'=>'needhourcom24']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com2[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com2_4','placeholder'=>'kg', 'ng-model'=>'needcom24']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 3 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com3[3]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com3[3]', 'Com 3', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com3[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com3_4',
                                'ng-model'=>'matcom34']) !!}
                            {!! $errors->first('mat_com3[3]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com3[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com3_4','placeholder'=>'%', 'ng-model'=>'percom34', 'ng-change'=>'hitungLayer4()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com3[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com3_4','placeholder'=>'kg', 'ng-model'=>'needhourcom34']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com3[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com3_4','placeholder'=>'kg', 'ng-model'=>'needcom34']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 4 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com4[3]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com4[3]', 'Com 4', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com4[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com4_4',
                                'ng-model'=>'matcom44']) !!}
                            {!! $errors->first('mat_com4[3]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com4[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com4_4','placeholder'=>'%', 'ng-model'=>'percom44', 'ng-change'=>'hitungLayer4()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com4[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com4_4','placeholder'=>'kg', 'ng-model'=>'needhourcom44']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com4[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com4_4','placeholder'=>'kg', 'ng-model'=>'needcom44']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 5 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com5[3]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com5[3]', 'Com 5', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com5[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com5_4',
                                'ng-model'=>'matcom54']) !!}
                            {!! $errors->first('mat_com5[3]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com5[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com5_4','placeholder'=>'%', 'ng-model'=>'percom54', 'ng-change'=>'hitungLayer4()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com5[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com5_4','placeholder'=>'kg', 'ng-model'=>'needhourcom54']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com5[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com5_4','placeholder'=>'kg', 'ng-model'=>'needcom54']) !!}
                        </div>
                    </div>
                </div>

                {{-- COM 6 --}}
                <div class="row">
                    <div class="form-inline {!! $errors->has('mat_com6[3]') ? 'has-error' : '' !!}">                  
                        {!! Form::label('mat_com6[3]', 'Com 6', ['class'=>'col-md-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('mat_com6[3]', [''=>'-----']+App\Bahan::pluck('nama','id')->all(), null, [
                                'class'=>'form-control mat_com6_4',
                                'ng-model'=>'matcom64']) !!}
                            {!! $errors->first('mat_com6[3]', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::number('per_com6[3]', null, ['min'=>'0', 'max'=>'100', 'class'=>'col-md-1 form-control per_com6_4','placeholder'=>'%', 'ng-model'=>'percom64', 'ng-change'=>'hitungLayer4()']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::number('needhour_com6[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control needhour_com6_4','placeholder'=>'kg', 'ng-model'=>'needhourcom64']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::number('need_com6[3]', null, ['min'=>'0', 'step'=>'0.01', 'class'=>'col-md-1 form-control need_com6_4','placeholder'=>'kg', 'ng-model'=>'needcom64']) !!}
                        </div>
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