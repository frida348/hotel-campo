<?php
include 'config.inc.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    try {

        if (!$conn) {
            throw new Exception("Error en la conexión con la base de datos.");
        }


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Correo electrónico no válido.");
        }


        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($password, $usuario['password'])) {

            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['telefono'] = $usuario['telefono']; 
            $_SESSION['rol'] = $usuario['rol'];


            $token = bin2hex(random_bytes(32)); 
            $ip = $_SERVER['REMOTE_ADDR']; 
            $fecha_inicio = date('Y-m-d H:i:s');

            $sql = "INSERT INTO sesiones (id_usuario, token, fecha_inicio, ip) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$usuario['id_usuario'], $token, $fecha_inicio, $ip]);

            $_SESSION['token'] = $token;

            if ($usuario['rol'] === 'admin') {
                header('Location: /campo/admin/indexAdmin.php');
            } else {
                header('Location: index.php');
            }
            exit();
        } else {
            echo "Correo o contraseña incorrectos.";
        }
    } catch (PDOException $e) {
        echo "Error: " . htmlspecialchars($e->getMessage());
    }
}
?>