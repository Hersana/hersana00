<div class="form-row">
    <div class="row">
        <div class="col-md-3">            
            {!! Form::label('Kode', 'Pilih kode perencanaan di sini . . .', ['class'=>'control-label']) !!}
        </div>
    </div>
    
    <div class="form-group {!! $errors->has('kode') ? 'has-error' : '' !!}">
        <div class="form-horizontal">
            <div class="col-md-6">
                {!! Form::select('kode', [''=>'Pilih Disini']+App\Perencanaan::pluck('kode','id')->all(), null, ['class'=>'form-control kodeperencanaan']) !!}
                {!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
            </div>

            {{-- buttons --}}            
            <div class="col-md-offset-3">               
                {!! Form::submit('Preview', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
        <div class="form-group {!! $errors->has('type') ? 'has-error' : '' !!}" hidden>            
            <div class="col-md-4 checkbox">                   
                {{ Form::radio('type', 'pdf',true) }} PDF
                {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
<hr>

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title">
                    Identitas Kode Perencanaan {{-- {{}} --}}
                </h5>
            </div>

            <div class="panel-body">
                <div class="form-row">
                    {{-- row ke-1 --}}
                    <div class="row">
                        {{-- spk_num --}}
                        <div class="col{{ $errors->has('spk_num') ? ' has-error' : '' }}">
                            {!! Form::label('spk_num', 'WS Num', ['class'=>'col-md-1 control-label']) !!}
                            <div class="col-md-3">
                                {!! Form::text('spk_num', null , ['class'=>'form-control spk_num', 'placeholder'=>'Worksheet Num', 'disabled']) !!}
                                {!! $errors->first('spk_num', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        {{-- length --}}
                        <div class="col{{ $errors->has('length') ? ' has-error' : '' }}">
                            {!! Form::label('length', 'Length (mm)', ['class'=>'col-md-1 control-label']) !!}
                            <div class="col-md-3">
                                {!! Form::number('length', null, ['class'=>'form-control length','min'=>'0', 'placeholder'=>'mm', 'disabled']) !!}
                                {!! $errors->first('length', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div> 
                        {{-- quantity --}}
                        <div class="col{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            {!! Form::label('quantity', 'Quantity', ['class'=>'col-md-1 control-label']) !!}
                            <div class="col-md-3">
                                {!! Form::number('quantity', null, ['min'=>'0', 'class'=>'form-control quantity','placeholder'=>'sheets', 'disabled']) !!}
                                {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                    {{-- row ke-2 --}}
                    <div class="row">
                        {{-- kode_warna --}}
                        <div class="col{{ $errors->has('kode_warna') ? ' has-error' : '' }}">
                            {!! Form::label('kode_warna', 'Color Code', ['class'=>'col-md-1 control-label']) !!}
                            <div class="col-md-3">
                                {!! Form::text('kode_warna', null , ['class'=>'form-control kode_warna','placeholder'=>'kode', 'disabled']) !!}
                                {!! $errors->first('kode_warna', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        {{-- width --}}
                        <div class="col{{ $errors->has('width') ? ' has-error' : '' }}">
                            {!! Form::label('width', 'Width (mm)', ['class'=>'col-md-1 control-label']) !!}
                            <div class="col-md-3">
                                {!! Form::number('width', null, ['class'=>'form-control width','min'=>'0', 'placeholder'=>'mm', 'disabled']) !!}
                                {!! $errors->first('width', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>                    
                        {{-- keterangan --}}
                        <div class="col{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                            {!! Form::label('keterangan', 'Note', ['class'=>'col-md-1 control-label']) !!}
                            <div class="col-md-3">
                                {!! Form::text('keterangan', null, ['class'=>'form-control keterangan','placeholder'=>'-', 'disabled']) !!}
                                {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>                 
                    </div>

                    {{-- row ke-3 --}}
                    <div class="row">
                        {{-- customer_id --}}
                        <div class="col{!! $errors->has('customer_id') ? 'has-error' : '' !!}">
                            {!! Form::label('customer_id', 'Customer', ['class'=>'col-md-1 control-label']) !!}
                            <div class="col-md-3">
                                {!! Form::select('customer_id',[''=>'-----']+App\Customer::pluck('nama','id')->all(), null, ['class'=>'form-control customer_id', 'disabled']) !!}
                                {!! $errors->first('customer_id', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>                    
                        {{-- thickness --}}
                        <div class="col{{ $errors->has('thickness') ? ' has-error' : '' }}">
                            {!! Form::label('thickness', 'Thickness (mm)', ['class'=>'col-md-1 control-label']) !!}
                            <div class="col-md-3">
                                {!! Form::number('thickness', null , ['class'=>'form-control thickness','min'=>'0', 'placeholder'=>'mm', 'disabled']) !!}
                                {!! $errors->first('thickness', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>