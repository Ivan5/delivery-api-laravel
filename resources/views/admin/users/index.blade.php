@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
          <table class="table">
            <thead>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Actions</th>
            </thead>
            <tbody>
              @foreach ($data as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{($item->status == 1) ? "On" : "Off"}}</td>
                  <td>
                    <a class="btn btn-info" href="#">Orders</a>
                    <a class="btn btn-warning" href="{{route('admin.users.edit',$item->id)}}">Edit</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection