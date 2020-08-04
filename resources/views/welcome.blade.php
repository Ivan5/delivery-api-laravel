@extends('layouts.app')

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://via.placeholder.com/150" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/150" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/150" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <h1 class="text-center">Delivery App</h1>
        </div>
        <div class="col-sm-4">
            
            <div class="card shadow">
                <img src="https://via.placeholder.com" alt="" class="card-img-top">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque et nostrum, maxime debitis necessitatibus tempora aperiam eaque modi distinctio corrupti hic mollitia praesentium qui perspiciatis omnis? Aliquid sequi nam sint?
                </div>
                <div class="card-footer">
                    <a href="/" class="btn btn-outline-success rounded-pill btn-block">Producto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
