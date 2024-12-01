<?php
include $_SERVER['DOCUMENT_ROOT'] . '/campo/config.inc.php';

try {
  // Obtener las habitaciones disponibles
  $sql = "SELECT titulo, imagen, descripcion, precio, categoria FROM habitaciones WHERE disponibilidad = 1";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $habitaciones = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Error al cargar las habitaciones: " . $e->getMessage();
  $habitaciones = [];
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Refugio del Valle</title>

  <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="estilos/estilo-habitacion.css">
</head>

<body>
  <?php include 'header.php'; ?>

  <main>
    <section class="texto-habitaciones">
      <div class="titulo-habitaciones">Descubre nuestras habitaciones</div>
      <div class="p-habitaciones">En el Hotel Refugio del Valle, contamos con habitaciones de diferentes tamaños y
        estilos para que puedas
        disfrutar de una estancia agradable y cómoda. Todas nuestras habitaciones cuentan con servicios de calidad y
        comodidades para que te sientas como en casa.</div>
    </section>

    <section class="habitaciones">
      <div class="habitacion">
        <img src="imagenes/habitacion1.jpg" alt="Habitación Standard">
        <h2>Habitación Estandar</h2>
        <p>Ideal para un máximo de 4 personas</p>
        <ul>
          <h3>Caracteristicas:</h3>
          <li>Aire acondicionado</li>
          <li>Ventilador de techo</li>
          <li>Internet inalámbrico (Wi-Fi)</li>
          <li>Televisión por cable</li>
          <li>Secador de pelo</li>
          <li>Enchufes de 110-120 voltios</li>
          <li>Servicios de aseo</li>
          <li>Cunas bajo petición</li>
        </ul>
      </div>
      <div class="habitacion">
        <img src="imagenes/habitacion2.jpg" alt="Habitación Suite">
        <h2>Habitación Superior </h2>
        <p>Ideal para un máximo de 4 personas</p>
        <ul>
          <h3>Caracteristicas:</h3>
          <li>Aire acondicionado</li>
          <li>Ventilador de techo</li>
          <li>Internet inalámbrico (Wi-Fi)</li>
          <li>Televisión por cable</li>
          <li>Secador de pelo</li>
          <li>Minibar</li>
          <li>Enchufes de 110-120 voltios</li>
          <li>Enchufes de 220-240 voltios</li>
          <li>Servicios de aseo</li>
          <li>Cunas bajo petición</li>
        </ul>
      </div>
    </section>

    <section class="habitaciones-dinamicas">
      <h2 class="titulo-dinamicas">Habitaciones disponibles:</h2>
      <div class="contenedor-habitaciones">
        <?php if (empty($habitaciones)): ?>
          <p>No hay habitaciones disponibles en este momento. Por favor, vuelve más tarde.</p>
        <?php else: ?>
          <?php foreach ($habitaciones as $habitacion): ?>
            <div class="habitacion">
              <img src="<?= htmlspecialchars($habitacion['imagen']) ?>"
                alt="<?= htmlspecialchars($habitacion['titulo']) ?>">
              <h2><?= htmlspecialchars($habitacion['titulo']) ?></h2>
              <p><?= htmlspecialchars($habitacion['descripcion']) ?></p>
              <p class="precio">$<?= number_format($habitacion['precio'], 2) ?> por noche</p>
              <p class="categoria"><?= htmlspecialchars($habitacion['categoria']) ?></p>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </section>

  </main>


  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="funciones/script.js"></script>
</body>

</html>