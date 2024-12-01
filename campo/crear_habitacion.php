<?php
// Incluir archivo de configuración
include 'config.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar datos del formulario
    $titulo = $_POST['titulo'] ?? null;
    $precio = $_POST['precio'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;
    $imagen = $_FILES['imagen']['name'] ?? null;
    $categoria = $_POST['categoria'] ?? 'Estandar';

    if ($titulo && $precio && $descripcion && $imagen) {
        // Subir archivo de imagen
        $ruta_imagen = 'actualizaciones/' . basename($imagen);
        if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_imagen)) {
            die("Error al subir la imagen.");
        }

        // Insertar datos en la base de datos
        $sql = "INSERT INTO habitaciones (titulo, precio, imagen, descripcion, categoria) 
                VALUES (:titulo, :precio, :imagen, :descripcion, :categoria)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':precio' => $precio,
            ':imagen' => $ruta_imagen,
            ':descripcion' => $descripcion,
            ':categoria' => $categoria
        ]);

        header("Location:admin/indexAdmin.php");
        exit;
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>


