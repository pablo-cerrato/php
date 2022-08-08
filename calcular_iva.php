<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
 $iva = 21;
 $precioSinIva = 0;
 $precioConIva = 0;
 $ivaCantidad = 0;

if ($_POST){
       
    $iva = $_POST["lstIva"];
    $precioSinIva = $_POST["sinIva"] > 0? $_POST["sinIva"]: 0;
    $precioConIva = $_POST["conIva"] > 0? $_POST["conIva"]: 0;
    $ivaCantidad = $precioConIva - $precioSinIva;

    if($precioSinIva > 0){
        $precioConIva = $precioSinIva * ($iva/100+1);
    }

    if($precioConIva > 0){
        $precioSinIva = $precioConIva / ($iva/100+1);
    }

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Calcular IVA</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-3 py-4">Calculador de IVA</h1>
            </div>
        <div class="row">
            <div class="col-3 offset-2">
                <form action="" method="POST">
                    <div class="pb-3">
                    <label for="">IVA</label>
                    <select name="lstIva" id="lstIva">
                        <option value="10.5">10.5</option>
                        <option value="19">19</option>
                        <option selected value="21">21</option>
                        <option value="27">27</option>
                    </select>
                    </div>
                    <div class="pb-3">
                        <label for="sinIva">Precio sin Iva</label>
                        <input class="form-control" type="text" name="sinIva" id="sinIva">
                    </div>
                    <div class="pb-3">
                        <label for="conIva">Precio con Iva</label>
                        <input class="form-control" type="text" name="conIva" id="conIva">
                    </div>
                    <div class="py-3">
                    <button type="submit" class="btn btn-primary">CALCULAR</button>
                    </div>
                </form>
            </div>
            <div class="col-5">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                        <td><?php echo $iva; ?>%</td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA:</th>
                        <td><?php echo $precioSinIva ?></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA:</th>
                        <td><?php echo $precioConIva ?></td>
                    </tr>
                    <tr>
                        <th>IVA cantidad:</th>
                        <td><?php echo $ivaCantidad; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>

</body>

</html>