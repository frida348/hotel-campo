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

  <link rel="stylesheet" href="estilos/estilo-faqs.css">
</head>

<body>
<?php include 'header.php'; ?>

  <main>
    <section class="faq-wrapper">
      <section id="faq" class="faq-section">
        <div class="faq-container">
          <h2>Preguntas Frecuentes</h2>
          <div id="accordionFAQ" class="accordion"></div>
        </div>
      </section>
     
    
      <div id="faq-contacto" class="faq-contacto-section">
        <div class="faq-contacto-container">
          <h2 class="contacto-titulo mayusculas">Atencion al cliente</h2>
          <p class="contacto-texto">hotelrefugiovalle@gmail.com</p>
          <p class="contacto-texto">+52 999 127 2412</p>
        </div>
      </div>
    </section>    
  </main>
 
  <?php include 'footer.php'; ?>
  

  <script src="funciones/faq.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="funciones/faq.js"></script>
</body>

</html>