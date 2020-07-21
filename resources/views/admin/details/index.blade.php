@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
          @if(count($details) > 0) 
          <table class="table">
            <thead>
              <th>#</th>
              <th>Quantity</th>
              <th>Product</th>
            </thead>
            <tbody>
            @foreach ($details as $detail)
                <tr>
                  <td>{{$detail->id}}</td>
                  <td>{{$detail->quantity}}</td>
                  <td>{{$detail->products->name}}</td>
                  
                </tr>
              @endforeach 
              @else
              <h2>Not Orders</h2>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection