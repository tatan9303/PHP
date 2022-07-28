<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1 ,);
error_reporting(E_ALL);

$aClientes = array ();

session_start();

if (isset($_SESSION["listadoClientes"])){

    $aClientes = $_SESSION ["listadoClientes"];
} else {
    $aClientes = array ();
}

if ($_POST){
    $Nombre = $_REQUEST["txtUsuario"];
    $DNI = $_REQUEST["txtDocumento"];
    $Telefono = $_REQUEST["txtTelefono"];
    $Edad = $_REQUEST["txtEdad"];

    $aClientes [] = array ("nombre" => $Nombre,
                            "dni" => $DNI,
                            "telefono" => $Telefono,
                            "edad" => $Edad
    );

    $_SESSION["listadoClientes"] = $aClientes;

    if (isset($_POST["btnEliminar"])) {
        session_destroy();
        $aClientes = array ();
    }
}

if(isset($_GET["pos"])){
    $pos = $_GET["pos"];
    unset($aClientes[$pos]);
    //Actualizo l avariable de session con el array actualizado
    $_SESSION["listadoClientes"] = $aClientes;
    header("Location: clientes_session.php");
}

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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Listado de Clientes</h1>    
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1 me-5">
                <form action="" method="POST" class="form">

                        <label for="txtUsuario">Nombre:*</label>
                        <input class="form-control my-2" type="form" type="text" name="txtUsuario" id="txtUsuario">

                        <label for="txtDocumento">DNI:*</label>
                        <input class="form-control my-2" type="form" type="text" name="txtDocumento" id="txtDocumento">

                        <label for="txtTelefono">Teléfono:*</label>
                        <input class="form-control my-2" type="form" type="number" name="txtTelefono" id="txtTelefono">

                        <label for="txtEdad">Edad:*</label>
                        <input class="form-control my-2" type="form" type="text" name="txtEdad" id="txtEdad">

                        <button class="btn bg-primary text-white" type="submit" name="btnEnviar">ENVIAR</button>
                        <button class="btn bg-danger text-white" type="submit" name="btnEliminar">Eliminar</button>
                </form>
            </div>
            <div class="col-6 ms-5">
                <table class="table table-hover shadow border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Teléfono</th>
                            <th>Edad</th>
                            <th>Acciones</th>
                        </tr>   
                    </thead>     
                        <tbody>
                            <?php foreach ($aClientes as $pos => $cliente):?>
                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["edad"]; ?></td>
                                <td><a href="clientes_session.php?pos=<?php echo $pos; ?>"> <i class="bi bi-trash"></i></a></td>
                            </tr>
                                <?php endforeach; ?>
                        </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>