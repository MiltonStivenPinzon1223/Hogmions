@extends('layout')
@section('head')
<style>
  .container-main{
    height: 80vh;
  }
</style>
@endsection
@section('main')
  <div class="content">
    <div class="site-blocks-cover">
      <div class="img-wrap">
        <div id="owl-demo" class="owl-carousel slide-one-item hero-slider slide">
          <div class="slide">
            <img src="{{url('media/hero_1.jpg')}}">  
          </div>
          <div class="slide">
            <img src="{{url('media/hero_2.jpg')}}">  
          </div>
          <div class="slide">
            <img src="{{url('media/hero_3.jpg')}}">  
          </div>
        </div>
      </div>
      <div class="">
        <div class="row">
            <div class="intro">
              <div class="heading ">
                <h1 class="text-white font-weight-bold">Quick Sentry</h1>
              </div>
              <div class="text sub-text">
                <p>Tu herramienta de almacenamiento y generador de QR's para tus necesidades</p>
                <a href="{{route('login-google')}}" class=""><button> INICIA AHORA</button></a>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="wrapper white">
      <div class="row" data-aos="fade-left">
              <div class="col s12 l6">
                <div class=" ">
                  <h3>¿Qué es?</h3><hr>
                  <p>Es aplicativo web el cual nos permite general códigos QRs de manera sencilla y eficaz, teniendo un panel de control donde podremos monitoriar la frecuencia de la utilización de estos QRs. Esto con el fin de mostrarle al usuario de manera estadística el crecimiento o caída de la popularidad de sus proyectos, para asi ellos puedan tomar decisiones a partir de estos datos.</p>
                </div>
              </div>
              <div class="col s12 l6 info">
                <img src="{{url('media/img4.jpg')}}" alt="" class="info-photo info-photo-left">
              </div>
      </div>
      
      <div class="row" data-aos="fade-right">
      <div class="col s12 l6 info">
                <img src="{{url('media/img2.jpg')}}" alt="" class="info-photo info-photo-right">
              </div>
              <div class="col s12 l6">
                <div class="container ">
                  <h4>QUE OFRECEMOS</h4><hr>
                  <p>Estamos enfocados en el desarrollo web, ofreciéndoles a nuestros clientes servicios de calidad con la que podamos brindarles diferentes herramientas para sus emprendimientos o sus propias laborales cotidianas.</p>
                </div>
              </div>
      </div>
      <div class="row" data-aos="fade-down">
              <div class="col s12 l6">
                <div class="container ">
                  <h4>NUESTRO SERVICIO</h4><hr>
                  <p>Como diseñadores hemos logrado desarrollador diferentes plantillas que te ayudaran a crear tu aplicativo con el cual podrás encontrar en un “amplio” catalogo.</p><br><br><br><br>
                  <a class="waves-effect waves-light btn green"><i class="material-icons right">send</i>Mirar Catalogo</a>
                </div>
              </div>
              <div class="col s12 l6 info">
                <img src="{{url('media/img3.jpg')}}" alt="" class="info-photo info-photo-left">
              </div>
      </div>
      </div>
  </div>
    <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
@endsection