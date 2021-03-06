<header class="banner" id="top">
  <a href="https://locator.sientra.com/surgeon/"><img src="@asset('images/locator-tan.svg')" class="locator" alt="locator-form" /></s>
  <div class="container-fluid">
    <div class="row ">
      <a class="brand brand-light col-6 col-lg-12 mx-auto my-lg-3" href="{{ home_url('/') }}"><img src="@asset('images/Sientra-logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" /></a>
      
      <a class="brand brand-dark brand-opus col-6 col-lg-12 mx-auto my-lg-3" href="{{ home_url('/') }}"><img src="@asset('images/sientra-opus-logo-w.svg')" alt="{{ get_bloginfo('name', 'display') }}" /></a>
      
      <a class="brand brand-light brand-opus col-6 col-lg-12 mx-auto my-lg-3" href="{{ home_url('/') }}"><img src="@asset('images/sientra-opus-logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" /></a>
      
      <a class="brand brand-recon col-6 col-lg-12 mx-auto my-lg-3" href="{{ home_url('/') }}"><img src="@asset('images/sientra-opus-recon-logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" /></a>
      
  
      <nav class="col-6 col-lg-12  ml-auto mx-lg-auto my-3 my-lg-2 mb-lg-1 nav-primary navbar navbar-expand-lg">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar-main-menu" aria-controls="navbar-main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu($primarymenu) !!}
        @endif

      </nav>
    </div><!-- .row -->
  </div><!-- .container-fluid -->
</header>
