<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<div class="container inner-page">
  <div class="page-header">
    <h1>{!! App::title() !!}</h1>
  </div>
	@php the_content() @endphp
</div><!-- .container -->

