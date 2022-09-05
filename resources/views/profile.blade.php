@extends('layouts.index')
@section('title'){{$users->name}}@endsection
@section('head')
<style>
    #photo{
        width:300px;
        height:30vh;
        background-color:red!important;
        background-size:cover;
    }

    .custom-input-file {
        background-size:cover;
  color: #fff;
  cursor: pointer;
  font-size: 18px;
  font-weight: bold;
  margin: 0 auto 0;
  overflow: hidden;
  padding: 10px;
  position: relative;
  text-align: center;
  width: 38vh;
  height:38vh;
  opacity: 0.7;
}
#p-photo{opacity: 0;}

.custom-input-file:hover{opacity: 1; transition:0.3s;}
.custom-input-file:hover #p-photo{opacity: 1; transition:0.3s;}

.custom-input-file .input-file {
 border: 10000px solid transparent;
 cursor: pointer;
 font-size: 10000px;
 margin: 0;
 opacity: 0;
 outline: 0 none;
 padding: 0;
 position: absolute;
 right: -1000px;
 top: -1000px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#photo").change(function(){
        $("#btn-photo").toggle();
    });
  });

  $(document).ready(function(){
    $("input").change(function(){
        $(".disabled").removeClass("disabled");
    });
  });

  $(document).ready(function() {
    $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});
</script>
@endsection
@section('id'){{$users->id}}@endsection
@section('photo'){{$users->url_photo}}@endsection
@section('name'){{$users->name}}@endsection
@section('proffession'){{$users->proffession}}@endsection
@section('content')
            <div class="row white-text">
                <div class="col s12 center">
                    <div class="photo black-text">
                        <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <?php $url = str_replace('\\', '/', $users->url_photo);?>
                        <div class="custom-input-file col-md-6 col-sm-6 col-xs-6 circle" style="background-image:url('http://127.0.0.1:8000/{{$url}}');">
                            <input id="photo" type="file" id="fichero-tarifas" class="input-file" value="" name="file"><br><br><br><br><br><br><br>
                            <p id="p-photo" class="black-text">Cambiar Foto de Perfil</p>
                        </div>
                        <button id="btn-photo" class="btn waves-effect waves-light green" type="submit" name="action" style="display:none;">Subir Foto
                            <i class="material-icons right">send</i>
                        </button>
                        @error('file')
                            <p class="red-text">Error</p>
                        @enderror
                        </form>
                    </div>
                </div>
            </div>
            <div class="row container white" style="border-radius:10px;">
            
            <form class="col s12" action="" method="POST">
            @csrf
            @method('put')
            <h2 class="center">Datos Personales</h2><hr>
      <div class="row">
        <div class="input-field col s12">
          <input value="{{$users->name}}" name="name" type="text" class="validate">
          <label for="name">Nombres</label>
        </div>
        </div>
      <div class="row">
      <div class="input-field col s9">
          <input disabled  value="{{$users->active_projects}}" name="projects" type="text" class="validate">
          <label for="projects">Proyectos Activos</label>
        </div>
        <div class="input-field col s3">
        <a class="waves-effect waves-light btn btn-medium green" href="{{route('homes.index')}}"><i class="material-icons right">arrow_forward</i>Ver Detalles</a>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input value="{{$users->proffession}}" name="proffession" type="text" class="validate">
          <label for="proffession">Profesión</label>
        </div>
        </div>
      <div class="row">
      <div class="input-field col s12">
          <input value="{{$users->telephone}}" name="telephone" type="text" class="validate">
          <label for="telephone">Numero Telefonico</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
          <input value="{{$users->email}}" name="email" type="text" class="validate">
          <label for="email">Correo Electronico</label>
        </div>
      </div>

      <div class="center">
      <button class="btn waves-effect waves-light green disabled" type="submit" name="action">Actualizar
    <i class="material-icons right">send</i>
  </button>
      </div>
      </div>
      </div>
      
      
    </form>
  </div>
@endsection
