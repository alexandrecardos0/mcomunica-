import 'flowbite';
import { Accordion } from 'flowbite';

var swiper_depoimentos = new Swiper(".swiper_depoimentos", {
  slidesPerView: 1,
  spaceBetween: 0,

  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 0,
    },
  },
});

var swiper_parceiros = new Swiper('.swiper_parceiros', {
  slidesPerView: 2,
  spaceBetween: 30,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 6,
      spaceBetween: 30,
    },
  },
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
})

var swiper_banner = new Swiper(".swiper_banner", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
})

var swiper_sobre = new Swiper(".swiper_sobre", {
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
})

var swiper_imagens = new Swiper(".swiper_imagens", {
  slidesPerView: 4,
  grid: {
    rows: 2,
    fill: 'row',
  },
  spaceBetween: 5,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
})

// Inicializa o Accordion do Flowbite
document.querySelectorAll('[data-accordion="collapse"]').forEach((el) => {
  new Accordion(el, {
    alwaysOpen: false,
  })
})
var swiper_galeria = new Swiper(".swiper_galeria", {
    slidesPerView: 4,
    spaceBetween: 16,
    grabCursor: true,
    mousewheel: true,
    freeMode: true,
    breakpoints: {
      0: { slidesPerView: 1.5 },
      640: { slidesPerView: 2.5 },
      1024: { slidesPerView: 4 }
    }
  });



