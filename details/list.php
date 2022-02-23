<?php
function detalles($id)
{
    include "./../database/conexion.php";
    $query = "SELECT * FROM contactos WHERE id = $id";
    $data = mysqli_query($conection, $query, MYSQLI_ASSOC);
    $datos = [];
    foreach ($data as $row) {
        array_push($datos, [
            "id" => $row['id'],
            "nombre" => $row['nombre'],
            "telefono" => $row['telefono'],
            "email" => $row['email']
        ]);
    }
    return $datos[0];
}
?>