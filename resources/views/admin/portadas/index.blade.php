@extends('layouts.appadmin')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
          <a class="btn btn-primary" href="{{route('admin.portadas.create')}}">New Portada</a>
          @if(count($portadas) > 0) 
          <table class="table">
            <thead>
              <th>#</th>
              <th>Frase</th>
              <th>Actions</th>
            </thead>
            <tbody>
            @foreach ($portadas as $portada)
                <tr>
                  <td>{{$portada->id}}</td>
                  <td>{{$portada->frase}}</td>
                  <td>
                    <a class="btn btn-warning" href="{{route('admin.portadas.edit',$portada->id)}}">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' =>['admin.portadas.destroy', $portada->id], 'style' => 'display:inline']) !!}
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