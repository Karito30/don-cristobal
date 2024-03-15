<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/diseño_web/style1.css')}}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css' rel='stylesheet'>
    <title>Registro don Cristobal</title>
</head>
<body>
    <div class="main-parent">
        <div class="form-wrap">
            <form action="" id="registrationForm" onsubmit="return validateForm()">
                <h1><span>REGISTRAR USUARIO</span></h1>
                <div class="single-input">
                </div>
                <div class="single-input">
                    <input required type="text" id="Pname" placeholder="Primer nombre">
                </div>
                <div class="single-input">
                    <input type="text" id="Sname" placeholder="Segundo nombre">
                </div>
                <div class="single-input">
                    <input required type="text" id="Lname" placeholder="Primer apellido">
                </div>
                <div class="single-input">
                    <input required type="text" id="Aname" placeholder="Segundo apellido">
                </div>
                <div class="single-input">
                    <input required type="email" id="email" size="64" maxLength="64" placeholder="Correo electrónico" pattern=".+@gmail\.com">
                </div>
                <div class="single-input">
                    <input required type="password" id="creacionPw" placeholder="Contraseña" minlength="8" pattern="[0-9]+" oninput="validatePassword()">
                </div>
                <div class="single-input">
                    <input required type="password" id="confirmacionPw" placeholder="Confirmar contraseña" minlength="8" pattern="[0-9]+" oninput="validatePassword()">
                    <i class='fas fa-eye-slash'></i>
                </div>
                <div class="submit-button">
                    <button class="button" type="submit">Enviar</button>
                </div>
                <div class="account-have">
                    <a href="diseño web/recuperar.html">¿Has olvidado tu contraseña?</a>
                    <a href="diseño web/iniciosesion.html">Iniciar sesión</a>
                </div>
            </form>
        </div>
    </div>
    <script src="index1.js"></script>
    <script src="sweetalert.js"></script>
    <script src="validacion.js"></script>
    
    <script>
        function validateForm() {
    const password = document.getElementById("creacionPw").value;
    const confirmPassword = document.getElementById("confirmacionPw").value;

    if (password !== confirmPassword) {
        alert("Las contraseñas no coinciden");
        return false; // Evita el envío del formulario
    }

    return true; // Permite el envío del formulario si todas las validaciones pasan
}

function validatePassword() {
    const passwordInput = document.getElementById("creacionPw");
    const confirmPasswordInput = document.getElementById("confirmacionPw");

    if (passwordInput.value.includes(" ")) {
        passwordInput.setCustomValidity("La contraseña no puede contener espacios");
    } else {
        passwordInput.setCustomValidity(""); // Restablece el mensaje de error personalizado
    }

    if (confirmPasswordInput.value.includes(" ")) {
        confirmPasswordInput.setCustomValidity("La contraseña no puede contener espacios");
    } else {
        confirmPasswordInput.setCustomValidity(""); // Restablece el mensaje de error personalizado
    }
}

    </script>
</body>
</html>
