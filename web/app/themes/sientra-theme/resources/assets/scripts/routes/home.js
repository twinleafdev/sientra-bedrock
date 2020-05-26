import Swiper from 'swiper';
export default {
  init() {
    // JavaScript to be fired on the home page

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    /* eslint-disable no-unused-vars */
    var testimonialSwiper = new Swiper ('.swiper-testimonial', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      effect: 'fade',
      
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        dynamicBullets: false,
      },
      autoplay: {
        delay: 4000,
      },  
    });
    var socialSwiper = new Swiper('.swiper-social', {
      slidesPerView: 2,
      spaceBetween: 30,
      freeMode: true,
      loop: true,
      pagination: {
        el: '.swiper-social-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      },
    });
    /* eslint-enable no-unused-vars */
  },
};
