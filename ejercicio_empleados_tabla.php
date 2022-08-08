<?php
$aEmpleados = array();

$aEmpleados[]=array(
    "dni" =>"33000216",
    "nombre" =>"Stephanie Vazquez",
    "bruto" =>"120000",
);
$aEmpleados[]=array(
    "dni" =>"33000250",
    "nombre" =>"Pablo Cerrato",
    "bruto" =>"90000",
);
$aEmpleados[]=array(
    "dni" =>"33000584",
    "nombre" =>"Cristian Cerrato",
    "bruto" =>"90000",
);


function neto($neto){
   return $neto - $neto * 0.20;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Listado de Empleados</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5">Listado de Empleados</h1>
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
                        <?php foreach($aEmpleados as $empleado){ ?>
                        <tr>
                            <td><?php echo number_format($empleado["dni"],0,".","."); ?></td>
                            <td><?php echo mb_strtoupper($empleado["nombre"]);?></td>
                            <td><?php echo "$" .number_format(neto($empleado["bruto"]),2,",","."); ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td class="text-end" colspan="3">Empleados activos: <?php echo count($aEmpleados); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        </div>
        <div class="row">
            <div class="col-12 text-end my-3">
                <a href="ejercicio_empleados_formulario.php"><button class="btn btn-primary">Ir al formulario</button></a>
            </div>
        </div>
    </main>
</body>
</html>