import Splide from "@splidejs/splide"
import "@splidejs/splide/css";

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
// -------------- SECTION 9 -------------------------
const btnsendform = document.querySelector('#btnsendform') as HTMLButtonElement;
const name = document.querySelector('#nombre-form') as HTMLInputElement;
const compania = document.querySelector('#compania-form') as HTMLInputElement;
const email = document.querySelector('#correo-form') as HTMLInputElement;
const phone = document.querySelector('#celular-form') as HTMLInputElement;
const mensaje = document.querySelector('#mensaje-form') as HTMLInputElement;
const thanks_message = document.querySelector('.thanks-message') as HTMLInputElement;

if (btnsendform) {
  btnsendform.addEventListener('click', async () => {
    let mistakes: string[] = [];

    const nameRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$/;
    const companiaRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ0-9\s]+$/;
    const phoneRegex = /^[0-9]+$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (name.value == '') {
      document.querySelector('.vali-ipt-nombre')?.classList.remove('hidden');
      mistakes.push('error_nombre');
    } else if (!nameRegex.test(name.value)) {
      document.querySelector('.vali-ipt-nombre')?.classList.remove('hidden');
      document.querySelector('.vali-ipt-nombre')!.textContent = 'Ingrese solo letras.';
      mistakes.push('error_nombre');
    } else if (name.value.length < 12) {
      document.querySelector('.vali-ipt-nombre')?.classList.remove('hidden');
      document.querySelector('.vali-ipt-nombre')!.textContent = 'Ingrese su nombre y apellidos';
      mistakes.push('error_nombre');
    } else {
      document.querySelector('.vali-ipt-nombre')?.classList.add('hidden');
      mistakes = mistakes.filter(error => error !== 'error_nombre');
    }

    if (compania.value == '') {
      document.querySelector('.vali-ipt-compania')?.classList.remove('hidden');
      mistakes.push('error_compania');
    } else if (!companiaRegex.test(compania.value)) {
      document.querySelector('.vali-ipt-compania')?.classList.remove('hidden');
      document.querySelector('.vali-ipt-compania')!.textContent = 'Ingrese solo letras y numeros';
      mistakes.push('error_compania');
    } else if (compania.value.length < 12) {
      document.querySelector('.vali-ipt-compania')?.classList.remove('hidden');
      document.querySelector('.vali-ipt-compania')!.textContent = 'El nombre es muy corto debe de ser mayor a 12 caracteres';
      mistakes.push('error_compania');

    } else {
      document.querySelector('.vali-ipt-compania')?.classList.add('hidden');
      mistakes = mistakes.filter(error => error !== 'error_compania');
    }

    if (email.value === '') {
      document.querySelector('.vali-ipt-correo')?.classList.remove('hidden');
      mistakes.push('error_correo');
    } else if (!emailRegex.test(email.value)) {
      document.querySelector('.vali-ipt-correo')?.classList.remove('hidden');
      document.querySelector('.vali-ipt-correo')!.textContent = 'El correo no es válido.';
      mistakes.push('error_correo');
    } else {
      document.querySelector('.vali-ipt-correo')?.classList.add('hidden');
      mistakes = mistakes.filter(error => error !== 'error_correo');
    }

    if (phone.value == '') {
      document.querySelector('.vali-ipt-celular')?.classList.remove('hidden');
      mistakes.push('error_celular');
    } else if (!phoneRegex.test(phone.value)) {
      document.querySelector('.vali-ipt-celular')?.classList.remove('hidden');
      document.querySelector('.vali-ipt-celular')!.textContent = 'Ingrese solo números.';
      mistakes.push('error_celular');
    } else if (phone.value.length != 9) {
      document.querySelector('.vali-ipt-celular')?.classList.remove('hidden');
      document.querySelector('.vali-ipt-celular')!.textContent = 'El número de celular no es válido.';
      mistakes.push('error_celular');
    } else {
      document.querySelector('.vali-ipt-celular')?.classList.add('hidden');
      mistakes = mistakes.filter(error => error !== 'error_celular');
    }

    if (mistakes.length === 0) {
      // Envía el formulario CF7 automáticamente
      const cf7Form = document.querySelector('.wpcf7 form');
      // Rellena los campos del formulario CF7 con los datos del formulario personalizado
      // @ts-ignore
      cf7Form.querySelector('input[name="f_name"]').value = name.value;
      // @ts-ignore
      cf7Form.querySelector('input[name="f_compania"]').value = compania.value;
      // @ts-ignore
      cf7Form.querySelector('input[name="f_phone"]').value = phone.value;
      // @ts-ignore
      cf7Form.querySelector('input[name="f_email"]').value = email.value;
      // @ts-ignore
      cf7Form.querySelector('input[name="f_mensaje"]').value = mensaje.value;


      // @ts-ignore
      const submitButton = cf7Form.querySelector('input[type="submit"]');
      // @ts-ignore
      submitButton.click();

      // msj after send mail
      setTimeout(() => {
        const mensaje = document.querySelector('.wpcf7-response-output') as HTMLElement;
        thanks_message.classList.remove('hidden');
        thanks_message.classList.add('block');
        thanks_message.innerHTML = mensaje.innerHTML;
        // Obtener estilos aplicados a 'mensaje' y aplicarlos a 'thanks_message'
        const mensajeStyles = window.getComputedStyle(mensaje);
        const keysToCopy = ['border-color', 'border', 'padding']; // Lista de estilos que quieres copiar

        keysToCopy.forEach((key) => {
          (thanks_message.style as any)[key] = mensajeStyles.getPropertyValue(key);
        });
        realizarOtraAccion();
      }, 1300);

      function realizarOtraAccion() {
        setTimeout(() => {
          thanks_message.classList.remove('block');
          thanks_message.classList.add('hidden');
        }, 5000);
      }


      name.value = '';
      compania.value = '';
      email.value = '';
      phone.value = '';
      mensaje.value = '';
    }

  })
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