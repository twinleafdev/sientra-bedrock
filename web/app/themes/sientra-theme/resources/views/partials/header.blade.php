<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/Sientra-logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" /></a>

    <nav class="nav-primary navbar navbar-expand-lg">
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar-main-menu" aria-controls="navbar-main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
    </nav>
  </div>
</header>
