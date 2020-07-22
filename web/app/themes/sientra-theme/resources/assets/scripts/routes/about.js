import Swiper from 'swiper';
export default {
  init() {
    // JavaScript to be fired on the home page

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    /* eslint-disable no-unused-vars */
    var socialSwiper = new Swiper('.swiper-team', {
      slidesPerView: 1,
      spaceBetween: 50,
      freeMode: true,
      loop: true,
      pagination: {
        el: '.swiper-team-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1250: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },
    });
    /* eslint-enable no-unused-vars */
  },
};
