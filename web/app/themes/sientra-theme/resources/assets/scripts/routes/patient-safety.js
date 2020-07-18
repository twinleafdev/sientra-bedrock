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
    /* eslint-enable no-unused-vars */
  },
};
