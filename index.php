<?php
//seguridad de session
session_start();
error_reporting(0);
$varsession= $_SESSION['usuario'];
if($varsession== null || $varsession== ''){
    header("location:login.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Jquery -->
    <script type="text/javascript" charset="utf8" src="assets\js\jquery-3.5.1.js"></script>

    <!-- Lib DataTables -->
    <link rel="stylesheet" type="text/css" href="assets\lib\datatables\jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="assets\lib\datatables\jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">


</head>
<body>
    <div class="row contenedor-encabezado">
        <div class="col-lg-3 item-encabezado">
            <img class="logo-robot" src="assets/img/robot chat.svg" alt="logo">
        </div>
        <div class="col-lg-9 texto-encabezado">
            <h1>Asistente virtual UG</h2>
            <h4>Panel de Administración</h5>
        </div>
    </div>

    <a class="nav-link btn-logout" href="cerrar_session.php">
        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
        Cerrar Sesión
    </a>

    <div id="ingreso-datos" class="card text-dark bg-light mb-3 ingreso-datos">
        <div class="card-header">Ingreso de datos</div>
    <div class="card-body">
        <form id="task-form" class="row g-3">
            <input type="hidden" id="id-edit">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input id="nombre" type="text" class="form-control form-control-sm"
                        placeholder="Escribe el nombre (Interno)">
                </div>
                <div class="form-group">
                    <div class="d-grid gap-2">
                        <button type="submit" id="btnGuardar"
                            class="btn btn-primary btn-sm btn-guardar">Guardar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Padre</label>
                    <select id="padre" class="form-select form-select-sm form-control" aria-label="Default select example">
                        <option value="0">Ninguno</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Tipo</label>
                    <select id="tipo" class="form-select form-select-sm form-control" aria-label="Default select example">
                        <option value="1">Mensaje</option>
                        <option value="2">Opción</option>
                        <option value="3">Respuesta</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="contenido" class="form-label">Contenido</label>
                    <textarea id="contenido" class="form-control form-control-sm contenido-mensaje"
                        placeholder="Escriba el contenido" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="conector" class="form-label">Conector</label>
                    <textarea id="conector" class="form-control form-control-sm contenido-mensaje"
                        placeholder="Escriba el conector" rows="3"></textarea>
                </div>
            </div>
        </form>
    </div>
    </div>

    <div class="container-fluid p-4">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-12 mt-4  p-2">
                <table id="tb_datos">
                    <thead>
                        <tr>
                            <td scope="col" class="table-secondary">Id</td>
                            <td scope="col" class="table-secondary">Nombre</td>
                            <td scope="col" class="table-secondary">Padre</td>
                            <td scope="col" class="table-secondary">Tipo</td>
                            <td scope="col" class="table-secondary">Contenido</td>
                            <td scope="col" class="table-secondary">Conector</td>
                            <td scope="col" class="table-secondary">Acciones</td>
                        </tr>
                    </thead>
                    <tbody id="datos">

                    </tbody>
                </table>
            </div>



        </div>
    </div>


    <script src="app.js"></script>
</body>

</html>