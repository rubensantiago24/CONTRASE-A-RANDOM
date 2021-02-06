<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/login.css" rel="stylesheet">
    <link href="css/botones.css" rel="stylesheet">
    <title>Registrate</title>
</head>
<body>

<div class="contenedor">
    <form action="registrar.php" method="POST">
    <a class="titulo">REGISTRATE.</a>
    <div class="caja">
      <input autocomplete="off" type="text" class="input" name="documento" placeholder="DOCUMENTO">
    </div>
    <div class="caja">
      <input autocomplete="off" type="text" class="input" name="nombre" placeholder="NOMBRE">
    </div>
    <div class="caja">
      <input autocomplete="off" type="text" class="input" name="apellido" placeholder="APELLIDO">
    </div>
    <div class="caja">
      <input autocomplete="off" type="password" class="input" name="clave" placeholder="CLAVE">
    </div>
    <div class="caja">
      <input autocomplete="off" type="password" class="input" name="codigo" placeholder="CODIGO">
    </div>
    <div class="centrado-btn">
      <input class="btn btn-primary" type="submit"  value="REGISTRAR.">
    </div>
    <div class="">
    <p>Ya estas registrado?, presiona aquí <a href="index">Login.</a></p>
    </div>
    </form>
</div>

</body>
</html>