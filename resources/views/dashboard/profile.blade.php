@extends('dashboard.layout')
@section('title', 'Inicio')
@section('id'){{Auth::user()->id}}@endsection
@section('photo'){{Auth::user()->avatar}}@endsection
@section('name'){{Auth::user()->name}}@endsection
@section('telephone'){{Auth::user()->telephone}}@endsection
@section('email'){{Auth::user()->email}}@endsection
@section('projects')

@foreach ($projects as $project)
<li><a class="dropdown-item border-radius-md" href="{{$project->url}}">{{$project->name}}</a></li>
@endforeach
<li><a class="dropdown-item border-radius-md" href="{{route('project.create')}}">Crea un nuevo proyecto</a></li>
@endsection
@section('main')
<div class="container-fluid px-2 px-md-4">
  <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{url('media/img1.jpg')}}');">
    <span class="mask bg-gradient-info opacity-6"></span>
  </div>
  <div class="card card-body mx-3 mx-md-4 mt-n6">
    <div class="row gx-4 mb-2">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          <img
            src="{{Auth::user()->avatar}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm"/>
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">@yield('name')</h5>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
      </div>
    </div>
    <div class="row">
      <div class="row">

        <div class="col-12 col-xl-12">
          <div class="card card-plain h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">Datos Personales</h6>
                </div>
                <div class="col-md-4 text-end">
                  <a href="{{route('homes.edit', Auth::user()->id)}}">
                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-hidden="true" aria-label="Edit Profile"data-bs-original-title="Edit Profile"></i><span class="sr-only">Editar Datos Personales</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                  <strong>Nombre:</strong> @yield('name')
                </li>
                <li class="list-group-item border-0 ps-0 text-sm">
                  <strong>Telefono de Contacto:</strong>@yield('telephone')
                </li>
                <li class="list-group-item border-0 ps-0 text-sm">
                  <strong>Email:</strong> @yield('email')
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 mt-4">
          <div class="mb-5 ps-3">
            <h6 class="mb-1">Proyectos</h6>
            <p class="text-sm">Informacion Basico Sobre tus Proyectos</p>
          </div>
          <div class="row">
            <div class="col-xl-12 col-md-12 mb-xl-0">
              <div class="card card-blog card-plain">
                @if ($projects)
                @foreach ($projects as $project)
                <div class="card-body p-3">
                    <p class="mb-0 text-sm">Project # {{$project->id}}</p>
                      <h5>{{$project->name}}</h5>
                    <img src="{{$project->url_qr}}" alt="">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                          <strong>Dia de Corte:</strong> {{$project->cutting_day}}
                        </li>
                        <li class="list-group-item border-0 ps-0 text-sm">
                          <strong>Meses Pagados:</strong>{{$project->months_paid}}
                        </li>
                      </ul>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="{{$project->url}}">
                      <button type="button" class="btn btn-outline-primary btn-sm mb-0">
                        Mirar Proyecto
                      </button></a>
                    </div>
                  </div>
                @endforeach
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
</div>

@endsection