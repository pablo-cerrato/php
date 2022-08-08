<!DOCTYPE html>
<html lang="es">
<?php
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $nombre = "Pablo Cerrato";
    $edad = 30;
    $apeliculas =  array("Matrix", "Pienso en el final", "Volver al Futuro");
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font_awesome/css/fontawesome.min.css">
    <title>Ficha Personal</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-4">
                <h1>Ficha Personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Fecha:</th>
                        <td>6/7/2022</td>
                    </tr>
                    <tr>
                        <th>Nombre y apellido:</th>
                        <td><?php echo $nombre ?></td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><?php echo $edad ?></td>
                    </tr>
                    <tr>
                        <th>Peliculas favoritas:</th>
                        <td><?php echo $apeliculas[0].", "; ?>
                        <?php echo $apeliculas[1].", "; ?>
                        <?php echo $apeliculas[2]; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>