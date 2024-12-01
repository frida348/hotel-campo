<?php
// Poner a todas las paginas para que me dirija al index

session_start();
if (!isset($_SESSION['id_usuario'])) {
    header('Location: index.php');
    exit();
}
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="estilos/index.css">
    <link rel="stylesheet" href="estilos/galeria.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <main class="contenedor">
        <h2 class="mayusculas ">Galería de fotos</h2>
        <div class="grid">
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel1.jpg" alt="imagen 1"
                    onclick="mostrarImagen(this, 0)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel2.jpg" alt="imagen 2"
                    onclick="mostrarImagen(this, 1)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel3.jpg" alt="imagen 3"
                    onclick="mostrarImagen(this, 2)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel5.jpg" alt="imagen 4"
                    onclick="mostrarImagen(this, 4)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel6.jpg" alt="imagen 5"
                    onclick="mostrarImagen(this, 5)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel7.jpg" alt="imagen 6"
                    onclick="mostrarImagen(this, 6)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel8.jpg" alt="imagen 7"
                    onclick="mostrarImagen(this, 7)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel9.jpg" alt="imagen 8"
                    onclick="mostrarImagen(this, 8)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel10.jpg" alt="imagen 9"
                    onclick="mostrarImagen(this, 9)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel11.jpg" alt="imagen 10"
                    onclick="mostrarImagen(this, 10)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel12.jpg" alt="imagen 11"
                    onclick="mostrarImagen(this, 11)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel14.jpg" alt="imagen 12"
                    onclick="mostrarImagen(this, 13)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel15.jpg" alt="imagen 13"
                    onclick="mostrarImagen(this, 14)">
            </div>
            <div class="producto">
                <img class="producto__imagen" src="imagenes/galeria-fotos/hotel16.jpg" alt="imagen 14"
                    onclick="mostrarImagen(this, 15)">
            </div>
            <div class="grafico grafico--camisas"
                onclick="mostrarImagenGrafico('imagenes/galeria-fotos/hotel4.jpg', 3)"></div>
            <div class="grafico grafico--node" onclick="mostrarImagenGrafico('imagenes/galeria-fotos/hotel13.jpg', 13)">
            </div>

            <div id="lightbox" class="lightbox" onclick="cerrarLightbox(event)">
                <button id="prevBtn" class="nav-btn" onclick="cambiarImagen(-1)">&#10094;</button>
                <img id="imagenGrande" class="lightbox__imagen" src="" alt="Imagen en grande">
                <button id="nextBtn" class="nav-btn" onclick="cambiarImagen(1)">&#10095;</button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="funciones/script.js"></script>
    </main>

    <footer>

        <div class="opciones flex centrar-footer borde">
            <ul class="navegacion centrar-footer">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="informacion.html">Contacto</a></li>
                <li><a href="preguntas.html">FAQs</a></li>
                <li><a href="#">Ubicación</a></li>
            </ul>
        </div>

        <hr>

        <div id="seccion-final">
            <div>
                <p>©2024, Hotel Refugio del Valle.</p>
            </div>

            <div>
                <ul id="iconos">
                    <li><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-facebook icono" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg> </a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-instagram icono" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg></a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-at icono" viewBox="0 0 16 16">
                                <path
                                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                                <path
                                    d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                            </svg></a></li>
                </ul>
            </div>
        </div>
        </div>

    </footer>

</body>

</html>