<div class="form-row">

    <div class="row">
        {{-- Periode --}}
        <div class="col{{ $errors->has('prod_date') ? ' has-error' : '' }}">
            {!! Form::label('prod_date', 'Periode', ['class'=>'col-md-1 control-label']) !!}
            <div class="col-md-3">
                {!! Form::date('prod_date', new \DateTime(), ['class'=>'form-control','placeholder'=>'']) !!}
                {!! $errors->first('prod_date', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col-md-3">
                {!! Form::date('prod_date', new \DateTime(), ['class'=>'form-control','placeholder'=>'']) !!}
                {!! $errors->first('prod_date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="row">
        {{-- customer_id --}}
        <div class="col{!! $errors->has('customer_id') ? 'has-error' : '' !!}">
            {!! Form::label('customer_id', 'Customer', ['class'=>'col-md-1 control-label']) !!}
            <div class="col-md-3">
                {!! Form::select('customer_id',[''=>'-----']+App\Customer::pluck('nama','id')->all(), null, ['class'=>'form-control customer_id']) !!}
                {!! $errors->first('customer_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>    

    <div class="row">
        {{-- kode_warna --}}
        <div class="col{{ $errors->has('kode_warna') ? ' has-error' : '' }}">
            {!! Form::label('kode_warna', 'Color Code', ['class'=>'col-md-1 control-label']) !!}
            <div class="col-md-3">
                {!! Form::text('kode_warna', null , ['class'=>'form-control kode_warna','placeholder'=>'kode']) !!}
                {!! $errors->first('kode_warna', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="row">   
        {{-- button preview --}}
        <div class="col{{ $errors->has('Preview') ? ' has-error' : '' }}">
            <div class="col-md-offset-6">
                {!! Form::submit('Preview', ['class'=>'btn btn-primary']) !!}    
            </div>            
        </div>
    </div>
</div>
