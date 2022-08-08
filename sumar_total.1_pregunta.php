<?php
$aProductos = array();

$aProductos[] = array(
    "nombre" => "Smart TV 55¨4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554 KS20",
    "stock" => "20",
    "precio" => "$58000",
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => "0",
    "precio" => "$22000",
);
$aProductos[] = array(
    "nombre" => "Aire acondicionado split inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => "15",
    "precio" => "$45000",
);
$aProductos[] = array(
    "nombre" => "Impresora HP laser",
    "marca" => "HP",
    "modelo" => "P1102w",
    "stock" => "10",
    "precio" => "$20000",
);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php/bootsrap/css/bootstrap.min.css">
    <title>Sumar total</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-3">Sumar total</h1>
            </div>
        </div>
        <table class="table table-hover border">
            <div class="row">
                <div class="col-12">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador = 0;
                        $sumatoriaPrecio = 0;

                        while ($contador < count($aProductos)) {

                            $sumatoriaPrecio += $aProductos[$contador]["precio"];

                        ?>
                            <tr>
                                <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                                <td><?php echo $aProductos[$contador]["marca"]; ?></td>
                                <td><?php echo $aProductos[$contador]["modelo"]; ?></td>
                                <td><?php echo $aProductos[$contador]["stock"] > 1 ? "Hay stock" : "No hay stock"; ?></td>
                                <td><?php echo $aProductos[$contador]["precio"]; ?></td>
                                <td><button class="btn btn-primary">Comprar</button></td>
                            </tr>
                        <?php
                            $contador++;
                        } ?>
                    </tbody>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Subtotal <?php echo "La suma es $suma"; ?></p>
                </div>
            </div>

        </table>
    </main>


</body>

</html>