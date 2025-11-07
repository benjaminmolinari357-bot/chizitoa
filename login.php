<?php
require_once 'datos.php';

$usuario = htmlentities($_POST["usuario"]);
$contrasena = htmlentities($_POST["contrasena"]);


$sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena";
$resultado = $base->prepare($sql);


$resultado->bindValue(":usuario", $usuario);
$resultado->bindValue(":contrasena", $contrasena);
$resultado->execute();

$numero_registro = $resultado->rowCount();

if ($numero_registro != 0) {
    header("Location: zona_registrados.php");
    exit;
} else {
    echo "CONTRASEÑA INCORRECTA";
}
?>