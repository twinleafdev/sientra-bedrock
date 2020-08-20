<section class="boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
      <img src="@asset('images/resources.jpg')" alt="resources" width="1500" height="865" />
  	</div>

  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
        <img src="@asset('images/patient-surgeon-resources.svg')" alt="patient surgeon resources" />
      </div>
  	</div>
  	  	
  </div>
</section>

<section class="resources container">
	
	<div class="row">
		
  	<div class="col-md-6">
    	<header>
      	<h3 class="image-h" style="background-image:url(<?php the_field('for_surgeons_title'); ?>);  height: 4.5vw; "><?php the_field('for_surgeons_title_text'); ?></h3>
    	</header>
    	
  		<article class="col">
        <header><h3><?php the_field('surgeons_column_1_header'); ?></h3></header>
			
			<?php // Check rows exists.
			if( have_rows('surgeons_column_1') ):

				// Loop through rows.
				while( have_rows('surgeons_column_1') ) : the_row(); ?>

					<div class="d-flex"><span><?php if (get_sub_field('file')) { ?><a href="<?php the_sub_field('file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('url'); ?>" target="_blank">WEB</a><?php } ?> </span> <p><?php the_sub_field('text'); ?></p></div>

				<?php // End loop.
				endwhile;
			endif; ?>
                    
  		</article>
  		
  		<article class="col">
  			<header><h3><?php the_field('surgeons_column_2_header'); ?></h3></header>
			
			<?php // Check rows exists.
			if( have_rows('surgeons_column_2') ):

				// Loop through rows.
				while( have_rows('surgeons_column_2') ) : the_row(); ?>

					<div class="d-flex"><span><?php if (get_sub_field('file')) { ?><a href="<?php the_sub_field('file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('url'); ?>" target="_blank">WEB</a><?php } ?> </span> <p><?php the_sub_field('text'); ?></p></div>

				<?php // End loop.
				endwhile;
			endif; ?>
            
  		</article>
  		
  		
  		<article class="col">
  			<header><h3><?php the_field('surgeons_column_3_header'); ?></h3></header>
			
			<?php // Check rows exists.
			if( have_rows('surgeons_column_3') ):

				// Loop through rows.
				while( have_rows('surgeons_column_3') ) : the_row(); ?>

					<div class="d-flex"><span><?php if (get_sub_field('file')) { ?><a href="<?php the_sub_field('file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('url'); ?>" target="_blank">WEB</a><?php } ?> </span> <p><?php the_sub_field('text'); ?></p></div>

				<?php // End loop.
				endwhile;
			endif; ?>
            
  		</article>

  		<article class="col">
  			<header><h3><?php the_field('surgeons_column_4_header'); ?></h3></header>
			
			<?php // Check rows exists.
			if( have_rows('surgeons_column_4') ):

				// Loop through rows.
				while( have_rows('surgeons_column_4') ) : the_row(); ?>

					<div class="d-flex"><span><?php if (get_sub_field('file')) { ?><a href="<?php the_sub_field('file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('url'); ?>" target="_blank">WEB</a><?php } ?> </span> <p><?php the_sub_field('text'); ?></p></div>

				<?php // End loop.
				endwhile;
			endif; ?>
   		</article>
   		
  		<article class="col">    		  		
  			<header><h3><?php the_field('surgeons_column_5_header'); ?></h3></header>
			
			<?php // Check rows exists.
			if( have_rows('surgeons_column_5') ):

				// Loop through rows.
				while( have_rows('surgeons_column_5') ) : the_row(); ?>

					<div class="d-flex"><span><?php if (get_sub_field('file')) { ?><a href="<?php the_sub_field('file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('url'); ?>" target="_blank">WEB</a><?php } ?> </span> <p><?php the_sub_field('text'); ?></p></div>

				<?php // End loop.
				endwhile;
			endif; ?>
   		</article>
  		
    </div>	


  	<div class="col-md-6">
    	<header>
      	<h3 class="image-h" style="background-image:url(<?php the_field('for_patients_title'); ?>);  height: 4.8vw; "><?php the_field('for_patients_title_text'); ?></h3>
    	</header>
  		<article class="col">
        <header><h3><?php the_field('patients_column_1_header'); ?></h3></header>
          <?php // Check rows exists.
			if( have_rows('patients_column_1') ):

				// Loop through rows.
				while( have_rows('patients_column_1') ) : the_row(); ?>

					<div class="d-flex"><span><?php if (get_sub_field('file')) { ?><a href="<?php the_sub_field('file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('url'); ?>" target="_blank">WEB</a><?php } ?> </span> <p><?php the_sub_field('text'); ?></p></div>

				<?php // End loop.
				endwhile;
			endif; ?>
  		</article>
  		
  		<article class="col">
  			<header><h3><?php the_field('patients_column_2_header'); ?></h3></header>
          <?php // Check rows exists.
			if( have_rows('patients_column_2') ):

				// Loop through rows.
				while( have_rows('patients_column_2') ) : the_row(); ?>

					<div class="d-flex"><span><?php if (get_sub_field('file')) { ?><a href="<?php the_sub_field('file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('url'); ?>" target="_blank">WEB</a><?php } ?> </span> <p><?php the_sub_field('text'); ?></p></div>

				<?php // End loop.
				endwhile;
			endif; ?>
  
  		</article>

  		<article class="col">
  			<header><h3><?php the_field('patients_column_3_header'); ?></h3></header>
          <?php // Check rows exists.
			if( have_rows('patients_column_3') ):

				// Loop through rows.
				while( have_rows('patients_column_3') ) : the_row(); ?>

					<div class="d-flex"><span><?php if (get_sub_field('file')) { ?><a href="<?php the_sub_field('file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('url'); ?>" target="_blank">WEB</a><?php } ?> </span> <p><?php the_sub_field('text'); ?></p></div>

				<?php // End loop.
				endwhile;
			endif; ?>
   		</article>
   		
  		<article class="col">
  			<header><h3><?php the_field('patients_column_4_header'); ?></h3></header>
			
			<?php the_field('patients_column_4_text'); ?>
          
  		</article>
  		

  		
    </div>	
  </div><!-- .row -->
	
	
	
	<div class="row commitment">
  	<article class="col-md-8 offset-md-2">
  		<header><h3><?php the_field('patients_column_5_header'); ?></h3></header>
		
		<?php // Check rows exists.
			if( have_rows('patients_column_5') ):

				// Loop through rows.
				while( have_rows('patients_column_5') ) : the_row(); ?>

					<div class="d-flex"><span><?php if (get_sub_field('file')) { ?><a href="<?php the_sub_field('file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('url'); ?>" target="_blank">WEB</a><?php } ?> </span> <p><?php the_sub_field('text'); ?></p></div>

				<?php // End loop.
				endwhile;
			endif; ?>

  	</article>
		
	</div><!-- .row -->
	
	
</section>


<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp