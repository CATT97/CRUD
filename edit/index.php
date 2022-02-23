<?php
    include_once './../details/list.php';
    $datos = detalles($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="./../CSS/bootstrap.min.css">
</head>
<body>
    <?php include_once "./../views/menu.php" ?>
    <div class="card col-8 mt-5 mx-auto" style="width: 18rem;">
        <form action="./save.php" method="POST" class="card-body">
            <h1 class="card-tittle">Editar datos del cliente</h1>
            <div class="col-12">
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>">
            </div>
            <div class="col-12">
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" class="form-control" id="Nombre" name="nombre" value="<?php echo $datos['nombre']; ?>">
            </div>
            <div class="col-12">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo $datos['telefono']; ?>">
            </div>
            <div class="col-12">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $datos['email']; ?>">
            </div>
            <button class="btn btn-primary col-12  mt-3">Guardar</button>
        </form>
    </div>
    <script src="./../js/bootstrap.min.js"></script>
</body>
</html>