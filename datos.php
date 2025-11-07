<?php
$dsn = "mysql:host=localhost;dbname=chizito";
$usuario = "root";
$contraseña = "";

try {
    $base = new PDO($dsn, $usuario, $contraseña);
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>