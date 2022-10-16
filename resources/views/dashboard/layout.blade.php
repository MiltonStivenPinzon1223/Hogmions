<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('MaterialDashboard/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{url('MaterialDashboard/assets/img/favicon.png')}}">
  <title>
    Quick Sentry - @yield('name')
  </title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="{{url('MaterialDashboard/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{url('MaterialDashboard/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js')}}" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="{{url('MaterialDashboard/assets/css/material-dashboard.css')}}?v=3.0.4" rel="stylesheet" />
  <link id="pagestyle" href="{{url('css/home.css')}}?v=3.0.4" rel="stylesheet" />
</head>
<body class="g-sidenav-show  bg-gray-200 dark-version">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start   bg-gradient-dark" id="sidenav-main">
<div class="sidenav-header">
  <i class="fas fa-times cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
    <img src="{{url('MaterialDashboard/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold text-white">Quick Sentry</span>
  </a>
</div>
<hr class="horizontal light mt-0 mb-2">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-white active bg-gradient-primary" href="../pages/dashboard.html">
      <button data-text="Awesome" class="button" id="button1">
          <span class="actual-text">&nbsp;Inicio&nbsp;</span>
          <span class="hover-text" aria-hidden="true">&nbsp;Inicio&nbsp;</span>
      </button>
      </a>
    </li>
    <li class="nav-item">
      <div class="nav-link dropdown">
        <button data-text="Awesome" class="button" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="actual-text">&nbsp;Mis Proyectos&nbsp;</span>
                    <span class="hover-text" aria-hidden="true">&nbsp;Mis Proyectos&nbsp;</span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="button2">
          @yield('projects')
        </ul>
      </div>
    </li>
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="../pages/profile.html">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">person</i>
        </div>
        <span class="nav-link-text ms-1">Mi Perfil</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="../pages/sign-in.html">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">login</i>
        </div>
        <span class="nav-link-text ms-1">Cerrar Sesion</span>
      </a>
    </li>
  </ul>
</div>
</aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder mb-0">Bienvennido @yield('name')</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <div class="dropdown">
            <button class="btn bg-gradient-primary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons">settings</i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    @yield('content')
    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              creada <i class="fa fa-heart"></i> por
              <a href="" class="font-weight-bold" target="_blank">Milton Stiven Gonzalez Pinzon</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </main>
  <div class="fixed-plugin">
    <i class="material-icons">face
      <a href="javascript:;" class="fixed-plugin-button text-dark position-fixed px-3 py-2" id="iconNavbarSidenav">
        <div class="sidenav-toggler-inner">
          <i class="sidenav-toggler-line"></i>
          <i class="sidenav-toggler-line"></i>
          <i class="sidenav-toggler-line"></i>
        </div>
      </a>
    </i>
  </div>
<!--   Core JS Files   -->
<script src="{{url('MaterialDashboard/assets/js/core/popper.min.js')}}"></script>
<script src="{{url('MaterialDashboard/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{url('MaterialDashboard/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{url('MaterialDashboard/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{url('MaterialDashboard/assets/js/plugins/chartjs.min.js')}}"></script>
<script src="{{url('MaterialDashboard/assets/js/extra-final.js')}}"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{url('MaterialDashboard/assets/js/material-dashboard.min.js')}}?v=3.0.4"></script>
</body>

</html>