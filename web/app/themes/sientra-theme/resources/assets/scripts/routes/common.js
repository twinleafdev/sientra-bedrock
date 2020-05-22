import Swiper from 'swiper';
export default {
  init() {
    // JavaScript to be fired on all pages
    /* eslint-disable no-unused-vars */
    var mySwiper = new Swiper ('.swiperTestimonial', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
  
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        dynamicBullets: true,
      },
      autoplay: {
        delay: 2000,
      },  
      // Navigation arrows
/*
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
*/
  
      // And if we need scrollbar
/*
      scrollbar: {
        el: '.swiper-scrollbar',
      },
*/
    })
    /* eslint-enable no-unused-vars */
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
