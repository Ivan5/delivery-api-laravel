@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
          {!! Form::open(['route' => ['admin.users.update',$user], 'method' => 'PUT']) !!}
            <div class="row form-group">
              <div class="col-sm-6">
                {!! Form::checkbox('status', null, $user->status) !!} Activado
              </div>
              <div class="col-sm-6">
                {!! Form::submit('Guardar',["class" => "btn btn-success"]) !!} 
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
@endsection