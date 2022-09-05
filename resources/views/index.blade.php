@extends('layout')
@section('head')
<style>
  .container-main{
    height: 80vh;
  }
</style>
@endsection
@section('main')
<div class="wrapper white">
<div class="row who" data-aos="fade-left">
        <div class="col s12 l4">
          <div class="container ">
            <h3>QUIENES SOMOS</h3><hr>
            <p>Somos una asociación de jóvenes programadores y diseñadores capaz de estructurar, diseñar y desarrollar aplicativos webs enfocados para las comunidades de micro empresas, brindándoles servicios de calidad para diferentes tares como publicidad, automatización de procesos internos o externos de sus emprendimientos.</p>
          </div>
        </div>
        <div class="col s12 l8 info">
          <img src="{{url('media/img2.jpg')}}" alt="" class="info-photo">
        </div>
</div>

<div class="row who" data-aos="fade-right">
<div class="col s12 l8 info">
          <img src="{{url('media/img3.jpg')}}" alt="" class="info-photo">
        </div>
        <div class="col s12 l4">
          <div class="container ">
            <h4>QUE OFRECEMOS</h4><hr>
            <p>Estamos enfocados en el desarrollo web, ofreciéndoles a nuestros clientes servicios de calidad con la que podamos brindarles diferentes herramientas para sus emprendimientos o sus propias laborales cotidianas.</p>
          </div>
        </div>
</div>
<div class="row who" data-aos="fade-down">
<div class="col s12 l6 info">
          <img src="{{url('media/img1.jpg')}}" alt="" class="info-photo">
        </div>
        <div class="col s12 l6">
          <div class="container ">
            <h4>NUESTRO SERVICIO</h4><hr>
            <p>Como diseñadores hemos logrado desarrollador diferentes plantillas que te ayudaran a crear tu aplicativo con el cual podrás encontrar en un “amplio” catalogo.</p><br><br><br><br>
            <a class="waves-effect waves-light btn green"><i class="material-icons right">send</i>Mirar Catalogo</a>
          </div>
        </div>
</div>
</div>



  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@endsection