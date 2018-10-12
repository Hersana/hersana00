{!! Form::model($model, [
   'url'			   => $form_url, 
   'method'		   => 'delete', 
   'class'        => 'form-inline js-confirm', 
   'data-confirm' => $confirm_message] ) 
   !!}


{{-- <a href="{{ $detail_url }}" class="btn btn-xs btn-success">Detail</a> |  --}}
{{-- <a href="{{ $edit_url }}" class="btn btn-xs btn-primary">Ubah</a> | 
{!! Form::submit('Hapus', ['class'=>'btn btn-xs btn-danger']) !!} --}}


<div class="dropdown">
   <button class="btn btn-success btn-xs dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
   </button>


   <div class="dropdown-menu">
      <a href="{{ $edit_url }}" class="btn btn-xs btn-primary">Ubah</a></br>   
      {!! Form::submit('Hapus', ['class'=>'btn btn-xs btn-danger']) !!}

   </div>
</div>

{!! Form::close()!!}