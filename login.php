<?php
session_start();
require_once('database/db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($password == $row['password']) {  // Comparar directamente sin hasheo
                $_SESSION["username"] = $username;
                echo "<script>alert('Login correcto'); window.location.href = 'blog.php';</script>";
                exit();
            } else {
                echo "<script>alert('Contraseña incorrecta'); window.location.href = 'login.php';</script>";
            }
        } else {
            echo "<script>alert('Usuario incorrecto'); window.location.href = 'login.php';</script>";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Usuario:</label><br>
        <input type="text" id="username" name="username" autocomplete="username"><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" autocomplete="current-password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>
