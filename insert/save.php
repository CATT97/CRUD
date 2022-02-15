<?php

if(empty($_POST)){
    header("location: ./index.php");
}

function save($name, $phone, $email){
    require_once "./../database/conexion.php";
    $query = "INSERT INTO contactos (nombre,telefono,email) VALUES ('$name','$phone','$email')";
    $save = mysqli_query($conection,$query);

    if($save){
        header("location: ./index.php?status=success");
    }else{
        echo "Error insertando: ".mysqli_error($conection);
    }
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$telefono = $_POST['telefono'] ?? "";
$correo = $_POST['email'] ?? "";

save($nombre,$telefono,$correo);