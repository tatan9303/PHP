<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1 ,);
error_reporting(E_ALL);

if($_POST) {
    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if ($usuario != "" && $clave != ""){
        header("Location: acceso-confirmado.php");
    } else {
        $msg = "Válido para usuarios registrados";
    }
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <header>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <?php if (isset($msg)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $msg;?>
                    </div>
                <?php endif; ?>
                <form action="" method="POST">
                    
                    <div class="py-3">
                        <label for="txtUsuario">Usuario: </label>
                        <input class="form-control" type="form" type="text" name="txtUsuario" id="txtUsuario">
                    </div>
                    <div class="py-3">
                        <label for="txtClave">Clave: </label>
                        <input class="form-control" type="password" name="txtClave" id="txtClave">
                    </div>
                    <div class="py-3">
                        <button class="btn btn-primary" type="submit">Ingresar</button>
                    </div>
                </form>
            </div>    
        </div>        
    </div>
</body>
</html>