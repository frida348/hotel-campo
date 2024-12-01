<?php
include $_SERVER['DOCUMENT_ROOT'] . '/campo/config.inc.php';

session_start();
if (!isset($_SESSION['id_usuario']) || $_SESSION['rol'] !== 'admin') {
    header('Location: /campo/sesiones.php?action=login');
    exit();
}


try {
    
    $sql = "SELECT id, titulo, imagen, precio, categoria FROM habitaciones";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    
    $habitaciones = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error al obtener los datos: " . $e->getMessage();
    $habitaciones = []; 
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Refugio del Valle</title>


    <link rel="stylesheet" href="/campo/estilos/normalize.css">
    <link rel="shortcut icon" href="/campo/imagenes/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="/campo/estilos/index.css">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/campo/header.php'; ?>


    <main class="contenedor">
        <h1>Administrador de Hotel Refugio del Valle</h1>
        <a href="habitaciones/crear.php" class="botones btn-crud mayusculas">Nueva habitacion</a>

        <table class="tabla-habitaciones">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($habitaciones)): ?>
                    <tr>
                        <td colspan="6">No hay habitaciones registradas.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($habitaciones as $habitacion): ?>
                        <tr>
                            <td><?= htmlspecialchars($habitacion['id']) ?></td>
                            <td><?= htmlspecialchars($habitacion['titulo']) ?></td>
                            <td>
                                <img src="/campo/<?= htmlspecialchars($habitacion['imagen']) ?>"
                                    alt="<?= htmlspecialchars($habitacion['titulo']) ?>" width="80">

                            </td>
                            <td>$<?= number_format($habitacion['precio'], 2) ?></td>
                            <td><?= htmlspecialchars($habitacion['categoria']) ?></td>
                            <td>
                                <a href="/campo/admin/habitaciones/eliminar.php?id=<?= $habitacion['id'] ?>" class="btn-accion btn-eliminar">Eliminar</a>
                                <a href="/campo/admin/habitaciones/actualizar.php?id=<?= $habitacion['id'] ?>" class="btn-accion btn-actualizar">Actualizar</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/campo/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>