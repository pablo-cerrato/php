<?php
ini_set('display_errors', 1);
ini_set('displar_startup_errors',1);
error_reporting(E_ALL);

session_start();

if(isset($_SESSION["listadoClientes"])){
    //si existe la session listado de clientes asigno su contenido a aClientes
    $aClientes = $_SESSION["listadoClientes"];
} else{
    $aClientes = array();
}

if($_POST){
    if (isset($_POST["btnEnviar"])){
    //Si hace click en enviar entonces
    //Asignamos variables a los datos que vienen del formulario
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $dni = $_POST["txtDni"];
    $edad = $_POST["txtEdad"];

    //Creamos un array que contendrá el listado de clientes

    $aClientes[] = array(
        "nombre" => $nombre,
        "dni" => $dni,
        "telefono" => $telefono,
        "edad" => $edad
    );

    //Actualiza la variable de session
    $_SESSION["listadoClientes"] = $aClientes;
    }
    //Si hace click en Eliminar:
    if(isset($_POST["btnEliminar"])){
        session_destroy();
        $aClientes = array();
        header("Location:clientes_session.php");

    }
   
    
    //session_destroy();
}
//pregunta si viene por get
if(isset($_GET["pos"])){
    $pos = $_GET["pos"];
    unset($aClientes["pos"]);
    //Actualizo la variable de session con el array actualizado
    $_SESSION["listadoClientes"] = $aClientes;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font_awesome/css/all.min.css">
    <link rel="stylesheet" href="font_awesome/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-4">Tabla de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <form action="" method="POST">
                    <div>
                        <label for="txtNombre">Nombre:</label>
                        <input class="form-control" placeholder="Ingrese el nombre y apellido" type="text" name="txtNombre" id="txtNombre">
                    </div>
                    <div>
                        <label for="txtDni">DNI:</label>
                        <input class="form-control" type="text" name="txtDni" id="txtDni">
                    </div>
                    <div>
                        <label for="txtTelefono">Teléfono:</label>
                        <input class="form-control" type="tel" name="txtTelefono" id="txtTelefono">
                    </div>
                    <div>
                        <label for="txtEdad">Edad:</label>
                        <input class="form-control" type="number" name="txtEdad" id="txtEdad">
                    </div>
                    <div class="py-3">
                        <button name="btnEnviar" class="btn btn-primary" type="submit">Enviar</button>
                        <button name="btnEliminar" type="submit" class="btn btn-danger d-inline">Eliminar</button>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <table class="table table-hover border shadow">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>DNI:</th>
                            <th>Teléfono:</th>
                            <th>Edad:</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $pos => $cliente): ?>
                        <tr>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["dni"]; ?></td>
                            <td><?php echo $cliente["telefono"]; ?></td>
                            <td><?php echo $cliente["edad"]; ?></td>
                            <td><a href="clientes_session.php?pos=<?php echo $pos;?>"><i class="fa-solid fa-trash"></i></a>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>