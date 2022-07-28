<?php
    $pg ="inicio";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once ("menu.php");?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete">
                    <a href="proyectos.php"><img src="images/cohete.svg" alt=""></a>
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center py-3">
                <p>Bienvenido a mi sitio de desarrollo de sistemas.</p>
            </div>
            <div class="col-12 text-center">
                <a class="btn shadow radius-pro" href="proyectos.php">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row">
            <div class="col-3">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/jhonnatan-martinez-914a86a4/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:jhonnatanmb@gmail.com">jhonnatanmb@gmail.com</a>
            </div>
            <div class="btn-whatsapp col-3">
                <a href="https://api.whatsapp.com/send?phone=573153911622" title="Whatsapp"><i
                        class="fab fa-whatsapp"></i></a>
            </div>
        </div>    
    </footer>
</body>
</html>