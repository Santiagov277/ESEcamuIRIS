<?php

  session_start();

  // isset verifica si existe una variable o eso creo xd
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>iniciar sesion</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css "href="assets/css/style.css">
    <link rel="stylesheet" type="text/css "href="assets/css/css/all.min.css">
    <link rel="stylesheet" href="assets/css/sweetalert.css">
	<link rel="icon" href="assets/img/logo.png" type="image/x-icon"/>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
   <!--  <img class="wave"src="../assets/img/wave.png" alt="">  -->
    <div class="contenedor">
    <div class="img">
    <img src="assets/img/bg.svg" alt="">
    </div>
    <div class="contenido-login">

    <form action="#" autocomplete="off">

    <img src="assets/img/logoY.png" alt="">
    <h2>Iniciar sesion</h2>
    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="email"  id="user"  required placeholder="CORREO O USUARIOS">
    </div>
    </div>
    <div class="input-div pass">
    <div class="i">
    <i class="fas fa-lock"></i>
    </div>
    <div class="div">

    <input type="password" placeholder="CONTRASEÑA"  id="clave" required >
    </div>
    </div>
    <div class="row" id="load" hidden="hidden">
      <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
        <img src="assets/img/load.gif" width="100%" alt="">
      </div>
      <div class="col-xs-12 center text-accent">
        <span>Validando información...</span>
      </div>
        </div>
   
    <input type="button" class="btn" name="button" id="login" value="Iniciar sesion">
    <input type="button" class="btn" name="button" id="login" value="Registrarse">
	
    </form>

    </div>
    </div>
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="assets/js/operaciones.js"></script>
	
</body>

</html>
