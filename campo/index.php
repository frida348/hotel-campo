<?php
include 'header.php';

$isAuthenticated = isset($_SESSION['id_usuario']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Refugio del Valle</title>
  <link rel="stylesheet" href="estilos/normalize.css">
  <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos/index.css">

  <style>
    .auto-bloqueo {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      color: #d2d3c1;
      display: none;
      /* Oculto por defecto x eso none*/
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .auto-bloqueo-contenedor {
      text-align: center;
      background-color: #384533;
      padding: 2rem;
      border-radius: 1rem;
    }
  </style>
</head>

<body>

  <main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
          aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="imagenes/carrusel1.jpg" alt="Descripción de la imagen" class="d-block w-100 carousel-img-altura" />
          <div class="container">
            <div class="carousel-caption text-start">
              <h2 class="shadow">Conoce nuestros servicios</h2>
              <p class="opacity-75 shadow">Desde el desayuno hasta la relajación. Explora los servicios que te ofrecemos
                para disfrutar al máximo</p>
              <p><a class="botones-carrusel mayusculas botones" href="#">Servicios</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item active">
          <img src="imagenes/carrusel2.2.jpg" alt="Descripción de la imagen"
            class="d-block w-100 carousel-img-altura" />
          <div class="container">
            <div class="carousel-caption">
              <h2 class="shadow">El lugar ideal para descansar</h2>
              <p class="opacity-75 shadow">Encuentra tu escape perfecto en el Hotel Refugio del Valle, donde la
                comodidad se encuentra con la naturaleza</p>
              <p><a class="botones-carrusel mayusculas botones" href="reservacion.php">Reservar</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="imagenes/carrusel3.jpg" alt="Descripción de la imagen" class="d-block w-100 carousel-img-altura" />
          <div class="container">
            <div class="carousel-caption text-end">
              <h2 class="shadow">Conoce nuestras habitaciones</h2>
              <p class="opacity-75 shadow">Habitaciones que invitan al descanso, un espacio donde cada detalle está
                pensado para ti.</p>
              <p><a class="botones-carrusel mayusculas botones" href="habitacion.php">Habitaciones</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> <!--Fin carrousel-->

    <div class="contenedor">
      <div class="texto-contenedor">
        <p class="titulo-contenedor">Pequeños detalles hacen la diferencia</p>
        <p> Nuestra locación es ideal para aquellos que se quieran desconectar del ajetreo diario y sumergirse en un
          entorno natural y tranquilo. Rodeados de hermosos paisajes, ofrecemos un refugio perfecto para descansar,
          relajarse y disfrutar de la serenidad del campo.</p>
      </div>
      <div id="contenedor-imagenes">
        <div>
          <img src="imagenes/galeria-fotos/hotel1.jpg" alt="">
        </div>

        <div>
          <img src="imagenes/galeria-fotos/hotel2.jpg" alt="">
        </div>

        <div>
          <img src="imagenes/galeria-fotos/hotel3.jpg" alt="">
        </div>

      </div>
      <a class="boton-galeria mayusculas " href="galeria.php">Galería de fotos</a>
    </div>

    <div class="contenido-img">
      <img src="imagenes/img-principal.jpg" alt="Imagen de fondo" class="background-image">

      <div class="sobreponer">
        <div class="contenido-texto">
          <h2>Tu escapada perfecta de verano</h2>
          <p>Haz de este verano un recuerdo inolvidable. Disfruta de una escapada perfecta llena de momentos únicos.¡Te
            esperamos!</p>
          <a href="/campo/reservacion.php" class="boton-galeria mayusculas">Reservar</a>
        </div>
      </div>
    </div>

    <div class="contenedor">
      <div class="texto-contenedor">
        <p class="titulo-contenedor">Mas que un hotel</p>
        <p> Disfruta de nuestros servicios exclusivos y una experiencia que revitaliza cuerpo y mente, ya sea en
          nuestras relajantes instalaciones o explorando los hermosos alrededores.</p>
      </div>
      <div id="contenedor-iconos">
        <div>
          <img src="imagenes/iconos/bicicleta.svg" alt="">
          <p class="texto-icono">Actividades recreativas</p>
        </div>

        <div>
          <img src="imagenes/iconos/servicio24hrs.svg" alt="">
          <p class="texto-icono">Serivicio 24hrs</p>
        </div>

        <div>
          <img src="imagenes/iconos/restaurante.svg" alt="">
          <p class="texto-icono">Restaurante</p>
        </div>

        <div>
          <img src="imagenes/iconos/mascotas.svg" alt="">
          <p class="texto-icono">Áreas para mascotas</p>
        </div>

        <div>
          <img src="imagenes/iconos/internet.svg" alt="">
          <p class="texto-icono">Internet</p>
        </div>

        <div>
          <img src="imagenes/iconos/energiaverde.svg" alt="">
          <p class="texto-icono">Energías verdes</p>
        </div>

      </div>
      <a class="boton-galeria mayusculas " href="">Servicios</a>
    </div>
  </main>

  <?php if (!$isAuthenticated): ?>

    <div id="auto-bloqueo" class="auto-bloqueo">
      <div class="auto-bloqueo-contenedor">
        <h2>Inicia sesión para continuar</h2>
        <p>Por favor, inicia sesión para acceder a todas las funcionalidades de nuestro sitio.</p>
        <button id="btn-iniciar" class="botones mayusculas"
        onclick="window.location.href='sesiones.php?action=login'">Iniciar Sesión</button>
      </div>
    </div>

    <script>
      setTimeout(function () {
        document.getElementById('auto-bloqueo').style.display = 'flex';
      }, 3000); // 3seg
    </script>
  <?php endif; ?>
  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="funciones/script.js"></script>
</body>

</html>