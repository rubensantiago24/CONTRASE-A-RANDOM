<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/login.css" rel="stylesheet">
    <link href="css/botones.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>

<div class="contenedor">
    <form action="ingreso.php" method="POST">
    <a class="titulo">INICIAR SESION.</a>
    <div class="caja">
      <input autocomplete="off" type="text" class="input" name="documento" placeholder="DOCUMENTO">
    </div>
    <div class="caja">
      <input autocomplete="off" type="password" class="input" name="clave" placeholder="CLAVE">
    </div>
    <div class="centrado-btn">
      <input class="btn btn-primary" type="submit"  value="INGRESAR">
    </div>
    <div class="">
    <p>¿No estas registrado?, presiona aquí <a href="registro">Registrarse.</a></p>
    </div>
    </form>
</div>

</body>
</html>