<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array ();
$aPacientes [] = array (
    "dni" => "11.222.333",
    "nombre" => "Jorge Cardenas",
    "edad" => 45,
    "peso" => 81.50
);
$aPacientes [] = array (
    "dni" => "11.222.444",
    "nombre" => "Ana Perez",
    "edad" => 65,
    "peso" => 55
);
$aPacientes [] = array (
    "dni" => "11.222.666",
    "nombre" => "Miguel Rodriguez",
    "edad" => 34,
    "peso" => 66
);
$aPacientes [] = array (
    "dni" => "11.222.777",
    "nombre" => "Camilo Garzón",
    "edad" => 40,
    "peso" =>55
);
$aPacientes [] = array(
    "dni" => "11.222.888",
    "nombre" => "Martin Ariztisabal",
    "edad" => 23,
    "peso" => 43
);
$aPacientes [] = array(
    "dni" => "11.222.999",
    "nombre" => "Carlos Amaya",
    "edad" => 34,
    "peso" => 49
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1 class="py-5">Listado de Pacientes</h1>
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre y Apellido</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aPacientes as $paciente) { ?>
                            <tr>
                                <td><?php echo $paciente["dni"]?></td>
                                <td><?php echo $paciente["nombre"]?></td>
                                <td><?php echo $paciente["edad"]?></td>
                                <td><?php echo $paciente["peso"]?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
<!-- PHP con un foreach -->
            </div>
        </div>
    </main>
    
</body>
</html>