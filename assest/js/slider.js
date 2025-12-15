new Swiper(".catalog-slider", {
  slidesPerView: "auto",
  spaceBetween: 40,
  centeredSlides: true,
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
});