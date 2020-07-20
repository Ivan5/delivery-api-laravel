@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
          <a class="btn btn-primary" href="{{route('admin.subcategories.create')}}">New Subcategory</a>
          @if(count($subcategories) > 0) 
          <table class="table">
            <thead>
              <th>#</th>
              <th>Name</th>
              <th>Actions</th>
            </thead>
            <tbody>
            @foreach ($subcategories as $subcategory)
                <tr>
                  <td>{{$subcategory->id}}</td>
                  <td>{{$subcategory->name}}</td>
                  <td>
                    
                    <a class="btn btn-warning" href="{{route('admin.subcategories.edit',$subcategory->id)}}">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' =>['admin.subcategories.destroy', $subcategory->id], 'style' => 'display:inline']) !!}
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