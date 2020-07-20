@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
          @if(count($orders) > 0) 
          <table class="table">
            <thead>
              <th>#</th>
              <th>Code</th>
              <th>Order Date</th>
              <th>Deliver</th>
              <th>Actions</th>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                  <td>{{$order->id}}</td>
                  <td>{{$order->create_at}}</td>
                  <td>{{$order->status}}</td>
                  <td>
                    <a class="btn btn-info" href="{{route('admin.orders.show',$order->id)}}">Details</a>
                    <a class="btn btn-warning" href="{{route('admin.orders.edit',$orders->id)}}">Edit</a>
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