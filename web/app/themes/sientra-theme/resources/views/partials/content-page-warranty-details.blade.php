<section class="boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
		<?php $header_background = get_field('header_background'); ?>
		<img src="<?php echo esc_url($header_background['url']); ?>" alt="<?php echo esc_url($header_background['alt']); ?>" width="1200" height="687" />
  	</div>

  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
		  <?php $header_title = get_field('header_title'); ?>
         <img src="<?php echo esc_url($header_title['url']); ?>" alt="<?php echo esc_url($header_title['alt']); ?>" />
      </div>
  	</div>
  	  	
  </div>
</section>

<section class="comfort row">
 
  <?php the_field('headline'); ?>



</section>
<div class="bg-wrap row">
  <section class="coverage">
    <div class="lead col-md-8 offset-md-2">
      <?php the_field('intro_text'); ?>
    </div>

  	<div class="col-12 col-md-6 col-lg-8 pl-md-5">
  		<p><?php the_field('coverage_title'); ?></p>
  		<ul class="list-group">
			<?php // Check rows exists.
            if( have_rows('coverage') ):
                // Loop through rows.
                while( have_rows('coverage') ) : the_row(); ?>
                    <li class="list-group-item"><?php the_sub_field('coverage_item'); ?></li>
                <?php // End loop.
                endwhile;
            endif; ?>
  		</ul>
  		<p class="text-center small"><?php the_field('qualifying_patients'); ?> </p>
  		<?php the_field('terms'); ?>
  	</div>
  </section>
</div>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp