<?php
include $_SERVER['DOCUMENT_ROOT'] . '/campo/config.inc.php';
session_start();
if (!isset($_SESSION['id_usuario']) || $_SESSION['rol'] !== 'admin') {
    header('Location: /campo/sesiones.php?action=login');
    exit();
}

// Obtener el ID de la habitación desde la URL
$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID no especificado.");
}

try {
    // Consultar los datos de la habitación
    $sql = "SELECT * FROM habitaciones WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    $habitacion = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$habitacion) {
        die("Habitación no encontrada.");
    }
} catch (PDOException $e) {
    die("Error al obtener los datos: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Habitación</title>
    <link rel="stylesheet" href="/campo/estilos/normalize.css">
    <link rel="shortcut icon" href="/campo/imagenes/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/campo/estilos/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
        rel="stylesheet">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/campo/header.php'; ?>

    <main class="contenedor">
        <h1>Actualizar Habitación</h1>
        <a href="/campo/admin/indexAdmin.php" class="botones btn-crud mayusculas">Volver</a>

        <form action="/campo/actualizar_habitacion.php" class="formulario-crear" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información general</legend>

                <!-- Campo oculto para enviar el ID -->
                <input type="hidden" name="id" value="<?= htmlspecialchars($habitacion['id']) ?>">

                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="input" value="<?= htmlspecialchars($habitacion['titulo']) ?>" required>

                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" class="input" value="<?= htmlspecialchars($habitacion['precio']) ?>" required>

                <label for="imagen">Imagen (opcional):</label>
                <input type="file" name="imagen" id="imagen" class="input-file" accept="image/jpeg, image/png">
                <small>Deja este campo vacío si no deseas cambiar la imagen.</small>

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="textarea" rows="4" required><?= htmlspecialchars($habitacion['descripcion']) ?></textarea>

                <label for="categoria">Categoría:</label>
                <select id="categoria" name="categoria" required>
                    <option value="Estandar" <?= $habitacion['categoria'] === 'Estandar' ? 'selected' : '' ?>>Estandar</option>
                    <option value="Superior" <?= $habitacion['categoria'] === 'Superior' ? 'selected' : '' ?>>Superior</option>
                </select>

                <button type="submit" class="botones btn-crud mayusculas">Guardar Cambios</button>
            </fieldset>
        </form>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/campo/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
