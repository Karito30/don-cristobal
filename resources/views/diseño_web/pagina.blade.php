<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/diseño_web/styles.css') }}">
</head>
<body>
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
    
    <div class="carousel-container">
        <div class="carousel-item">
            <img src="{{ URL::asset('css/diseño_web/imagen/aguardiente.png') }}" alt="Imagen 1">
            <p>AGUARDIENTE</p>
            <p>Precio: $46.300</p>
        </div>
        <div class="carousel-item">
            <img src="{{ URL::asset('css/diseño_web/imagen/brandy.png') }}" alt="Imagen 2">
            <p>BRANDY</p>
            <p>Precio: $41.300</p>
        </div>
        <div class="carousel-item">
            <img src="{{ URL::asset('css/diseño_web/imagen/coñag.png') }}" alt="Imagen 3">
            <p>COÑAG</p>
            <p>Precio: $355.000</p>
        </div>
        <div class="carousel-item">
            <img src="{{ URL::asset('css/diseño_web/imagen/ron.png') }}" alt="Imagen 4">
            <p>RON</p>
            <p>Precio: $50.900</p>
        </div>
        <div class="carousel-item">
            <img src="{{ URL::asset('css/diseño_web/imagen/tequila.png') }}" alt="Imagen 5">
            <p>TEQUILA</p>
            <p>Precio: $89.900</p>
        </div>
        <div class="carousel-item">
            <img src="{{ URL::asset('css/diseño_web/imagen/vodka.png') }}" alt="Imagen 6">
            <p>VODKA</p>
            <p>Precio: $92.600</p>
        </div>
        <div class="carousel-item">
            <img src="{{ URL::asset('css/diseño_web/imagen/whisky.png') }}" alt="Imagen 7">
            <p>WHISKY</p>
            <p>Precio: $39.000</p>
        </div>
        <!-- Agrega más elementos para las otras imágenes -->
    </div>
    <footer>
        <div class="footer-row">
          <p>&copy; 2023 Don Cristobal</p>
          <p>Dirección: Cl. 38 Sur #73f-18</p>
          <p>Teléfono: 123-456-789</p>
        </div>
        <div class="footer-row">
          <p>Creado Por:</p>
          <p>Paula Gomez</p>
          <p>Karen Cortes</p>
          <p>Mariana Castellanos</p>
          <p>Karol Ovalle</p>
        </div>
      </footer>
      
      
    <script>
        let currentImage = 0;
        const images = document.querySelectorAll('.carousel-container .carousel-item');
        const totalImages = images.length;

        function nextImage() {
            images[currentImage].style.display = 'none';
            currentImage = (currentImage + 1) % totalImages;
            images[currentImage].style.display = 'block';
        }

        setInterval(nextImage, 1000); // Cambia la imagen cada 3 segundos
    </script>
    
</body>
</html>
