{{-- kode --}}
    <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
        {!! Form::label('kode', 'Kode', ['class'=>'col-md-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('kode', null, ['class'=>'form-control']) !!}
            {!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

{{-- nama --}}
    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
        {!! Form::label('nama', 'Nama', ['class'=>'col-md-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('nama', null, ['class'=>'form-control']) !!}
            {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

{{-- keterangan --}}
    <div class="form-group {!! $errors->has('keterangan') ? 'has-error' : '' !!}">
        {!! Form::label('keterangan', 'Keterangan', ['class'=>'col-md-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::select('keterangan',
                array(
                    'ABS'=>'ABS', 
                    'PMMA'=>'PMMA',
                    'Recycle'=>'Recycle',
                    'Additive'=>'Additive'), 
                null, [
                    'class'=>'js-selectize',
                    'placeholder' => 'Pilih Jenis'])
            !!}
            {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

{{-- user_id --}}
    <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}" hidden="">
        {!! Form::label('user_id', 'User', ['class'=>'col-md-2 control-label']) !!}
        <div class="col-md-4">
            {!! Form::text('user_id', Auth::user()->id, ['class'=>'form-control']) !!}
            {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

{{-- button save --}}
    <div class="form-group">
        <div class="col-md-4 col-md-offset-2">
            {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>
