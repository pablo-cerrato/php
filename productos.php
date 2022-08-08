<?php
$aProductos = array();

$aProductos[] = array(
    "producto" => "Cafetera Oster",
    "modelo" => "32RE",
    "stock" => "8",
);
$aProductos[] = array(
    "producto" => "Televisor Smart 22'",
    "modelo" => "Lg 52T",
    "stock" => "20",
);
$aProductos[] = array(
    "producto" => "Lavarropas Dream",
    "modelo" => "Dream 55C",
    "stock" => "0",
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php/bootsrap/css/bootstrap.min.css">
    <title>Ejercicio de Productos</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-3 my-3">
                <h1>Lista de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Producto</th>
                        <td><?php echo $aProductos[0]["producto"]; ?></td>
                        <td><?php echo $aProductos[1]["producto"]; ?></td>
                        <td><?php echo $aProductos[2]["producto"]; ?></td>
                    </tr>
                    <tr>
                        <th>Modelo</th>
                        <td><?php echo $aProductos[0]["modelo"]; ?></td>
                        <td><?php echo $aProductos[1]["modelo"]; ?></td>
                        <td><?php echo $aProductos[2]["modelo"]; ?></td>
                    </tr>
                    <tr>
                        <th>Stock</th>
                        <td><?php echo $aProductos[0]["stock"] >= 10 ? "Hay stock" : ($aProductos[0]["stock"] >= 1 && $aProductos[0]["stock"] <= 9 ? "Hay poco stock" : "No hay stock"); ?></td>
                        <td><?php echo $aProductos[1]["stock"] >= 10 ? "Hay stock" : ($aProductos[1]["stock"] >= 1 && $aProductos[1]["stock"] <= 9 ? "Hay poco stock" : "No hay stock"); ?></td>
                        <td><?php echo $aProductos[2]["stock"] >= 10 ? "Hay stock" : ($aProductos[2]["stock"] >= 1 && $aProductos[2]["stock"] <= 9 ? "Hay poco stock" : "No hay stock"); ?></td>
                    </tr>
                    <tr>
                        <th colspan="3" class="text-end">Precio:</th>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>