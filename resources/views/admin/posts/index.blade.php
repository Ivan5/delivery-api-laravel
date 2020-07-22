@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
          <a class="btn btn-primary" href="{{route('admin.posts.create')}}">New Post</a>
          @if(count($posts) > 0) 
          <table class="table">
            <thead>
              <th>#</th>
              <th>Name</th>
              <th>Actions</th>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->name}}</td>
                  <td>
                    
                    <a class="btn btn-warning" href="{{route('admin.posts.edit',$post->id)}}">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' =>['admin.posts.destroy', $post->id], 'style' => 'display:inline']) !!}
                      {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    
                  </td>
                </tr>
              @endforeach 
              @else
              <h2>Not Registers</h2>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection