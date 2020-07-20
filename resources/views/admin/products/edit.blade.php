@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
          {!! Form::open(['route' => ['admin.products.update',$product], 'method' => 'PUT', 'files' => true]) !!}
            <div class="row form-group">
                {!! Form::label('slug', 'Slug')!!} 
                {!! Form::text('slug', $product->slug, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('title', 'Title')!!} 
                {!! Form::text('title', $product->title, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('description', 'Description')!!} 
                {!! Form::textarea('description',$product->description, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('name', 'Name')!!} 
                {!! Form::text('name', $product->name, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('price', 'Price')!!} 
                {!! Form::text('price', $product->price, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('unit', 'Unit')!!} 
                {!! Form::text('unit', $product->unit, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('order', 'Order')!!} 
                {!! Form::text('order', $product->order, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('stock', 'Stock')!!} 
                {!! Form::number('stock', $product->stock, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                
                {!! Form::checkbox('status', $product->status )!!}
                {!! Form::label('status', 'Status')!!}  
            </div>
             <div class="row form-group">
                <img src="/img/subcategories/{{$product->imageUrl}}" alt="">
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