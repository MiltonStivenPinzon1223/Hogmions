@extends('dashboard.layout')
@section('title', 'Inicio')
@section('id'){{Auth::user()->id}}@endsection
@section('photo'){{Auth::user()->url_photo}}@endsection
@section('name'){{Auth::user()->name}}@endsection
@section('proffession'){{Auth::user()->proffession}}@endsection
@section('projects')
@if ($projects == NULL)
<li><a class="dropdown-item border-radius-md" href="{{route('homes.create')}}">Crea un nuevo proyecto</a></li>
@endif
@foreach ($projects as $project)
<li><a class="dropdown-item border-radius-md" href="{{$project->url}}">{{$project->name}}</a></li>
@endforeach

@endsection
@section('content')
<div class="container-fluid py-4">
@foreach ($projects as $project)
<div class="row mt-4">
  <div class="col-lg-12 col-md-12 mt-4 mb-4">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-danger shadow-primary border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Estadisticas de Vistas</h6>
        <p class="text-sm ">{{$project->name}}</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm">Lecturas del ultimo año</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection