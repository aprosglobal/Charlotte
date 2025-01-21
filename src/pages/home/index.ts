import Splide from "@splidejs/splide"
import "@splidejs/splide/css";
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

// -------------- SECTION 2 -------------------------
const carousel = document.querySelector("#carousel") as HTMLElement;
const slides = document.querySelectorAll("#carousel .splide__slide");
if (carousel) {
  const splide = new Splide(carousel, {
    type: "loop",
    speed: 700,
    pagination: false,
    arrows: (slides.length >= 5) ? true : false,
    drag: (slides.length >= 5) ? true : false,
    perPage: 4,
    gap: "10px",
  });
  splide.mount({ AutoScroll });
}

// ------------------------------------------------------

// --------------------- SECTION 6 ---------------------
if (document.querySelector("#slider-linea")) {
  const sliderInicio = new Splide("#slider-linea", {
    pagination: false,
    arrows: false,
    perPage: 1,
    perMove: 1,
    start: 4,

    breakpoints: {
      1536: {
        start: 3,

      },
      768: {
        start: 0,
      }
    },

  });

  sliderInicio.on('moved', function (newIndex) {

    const windowWidth = window.innerWidth;
    if (windowWidth <= 768) {
      if (newIndex < 0) {
        sliderInicio.go(0)
      }
    } else if (windowWidth <= 1536) {
      if (newIndex < 3) {
        sliderInicio.go(3)
      }
    } else {
      if (newIndex < 4) {
        sliderInicio.go(4)
      }
    }
  })

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

// ---------------- BOTON WHATSAPP -----------------
const btn_wsp = document.querySelector('.btn-wsp') as HTMLElement;

document.addEventListener("scroll", () => {
  const scrollTop = window.scrollY; // Posición actual del scroll vertical
  const scrollHeight = document.documentElement.scrollHeight; // Altura total del documento
  const clientHeight = document.documentElement.clientHeight; // Altura del área visible (viewport)

  const isAtBottom = scrollTop + clientHeight >= scrollHeight - 5; // Detecta si está al final (con un margen)

  if (isAtBottom) {
    btn_wsp.style.transform = "translateY(-95%)";
    btn_wsp.style.transition = "transform 0.5s ease";
  } else {
    btn_wsp.style.transform = "translateY(0)";
  }
});
// -------------------------------------------------------
// ---------------- BOTON MOBILE -----------------
const btn_menu_mobile = document.querySelector('.btn-menu-mobile') as HTMLElement;
const menu_mobile = document.querySelector('.menu-mobile') as HTMLElement;
const li_menu_mobile = document.querySelectorAll('.ul-menu-mobile li a');


btn_menu_mobile.addEventListener('click', function () {
  menu_mobile.classList.toggle('h-0')
  menu_mobile.classList.toggle('p-20')
})

li_menu_mobile.forEach((ancla) => {
  ancla.addEventListener('click', function () {
    setTimeout(() => {
      menu_mobile.classList.toggle('h-0');
      menu_mobile.classList.toggle('p-20');
    }, 300);
  });
});
// -------------------------------------------------