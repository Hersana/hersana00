@extends('layouts.app')

@section('content')
<section id="main-content">
   <section class="wrapper">

      <div class="container">
         <div class="row">
            <br>
            <div class="col-md-10">
               <div class="panel panel-default">
                  <ul class="breadcrumb">
                     <li><a href="{{ url('/home') }}">Dashboard</a></li>
                     <li><a href="{{ url('/admin/perencanaans') }}">Perencanaan</a></li>
                     <li class="active">Ubah Perencanaan</li>
                  </ul>

                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h2 class="panel-title">Ubah Perencanaan</h2>
                     </div>

                     <div class="panel-body" ng-app="FirstApp" ng-controller="mainController">
                        {!! Form::model($perencanaan, [
                           'url'    => route('perencanaans.update', $perencanaan->id),
                           'method' => 'put',
                           'class'  => 'form-horizontal']) 
                           !!}

                        @include('perencanaans._form2')

                        {!! Form::close() !!}
                     </div>
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



</script>

   
<script src="{{ asset('js/controllers/mainController.js') }}"></script>

@endsection