<?php
function promediar($promedio)
{
    $suma = 0;
    foreach ($promedio as $nota) {
        $suma += $nota;
    }
    return $suma / count($promedio);
}


$aAlumnos = array();

$aAlumnos[] = array(
    "nombre" => "Ana Valle",
    "notas" => array(7,8)
);
$aAlumnos[] = array(
    "nombre" => "Bernabe Paz",
    "notas" => array(5,7)
);
$aAlumnos[] = array(
    "nombre" => "Sebastián Aguirre",
    "notas" => array(6,9)
);
$aAlumnos[] = array(
    "nombre" => "Mónica Ledesma",
    "notas" => array(8,9)
);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Actas</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-4">Actas</h1>
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
                        <?php foreach ($aAlumnos as $alumno) { ?>
                            <tr>
                                <td><?php echo $alumno["nombre"]; ?></td>
                                <td><?php echo $alumno["notas"][0]; ?></td>
                                <td><?php echo $alumno["notas"][1]; ?></td>
                                <td><?php echo promediar($alumno["notas"]); ?></td>                              
                                <?php } ?>
                                
                            </tr>
                        
                    </tbody>

                </table>
            </div>
        </div>

    </main>


</body>

</html>