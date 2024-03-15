<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/diseño_web/style1.css')}}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css' rel='stylesheet'>
    <title>Registro don cristobal</title>
    
</head>
<body>
    <div class="main-parent">
        <div class="form-wrap">
            <form action="">
                <h1><span>REGISTRAR USUARIO</span></h1>
                <div class="single-input">
                </div>
                <div class="single-input">
                    <input  required type="text" id="Pname" placeholder="Primer nombre" >
                </div>
                <div class="single-input">
                    <input type="text" id="Sname" placeholder="segundo nombre">
                </div>
                <div class="single-input">
                    <input required type="text"  id="Lname" placeholder="primer apellido"  >
                </div>
                <div class="single-input">
                    <input  required type="text" id="Aname" placeholder="segundo apellido">
                </div>
                <div class="single-input">
                    <input id="correo electronico" type="email" size="64" maxLength="64" required placeholder="correo electronico" pattern=".+@gmail\.com">
                </div>
                <div class="single-input">
                    <input required type="password" id="creacionPw" placeholder="contraseña"  minlength="8" pattern="[0-9]+">
                     
                </div>
                <div class="single-input">
                    <input required type="password" id="confirmacionPw" placeholder="confirme contraseña"minlength="8" pattern="[0-9]+">
                    <i class='fas fa-eye-slash' ></i>
                </div>
               
                <div class="submit-button">
                    <button class="button "><a href="diseño web/iniciosesion.html">Enviar</a></button>
                </div>
                <div class="account-have">
                    <a href="diseño web/recuperar.html">Has olvidado tu contraseña?</a>
                    <a href="diseño web/iniciosesion.html"> iniciar sesión</a>
                </div>
            </form>
        </div>
    </div>
    <script src="index1.js"></script>
    <script src="sweetalert.js"></script>
    <script src="validacion.js"></script>
</body>
</html>