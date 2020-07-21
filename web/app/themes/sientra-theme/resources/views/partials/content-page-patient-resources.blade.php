<section class="boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
      <?php the_field('page_title_background'); ?>
  	</div>

  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
        <?php 
		$page_title = get_field('page_title');
		if( !empty( $page_title ) ): ?>
			<img src="<?php echo esc_url($page_title['url']); ?>" alt="<?php echo esc_attr($page_title['alt']); ?>" />
		<?php endif; ?>
      </div>
  	</div>
  	  	
  </div>
</section>
<section class="resources container">
	<div class="row">
		<article class="col">
			<header><h3><?php the_field('column_1_header'); ?></h3></header>
        	<?php // Check rows exists.
			if( have_rows('column_1') ):

				// Loop through rows.
				while( have_rows('column_1') ) : the_row(); ?>

					<span><?php if (get_sub_field('column_1_file')) { ?><a href="<?php the_sub_field('column_1_file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('column_1_url'); ?>" target="_blank">WEB</a><?php } ?> </span> <?php the_sub_field('column_1_text'); ?>

				<?php // End loop.
				endwhile;
			endif; ?>
		</article>
		
		<article class="col">
  		  	<header><h3><?php the_field('column_2_header'); ?></h3></header>
			
			<?php // Check rows exists.
			if( have_rows('column_2') ):

				// Loop through rows.
				while( have_rows('column_2') ) : the_row(); ?>

					<span><?php if (get_sub_field('column_2_file')) { ?><a href="<?php the_sub_field('column_2_file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('column_2_url'); ?>" target="_blank">WEB</a><?php } ?> </span> <?php the_sub_field('column_2_text'); ?>

				<?php // End loop.
				endwhile;
			endif; ?>

		</article>
	
	</div><!-- .row -->
	<div class="row">
		<article class="col">
			
			<header><h3><?php the_field('column_3_header'); ?></h3></header>
			<?php the_field('column_3_text'); ?>
			
			
			<?php // Check rows exists.
			if( have_rows('column_3') ):

				// Loop through rows.
				while( have_rows('column_3') ) : the_row(); ?>

					<span><?php if (get_sub_field('column_3_file')) { ?><a href="<?php the_sub_field('column_3_file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('column_3_url'); ?>" target="_blank">WEB</a><?php } ?> </span> <?php the_sub_field('column_3_text'); ?>

				<?php // End loop.
				endwhile;
			endif; ?>
		</article>
		<article class="col">

			<header><h3><?php the_field('column_4_header'); ?></h3></header>
			<?php // Check rows exists.
			if( have_rows('column_4') ):

				// Loop through rows.
				while( have_rows('column_4') ) : the_row(); ?>

					<span><?php if (get_sub_field('column_4_file')) { ?><a href="<?php the_sub_field('column_4_file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('column_4_url'); ?>" target="_blank">WEB</a><?php } ?> </span> <?php the_sub_field('column_4_text'); ?>

				<?php // End loop.
				endwhile;
			endif; ?>
			
			<header><h3><?php the_field('column_5_header'); ?></h3></header>
			<?php // Check rows exists.
			if( have_rows('column_5') ):

				// Loop through rows.
				while( have_rows('column_5') ) : the_row(); ?>

					<span><?php if (get_sub_field('column_5_file')) { ?><a href="<?php the_sub_field('column_5_file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('column_5_url'); ?>" target="_blank">WEB</a><?php } ?> </span> <?php the_sub_field('column_5_text'); ?>

				<?php // End loop.
				endwhile;
			endif; ?>

 		</article>
		
	</div><!-- .row -->
	
	<div class="row commitment">
  	<article class="col-md-8 offset-md-2">
  		<header><h3><?php the_field('column_6_header'); ?></h3></header>
  		<?php // Check rows exists.
			if( have_rows('column_6') ):

				// Loop through rows.
				while( have_rows('column_6') ) : the_row(); ?>

					<span><?php if (get_sub_field('column_6_file')) { ?><a href="<?php the_sub_field('column_6_file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('column_6_url'); ?>" target="_blank">WEB</a><?php } ?> </span> <?php the_sub_field('column_6_text'); ?>

				<?php // End loop.
				endwhile;
			endif; ?>


  	</article>
		
	</div>	
	
</section>


<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp