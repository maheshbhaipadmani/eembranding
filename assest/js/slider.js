new Swiper(".catalog-slider", {
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  speed: 800,
  breakpoints: {
    320: { slidesPerView: 1.2 },
    576: { slidesPerView: 2.2 },
    768: { slidesPerView: 3.2 },
    1024:{ slidesPerView: 3.5 }
  }
});
