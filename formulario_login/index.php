<?php
if ($_POST) {
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];

    if ($usuario != "" && $clave != "") {

        header("location:acceso-confirmado.php");
    } else {
        $msg = "Válido para usuarios registrados";
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
    <title>Formulario</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-3">Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                        <?php
                        if (isset($msg)) { ?>
                         <div class="alert alert-danger" role="alert">
                           <?php echo $msg; ?>
                        </div>
                       <?php }  ?>
                    <div class="pb-3">
                        <label for="txtUsuario">Usuario</label>
                        <input class="form-control" required type="text" name="txtUsuario" id="txtUsuario">
                    </div>
                    <div class="pb-3">
                        <label for="txtClave">Clave</label>
                        <input class="form-control" required type="password" name="txtClave" id="txtClave">
                    </div>
                    <div class="pb-3">
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>