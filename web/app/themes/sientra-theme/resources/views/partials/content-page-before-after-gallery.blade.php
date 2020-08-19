<section class="boxy-box row text-center">
  <div class="container-fluid wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 px-lg-3">
		<?php $header_background = get_field('header_background'); ?>
		<img src="<?php echo esc_url($header_background['url']); ?>" alt="<?php echo esc_url($header_background['alt']); ?>" width="1200" height="692" />
  	</div>

  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
		  <?php $header_title = get_field('header_title'); ?>
         <img src="<?php echo esc_url($header_title['url']); ?>" alt="<?php echo esc_url($header_title['alt']); ?>" />
      </div>
  	</div>
  	  	
  </div>
</section>
<section class="intro text-center">
  <div class="col-12 col-md-8 offset-md-2">
  	<?php the_field('intro'); ?>
	  </div>
</section>
<section class="container">
	<div class="low projection row">
  	<header class="col-12">
		<?php $low_projection_title = get_field('low_projection_title'); ?>
		<img src="<?php echo esc_url($low_projection_title['url']); ?>" alt="<?php echo esc_url($low_projection_title['alt']); ?>" width="800" height="300" /></header>
		
		<?php // Check rows exists.
        if( have_rows('low_projection') ):

            // Loop through rows.
            while( have_rows('low_projection') ) : the_row(); ?>
				<?php $before = get_sub_field('before'); ?>
				<?php $after = get_sub_field('after'); ?>
				<article class="col-6 col-md-3"><img src="<?php echo esc_url($before['url']); ?>" alt="<?php echo esc_attr($before['alt']); ?>" width="339" height="300" /></article>
    			<article class="col-6 col-md-3"><img src="<?php echo esc_url($after['url']); ?>" alt="<?php echo esc_attr($after['alt']); ?>" width="339" height="300" /></article>

            <?php // End loop.
            endwhile;
        endif; ?>
    <footer class="col-12 text-center light">
    	<p class="text-center light"><?php the_field('low_projection_credit'); ?></p>
    </footer>
	</div><!-- .container -->

	<div class="moderate projection row">
		<header class="col-12">
		<?php $moderate_projection_title = get_field('moderate_projection_title'); ?>
		<img src="<?php echo esc_url($moderate_projection_title['url']); ?>" alt="<?php echo esc_url($moderate_projection_title['alt']); ?>" width="1000" height="322" /></header>
   
    <?php // Check rows exists.
        if( have_rows('moderate_projection') ):

            // Loop through rows.
            while( have_rows('moderate_projection') ) : the_row(); ?>
				<?php $before = get_sub_field('before'); ?>
				<?php $after = get_sub_field('after'); ?>
				<article class="col-6 col-md-3"><img src="<?php echo esc_url($before['url']); ?>" alt="<?php echo esc_attr($before['alt']); ?>" width="339" height="300" /></article>
    			<article class="col-6 col-md-3"><img src="<?php echo esc_url($after['url']); ?>" alt="<?php echo esc_attr($after['alt']); ?>" width="339" height="300" /></article>

            <?php // End loop.
            endwhile;
        endif; ?>
    <footer class="col-12 text-center light">
    	<p class="text-center light"><?php the_field('moderate_projection_credit'); ?></p>
    </footer>
	</div><!-- .container -->
	
	<div class="moderate-plus projection row">
  	<header class="col-12">
		<?php $moderate_plus_projection_title = get_field('moderate_plus_projection_title'); ?>
		<img src="<?php echo esc_url($moderate_plus_projection_title['url']); ?>" alt="<?php echo esc_url($moderate_plus_projection_title['alt']); ?>" width="1378" height="350" /></header>
    <?php // Check rows exists.
        if( have_rows('moderate_plus_projection') ):

            // Loop through rows.
            while( have_rows('moderate_plus_projection') ) : the_row(); ?>
				<?php $before = get_sub_field('before'); ?>
				<?php $after = get_sub_field('after'); ?>
				<article class="col-6 col-md-3"><img src="<?php echo esc_url($before['url']); ?>" alt="<?php echo esc_attr($before['alt']); ?>" width="339" height="300" /></article>
    			<article class="col-6 col-md-3"><img src="<?php echo esc_url($after['url']); ?>" alt="<?php echo esc_attr($after['alt']); ?>" width="339" height="300" /></article>

            <?php // End loop.
            endwhile;
        endif; ?>
    <footer class="col-12 text-center light">
    	<p class="text-center light"><?php the_field('moderate_plus_projection_credit'); ?></p>
    </footer>
	</div><!-- .container -->
	
	<div class="high projection row">
  	<header class="col-12">
		<?php $high_projection_title = get_field('high_projection_title'); ?>
		<img src="<?php echo esc_url($high_projection_title['url']); ?>" alt="<?php echo esc_url($high_projection_title['alt']); ?>" width="882" height="350" /></header>
    <?php // Check rows exists.
        if( have_rows('high_projection') ):

            // Loop through rows.
            while( have_rows('high_projection') ) : the_row(); ?>
				<?php $before = get_sub_field('before'); ?>
				<?php $after = get_sub_field('after'); ?>
				<article class="col-6 col-md-3"><img src="<?php echo esc_url($before['url']); ?>" alt="<?php echo esc_attr($before['alt']); ?>" width="339" height="300" /></article>
    			<article class="col-6 col-md-3"><img src="<?php echo esc_url($after['url']); ?>" alt="<?php echo esc_attr($after['alt']); ?>" width="339" height="300" /></article>

            <?php // End loop.
            endwhile;
        endif; ?>
    <footer class="col-12 text-center light">
    	<p class="text-center light"><?php the_field('high_projection_credit'); ?></p>
    </footer>
	</div><!-- .container -->
	
	<div class="xtra-high projection row">
  	<header class="col-12">
		<?php $xtra_high_projection_title = get_field('xtra_high_projection_title'); ?>
		<img src="<?php echo esc_url($xtra_high_projection_title['url']); ?>" alt="<?php echo esc_url($xtra_high_projection_title['alt']); ?>" width="800" height="363" /></header>
    <?php // Check rows exists.
        if( have_rows('xtra_high_projection') ):

            // Loop through rows.
            while( have_rows('xtra_high_projection') ) : the_row(); ?>
				<?php $before = get_sub_field('before'); ?>
				<?php $after = get_sub_field('after'); ?>
				<article class="col-6 col-md-3"><img src="<?php echo esc_url($before['url']); ?>" alt="<?php echo esc_attr($before['alt']); ?>" width="339" height="300" /></article>
    			<article class="col-6 col-md-3"><img src="<?php echo esc_url($after['url']); ?>" alt="<?php echo esc_attr($after['alt']); ?>" width="339" height="300" /></article>

            <?php // End loop.
            endwhile;
        endif; ?>
    <footer class="col-12 text-center light">
    	<p class="text-center light"><?php the_field('xtra_high_projection_credit'); ?></p>
    </footer>
	</div><!-- .container -->
	
	
</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp