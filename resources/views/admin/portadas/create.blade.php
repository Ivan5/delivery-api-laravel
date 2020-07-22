@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
          {!! Form::open(['route' => ['admin.portadas.store'], 'method' => 'POST', 'files' => true]) !!}
            <div class="row form-group">
                {!! Form::label('frase', 'Frase')!!} 
                {!! Form::text('frase', null, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('link', 'Link')!!} 
                {!! Form::text('link', null, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                {!! Form::file('imageUrl')!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('orden', 'Orden')!!} 
                {!! Form::text('orden', null, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
              <div class="col-sm-6">
                {!! Form::submit('Save',["class" => "btn btn-success"]) !!} 
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
@endsection