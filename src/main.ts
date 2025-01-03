
// styles
import '@unocss/reset/tailwind.css'
import 'virtual:uno.css'
import './style.scss'
import Splide from "@splidejs/splide"
import "@splidejs/splide/css";


// import typescriptLogo from './typescript.svg'
// import { setupCounter } from './counter'
// console.log(22222)
// console.log(wpCredentials);

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

// -------------- SECTION 2 -------------------------

const carousel = document.querySelector("#carousel") as HTMLElement;
const slides = document.querySelectorAll("#carousel .splide__slide");
if (carousel) {
  const splide = new Splide(carousel, {
    type: "slide",
    rewind: true,
    speed: 1000,
    pagination: false,
    arrows: (slides.length >= 5) ? true : false,
    drag: (slides.length >= 5) ? true : false,
    perPage: 4,
    gap: "10px",
  });
  splide.mount();
}

// ------------------------------------------------------

// --------------------- SECTION 6 ---------------------
if (document.querySelector("#slider-linea")) {
  const sliderInicio = new Splide("#slider-linea", {
    pagination: false,
    arrows: false,
    perPage: 1,
    perMove: 1,
    start: 3,
    breakpoints: {
      768: {
        start: 0,
      },
    },
  });
  sliderInicio.mount();
}

// -------------- SECTION 8 -------------------------

const carousel2 = document.querySelector("#carousel2") as HTMLElement;
const slides2 = document.querySelectorAll("#carousel2 .splide__slide");
if (carousel2) {
  const splide2 = new Splide(carousel2, {
    type: "slide",
    rewind: true,
    speed: 1000,
    pagination: false,
    arrows: (slides2.length >= 4) ? true : false,
    drag: (slides2.length >= 4) ? true : false,
    perPage: 3,
    gap: "15px",
  });
  splide2.mount();
}

// ------------------------------------------------------
