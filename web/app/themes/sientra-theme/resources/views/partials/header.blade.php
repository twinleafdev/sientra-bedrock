<header class="banner">
  <div class="container-fluid">
    <div class="row">
      <a class="brand col-6 col-lg-12 mr-auto mx-lg-auto my-4" href="{{ home_url('/') }}"><img src="@asset('images/Sientra-logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" /></a>
  
      <nav class="col-6 col-lg-12  ml-auto mx-lg-auto my-4 my-lg-1 nav-primary navbar navbar-expand-lg">
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
