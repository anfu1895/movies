let swiperInstance;

function initSwiper() {
  if(window.innerWidth >= 768){
    swiperInstance = new Swiper(".movies-wrapper", {
      loop: true,
      // autoplay: { delay: 3000 },
      pagination: { el: ".swiper-pagination", clickable: true },
      slidesPerView: 2,       // tablet
      spaceBetween: 20,
      breakpoints: {
        1024: { slidesPerView: 3 } // desktop
      }
    });
  }
}

// Inicializar al cargar la página
window.addEventListener('load', initSwiper);

// Re-inicializar al redimensionar
window.addEventListener('resize', () => {
  if(swiperInstance) {
    swiperInstance.destroy(true, true);
  }
  initSwiper();
});
