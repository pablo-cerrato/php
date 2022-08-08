<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aAlumnos=array();

$aAlumnos[]=array(
    "nombre y apellido"=>"Alejandro Pérez",
    "curso"=>"4to grado",
    "calificacion"=>"8",
);
$aAlumnos[]=array(
    "nombre y apellido"=>"Isabella Salcedo",
    "curso"=>"4to grado",
    "calificacion"=>"6",
);
$aAlumnos[]=array(
    "nombre y apellido"=>"Lucia Malacalza",
    "curso"=>"4to grado",
    "calificacion"=>"10",
);
$aAlumnos[]=array(
    "nombre y apellido"=>"Juan Cruz Lopez",
    "curso"=>"4to grado",
    "calificacion"=>"2",
);
$aAlumnos[]=array(
    "nombre y apellido"=>"Federico Garcia",
    "curso"=>"4to grado",
    "calificacion"=>"7",
);
$aAlumnos[]=array(
    "nombre y apellido"=>"Ignacio Abraham",
    "curso"=>"4to grado",
    "calificacion"=>"5",
);
$aAlumnos[]=array(
    "nombre y apellido"=>"Bautista Sotelo",
    "curso"=>"4to grado",
    "calificacion"=>"9",
);
$aAlumnos[]=array(
    "nombre y apellido"=>"Ema Borquez",
    "curso"=>"4to grado",
    "calificacion"=>"10",
);
$aAlumnos[]=array(
    "nombre y apellido"=>"Dante Mosquera",
    "curso"=>"4to grado",
    "calificacion"=>"3",
);
$aAlumnos[]=array(
    "nombre y apellido"=>"Guadalupe Cortez",
    "curso"=>"4to grado",
    "calificacion"=>"4",
);



//print_r($aAlumnos)

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php/bootsrap/css/bootstrap.min.css">
    <title>Lita de Alumnos</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre y Apellido</th>
                            <th>Curso</th>
                            <th>Calificación</th>     
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $aAlumnos[0]["nombre y apellido"]; ?></td>
                            <td><?php echo $aAlumnos[0]["curso"];?></td>
                            <td><?php echo $aAlumnos[0]["calificacion"] >=7 ?"aprobado":($aAlumnos[0]["calificacion"]<=6 && $aAlumnos[0]["calificacion"]>=4?"desaprobado":"recursa");?></td>
                        </tr>
                        <tr>
                            <td><?php echo $aAlumnos[1]["nombre y apellido"] ?></td>
                            <td><?php echo $aAlumnos[1]["curso"]?></td>
                            <td><?php echo $aAlumnos[1]["calificacion"] >=7 ?"aprobado":($aAlumnos[1]["calificacion"]<=6 && $aAlumnos[1]["calificacion"]>=4?"desaprobado":"recursa");?></td>
                        </tr>
                        <tr>
                            <td><?php echo $aAlumnos[2]["nombre y apellido"] ?></td>
                            <td><?php echo $aAlumnos[2]["curso"]?></td>
                            <td><?php echo $aAlumnos[2]["calificacion"] >=7 ?"aprobado":($aAlumnos[2]["calificacion"]<=6 && $aAlumnos[2]["calificacion"]>=4?"desaprobado":"recursa");?></td>
                        </tr>
                        <tr>
                            <td><?php echo $aAlumnos[3]["nombre y apellido"] ?></td>
                            <td><?php echo $aAlumnos[3]["curso"]?></td>
                            <td><?php echo $aAlumnos[3]["calificacion"] >=7 ?"aprobado":($aAlumnos[3]["calificacion"]<=6 && $aAlumnos[3]["calificacion"]>=4?"desaprobado":"recursa");?></td>
                        </tr>
                        <tr>
                            <td><?php echo $aAlumnos[4]["nombre y apellido"] ?></td>
                            <td><?php echo $aAlumnos[4]["curso"]?></td>
                            <td><?php echo $aAlumnos[4]["calificacion"] >=7 ?"aprobado":($aAlumnos[4]["calificacion"]<=6 && $aAlumnos[4]["calificacion"]>=4?"desaprobado":"recursa");?></td>
                        </tr>
                        <tr>
                            <td><?php echo $aAlumnos[5]["nombre y apellido"] ?></td>
                            <td><?php echo $aAlumnos[5]["curso"]?></td>
                            <td><?php echo $aAlumnos[5]["calificacion"] >=7 ?"aprobado":($aAlumnos[5]["calificacion"]<=6 && $aAlumnos[5]["calificacion"]>=4?"desaprobado":"recursa");?></td>
                        </tr>
                        <tr>
                            <td><?php echo $aAlumnos[6]["nombre y apellido"] ?></td>
                            <td><?php echo $aAlumnos[6]["curso"]?></td>
                            <td><?php echo $aAlumnos[6]["calificacion"] >=7 ?"aprobado":($aAlumnos[6]["calificacion"]<=6 && $aAlumnos[6]["calificacion"]>=4?"desaprobado":"recursa");?></td>
                        </tr>
                        <tr>
                            <td><?php echo $aAlumnos[7]["nombre y apellido"] ?></td>
                            <td><?php echo $aAlumnos[7]["curso"]?></td>
                            <td><?php echo $aAlumnos[7]["calificacion"] >=7 ?"aprobado":($aAlumnos[7]["calificacion"]<=6 && $aAlumnos[7]["calificacion"]>=4?"desaprobado":"recursa");?></td>
                        </tr>
                        <tr>
                            <td><?php echo $aAlumnos[8]["nombre y apellido"] ?></td>
                            <td><?php echo $aAlumnos[8]["curso"]?></td>
                            <td><?php echo $aAlumnos[8]["calificacion"] >=7 ?"aprobado":($aAlumnos[8]["calificacion"]<=6 && $aAlumnos[8]["calificacion"]>=4?"desaprobado":"recursa");?></td>
                        </tr>
                        <tr>
                            <td><?php echo $aAlumnos[9]["nombre y apellido"] ?></td>
                            <td><?php echo $aAlumnos[9]["curso"]?></td>
                            <td><?php echo $aAlumnos[9]["calificacion"] >=7 ?"aprobado":($aAlumnos[9]["calificacion"]<=6 && $aAlumnos[9]["calificacion"]>=4?"desaprobado":"recursa");?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>