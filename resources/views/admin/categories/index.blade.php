@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
          <a class="btn btn-primary" href="{{route('admin.categories.create')}}">New Category</a>
          @if(count($categories) > 0) 
          <table class="table">
            <thead>
              <th>#</th>
              <th>Name</th>
              <th>Actions</th>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->name}}</td>
                  <td>
                    <a class="btn btn-warning" href="{{route('admin.categories.edit',$category->id)}}">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' =>['admin.categories.destroy', $category->id], 'style' => 'display:inline']) !!}
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