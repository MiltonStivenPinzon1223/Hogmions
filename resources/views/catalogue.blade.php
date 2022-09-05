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
<div class="col s12 l4 info" data-aos="fade-right">
    <div class="card z-depth-5">
    <div class="card-image">
          <img src="{{url('media/img2.jpg')}}">
          <span class="card-title title black-text center-align">Pagina</span>
        </div>
        <div class="card-content">
          <p>Son solo una página donde podrás almacenar diferente información que desees, es perfecta para diferentes propósitos, como Hoja de Vida, Portafolio profesional, presentación de productos, etc.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
    </div>
</div>
<div class="col s12 l4 info" data-aos="fade-up">
    <div class="card z-depth-5">
    <div class="card-image">
          <img src="{{url('media/img2.jpg')}}">
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
<div class="col s12 l4 info" data-aos="fade-left">
    <div class="card z-depth-5">
    <div class="card-image">
          <img src="{{url('media/img2.jpg')}}">
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
</div><br><br><br>
<div class="wrapper white">
<div class="row" data-aos="fade-down">
        <div class="col s12">
            <h4>NUESTRO EQUIPO</h4><hr>
            <div class="row who">
            <p>Estamos principalmente formados por este equipo de personas enfocadas en el diseño y desarrollo de aplicativos web. contando con diferentes talentos para asi obtener los mejores equipo para brindarles el mejor servicio a nuestros clientes</p>
          </div>
          <div class="row who">
            <div class="col s12 l6" data-aos="fade-right">
            <div class="card">
                <div class="card-image">
                <img src="{{url('media/img2.jpg')}}">
                <span class="card-title title black-text center-align">Portafolio de Milton</span>
                </div>
                <div class="card-content">
                <p>Información Basica del profesional</p>
                </div>
                <div class="card-action">
                <a href="#">This is a link</a>
                </div>
            </div>
            </div>
            <div class="col s12 l6" data-aos="fade-left">
            <div class="card">
                <div class="card-image">
                <img src="{{url('media/img2.jpg')}}">
                <span class="card-title title black-text center-align">Portafolio de Jorge</span>
                </div>
                <div class="card-content">
                <p>Información Basica del profesional</p>
                </div>
                <div class="card-action">
                <a href="#">This is a link</a>
                </div>
            </div>
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
<div class="col s12 l4 info aos-init aos-animate" data-aos="fade-right">
    <div class="card z-depth-5">
    <div class="card-image">
          <img src="http://127.0.0.1:8000/media/img2.jpg">
          <span class="card-title title black-text center-align">Basico ($30.000 por mes)</span>
        </div>
        <div class="card-content">
            <p>
                -Acceso a tu propio Panel de Control donde podras vestionar y observar tus proyectos. <br>
                -Capacidad de tener 2 paginas activas al mismo tiempo. <br>
                -Generacion de codigo QR para cada una de ellas. <br>
            </p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
    </div>
</div>
<div class="col s12 l4 info aos-init aos-animate" data-aos="fade-up">
    <div class="card z-depth-5">
    <div class="card-image">
          <img src="http://127.0.0.1:8000/media/img2.jpg">
          <span class="card-title title black-text center-align">Estandar ($40.000 por mes)</span>
        </div>
        <div class="card-content">
            <p>
                -Todo lo anteriormente mencionado del plan Basico. <br>
                -Capacidad de tener 1 paginas de presentacion activas al mismo tiempo. <br>
                -Una funcionalidad adicianal dentro de tu Panel de Control donde podrá ver estadísticamente el número de vistas de tus proyectos. <br>
            </p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
    </div>
</div>
<div class="col s12 l4 info aos-init aos-animate" data-aos="fade-left">
    <div class="card z-depth-5">
    <div class="card-image">
          <img src="http://127.0.0.1:8000/media/img2.jpg">
          <span class="card-title title black-text center-align">Premium ($60.000 por mes)</span>
        </div>
        <div class="card-content">
            <p>
                -Todo lo anteriormente mencionado del plan Estandar. <br>
                -Capacidad de tener cualquier tipo de servicio ilimitado y activo al mismo tiempo. <br>
                -asesoramiento exclusivo con el equipo de desarrollo. <br>
            </p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
    </div>
</div>
</div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@endsection