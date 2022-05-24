<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <img class="logo-universidad" src="assets/img/UGlogo.png">
        <form class="form-login" action="validacion.php" method="post">
            <div class="form-group">
                <label class="label-login">Usuario</label>
                <input type="text" class="form-control form-control-sm" placeholder="usuario" name="usuario">
            </div>
            <div class="form-group">
                <label class="label-login">Contraseña</label>
                <input type="password" class="form-control form-control-sm" placeholder="contraseña" name="contraseña">
            </div>
            <button class="btn-ingresar btn btn-primary" type="submit" id="btn-ingresar">Ingresar</button>
        </form>
    </div>
</body>

</html>