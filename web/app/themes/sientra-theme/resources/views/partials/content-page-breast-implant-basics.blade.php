<section class="boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	

  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
		<?php $header_background = get_field('header_background'); ?>
		<img src="<?php echo esc_url($header_background['url']); ?>" alt="<?php echo esc_url($header_background['alt']); ?>" width="1200" height="712" />
  	</div>
  	
  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
		  <?php $header_title = get_field('header_title'); ?>
         <img src="<?php echo esc_url($header_title['url']); ?>" alt="<?php echo esc_url($header_title['alt']); ?>" />
      </div>
  	</div>

  </div>
</section>
<section class="get-started text-center light">
	<header class="my-4">
		<?php $getting_started_title = get_field('getting_started_title'); ?>
         <img src="<?php echo esc_url($getting_started_title['url']); ?>" alt="<?php echo esc_url($getting_started_title['alt']); ?>" class="img-fluid" />
		<h3 class="light"><?php the_field('getting_started_subtitle'); ?></h3>
	</header>
	<p class="mx-auto"><?php the_field('getting_started'); ?></p>
</section>

<section class="faq">

  <div class="accordion" id="accordionExample">
	  
	  <?php // Check rows exists.
        if( have_rows('faq') ):
	  
	  		$cardCount = 1;

            // Loop through rows.
            while( have_rows('faq') ) : the_row(); ?>
	  
	  			<div class="card">
				  <div class="card-header" id="heading<?php echo $cardCount; ?>">
					<h2 class="mb-0">
					  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $cardCount; ?>" aria-expanded="true" aria-controls="collapse<?php echo $cardCount; ?>">
						<?php the_sub_field('question'); ?>
					  </button>
					</h2>
				  </div>

				  <div id="collapse<?php echo $cardCount; ?>" class="collapse" aria-labelledby="heading<?php echo $cardCount; ?>" data-parent="#accordionExample">
					<div class="card-body">
					  <?php the_sub_field('answer'); ?>
					</div>
				  </div>
				</div>

            <?php $cardCount++;
	  		// End loop.
            endwhile;
        endif; ?>
  
  </div>
</section>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<!-- @php the_content() @endphp -->