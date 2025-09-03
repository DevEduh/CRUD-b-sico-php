<?php
$host = 'localhost';
$db = 'gatitos';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

$conexion = new mysqli($host,$username,$password,$db);
$conexion->set_charset($charset);

if($conexion->connect_error){
    die("Error de conexion" . $conexion->connect_error);
}