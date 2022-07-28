<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array ();
$aEmpleados [] = array ("dni"=>3330001123, "nombre"=>"David García","bruto"=>85000.30);
$aEmpleados [] = array ("dni"=>1231231231, "nombre"=>"Arturo Valdivieso","bruto"=>90000);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1 class="py-5">Empleados</h1>
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php for ($i=0; $i <count($aEmpleados);$i++){ ?>
                                <tr>
                                    <td><?php echo $aEmpleados[$i]["dni"];?></td>
                                    <td><?php echo mb_strtoupper($aEmpleados[$i]["nombre"]);?></td>
                                    <td><?php echo round($aEmpleados[$i]["bruto"] - ($aEmpleados[$i]["bruto"]*0.17),2);?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                </table>       
            </div>
        </div>
    </main>
    
</body>
</html>