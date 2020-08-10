<section class="hero row d-block">
  <video autoplay muted loop playsinline class="d-md-none" >
      <source src="<?php the_field('header_mobile'); ?>" type="video/mp4" >
  </video>

  <video autoplay muted loop playsinline class="d-none d-md-block" >
    <source src="<?php the_field('header'); ?>" type="video/mp4" >
  </video>
</section>

<section class="row why-choose text-center my-4  py-3 py-md-5">
	<header class="col-12 mb-2 mb-sm-5">		
		<?php $why_choose_title = get_field('why_choose_title'); ?>		
  		<img src="<?php echo esc_url($why_choose_title['url']); ?>" alt="<?php echo esc_attr($why_choose_title['alt']); ?>" />
	</header> 
	<article class="col-12 col-sm pt-3 pt-sm-0">
		<p class="lead"><?php the_field('why_choose_column_1_title'); ?></p>
<span class="opus">•••</span><br>
  		<?php the_field('why_choose_column_1'); ?>
	</article>
	<hr class="w-50 d-block d-sm-none">
	<article class="col-12 col-sm pt-sm-0">
		<p class="lead"><?php the_field('why_choose_column_2_title'); ?></p>
<span class="opus">•••</span><br>
    	<?php the_field('why_choose_column_2'); ?>
	</article>
	<hr class="w-50 d-block d-sm-none">
	<article class="col-12 col-sm pt-sm-0">
		<p class="lead"><?php the_field('why_choose_column_3_title'); ?></p>
<span class="opus">•••</span><br>
		<?php the_field('why_choose_column_3'); ?>
	</article>
</section>

<section class="expanders row my-5">
	<div class="col-12 text-center">
		<h2 class="light"><?php the_field('uniquely_designed_title'); ?></h2>
	</div>
	<div class="allo-derm container">
		<?php $uniquely_designed_image_1 = get_field('uniquely_designed_image_1'); ?>
		<?php $uniquely_designed_image_2 = get_field('uniquely_designed_image_2'); ?>
    	<img src="<?php echo esc_url($uniquely_designed_image_1['url']); ?>" alt="<?php echo esc_attr($uniquely_designed_image_1['alt']); ?>" width="1220" height="1021" /><img src="<?php echo esc_url($uniquely_designed_image_2['url']); ?>" alt="<?php echo esc_attr($uniquely_designed_image_2['alt']); ?>" width="1280" height="1021" />
	</div>
</section>

<section class="patient-safety-break-mobile row d-md-none" style="background-image:url(<?php the_field('patient_safety_background'); ?>); ?>;"></section>
  <section class="patient-safety-break row" style="background-image:url(<?php the_field('patient_safety_background'); ?>); ?>;">
	<div class="col-md-6 light text-center"><?php the_field('patient_safety'); ?></div>
</section>

<section class="pair row text-center">

	<div class="col-12 py-md-4 mt-md-5 tag">
		<h3><span><?php the_field('stats_left'); ?></span><span><?php the_field('stats_right'); ?></span></h3>
	</div>

  <div class="container my-md-5">
    <div class="row">    
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-md-5 mb-0">
      	<div class="rounded-circle">
      		<strong><?php the_field('circle_1_title'); ?></strong>
    <p><?php the_field('circle_1'); ?></p>
      	</div>
    	</article>
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-md-5 mb-0">
      	<div class="rounded-circle">
      		<strong><?php the_field('circle_2_title'); ?></strong>
      		<p><?php the_field('circle_2'); ?></p>
    		</div> 
    
    	</article>
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-md-5 mb-0">
      	<div class="rounded-circle">
      		<strong><?php the_field('circle_3_title'); ?></strong>
      		<p><?php the_field('circle_3'); ?></p>
      	</div>
 
    	</article>
    <!-- 	 -->
      <article class="col-12 mt-5">
      	    <p><?php the_field('stats_footnote'); ?></p>
      </article>
    </div><!-- .row -->
  </div><!-- .container -->

</section>

<section class="factor row text-center py-5">
  <div class="container" style="background-image: url(<?php the_field('satisfaction_rate_background'); ?>);">
    <div class="row">
    	<div class="col-12 py-md-4 tag">
			<?php $satisfaction_image = get_field('satisfaction_image'); ?>
      		<img src="<?php echo esc_url($satisfaction_image['url']); ?>" alt="<?php echo esc_attr($satisfaction_image['alt']); ?>" />
    		<h2><?php the_field('satisfaction_title'); ?></h2>
    	</div>  
  	  
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-md-5 mb-0">
      	<div class="rounded-circle _90">
      		<strong><?php the_field('satisfaction_rate_1'); ?></strong><br>
      	</div>
    		<h3><?php the_field('satisfaction_rate_1_title'); ?></h3>
    	</article>
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-md-5 mb-0">
      	<div class="rounded-circle _91">
      		<strong><?php the_field('satisfaction_rate_2'); ?></strong><br>
      	</div>
    		<h3><?php the_field('satisfaction_rate_2_title'); ?></h3>
    	</article>
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-md-5 mb-0">
      	<div class="rounded-circle _79">
      		<strong><?php the_field('satisfaction_rate_3'); ?></strong><br>
      	</div>
    		<h3><?php the_field('satisfaction_rate_3_title'); ?></h3>
    	</article>
    <!-- 	 -->
      <article class="col-12 mt-md-4">
      	    <?php the_field('satisfaction_footnote'); ?>
      </article>
    </div><!-- .row -->
  </div><!-- .container -->

</section>
<section class="board-certified container">
	<div class="row">
		<div class="col-12 text-center">
<!--   		<h1 class="image-h" style="background-image: url(@asset('images/board-certified.svg')); padding-bottom: 20%;"> board-certified </h1> -->
  		<h1 class="silver"><?php the_field('board_certified_title'); ?></h1>
  		<?php the_field('board_certified'); ?>
		</div>
	</div><!-- .row -->
</section>
<section class="row unmatched align-content-start" style="background-image: url(<?php the_field('warranty_background'); ?>);">
  <header class="col-12 col-md-8">
	  <?php $warranty_image = get_field('warranty_image'); ?>
	  <?php $warranty_image_mobile = get_field('warranty_image_mobile'); ?>
  	<img src="<?php echo esc_url($warranty_image['url']); ?>" class="d-none d-md-block" alt="<?php echo esc_url($warranty_image['url']); ?>" />
  	<div class="d-md-none row mb-3"><img src="<?php echo esc_url($warranty_image_mobile['url']); ?>" class="img-fluid h-100" alt="<?php echo esc_url($warranty_image_mobile['url']); ?>" width="800" height="1033" /></div>
  </header>
  <div class="w-100">
  	
  </div>
  <div class="col-12 order-2 order-md-1 col-md-7 mt-md-5 text-center light">
  	<p>Offer your patients the added peace-of-mind 
that comes with the industry’s best warranty, one that offers <span class="opus">longest length of coverage</span>, most financial assistance, and <span class="opus">least amount of warranty restrictions</span> amongst all implant brands.</p>
  </div>
</section>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>