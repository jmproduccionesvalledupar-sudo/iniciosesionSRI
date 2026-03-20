<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

     body {
    background-image: url("fondoInicio.jpg"); 
    background-size: cover;      
    background-position: center; 
    background-repeat: no-repeat;
    background-attachment: fixed; 

    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

        .container {
            display: flex;
            width: 900px;
            height: 420px;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .login-section {
            width: 40%;
            background-color: #edefed;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            position: relative;
        }

        .login-section h2 {
            margin-top: 8px;
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #1c1c1c;
        }

        .login-section input,
        .login-section select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 6px;
            border: 1px solid #888787;
            outline: none;
            font-size: 15px;
        }

        .login-section label {
          display: block;
         margin-top: 2px;
        }

        .checkbox-container {
           display: flex;
         align-items: center;
         justify-content: flex-start;
         gap: 6px; 
         margin-top: 8px;
         align-self: flex-start;
        }

          .checkbox-container input {
          margin: 0;
          width: auto; 
        }

         .checkbox-container label {
          font-size: 13px;
         cursor: pointer;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 10px;
        }

        .buttons button {
            padding: 8px 18px;
            border: none;
            border-radius: 6px;
            background-color: #056a8b;
            color: white;
            cursor: pointer;
            font-size: 13px;
            transition: 0.3s;
        }

        .buttons button:hover {
            background-color: #67746c;
        }

        .forgot {
            margin-top: 20px;
            font-size: 13px;
            color: #002480;
            text-decoration: none;
            align-self: flex-start;
        }

        .forgot:hover {
            text-decoration: underline;
        }

        .welcome-section {
            width: 60%;
            background: #171D28;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            padding: 80px;
        }

        .welcome-section img {
            width: 300px;
            height: 135px;
        }

        .welcome-section p {
            font-size: 25px;
            letter-spacing: 1px;
            color: #90e7f3;
            padding: 8px;
        }

        .welcome-section h1 {
            margin-top: 10px;
            font-size: 12px;
            letter-spacing: 2px;
            color: #c9c3c3;
        }

        .icons {
            position: absolute;
            bottom: 25px;
            right: 40px;
            display: flex;
            gap: 25px;
        }

        .icons img {
            width: 35px;
            height: 35px;
            cursor: pointer;
            transition: transform 0.1s;
        }

        .icons img:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="login-section">
            <h2>Ingresar</h2>

            <?php
            if (isset($_GET['error'])) {
            if ($_GET['error'] == "datos_incorrectos") {
            echo "<p style='color:red;'>Usuario o contraseña incorrectos</p>";
            }
            if ($_GET['error'] == "sin_permiso") {
            echo "<p style='color:red;'>No tienes permiso para acceder (Operador)</p>";
           }
           if ($_GET['error'] == "rol_incorrecto") {
           echo "<p style='color:red;'>No tienes permiso para acceder a la sección administrador</p>";
           }
           }

           ?>

            <form action="validar.php" method="POST" style="width:100%;">

    <input type="text" name="usuario" placeholder="Ingresar usuario" required>

    <input type="password" name="password" id="password" placeholder="Ingresar contraseña" required>

    <div class="checkbox-container">
        <input type="checkbox" id="mostrar" onclick="togglePassword()">
        <label for="mostrar">Mostrar contraseña</label>
     </div>

     <label for="rol" style="align-self:flex-start; margin-top:10px;">Rol</label>

     <select id="rol" name="rol" required>
        <option value="">Seleccionar</option>
        <option value="Administrador">Administrador</option>
        <option value="Operador">Operador</option>
     </select>

     <div class="buttons">
        <button type="submit">INGRESAR</button>
        <button type="reset">CANCELAR</button>
     </div>

          </form>

            <a href="#" class="forgot">¿Olvidó su contraseña?</a>
        </div>

        <div class="welcome-section">
            <p>Bienvenido(a)</p>
            <a href="logosri.png" target="_blank">
                <img src="logosri.png" alt="logo">
            </a>

            <div class="icons">
             
                <h1>Para servicio técnico, consultas o información:</h1>

                <a href="mailto:jeffersonmarbellogonzalez@gmail.com" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Correo">
                </a>

                <a href="https://wa.me/573015371851" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
                </a>
          

            </div>
        </div>

    </div>

    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            x.type = x.type === "password" ? "text" : "password";
        }
    </script>

</body>
</html>