<section class="science boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
      	<?php $header_background = get_field('header_background'); ?>
		<img src="<?php echo esc_url($header_background['url']); ?>" alt="<?php echo esc_url($header_background['alt']); ?>" width="1200" height="691" />
  	</div>

  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
		  <?php $header_title = get_field('header_title'); ?>
         <img src="<?php echo esc_url($header_title['url']); ?>" class="mx-auto" alt="<?php echo esc_url($header_title['alt']); ?>" />
      </div>
  	</div>
  	  	
  </div>
</section>

<section class="desired-look text-center mx-auto">
  <header>
<!--     <img src="@asset('images/implant-options-surg.svg')" class="img-fluid" alt="achieve your desired look" /> -->
    <h3 class="image-h mx-auto" style="background-image:url(<?php the_field('implant_options_image'); ?>);  height: 16vw; "><?php the_field('implant_options'); ?></h3>
  </header>
	<div class="h2-wrap">
		<h2><?php the_field('design_features'); ?></h2>
	</div>

	<div class="gel-diagram container">
		<?php $gel_diagram_mobile = get_field('gel_diagram_mobile'); ?>
		<?php $gel_diagram = get_field('gel_diagram'); ?>
      	<img src="<?php echo esc_url($gel_diagram_mobile['url']); ?>" class="img-fluid my-5 d-md-none" alt="<?php echo esc_url($gel_diagram_mobile['alt']); ?>" width="1000" height="1333" />
		<img src="<?php echo esc_url($gel_diagram['url']); ?>" class="img-fluid my-5 d-none d-md-block" alt="<?php echo esc_url($gel_diagram['alt']); ?>" />
	</div><!-- .container -->
</section>
<section class="surfaces row text-center">
	<div class="mx-3 mb-3 wrap">
  	<div>
		<?php $smooth_surface_image = get_field('smooth_surface_image'); ?>
    	<img src="<?php echo esc_url($smooth_surface_image['url']); ?>" alt="<?php echo esc_url($smooth_surface_image['alt']); ?>" />
  		<?php the_field('smooth_surface'); ?>
  	</div>
	</div>
	<div class="mx-3 mb-3 wrap">
  	<div>
	  	<?php $microtextured_surface_image = get_field('microtextured_surface_image'); ?>
		<img src="<?php echo esc_url($microtextured_surface_image['url']); ?>" class="micro" alt="<?php echo esc_url($microtextured_surface_image['alt']); ?>" />
		<?php the_field('microtextured_surface'); ?>
  	</div>
	</div>
</section>

<section class="surface-diagram container my-4">
	<?php $surface_diagram_mobile = get_field('surface_diagram_mobile'); ?>
	<?php $surface_diagram = get_field('surface_diagram'); ?>  
	<img src="<?php echo esc_url($surface_diagram_mobile['url']); ?>" class="img-fluid d-md-none" alt="<?php echo esc_url($surface_diagram_mobile['alt']); ?>" width="800" height="1368" />
	<img src="<?php echo esc_url($surface_diagram['url']); ?>" class="img-fluid d-none d-md-block" alt="<?php echo esc_url($surface_diagram['alt']); ?>" />
	
</section>
<section class="gel-break-mobile row d-md-none" style="background-image:url(<?php the_field('gels_background'); ?>); ?>;"></section>
<section class="gel-break row" style="background-image:url(<?php the_field('gels_background'); ?>); ?>;">
	<div class="col-12 col-md-6 offset-md-6 text-center">
		<h2 class="light"><?php the_field('gels_title'); ?></h2>
<p class="light"><?php the_field('gels'); ?></p>
	</div>
</section>

<section class="surfaces row text-center">
	<div class="mx-3 mb-3 wrap">
  	<div>
		<?php $hsc_image = get_field('hsc_image'); ?>
    	<img src="<?php echo esc_url($hsc_image['url']); ?>" alt="<?php echo esc_url($hsc_image['alt']); ?>" />
      <?php the_field('hsc'); ?>
      
  	</div>
	</div>
	<div class="mx-3 mb-3 wrap">
  	<div>
	  	<?php $hsc_plus_image = get_field('hsc_plus_image'); ?>
    	<img src="<?php echo esc_url($hsc_plus_image['url']); ?>" alt="<?php echo esc_url($hsc_plus_image['alt']); ?>" />
      <?php the_field('hsc_plus'); ?>
  	</div>
	</div>
</section>
<section class="strength row my-5">
	<header class="col-12">
  	<h2 class="image-h" style="background-image: url(<?php the_field('optimal_balance_image'); ?>); height: 14vw;"><?php the_field('optimal_balance_title'); ?></h2>
		<h3 class="light text-center"><?php the_field('optimal_balance'); ?></h3>
	</header>
	<div class="col-md-6 px-5 my-2">
		<?php $gel_graph = get_field('gel_graph'); ?>
		<img src="<?php echo esc_url($gel_graph['url']); ?>" alt="<?php echo esc_url($gel_graph['alt']); ?>" />
		
	</div>
	<div class="softness col-md-5 my-2 align-self-center light text-center"> 
  	<?php the_field('gel_graph_text'); ?>
	</div>
	<small class="my-md-5 mx-5"><?php the_field('gel_graph_footnote'); ?></small>
</section>
<style>
	.luxe {
    	background-image: url(<?php the_field('luxe_background_mobile'); ?>);
	}

    @media (min-width: 768px) { 
		.luxe {
       		background-image: url(<?php the_field('luxe_background'); ?>);
		}
    }
</style>
<section class="luxe row mb-5">
 <header class="col-6 col-sm-4">
	 <?php $opus_luxe = get_field('opus_luxe'); ?>
	 <img src="<?php echo esc_url($opus_luxe['url']); ?>" class="img-fluid" alt="<?php echo esc_url($opus_luxe['alt']); ?>" width="949" height="353" /></header>
 <div class="_250-round col-12 col-md-4 mb-2">
	 <?php $choices_250 = get_field('choices_250'); ?>
  <img src="<?php echo esc_url($choices_250['url']); ?>" alt="<?php echo esc_url($choices_250['alt']); ?>" />
 </div>
 
<style>
	.luxe .luxe-projections .projection-bg.low {
        background-image: url(<?php the_field('luxe_projection_low'); ?>);
    }
    .luxe .luxe-projections .projection-bg.mod {
        background-image: url(<?php the_field('luxe_projection_moderate'); ?>);
    }
    .luxe .luxe-projections .projection-bg.mod-plus {
        background-image: url(<?php the_field('luxe_projection_moderate_plus'); ?>);
    }
    .luxe .luxe-projections .projection-bg.high {
        background-image: url(<?php the_field('luxe_projection_high'); ?>);
    }
    .luxe .luxe-projections .projection-bg.xtra-high {
        background-image: url(<?php the_field('luxe_projection_xtra_high'); ?>);
    }	
</style>
 
 <div class="d-none d-md-block luxe-projections text-center">
 	<div class="xtra-high projection">
		
 	</div>
 	<div class="high projection">
 		
 	</div> 
 	<div class="mod-plus projection">
		
 	</div>
 	<div class="mod projection">
 		
 	</div> 
 	<div class="low projection">
 		
 	</div> 
 	
 	<div class="xtra-high projection-bg">
 		<p><?php the_field('luxe_projection_xtra_high_text'); ?></p>
 	</div>
 	<div class="high projection-bg">
 		<p><?php the_field('luxe_projection_high_text'); ?></p>
 	</div>
 	<div class="mod-plus projection-bg">
 		<p><?php the_field('luxe_projection_moderate_plus_text'); ?></p>
 	</div>
 	<div class="mod projection-bg">
 		<p><?php the_field('luxe_projection_moderate_text'); ?></p>
 	</div>
 	<div class="low projection-bg">
 		<p><?php the_field('luxe_projection_low_text'); ?></p>
 	</div>
 </div>
 
 
 <div class="implant col-12 col-md-4 text-center d-md-none">
   
     <div class="swiper-container swiper-luxe-projection">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php the_field('luxe_projection_low'); ?>" class="img-fluid" alt="luxe-projection-low" width="800" height="679" />
          <p><?php the_field('luxe_projection_low_text'); ?></p>
        </div>
        <div class="swiper-slide">
          <img src="<?php the_field('luxe_projection_moderate'); ?>" class="img-fluid" alt="luxe-projection-moderate" width="800" height="554" />
          <p><?php the_field('luxe_projection_moderate_text'); ?></p>
        </div>
        <div class="swiper-slide">
          <img src="<?php the_field('luxe_projection_moderate_plus'); ?>" class="img-fluid" alt="luxe-projection-moderate-plus" width="800" height="570" />
          <p><?php the_field('luxe_projection_moderate_plus_text'); ?></p>
        </div>
        <div class="swiper-slide">
          <img src="<?php the_field('luxe_projection_high'); ?>" class="img-fluid" alt="luxe-projection-high" width="800" height="592" />       
          <p><?php the_field('luxe_projection_high_text'); ?></p>
        </div>
        <div class="swiper-slide">
          <img src="<?php the_field('luxe_projection_xtra_high'); ?>" class="img-fluid" alt="luxe-projection-xrta-high" width="800" height="506" />
          <p><?php the_field('luxe_projection_xtra_high_text'); ?></p>
        </div>
      </div><!-- .swiper-wrapper -->
     </div>

 
 </div>
</section>

<style>
	.curve {
    	background-image: url(<?php the_field('curve_background_mobile'); ?>);
	}

    @media (min-width: 768px) { 
		.curve {
       		background-image: url(<?php the_field('curve_background'); ?>);
		}
    }
</style>

<section class="curve row mb-5">
 <div class="_90-options col-12 col-md-4 mb-2 offset-md-5">
	 <?php $options_90 = get_field('options_90'); ?>
  <img src="<?php echo esc_url($options_90['url']); ?>" alt="<?php echo esc_url($options_90['alt']); ?>" />
 </div>
	
<style>
	.curve .curve-projections .projection-bg.low {
        background-image: url(<?php the_field('curve_projection_low'); ?>);
    }
    .curve .curve-projections .projection-bg.high {
        background-image: url(<?php the_field('curve_projection_high'); ?>);
    }
</style>
 
  <div class="d-none d-md-flex col-md-3 curve-projections text-center">

  	<div class="high projection">
  		
  	</div> 

  	<div class="low projection">
  		
  	</div> 
  	
  	<div class="high projection-bg">
  		<p><?php the_field('curve_projection_high_text'); ?></p>
  	</div>

  	<div class="low projection-bg">
  		<p><?php the_field('curve_projection_low_text'); ?></p>
  	</div>
 </div>
 
 <div class="implant col-12 d-md-none text-center">
   
     <div class="swiper-container swiper-curve-projection">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
           <img src="<?php the_field('curve_projection_low'); ?>" class="img-fluid" alt="curve-projection-low" width="500" height="1048" />
           <p><?php the_field('curve_projection_low_text'); ?></p>
        </div>
        <div class="swiper-slide">
          <img src="<?php the_field('curve_projection_high'); ?>" class="img-fluid" alt="curve-projection-high" width="500" height="1046" />
          <p><?php the_field('curve_projection_high_text'); ?></p>
        </div>
      </div><!-- .swiper-wrapper -->
     </div>
 	
 </div>

</section>
<section class="love row my-5">
	<div class="col-12 col-md-5">
		<?php $results_image = get_field('results_image'); ?>
		<img src="<?php echo esc_url($results_image['url']); ?>" alt="<?php echo esc_url($results_image['alt']); ?>" />
	</div>
	<div class="col-12 col-md-8 testimonial ml-auto">
  	<img src="@asset('images/quote.svg')" class="quote-icon" alt="quote" />
  	<?php the_field('quote'); ?>
	</div>
</section>


<section class="row realself text-center">
  <div class="container-fluid wrap px-0 px-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 px-lg-3">
		<?php $realself_background = get_field('realself_background'); ?>
      <img src="<?php echo esc_url($realself_background['url']); ?>" alt="<?php echo esc_url($realself_background['alt']); ?>" width="800" height="767" />
  	</div>

  	<div class="col-12 col-lg-5 ml-auto rated">
      <div class="rated-inner">
		  <?php $realself_image = get_field('realself_image'); ?>
        <img src="<?php echo esc_url($realself_image['url']); ?>" alt="<?php echo esc_url($realself_image['alt']); ?>" />
      	<h2><?php the_field('realself'); ?></h2>
      </div>
      <small><?php the_field('realself_footnote'); ?></small>
  	</div>
  	  	
  </div>
</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp