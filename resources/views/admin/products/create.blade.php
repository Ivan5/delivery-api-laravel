@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
          {!! Form::open(['route' => ['admin.products.store'], 'method' => 'POST', 'files' => true]) !!}
            <div class="row form-group">
                {!! Form::label('slug', 'Slug')!!} 
                {!! Form::text('slug', null, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('title', 'Title')!!} 
                {!! Form::text('title', null, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('description', 'Description')!!} 
                {!! Form::textarea('description', null, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('name', 'Name')!!} 
                {!! Form::text('name', null, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('price', 'Price')!!} 
                {!! Form::text('price', null, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('unit', 'Unit')!!} 
                {!! Form::text('unit', null, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('order', 'Order')!!} 
                {!! Form::text('order', null, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('stock', 'Stock')!!} 
                {!! Form::number('stock', null, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::checkbox('status', null )!!}
                {!! Form::label('status', ' Status')!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('imageUrl', 'Image')!!} 
                {!! Form::file('imageUrl')!!} 
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
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'description' );
    </script>
@endsection