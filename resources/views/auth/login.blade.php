<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/diseño_web/style1.css')}}">
    <link rel="stylesheet" href="{{ asset('css/diseño_web/inicio.css')}}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css' rel='stylesheet'>   
    <title>Inicio sesion don cristobal</title>
    <header class="header">
        <div class="menu container">
         <img class="logos" src="{{ URL::asset('css/diseño_web/imagen/logo.png') }}" >
         <a href="a" class="logo">Don Cristobal</a>

            <input type="checkbox" id="menu" />
            <nav class="navbar">
                   <ul>
                   @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" >Iniciar Sesión</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Registro</a></li>
                        @endif
                    @endauth
            @endif
                   </ul>
               </nav>
        </div>

    </div>
</head>

<body>
    <div class="main-parent">
        <div class="form-wrap">
        <form method="POST" action="{{ route('login') }}">
            @csrf
                <h1><span>Inicio Sesion</span></h1>
                <div class="single-input">
                </div>

                <div class="single-input">
                   <input id="email"  type="email" name="email" placeholder="correo" required autofocus autocomplete="username" />
                   <input-error :messages="$errors->get('email')"/>
                </div>

                <div class="single-input">       
                    <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="contraseña"
                            required autocomplete="current-password" />
                    <input-error :messages="$errors->get('password')"/>                
                    <i class='fas fa-eye-slash' ></i>
                </div>                                          
                
                <div class="submit-button">
                  <button class="button" type="submit">Enviar</button>
                </div>
                
                <div class="account-have">
                     
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                           {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif

                    <a href="{{ route('register') }}">Registrarse</a>

                </div>
            </form>
        </div>
    </div> 
    
</body>

</html>