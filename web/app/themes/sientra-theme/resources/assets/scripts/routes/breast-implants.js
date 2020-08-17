import Swiper from 'swiper';
export default {
  init() {
    // JavaScript to be fired on the home page

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    /* eslint-disable no-unused-vars */
    var swiperLuxeProjection = new Swiper ('.swiper-luxe-projection', {
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
        delay: 1500,
      },  
    });
    var swiperCurveProjection = new Swiper ('.swiper-curve-projection', {
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
        delay: 1500,
      },  
    });
    /* eslint-enable no-unused-vars */
  },
};
