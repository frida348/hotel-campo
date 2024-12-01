<?php
include 'config.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']); // Corregido de 'numero' a 'telefono'
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar contraseña
    $rol = 'prospecto'; // Rol por defecto

    try {
       
        if (!$conn) {
            throw new Exception("Error en la conexión con la base de datos.");
        }

        // Insertar datos en la tabla usuarios
        $sql = "INSERT INTO usuarios (nombre, email, telefono, password, rol) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nombre, $email, $telefono, $password, $rol]);

       
        echo "<h1>Usuario registrado exitosamente.</h1>";
        echo "<p>Gracias por registrarte, ahora puedes <a href='sesiones.php?action=login'>iniciar sesión</a>.</p>";
    } catch (PDOException $e) {
       
        echo "<h1>Error en el registro.</h1>";
        echo "<p>Por favor, intenta de nuevo. Detalles del error: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
}
?>
