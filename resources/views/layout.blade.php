<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Hogmions</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="icon" href="{{url('media/img1.jpg')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="{{url('css/index.css')}}">
@yield('head')
</head>
<body>
  <div class="container-fluid container-main">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="{{route('index')}}">
        <button>
            <span></span>
            <span></span>
            <span></span>
            <span></span>Inicio
          </button>
        </a></li>
        @if (Route::is('register'))
        <li><a id="len2" class="hoverable bounce" href="{{route('login')}}">
        <button>
            <span></span>
            <span></span>
            <span></span>
            <span></span> Ingresa
          </button>
        </a></li>
        @else
        <li><a href="{{route('register')}}">
        <button>
            <span></span>
            <span></span>
            <span></span>
            <span></span> Comienza
          </button>
        </a></li>
        @endif
        <li><a href="{{route('catalogue')}}">
        <button>
            <span></span>
            <span></span>
            <span></span>
            <span></span> Catalogo
          </button>
        </a></li>
      </ul>
    </div>
  </nav>
  <div class="opacity-main">
  </div>
</div>
@yield('main')

<footer class="page-footer">
            <div class="row">
              <div class="col l12 s12">
                <h5>Contactanos</h5>
    <form class="col s12 l9">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="name" type="text" class="validate" name="name">
          <label for="name">Dime tu Nombre</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Correo Electronico</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">edit</i>
          <textarea id="observation" class="materialize-textarea" name="observation"></textarea>
          <label for="observation">Dejanos tu comentario</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light green" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
    </form>
              <div class="col l3 s12">
                <h5 class="white-text">Redes Sociales</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Ninguna por el momento</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2022 Quick Sentry- Milton Stiven Gonzalez Pinzon
            </div>
          </div>
        </footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
  </script>
      <script id="rendered-js" >
$(function () {
  var str = '#len'; //increment by 1 up to 1-nelemnts
  $(document).ready(function () {
    var i, stop;
    i = 1;
    stop = 4; //num elements
    setInterval(function () {
      if (i > stop) {
        return;
      }
      $('#len' + i++).toggleClass('bounce');
    }, 500);
  });
});
//# sourceURL=pen.js
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
 
