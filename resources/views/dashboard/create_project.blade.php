@extends('dashboard.layout')
@section('title', 'Inicio')
@section('id'){{Auth::user()->id}}@endsection
@section('photo'){{Auth::user()->avatar}}@endsection
@section('name'){{Auth::user()->name}}@endsection
@section('telephone'){{Auth::user()->telephone}}@endsection
@section('email'){{Auth::user()->email}}@endsection
@section('projects')
<div class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Mis Proyectos</a>
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
        <center><h2>Creacion de Proyectos</h2></center>
        <div class="col-sm-12">
          <div class="bg-secondary rounded h-100 p-4">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                  <div class="card bg-dark">
                      <div class="card-header">
                          <div class="bg-dark shadow-sm pt-4 pl-2 pr-2 pb-2">
                              <!-- Credit card form tabs -->
                              <ul role="tablist" class="nav bg-secondary nav-pills rounded nav-fill mb-3">
                                  <li class="nav-item"> <a data-toggle="pill" id="url-btn" class="nav-link active "> <i class="fa fa-link"></i> Pagina Web </a> </li>
                                  <li class="nav-item"> <a data-toggle="pill" id="file-btn" class="nav-link "> <i class="fa fa-file mr-2"></i> Archivo </a> </li>
                              </ul>
                          </div> <!-- End -->
                          <!-- Credit card form content -->
                          <div class="tab-content">
                              <!-- credit card info-->
                              <div id="url" class="tab-pane fade show active pt-3">
                                  <form method="POST" action="{{route('project.store')}}">
                                  @csrf
                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control bg-white" name="name" placeholder="floatingInput">
                                    <label for="floatingInput">Nombre del Proyecto</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                      <input type="text" class="form-control bg-white" name="url" placeholder="floatingInput">
                                      <label for="floatingInput">URL del proyecto</label>
                                  </div>
                                  <button type="submit" class="btn btn-outline-primary w-100 m-2" type="button">Registar</button>
                                  </form>
                              </div>
                          </div> <!-- End -->
                          <!-- Paypal info -->
                          <div id="file" class="tab-pane fade pt-3">
                            <form method="POST" action="{{route('project.store')}}">
                              @csrf
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control bg-white" name="name" placeholder="floatingInput">
                                <label for="floatingInput">Nombre del Proyecto</label>
                              </div>
                              <div>
                                <label for="formFileLg" class="form-label">Selecciona el archivo</label>
                                <input class="form-control form-control-lg bg-dark" id="formFileLg" type="file">
                            </div><br>
                              <button type="submit" class="btn btn-outline-primary w-100 m-2" type="button">Registar</button>
                            </form>
                      </div>
                  </div>
              </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
  $("#file-btn").click(function(){
    $("#url-btn").removeClass("active");
    $("#url").removeClass("show active");
    $("#file").addClass("show active");
    $("#file-btn").addClass("active");
  });

  $("#url-btn").click(function(){
    $("#file-btn").removeClass("active");
    $("#file").removeClass("show active");
    $("#url").addClass("show active");
    $("#url-btn").addClass("active");
  });
});
</script>
@endsection