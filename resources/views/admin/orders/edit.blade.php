@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
          {!! Form::open(['route' => ['admin.orders.update',$order], 'method' => 'PUT']) !!}
            <div class="row form-group">
                {!! Form::label('code', 'Code')!!} 
                {!! Form::text('code', $order->code, ['class' => 'form-control'] )!!} 
            </div>
            <div class="row form-group">
                {!! Form::checkbox('status',null,$order->status)!!} Deliver 
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