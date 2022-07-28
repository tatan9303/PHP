<?php
$aAlumnos = array ();
$aAlumnos [] = array (
    "Alumno" => "Ana Valle",
    "Nota1" => 7,
    "Nota2" => 8,
);
$aAlumnos [] = array (
    "Alumno" => "Bernabe Paz",
    "Nota1" => 5,
    "Nota2" => 7,
);
$aAlumnos [] = array (
    "Alumno" => "Mónica Ledesma",
    "Nota1" => 8,
    "Nota2" => 9,
);
$aAlumnos [] = array (
    "Alumno" => "Sebastián Aguirre",
    "Nota1" => 6,
    "Nota2" => 9,
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Actas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Promedio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aAlumnos as $aAlumno) { ?>
                        <tr>
                            <td> <?php echo $aAlumno["Alumno"]; ?></td>
                            <td> <?php echo $aAlumno["Nota1"]; ?></td>
                            <td> <?php echo $aAlumno["Nota2"]; ?></td>
                            <td> <?php echo ($aAlumno["Nota1"] + $aAlumno["Nota2"]) / count(["Nota1","Nota2"]); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
    
</body>
</html>