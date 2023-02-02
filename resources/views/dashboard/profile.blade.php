@extends('dashboard.layout')
@section('title', 'Inicio')
@section('id'){{Auth::user()->id}}@endsection
@section('photo'){{Auth::user()->avatar}}@endsection
@section('name'){{Auth::user()->name}}@endsection
@section('telephone'){{Auth::user()->telephone}}@endsection
@section('email'){{Auth::user()->email}}@endsection
@section('projects')
<div class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Mis Proyectos</a>
  <div class="dropdown-menu bg-transparent border-0">
      @foreach ($projects as $project)
      <a href="{{$project->url}}" class="dropdown-item">{{$project->name}}</a>
      @endforeach
      <a href="{{route('project.create')}}" class="dropdown-item">Crea un nuevo proyecto</a>
  </div>
</div>

@endsection
@section('main')
<div class="container-fluid pt-4 px-4">
  <div class="card card-body mx-3 mx-md-4 mt-n6 bg-secondary">
    <div class="row gx-4 mb-2">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          <img
            src="{{Auth::user()->avatar}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm"/>
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h4 class="mb-1">@yield('name')</h4>
          <h6 class="mb-1">@yield('email')</h6>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
      </div>
    </div>
    <div class="bg-secondary">
      <div class="row bg-secondary">
        <div class="col-12 mt-4">
          <div class="mb-5 ps-3">
            <h6 class="mb-1">Proyectos</h6>
            <p class="text-sm">Informacion Basico Sobre tus Proyectos</p>
          </div>
          <div class="row">
            <div class="col-xl-12 col-md-12 mb-xl-0">
                @if ($projects)
                <div class="row">
                @foreach ($projects as $project)
                <div class="col-sm-6 p-3">
                    <p class="mb-0 text-sm">Proyecto # {{$project->id}}</p>
                      <h5>{{$project->name}}</h5>
                    <div class="d-flex align-items-center border-bottom py-3">
                      <img class="flex-shrink-0" src="{{$project->url_qr}}" alt="" style="width: 150px; height: 150px;">
                  </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="../project/{{$project->id}}">
                      <button type="button" class="btn btn-outline-primary btn-sm mb-0">
                        Mirar Proyecto
                      </button></a>
                    </div>
                  </div>
                @endforeach
                </div>
                @else
                <div class="alert alert-primary text-white" role="alert">
                    <strong>Alerta!</strong> No tienes Proyectos en estos momentos!
                </div>
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script></script>
@endsection