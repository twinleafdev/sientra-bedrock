export default {
  init() {
    // JavaScript to be fired on all pages

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    let body = document.getElementsByTagName('body')[0];
    body.classList.remove('loading');
  },
};
