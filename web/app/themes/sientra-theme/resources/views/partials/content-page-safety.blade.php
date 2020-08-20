<section class="boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
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

<section class="patient-safety row text-center">
    <header class="col-12">
      	<?php $safety_title = get_field('safety_title'); ?>
         <img src="<?php echo esc_url($safety_title['url']); ?>" alt="<?php echo esc_url($safety_title['alt']); ?>" />
    </header>
  	<div class="col-12 col-md-10 offset-md-1 my-5">
    			<h2 class="light"><?php the_field('safety'); ?></h2>
  	</div>

    <div class="diagram col-12 mb-5" style="background-image:url(<?php the_field('safety_diagram_background'); ?>); ">
		<?php $safety_diagram = get_field('safety_diagram'); ?>
		<?php $safety_diagram_mobile = get_field('safety_diagram_mobile'); ?>
     	<img src="<?php echo esc_url($safety_diagram_mobile['url']); ?>" class="img-fluid d-md-none" alt="<?php echo esc_url($safety_diagram_mobile['alt']); ?>" width="1000" height="974" />
     	<img src="<?php echo esc_url($safety_diagram['url']); ?>" class="img-fluid d-none d-md-block" alt="<?php echo esc_url($safety_diagram['alt']); ?>" />
    </div>

    <div class="container">
      <div class="row">    
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5">
        	<div class="rounded-circle">
        		<strong><?php the_field('stat_circle_title_1'); ?></strong>
      <p><?php the_field('stat_circle_1'); ?></p>
        	</div>
      		<h3><?php the_field('term_title_1'); ?></h3>
      <p><?php the_field('term_1'); ?></p>
      	</article>
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5">
        	<div class="rounded-circle">
        		<strong><?php the_field('stat_circle_title_2'); ?></strong>
      <p><?php the_field('stat_circle_2'); ?></p>
        	</div>
      		<h3><?php the_field('term_title_2'); ?></h3>
      <p><?php the_field('term_2'); ?></p> 
      
      	</article>
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-1 mb-md-5">
        	<div class="rounded-circle">
        		<strong><?php the_field('stat_circle_title_3'); ?></strong>
      <p><?php the_field('stat_circle_3'); ?></p>
        	</div>
      		<h3><?php the_field('term_title_3'); ?></h3>
      <p><?php the_field('term_3'); ?></p>
      	</article>
      <!-- 	 -->
        <article class="col-12">
        	    <p><?php the_field('stat_footnote'); ?></p>
        </article>
      </div><!-- .row -->
    </div><!-- .container -->
  
</section>
<section class="warranty row">
	<div class="h-line col-9 col-md-6 offset-md-3 text-center">
		<?php $warranty_title = get_field('warranty_title'); ?>
  	<img src="<?php echo esc_url($warranty_title['url']); ?>" alt="<?php echo esc_url($warranty_title['alt']); ?>" />
	</div>
	<div class="col-3 col-md-2">
		<?php $warranty_image = get_field('warranty_image'); ?>
  	<img src="<?php echo esc_url($warranty_image['url']); ?>" alt="<?php echo esc_url($warranty_image['alt']); ?>" class="img-fluid" />
	</div>
	<div class="col-12 col-md-8 offset-md-2 text-center my-5">
		<h2 class="light"><?php the_field('warranty'); ?></h2>
	</div>
</section>
<section class="platinum20 container">
	<div class="inner">
  	<div class="col-12 text-center">
  		<?php the_field('platinum20_intro'); ?>
  	</div>
  	<div class="col-12 col-md-10 offset-md-1">		
		<?php the_field('platinum20'); ?>
  	</div>

	</div>
</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp