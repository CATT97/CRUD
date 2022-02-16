<?php

function listar()
{
    /*
    $connection = mysqli_connect('localhost', 'root', '', 'crud_adsi');
    $query = "SELECT * FROM contactos";
    $data = mysqli_query($connection, $query, MYSQLI_ASSOC);

    foreach($data as $row) {
        echo $row['id']."<br>";
        echo $row['nombre']."<br>";
        echo $row['telefono']."<br>";
        echo $row['email']."<br>";
        echo "------------------------------------"."<br>";
    }
    */

    $busqueda = 'juan';
    $connection = mysqli_connect('localhost', 'root', '', 'crud_adsi');
    $query = "SELECT * FROM contactos WHERE nombre LIKE '%$busqueda%'";
    $data = mysqli_query($connection, $query, MYSQLI_ASSOC);

    foreach($data as $row) {
        echo $row['id']."<br>";
        echo $row['nombre']."<br>";
        echo $row['telefono']."<br>";
        echo $row['email']."<br>";
        echo "------------------------------------"."<br>";
    }
}