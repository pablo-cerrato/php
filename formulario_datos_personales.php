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
                <h1 class="text-center py-4">Formulario de datos personales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="resultado.php" method="POST">
                    <div class="pb-3">
                        <label for="txtNombre">Nombre:*</label>
                        <input class="form-control" type="text" name="txtNombre" id="txtNombre" required>
                    </div>
                    <div class="pb-3">
                        <label for="txtDni">DNI:*</label>
                        <input class="form-control" type="text" name="txtDni" id="txtDni" required>
                    </div>
                    <div class="pb-3">
                        <label for="txtTel">Teléfono:*</label>
                        <input class="form-control" type="tel" name="txtTel" id="txtTel" required>
                    </div>
                    <div class="pb-3">
                        <label for="txtEdad">Edad:*</label>
                        <input class="form-control" type="number" name="txtEdad" id="txtEdad" required>
                    </div>
                    <div class="float-end">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>