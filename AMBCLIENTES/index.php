<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Preguntar si existe el archivo

if (file_exists("archivo.txt")) {
    //Vamos a leerlo y almacenamos el contenido en jsonClientes
    $jsonClientes = file_get_contents("archivo.txt");

    //Converti jsonClientes en un array llamado aClientes
    $aClientes =json_decode ($jsonClientes, true);

} else {
    //Si no existe el archivo
        //Creamos un aClientes inicializando como un array vacio
        $aClientes = array ();
}

if ($_POST) {
    $documento= trim($_POST ["txtDni"]);
    $nombre= trim($_POST ["txtNombre"]);
    $telefono= trim($_POST ["txtTelefono"]);
    $correo= trim($_POST ["txtCorreo"]);
    

    $aClientes [] = array ("documento" => $documento,
                         "nombre" => $nombre,
                         "telefono" => $telefono,
                         "correo" => $correo,);

    //Convertir el array de clientes a jsonClientes
    $jsonClientes =json_encode($aClientes);


    //Almacenar el string jsonClientes en el "archivo.txt"
    file_put_contents ("archivo.txt",$jsonClientes); 

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Clientes</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div>
                        <label for="">DNI:*</label>
                        <input type="text" name="txtDni" id="txtDni" class="shadow form-control" required value="">
                    </div>
                    <div>
                        <label for="">Nombre:*</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="shadow form-control" required value="">
                    </div>
                    <div>
                        <label for="">Teléfono:*</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="shadow form-control" required value="">
                    </div>
                    <div>
                        <label for="">Correo:*</label>
                        <input type="text" name="txtCorreo" id="txtCorreo" class="shadow form-control" required value="">
                    </div>
                    <div>
                        <label for="" class="py-3">Archivo adjunto</label>
                        <input type="file" name="archivo" id="archivo" accept=".jpg, .jpeg, .png">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="index.php" class="btn btn-danger my-2">NUEVO</a>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover border">
                    <tr>
                        <th>Imagen</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                        <?php foreach ($aClientes as $cliente): ?>
                        <tr>
                            <td></td>
                            <td><?php echo $cliente ["documento"]; ?></td>
                            <td><?php echo $cliente ["nombre"]; ?></td>
                            <td><?php echo $cliente ["correo"]; ?></td>
                            <td>
                                <a href=""></a><i class="bi bi-pencil"></i></a>
                                <a href=""><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                </table>
            </div>    
        </div>
    </main>
</body>
</html>