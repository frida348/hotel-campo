let indiceActual = -1;
let imagenes = obtenerImagenes();

function obtenerImagenes() {
    const imagenesElementos = document.querySelectorAll('.producto__imagen');
    return Array.from(imagenesElementos).map(img => img.src);
}

function mostrarImagen(elemento, indice) {
    const lightbox = document.getElementById('lightbox');
    const imagenGrande = document.getElementById('imagenGrande');
    indiceActual = indice; 
    imagenGrande.src = elemento.src; 
    lightbox.style.display = 'flex';
}

function mostrarImagenGrafico(src) {
    const lightbox = document.getElementById('lightbox');
    const imagenGrande = document.getElementById('imagenGrande');
    imagenGrande.src = src; 
    lightbox.style.display = 'flex';
}

function cerrarLightbox(event) {
    const lightbox = document.getElementById('lightbox');
    if (event.target === lightbox) {
        lightbox.style.display = 'none';
    }
}

function cambiarImagen(direccion) {
    indiceActual += direccion;

    if (indiceActual < 0) {
        indiceActual = imagenes.length - 1;
    } else if (indiceActual >= imagenes.length) {
        indiceActual = 0;
    }

    const imagenGrande = document.getElementById('imagenGrande');
    imagenGrande.src = imagenes[indiceActual];
}
// 
function buscarEnPagina() {
    const termino = document.getElementById('busqueda').value.toLowerCase();
    if (!termino) return false;
  
    const contenido = document.body.textContent.toLowerCase();
    if (contenido.includes(termino)) {
      alert('Término encontrado en la página');
    } else {
      alert('Término no encontrado');
    }
    return false; // Previene el envío real del formulario
  }