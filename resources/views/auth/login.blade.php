@extends('layout')
@section('head')
<style>
    body{
        background-image:url('../media/img1.jpg');
        background-size: 100% 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .card{
        background: rgba(0, 0, 0, .8);
        color:white!important;
        border-radius:20px;
    }
    form{padding-bottom:40px!important;}
</style>
@endsection
@section('main')
<br><br><br><br>
<div class="container" id="container">
    <div class="row justify-content-center">
    <div class="row card z-depth-5" data-aos="fade-down">
        <div class="center">
            <h3>Inicia Sesion</h3>
        </div>
        <div class="container">
    <form class="col s12" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Correo Electronico</label>
        </div>
        </div>
        @error('email')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">https</i>
          <input id="password" type="password" class="validate" name="password" required>
          <label for="password">Contraseña</label>
        </div>
        </div>
        @error('password')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
        <button class="btn waves-effect waves-light green" type="submit" name="action">Ingresa
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>
  </div>
    </div>
</div>
@endsection
