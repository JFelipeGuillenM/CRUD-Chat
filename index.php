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
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form id="task-form">
                            <input type="hidden" id="id-edit" >
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input id="nombre" type="text" class="form-control form-control-sm" 
                                placeholder="Escribe el nombre (Interno)">
                            </div>
                            <div class="form-group">
                                <label for="contenido" class="form-label">Contenido</label>
                                <textarea id="contenido" class="form-control form-control-sm contenido-mensaje" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Padre</label>
                                <select id="padre" class="form-select form-control" 
                                    aria-label="Default select example">
                                    <option value="0">Ninguno</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tipo</label>
                                <select id = "tipo" class="form-select form-control" 
                                    aria-label="Default select example">
                                    <option value="1">Mensaje</option>
                                    <option value="2">Opción</option>
                                    <option value="3">Respuesta</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="d-grid gap-2">
                                    <button type="submit" id="btnGuardar"class="btn btn-primary btn-sm btn-guardar">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
            <table class="table table-bordered table-sm tabla-preguntas">
                        <thead>
                            <tr>
                                <td scope="col" class="table-secondary">Id</td>
                                <td scope="col" class="table-secondary">Nombre</td>
                                <td scope="col" class="table-secondary">Padre</td>
                                <td scope="col" class="table-secondary">Tipo</td>
                                <td scope="col" class="table-secondary">Contenido</td>
                                <td scope="col" class="table-secondary">Acciones</td>
                            </tr>
                        </thead>
                        <tbody id="datos">

                        </tbody>
                    </table>
            </div>

            <div class="col-md-8">
            <table class="table table-bordered table-sm tabla-preguntas">
                        <thead>
                            <tr>
                                <td scope="col" class="table-secondary">Contenido</td>
                            </tr>
                        </thead>
                        <tbody id="dato">

                        </tbody>
            </table>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>