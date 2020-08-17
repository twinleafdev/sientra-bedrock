<section class="boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
		<?php $header_background = get_field('header_background'); ?>
		<img src="<?php echo esc_url($header_background['url']); ?>" alt="<?php echo esc_url($header_background['alt']); ?>" width="1500" height="859" />
  	</div>
  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
		  <?php $header_title = get_field('header_title'); ?>
         <img src="<?php echo esc_url($header_title['url']); ?>" alt="<?php echo esc_url($header_title['alt']); ?>" width="2700" height="1200" />
      </div>
  	</div>
  	  	
  </div>
</section>

<section class="lead container text-center mb-5">
  <?php the_field('enhance'); ?>
</section>

<section class="practice-assessment container">
	<div class="row">
		<header class="col-12">
			<h2 class="image-h" style="background-image: url(<?php the_field('practice_assessment_image'); ?>); height: 6vw;"><?php the_field('practice_assessment_text'); ?></h2>
		</header>
		<article class="col-md-6">
			<h3><?php the_field('operations_title'); ?></h3>
			<ul class="opus-list">
				<?php // Check rows exists.
				if( have_rows('operations') ):
					// Loop through rows.
					while( have_rows('operations') ) : the_row(); ?>
						<li><?php the_sub_field('operations_item'); ?></li>
					<?php // End loop.
					endwhile;
				endif; ?>
			</ul>
		</article>
		<article class="col-md-6">
			<h3><?php the_field('human_resources_title'); ?></h3>
			<ul class="opus-list">
				<?php // Check rows exists.
				if( have_rows('human_resources') ):
					// Loop through rows.
					while( have_rows('human_resources') ) : the_row(); ?>
						<li><?php the_sub_field('human_resources_item'); ?></li>
					<?php // End loop.
					endwhile;
				endif; ?>
			</ul>
		</article>
		<article class="col-md-6">
			<h3><?php the_field('marketing_title'); ?></h3>
			<ul class="opus-list">
				<?php // Check rows exists.
				if( have_rows('marketing') ):
					// Loop through rows.
					while( have_rows('marketing') ) : the_row(); ?>
						<li><?php the_sub_field('marketing_item'); ?></li>
					<?php // End loop.
					endwhile;
				endif; ?>
			</ul>
		</article>
		<article class="col-md-6">
			<h3><?php the_field('business_and_strategic_planning_title'); ?></h3>
			<ul class="opus-list">
				<?php // Check rows exists.
				if( have_rows('business_and_strategic_planning') ):
					// Loop through rows.
					while( have_rows('business_and_strategic_planning') ) : the_row(); ?>
						<li><?php the_sub_field('business_and_strategic_planning_item'); ?></li>
					<?php // End loop.
					endwhile;
				endif; ?>
			</ul>
		</article>
	</div><!-- .row -->
</section>

<section class="training row">
  <header class="col-12">
  	<h2 class="text-center"><?php the_field('areas_of_training_title'); ?></h2>
  </header>
	
	<div class="col-10 offset-1">
		<div class="inner">
			<ul class="opus-list">
				<?php // Check rows exists.
				if( have_rows('areas_of_training') ):
					// Loop through rows.
					while( have_rows('areas_of_training') ) : the_row(); ?>
						<li><?php the_sub_field('areas_of_training_item'); ?></li>
					<?php // End loop.
					endwhile;
				endif; ?>
			</ul>
		</div>
	</div>
</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<!-- @php the_content() @endphp -->