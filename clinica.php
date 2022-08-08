<?php
$aPacientes = array();
$i = 0;

$aPacientes [] = array(
    "nombre"=>"Ana Acuña",
    "dni"=>"33.765.012",
    "edad"=>"45",
    "peso"=>"81.5",
);
$aPacientes[]=array(
    "nombre"=>"Gonzalo Bustamante",
    "dni"=>"23.684.385",
    "edad"=>"66",
    "peso"=>"79",
);
$aPacientes[]=array(
    "nombre"=>"Juan Irraola",
    "dni"=>"23.684.385",
    "edad"=>"28",
    "peso"=>"79",
);
$aPacientes[]=array(
    "nombre"=>"Beatriz Ocampo",
    "dni"=>"23.684.385",
    "edad"=>"50",
    "peso"=>"79",
);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php/bootsrap/css/bootstrap.min.css">
    <title>Clinica</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-3">Clinica S.A</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre y apellido</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i<count($aPacientes);$i++) { ?>
                        <tr>
                            <td><?php echo $aPacientes[$i]["dni"]; ?></td>
                            <td><?php echo $aPacientes[$i]["nombre"];?></td>
                            <td><?php echo $aPacientes[$i]["edad"];?></td>
                            <td><?php echo $aPacientes[$i]["peso"];?></td>
                        <?php } ?>
                    
                    </tbody>

                </table>
            </div>
        </div>
    </main>
    
</body>
</html>