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
            <div class="card-team z-depth-5">
<div class="blob">asdasdasd</div>
  <span class="img"><img src="{{url('media/team-2.jpg')}}" width="100" class="circle"></span>
  <h2>Milton Stiven P.<br><span>Desarrollor Web</span></h2>
  <p>
    <svg height="35" width="35" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024" class="icon">
      <path d="M962.267429 233.179429q-38.253714 56.027429-92.598857 95.451429 0.585143 7.972571 0.585143 23.990857 0 74.313143-21.723429 148.260571t-65.974857 141.970286-105.398857 120.32-147.456 83.456-184.539429 31.158857q-154.843429 0-283.428571-82.870857 19.968 2.267429 44.544 2.267429 128.585143 0 229.156571-78.848-59.977143-1.170286-107.446857-36.864t-65.170286-91.136q18.870857 2.852571 34.889143 2.852571 24.576 0 48.566857-6.290286-64-13.165714-105.984-63.707429t-41.984-117.394286l0-2.267429q38.838857 21.723429 83.456 23.405714-37.741714-25.161143-59.977143-65.682286t-22.308571-87.990857q0-50.322286 25.161143-93.110857 69.12 85.138286 168.301714 136.265143t212.260571 56.832q-4.534857-21.723429-4.534857-42.276571 0-76.580571 53.979429-130.56t130.56-53.979429q80.018286 0 134.875429 58.294857 62.317714-11.995429 117.174857-44.544-21.138286 65.682286-81.115429 101.741714 53.174857-5.705143 106.276571-28.598857z" fill="#f0f0f0"></path>
    </svg>
    <svg height="35" width="35" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024" class="icon">
      <path d="M123.52064 667.99143l344.526782 229.708899 0-205.136409-190.802457-127.396658zM88.051421 585.717469l110.283674-73.717469-110.283674-73.717469 0 147.434938zM556.025711 897.627196l344.526782-229.708899-153.724325-102.824168-190.802457 127.396658 0 205.136409zM512 615.994287l155.406371-103.994287-155.406371-103.994287-155.406371 103.994287zM277.171833 458.832738l190.802457-127.396658 0-205.136409-344.526782 229.708899zM825.664905 512l110.283674 73.717469 0-147.434938zM746.828167 458.832738l153.724325-102.824168-344.526782-229.708899 0 205.136409zM1023.926868 356.00857l0 311.98286q0 23.402371-19.453221 36.566205l-467.901157 311.98286q-11.993715 7.459506-24.57249 7.459506t-24.57249-7.459506l-467.901157-311.98286q-19.453221-13.163834-19.453221-36.566205l0-311.98286q0-23.402371 19.453221-36.566205l467.901157-311.98286q11.993715-7.459506 24.57249-7.459506t24.57249 7.459506l467.901157 311.98286q19.453221 13.163834 19.453221 36.566205z" fill="#f0f0f0"></path>
    </svg>
    <svg height="35" width="35" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024" class="icon">
      <path d="M950.930286 512q0 143.433143-83.748571 257.974857t-216.283429 158.573714q-15.433143 2.852571-22.601143-4.022857t-7.168-17.115429l0-120.539429q0-55.442286-29.696-81.115429 32.548571-3.437714 58.587429-10.313143t53.686857-22.308571 46.299429-38.034286 30.281143-59.977143 11.702857-86.016q0-69.12-45.129143-117.686857 21.138286-52.004571-4.534857-116.589714-16.018286-5.12-46.299429 6.290286t-52.589714 25.161143l-21.723429 13.677714q-53.174857-14.848-109.714286-14.848t-109.714286 14.848q-9.142857-6.290286-24.283429-15.433143t-47.689143-22.016-49.152-7.68q-25.161143 64.585143-4.022857 116.589714-45.129143 48.566857-45.129143 117.686857 0 48.566857 11.702857 85.723429t29.988571 59.977143 46.006857 38.253714 53.686857 22.308571 58.587429 10.313143q-22.820571 20.553143-28.013714 58.88-11.995429 5.705143-25.746286 8.557714t-32.548571 2.852571-37.449143-12.288-31.744-35.693714q-10.825143-18.285714-27.721143-29.696t-28.306286-13.677714l-11.410286-1.682286q-11.995429 0-16.603429 2.56t-2.852571 6.582857 5.12 7.972571 7.460571 6.875429l4.022857 2.852571q12.580571 5.705143 24.868571 21.723429t17.993143 29.110857l5.705143 13.165714q7.460571 21.723429 25.161143 35.108571t38.253714 17.115429 39.716571 4.022857 31.744-1.974857l13.165714-2.267429q0 21.723429 0.292571 50.834286t0.292571 30.866286q0 10.313143-7.460571 17.115429t-22.820571 4.022857q-132.534857-44.032-216.283429-158.573714t-83.748571-257.974857q0-119.442286 58.88-220.306286t159.744-159.744 220.306286-58.88 220.306286 58.88 159.744 159.744 58.88 220.306286z" fill="#f0f0f0"></path>
    </svg>
  </p>
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
    <div class="card_box">
        <span class="precio1"></span>
        <p>-Acceso a tu propio Panel de Control donde podras vestionar y observar tus proyectos. <br><br>
-Capacidad de tener 2 paginas activas al mismo tiempo.<br><br>
-Generacion de codigo QR para cada una de ellas.</p>
    </div>
</div>
<div class="col s12 l4 info aos-init aos-animate" data-aos="fade-up">
    <div class="card_box">
        <span class="precio2"></span>
        <p>-Todo lo anteriormente mencionado del plan Basico.<br><br>
            -Capacidad de tener 1 paginas de presentacion activas al mismo tiempo.<br><br>
            -Una funcionalidad adicianal dentro de tu Panel de Control donde podrá ver estadísticamente el número de vistas de tus proyectos.</p>
    </div>
</div>
<div class="col s12 l4 info aos-init aos-animate" data-aos="fade-left">
    <div class="card_box">
        <span class="precio3"></span>
        <p>-Todo lo anteriormente mencionado del plan Estandar.<br><br>
-Capacidad de tener cualquier tipo de servicio ilimitado y activo al mismo tiempo.<br><br>
-asesoramiento exclusivo con el equipo de desarrollo.</p>
    </div>
</div>
</div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@endsection