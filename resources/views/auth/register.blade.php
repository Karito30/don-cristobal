<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/diseño_web/style1.css')}}">
    <link rel="stylesheet" href="{{ asset('css/diseño_web/inicio.css')}}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css' rel='stylesheet'>
    <title>Registro don cristobal</title>
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

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1>Registro de usuario</h1>
        <!-- Name -->
        <div class="single-input">
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="single-input">
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="single-input">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="single-input">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}">
                {{ __('Ya estas registrado?') }}
            </a>

            <div class="submit-button">
            <button class="button">
                {{ __('registrar') }}
            </button>
            </div>
        </div>
    </form>
        </div>
    </div>

</body>
</html>