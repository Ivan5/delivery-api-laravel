@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
          {!! Form::open(['route' => ['admin.posts.update',$post], 'method' => 'PUT', 'files' => true]) !!}
            <div class="row form-group">
                {!! Form::label('slug', 'Slug')!!} 
                {!! Form::text('slug', $post->slug, ['class' => 'form-control', 'placeholder' => 'Slug of Category'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::label('title', 'Title')!!} 
                {!! Form::text('title', $post->title, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('description', 'Description')!!} 
                {!! Form::textarea('description', $post->description, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('name', 'Name')!!} 
                {!! Form::text('name', $post->name, ['class' => 'form-control'] )!!} 
            </div>
             <div class="row form-group">
                <img src="/img/categories/{{$post->imageUrl}}" alt="" />
                {!! Form::file('imageUrl')!!} 
            </div>
             <div class="row form-group">
                {!! Form::label('categories_id', 'Category')!!} 
                {!! Form::select('categories_id',$categories, $post->categories_id, ['class' => 'form-control'] )!!} 
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