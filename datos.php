<?php
require_once "conexion.php";
$accion = $_GET['accion'];
if($accion === 'crear'){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $nombre = $_POST['nombre'];

    $consulta = "INSERT INTO gatitos (nombre, email, pass) values('$nombre','$email','$pass')";
    $stmt = $conexion->prepare($consulta);
    $stmt->execute();
    $stmt->close();
}
if ($accion === 'borrar') {
    echo "ACCEDIENDO A BORRAR";
    $id = $_GET['id'];

    $consulta = "DELETE FROM gatitos WHERE id = $id";
    $conexion->query($consulta);
}

if($accion === 'editar'){
    $id = $_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $nombre = $_POST['nombre'];

    $consulta = "UPDATE gatitos SET
    nombre = '$nombre',
    email = '$email',
    pass = '$pass'
    WHERE id = $id";
    $conexion->query($consulta);
}