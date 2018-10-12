{{-- bahan id --}}
    <div class="form-group {!! $errors->has('bahan_id') ? 'has-error' : '' !!}">
        {!! Form::label('bahan_id', 'Bahan Baku', ['class'=>'col-md-2 control-label']) !!}

        <div class="col-md-4">
            {!! Form::select('bahan_id', [''=>'']+App\Bahan::pluck('nama','id')->all(), null, [
                'class'=>'js-selectize',
                'placeholder' => 'Pilih Bahan Baku']) 
            !!}
            {!! $errors->first('bahan_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

{{-- jumlah --}}
    <div class="form-group{{ $errors->has('jumlah') ? ' has-error' : '' }}">
        {!! Form::label('jumlah', 'Jumlah', ['class'=>'col-md-2 control-label']) !!}

        <div class="col-md-4">
            {!! Form::number('jumlah', null, ['class'=>'form-control', 'min'=>1]) !!}
            {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
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
