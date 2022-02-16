<?php

/*
function save($name, $phone, $email)
{
    $connetion = mysqli_connect('localhost','root','','crud_adsi');
    $query = "INSERT INTO contactos (nombre,telefono,email) VALUES ('$name','$phone','$email')";
    $saved = mysqli_query($connetion,$query);

    if($saved){
        echo "Guardado exitosamente";
    }else{
        echo "Error insertando: ".mysqli_error($connetion);
    }
}
*/

function update($name, $phone, $email, $nombre)
{
    $connetion = mysqli_connect('localhost','root','','crud_adsi');
    $query = "UPDATE contactos SET nombre = '$name', telefono = '$phone', email = '$email' WHERE nombre = '$nombre'";
    $saved = mysqli_query($connetion,$query);
    if($saved){
        echo "Actualizado exitosamente";
    }else{
        echo "Error insertando: ".mysqli_error($connetion);
    }
}