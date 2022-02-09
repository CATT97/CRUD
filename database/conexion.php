<?php

require_once "config.php";

$conection = mysqli_connect(HOST_DB,USER_DB,PASSWORD_DB,NAME_DB);

if(!$conection){
    die("Error al conectar a la DB: ".mysqli_connect_error());
}