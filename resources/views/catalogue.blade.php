@extends('layout')
@section('head')
<style>
    body{
        background-image:url('../media/img1.jpg');
        background-size: 100% 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
        overflow-x: hidden;
    }

    .card{cursor: pointer;}

    .card-title title black-text center-align{color: white !important;}

    .title{background: rgba(255, 255, 255, .7);}

    .wrapper{margin: 100px;}
</style>
@endsection
@section('main')
<br><br><br><br><br>
    <br>
    <div class="row">
    <div class="card">
    <div class="col s12 container title" style="margin:30px;">
            <h4>NUESTRO SERVICIOS</h4><hr>
            <div class="row who">
            <p>Brindamos diferentes tipos de servicios como de comodidades para todos nuestros usuarios, de tal manera que diseñamos diferentes tipos de servicios para que te puedas acomodar al que más conveniente creas para ti y para tu trabajo.</p>
          </div>
    </div>
</div>
<div class="row who">
<div class="col s12 l6 info" data-aos="fade-up">
    <div class="card z-depth-5">
    <div class="card-image">
          <img src="{{url('media/presentacion.png')}}">
          <span class="card-title title black-text center-align">Pagina de Presentación</span>
        </div>
        <div class="card-content">
          <p>Son aplicativos web donde podrás almacenar como información como imágenes de diferentes secciones que desees, es perfecta para hacer presentaciones o publicidad de productos o lugares de comercio.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
    </div>
</div>
<div class="col s12 l6 info" data-aos="fade-left">
    <div class="card z-depth-5">
    <div class="card-image">
          <img src="{{url('media/aplicativo.png')}}">
          <span class="card-title title black-text center-align">Aplicativos web</span>
        </div>
        <div class="card-content">
          <p>Son aplicativos web que te brindaran diferentes herramientas para tus laborales cotidianas, automatizando procesos dentro de estas mismas, brindándote una base de datos la cual te permitirá almacenar diferentes datos de información como el manejo de esta misma y teniendo tu aplicativo web dentro de un dominio propio y semi personalizado.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
    </div>
</div>
</div>

</div>
<div class="row">
    <div class="card">
    <div class="col s12 container title" style="margin:30px;">
            <h4>NUESTRO PRECIOS</h4><hr>
            <div class="row who">
            <p>Pensando en las comodidades diseñamos brindar diferentes planes para que te puedas acomodar a la cantidad de proyectos deseas, como a tu presupuesta más conveniente creas para ti y para tu trabajo.</p>
          </div>
    </div>
</div>
<div class="row who">
<div class="col s12 l6 info aos-init aos-animate" data-aos="fade-right" id="carta2">
    <div class="card_box">
        <span class="precio2"></span>
        <p><br><br>
        <p>-Acceso a tu propio Panel de Control donde podras vestionar y observar tus proyectos.<br><br>
            -Todo lo anteriormente mencionado del plan Basico.<br><br>
            -Capacidad de tener 1 paginas de presentacion activas al mismo tiempo.<br><br>
            -Una funcionalidad adicianal dentro de tu Panel de Control donde podrá ver estadísticamente el número de vistas de tus proyectos.</p>
    </div>
</div>
<div class="col s12 l6 info aos-init aos-animate" data-aos="fade-left" id="carta3">
    <div class="card_box">
        <span class="precio3"></span>
        <p>-Todo lo anteriormente mencionado del plan Estandar.<br><br>
-Capacidad de tener cualquier tipo de servicio ilimitado y activo al mismo tiempo.<br><br>
-asesoramiento exclusivo con el equipo de desarrollo.</p>
    </div>
</div>
</div><br>
<br>
<br>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@endsection