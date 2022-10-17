@extends('dashboard.layout')
@section('title', 'Inicio')
@section('id'){{Auth::user()->id}}@endsection
@section('photo'){{Auth::user()->url_photo}}@endsection
@section('name'){{Auth::user()->name}}@endsection
@section('telephone'){{Auth::user()->telephone}}@endsection
@section('email'){{Auth::user()->email}}@endsection
@section('projects')
@if ($projects == NULL)
<li><a class="dropdown-item border-radius-md" href="{{route('project.create')}}">Crea un nuevo proyecto</a></li>
@endif
@foreach ($projects as $project)
<li><a class="dropdown-item border-radius-md" href="{{$project->url}}">{{$project->name}}</a></li>
@endforeach

@endsection
@section('content')
<div class="container-fluid px-2 px-md-4">
  <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{url('media/img1.jpg')}}');">
    <span class="mask bg-gradient-info opacity-6"></span>
  </div>
  <div class="card card-body mx-3 mx-md-4 mt-n6">
    <div class="row gx-4 mb-2">
        <center><h2>Creacion de Proyectos</h2></center>
        <form action="{{route('project.store')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Nombre del Proyecto</label>
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <center>
                    <input class="btn btn-success w-100" type="submit" value="Crear">
                </center>
              </div>
            </div>
          </form>
    </div>
  </div>
</div>

@endsection