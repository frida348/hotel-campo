<?php
include 'config.inc.php';

// Verificar el estado de la sesión
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario está autenticado
if (!isset($_SESSION['id_usuario'])) {
    header('Location: sesiones.php?action=login');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar datos de la reservación
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_llegada = $_POST['fecha_llegada'];
    $fecha_salida = $_POST['fecha_salida'];
    $habitaciones = array_filter([
        $_POST['tipo_habitacion_1'] ?? null,
        $_POST['tipo_habitacion_2'] ?? null,
        $_POST['tipo_habitacion_3'] ?? null,
    ]);

    // Calcular la duración de la estancia
    $inicio = new DateTime($fecha_llegada);
    $fin = new DateTime($fecha_salida);
    $dias = $inicio->diff($fin)->days;

    if ($dias < 1) {
        die("La duración de la estancia debe ser al menos de 1 día.");
    }

    // Calcular el monto total basado en los precios de las habitaciones
    $monto = 0;
    foreach ($habitaciones as $habitacionId) {
        $sql = "SELECT precio FROM habitaciones WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id' => $habitacionId]);
        $precio = $stmt->fetchColumn();
        $monto += $precio * $dias;
    }

    // Capturar datos de pago
    $nombre_titular = $_POST['nombre_titular'];
    $numero_tarjeta = $_POST['numero_tarjeta'];
    $fecha_expiracion = $_POST['fecha_expiracion'];
    $cvv = $_POST['cvv'];

    try {
        // Iniciar transacción
        $conn->beginTransaction();

        // Procesar reservación
        foreach ($habitaciones as $habitacionId) {
            $sql = "INSERT INTO reservaciones (habitacion_id, nombre, email, telefono, fecha_llegada, fecha_salida, fecha_reservacion) 
                    VALUES (:habitacion_id, :nombre, :email, :telefono, :fecha_llegada, :fecha_salida, NOW())";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':habitacion_id' => $habitacionId,
                ':nombre' => $nombre,
                ':email' => $email,
                ':telefono' => $telefono,
                ':fecha_llegada' => $fecha_llegada,
                ':fecha_salida' => $fecha_salida,
            ]);

            // Obtener ID de la reservación
            $reservacion_id = $conn->lastInsertId();

            // Actualizar disponibilidad de la habitación
            $sql = "UPDATE habitaciones SET disponibilidad = 0 WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id' => $habitacionId]);
        }

        // Procesar pago
        $sql = "INSERT INTO pagos (reservacion_id, nombre_titular, numero_tarjeta, fecha_expiracion, cvv, monto) 
                VALUES (:reservacion_id, :nombre_titular, :numero_tarjeta, :fecha_expiracion, :cvv, :monto)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':reservacion_id' => $reservacion_id,
            ':nombre_titular' => $nombre_titular,
            ':numero_tarjeta' => $numero_tarjeta,
            ':fecha_expiracion' => $fecha_expiracion,
            ':cvv' => $cvv,
            ':monto' => $monto, // Usar el monto calculado dinámicamente
        ]);

        // Confirmar transacción
        $conn->commit();

        // Redirigir al éxito
        header("Location: /campo/index.php");
        exit;
    } catch (PDOException $e) {
        // Revertir transacción en caso de error
        $conn->rollBack();
        die("Error al procesar la reservación y el pago: " . $e->getMessage());
    }
}
?>