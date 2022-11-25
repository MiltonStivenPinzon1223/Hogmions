<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registrate - Quick Sentry</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"/>
        <link rel="stylesheet" href="{{url('css/register.css')}}">
    </head>
    <body>
            <div class="frame">
                <div class="nav">
                    <ul class="links">
                        <li class="signin-active">
                            <a class="btn">Iniciar Sesion</a>
                        </li>
                        <li class="signup-inactive">
                            <a class="btn">Registrarse</a>
                        </li>
                    </ul>
                </div>
                <div class="row" data-aos="fade-down">
                    <div class="col-sm-6">
                        <div ng-app ng-init="checked = false">
                            <form class="form-signin" method="POST" action="{{ route('homes.store') }}">
                                @csrf
                                <div class="inputbox">
                                    <input required="required" type="text" name="name">
                                    <span>Usuario</span>
                                    <i></i>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="inputbox">
                                    <input required="required" type="password">
                                    <span>Contraseña</span>
                                    <i></i>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="cssbuttons-io-button">Iniciar Sesion
                                    <div class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
                                    </div>
                                </button>
                            </form>
                            <form class="form-signup" action="" method="post" name="form">
                                <div class="inputbox">
                                    <input required="required" type="text">
                                    <span>Crea Un Usuario</span>
                                    <i></i>
                                </div>
                                <div class="inputbox">
                                    <input required="required" type="text">
                                    <span>Ingresa tu Email</span>
                                    <i></i>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="inputbox">
                                    <input required="required" type="text">
                                    <span>Crea una Contraseña</span>
                                    <i></i>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="cssbuttons-io-button">Registrate!
                                    <div class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 fondo"></div>
                </div>
                <div class="forgot"><a href="#">Forgot your password?</a></div>
                <div>
                    <div class="cover-photo"></div>
                    <div class="profile-photo"></div>
                    <h1 class="welcome">Welcome,User</h1>
                    <a class="btn-goback" value="Refresh" onClick="history.go()"
                        >Go back</a
                    >
            </div>
            <a id="refresh" value="Refresh" onClick="history.go()">
                <svg class="refreshicon" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background: new 0 0 322.447 322.447" xml:space="preserve">
                <path d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224 c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5 c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5 c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025 c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614 l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z" />
                </svg>
            </a>
        </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{url('js/register.js')}}"></script>
    </body>
</html>
