@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
          {!! Form::open(['route' => ['admin.subcategories.update',$subcategory], 'method' => 'PUT', 'files' => true]) !!}
            <div class="row form-group">
                {!! Form::label('slug', 'Slug')!!} 
                {!! Form::text('slug', $subcategory->slug, ['class' => 'form-control', 'placeholder' => 'Slug of Category'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('title', 'Title')!!} 
                {!! Form::text('title', $subcategory->title, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('description', 'Description')!!} 
                {!! Form::textarea('description',$subcategory->description, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('name', 'Name')!!} 
                {!! Form::text('name', $subcategory->name, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                <img src="/img/subcategories/{{$subcategory->imageUrl}}" alt="">
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