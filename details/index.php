<?php
include './list.php';
$datos = detalles($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <link rel="stylesheet" href="./../CSS/bootstrap.min.css">
</head>
</head>
<body>
    <?php include_once "./../views/menu.php" ?>
    <div class="container">
        <form action="./list.php" method="POST" class="card-body">
            <div class="row">
                <h1 class="text-center">Detalles del cliente</h1>
                <hr>
                <div class="card col-8 mt-5 mx-auto" style="width: 35rem;">
                    <table class="table table-striped table-hover ">
                        <tr>
                            <th class="text-center">ID</th>
                            <td class="text-center"><?php echo $datos['id']; ?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Nombre</th>
                            <td class="text-center"><?php echo $datos['nombre']; ?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Telefono</th>
                            <td class="text-center"><?php echo $datos['telefono']; ?></td>
                        </tr>
                        <tr>
                            <th class="text-center">Email</th>
                            <td class="text-center"><?php echo $datos['email']; ?></td>
                        </tr>
                    </table>
                    <a class="btn btn-warning btn-sm" href="<?php echo APP_URL; ?>/edit/index.php?id=<?php echo $datos['id']; ?>">Editar</a>
                    <a class="btn btn-primary btn-sm" href="<?php echo APP_URL; ?>/list/index.php">Regresar</a>
                </div>
            </div>
        </form>
    </div>

    <script src="./../js/bootstrap.min.js"></script>
</body>
</html>