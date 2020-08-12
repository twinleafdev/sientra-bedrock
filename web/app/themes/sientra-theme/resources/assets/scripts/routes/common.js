export default {
  init() {
    // JavaScript to be fired on all pages

  
  function getCookie() {
    var name = 'sientraCookieCrumb' + '=';
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return '';
  }


  function checkCookie() {
    var sientraCookieCrumb = getCookie('sientraCookieCrumb');
    if (sientraCookieCrumb == 1) {
      console.log('crumb');
    } else {
      console.log('no crumb');

      jQuery('#cookie').modal({
        show: true,
        backdrop: false,
      });            
      
    }
  }
  checkCookie();
    

    
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    let body = document.getElementsByTagName('body')[0];
    body.classList.remove('loading');
      let closeBtn = document.getElementById('cookieClose');
      // closeBtn.onclick = setCookie('sientraCookieCrumbTest', 1, 365);
      
      function setCookie() {
        var d = new Date();
        d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
        var expires = 'expires='+d.toUTCString();
        document.cookie = 'sientraCookieCrumb' + '=' + 1 + ';' + expires + ';path=/';
        console.log('cookie set');
      }
      
      closeBtn.addEventListener('click', setCookie );
      
      $(document).ready(function() {
           $('img').on('contextmenu',function(){
              return false;
           }); 
       });
      
  },
};
