<section class="boxy-box row text-center">
  <div class="container-fluid wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 px-lg-3">
      <?php $header_background = get_field('header_background'); ?>
		<img src="<?php echo esc_url($header_background['url']); ?>" alt="<?php echo esc_url($header_background['alt']); ?>" width="1500" height="861" />
  	</div>

  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
        <?php $header_title = get_field('header_title'); ?>
         <img src="<?php echo esc_url($header_title['url']); ?>" alt="<?php echo esc_url($header_title['alt']); ?>" />
        
      </div>
  	</div>
  	  	
  </div>
</section>

<section class="container">
	<div class="low projection row">
  	<header class="col-12 text-center">
		<?php $patient_1_title = get_field('patient_1_title'); ?>
    	<img src="<?php echo esc_url($patient_1_title['url']); ?>" alt="<?php echo esc_url($patient_1_title['alt']); ?>" />
      <h3><?php the_field('patient_1'); ?></h3>
  	</header>
		
		<?php // Check rows exists.
        if( have_rows('patient_1_photos') ):

            // Loop through rows.
            while( have_rows('patient_1_photos') ) : the_row(); ?>
				<?php $photo = get_sub_field('photo'); ?>
				<article class="col-12 col-md-4"><img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" /></article>

            <?php // End loop.
            endwhile;
        endif; ?>
    <footer class="col-12 text-center mt-4">
    	<p><?php the_field('patient_1_credit'); ?></p>
    </footer>
	</div><!-- .container -->


	<div class="low projection row">
  	<header class="col-12 text-center">
    	<?php $patient_2_title = get_field('patient_2_title'); ?>
    	<img src="<?php echo esc_url($patient_2_title['url']); ?>" alt="<?php echo esc_url($patient_2_title['alt']); ?>" />
      <h3><?php the_field('patient_2'); ?></h3>
  	</header>
		
		<?php // Check rows exists.
        if( have_rows('patient_2_photos') ):

            // Loop through rows.
            while( have_rows('patient_2_photos') ) : the_row(); ?>
				<?php $photo = get_sub_field('photo'); ?>
				<article class="col-12 col-md-3"><img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" /></article>

            <?php // End loop.
            endwhile;
        endif; ?>
    <footer class="col-12 text-center mt-4">
    	<p><?php the_field('patient_2_credit'); ?></p>
    </footer>
	</div><!-- .container -->
	
	
	<div class="low projection row">
  	<header class="col-12 text-center">
    	<?php $patient_3_title = get_field('patient_3_title'); ?>
    	<img src="<?php echo esc_url($patient_3_title['url']); ?>" alt="<?php echo esc_url($patient_3_title['alt']); ?>" />
      <h3><?php the_field('patient_3'); ?></h3>
  	</header>
		
		<?php // Check rows exists.
        if( have_rows('patient_3_photos') ):

            // Loop through rows.
            while( have_rows('patient_3_photos') ) : the_row(); ?>
				<?php $photo = get_sub_field('photo'); ?>
				<article class="col-12 col-md-3"><img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" /></article>

            <?php // End loop.
            endwhile;
        endif; ?>
    <footer class="col-12 text-center mt-4">
    	<p><?php the_field('patient_3_credit'); ?></p>
    </footer>
	</div><!-- .container -->


</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp

