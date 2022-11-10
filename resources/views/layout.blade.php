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
<link rel="stylesheet" href="{{url('css/carousel.css')}}">
@yield('head')
</head>
<body>
@yield('main')


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
 
