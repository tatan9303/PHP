<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1 ,);
error_reporting(E_ALL);



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de datos personales</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h1>Formulario de datos personales</h1>    
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="resultado.php" method="POST">
                    <div class="py-3">
                        <label for="txtUsuario">Nombre:*</label>
                        <input class="form-control" type="form" type="text" name="txtUsuario" id="txtUsuario">
                    </div>
                    <div class="py-3">
                        <label for="txtDocumento">DNI:*</label>
                        <input class="form-control" type="form" type="text" name="txtDocumento" id="txtDocumento">
                    </div>
                    <div class="py-3">
                        <label for="txtTelefono">Teléfono:*</label>
                        <input class="form-control" type="form" type="number" name="txtTelefono" id="txtTelefono">
                    </div>
                    <div class="py-3">
                        <label for="txtEdad">Edad:*</label>
                        <input class="form-control" type="form" type="text" name="txtEdad" id="txtEdad">
                    </div>
                    <div class="py-3">
                        <button class="btn btn-primary float-end" type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>    
    </main>
</body>
</html>