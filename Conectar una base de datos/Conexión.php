<?php

$hostname='localhost';
$database='developeru_bd';
$username='root';
$password='';

$conexion=new mysqli($hostname, $username, $password, $database);
if ($conexion->connect_errno) {
    echo "Lo sentimos, la conexión no es correcta"
}


?>