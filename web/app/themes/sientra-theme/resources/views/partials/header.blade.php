<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/Sientra-logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" /></a>
    <nav class="nav-primary navbar">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
    </nav>
  </div>
</header>
