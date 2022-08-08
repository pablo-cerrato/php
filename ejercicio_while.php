<!DOCTYPE html>
<?php
$aProductos = array();

$aProductos[] = array(
    "marca" => "Cafetera Oster",
    "modelo" => "Oster R3",
    "precio" => "$30000",
    "stock" => "0"

);
$aProductos[] = array(
    "marca" => "Heladera LG",
    "modelo" => "LG H8",
    "precio" => "$50000",
    "stock" => "15"
);
$aProductos[] = array(
    "marca" => "Miroondas Dream",
    "modelo" => "Dream Z1",
    "precio" => "$25000",
    "stock" => "2"
);
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php/bootsrap/css/bootstrap.min.css">
    <title>While</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4">Ejercicio While</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador = 0;
                        while ($contador < 3) { ?>
                            <tr>
                                <td><?php echo $aProductos[$contador]["marca"]; ?></td>
                                <td><?php echo $aProductos[$contador]["modelo"]; ?></td>
                                <td><?php echo $aProductos[$contador]["precio"]; ?></td>
                                <td><?php echo $aProductos[$contador]["stock"] >=10? "Hay stock":($aProductos[$contador]["stock"]<=9 && $aProductos[$contador]["stock"]>=1? "Poco stock":"No hay stock"); ?></td>
                                <td><button class="btn btn-primary">Comprar</button></td>
                            </tr>
                        <?php
                            $contador++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>


</body>

</html>