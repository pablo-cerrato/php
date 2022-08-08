<?php
$aEmpleados = array();

$aEmpleados[] = array(
    "dni" => "33300123",
    "nombre" => "David García",
    "bruto" => "85030"
);
$aEmpleados[] = array(
    "dni" => "40874456",
    "nombre" => "Ana Del Valle",
    "bruto" => "90000"
);
$aEmpleados[] = array(
    "dni" => "67567565",
    "nombre" => "Andrés Perez",
    "bruto" => "100000"
);
$aEmpleados[] = array(
    "dni" => "75744545",
    "nombre" => "Victoria Luz",
    "bruto" => "70000"
);

function calcularNeto($bruto){
    return $bruto - ($bruto * 0.17);
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php/bootsrap/css/bootstrap.min.css">
    <title>Empleados</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-3">Lista de Empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aEmpleados as $empleado) { ?>
                            <tr>
                                <td><?php echo $empleado["dni"]; ?></td>
                                <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td>
                                <td><?php echo number_format (calcularNeto($empleado["bruto"]),2,",",".") ;?></td>
                            <?php }?>
                            </tr>    
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Cantidad de empleados activos <?php echo count($aEmpleados); ?></p>
            </div>
        </div>

    </main>

</body>

</html>