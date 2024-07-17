<?php
$servername = "localhost";
$database = "u543453127_pixiux_db";
$username_db = "u543453127_root";
$password_db = "Lg030920."; // Tu contraseña de la base de datos

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username_db, $password_db);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
