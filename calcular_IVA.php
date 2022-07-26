<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 19;
$precioSinIva = 0;
$precioConIva = 0;
$ivaCantidad = 0;

if ($_POST) {
    $iva = $_POST["lstIva"];
    $precioSinIva = ($_POST ["txtPrecioSinIva"]) > 0 ? $_POST["txtPrecioSinIva"] : 0;
    $precioConIva = ($_POST ["txtPrecioConIva"]) > 0 ? $_POST["txtPrecioConIva"] : 0; 

    if($precioSinIva > 0) {
        $precioConIva = $precioSinIva * ($iva/100+1);
    }

    if($precioConIva > 0) {
        $precioSinIva = $precioConIva / ($iva/100+1);
    }


    $ivaCantidad = $precioConIva - $precioSinIva;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IVA</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-2">
                <form method="POST">
                    <div class="pb-3">
                        <label for="">IVA</label>
                            <select name="lstIva" id="lstIva" class="form-control">
                                <option value="19">19</option>
                            </select>
                    </div>
                    <div class="pb-3">
                        <label for="">Precio sin IVA:</label>
                            <input type="text" name="txtPrecioSinIva" id="txtPrecioSinIva" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Precio con IVA</label>
                        <input type="text" name="txtPrecioConIva" id="txtPrecioConIva" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">CALCULAR</button>
                    </div>
                </form>
            </div>
            <div class="col-5 col-sm-4 my-3">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA</th>
                        <td><?php echo $iva; ?>%</td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA</th>
                        <td><?php echo $precioSinIva; ?></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA</th>
                        <td><?php echo $precioConIva; ?></td>
                    </tr>
                    <tr>
                        <th>Cantidad de IVA</th>
                        <td><?php echo $ivaCantidad; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>