<?php
$aEmpleados = array();

$aEmpleados[] = array(
    "dni" => "33420550",
    "nombre" => "Juan Pablo Reynoso",
    "bruto" => "75000",
);
$aEmpleados[] = array(
    "dni" => "36820564",
    "nombre" => "Milena Muro",
    "bruto" => "83000",
);
$aEmpleados[] = array(
    "dni" => "31210548",
    "nombre" => "Lorena Linares",
    "bruto" => "120000",
);
$aEmpleados[] = array(
    "dni" => "31210548",
    "nombre" => "Rodolfo Pérez",
    "bruto" => "115000",
);
function neto($neto)
{
    return $neto - $neto * 0.17;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Lista de empleados 2</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-3 my-4">Lista de empleados</h1>
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
                        <?php foreach ($aEmpleados as $empleado) {  ?>
                            <tr>
                                <td><?php echo $empleado["dni"]; ?></td>
                                <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td>
                                <td><?php echo number_format(neto($empleado["bruto"]), 2, ",", "."); ?></td>
                            </tr>
                        <?php } ?>
                        <td colspan="3" class="text-end">Empleados activos: <?php echo count($aEmpleados); ?>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>