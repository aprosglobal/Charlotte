// -------------- HEADER -----------------
// ----- AGREGAR CLASE TRAS EL 1ER SCROLL

const elemento = document.querySelector('header') as HTMLElement;


function agregarClaseAlHacerScroll() {
  if (window.scrollY > 0) {
    elemento.classList.add('borde-header');
  } else {
    elemento.classList.remove('borde-header');
  }
}
window.addEventListener('scroll', agregarClaseAlHacerScroll);


// ------------------------------------------