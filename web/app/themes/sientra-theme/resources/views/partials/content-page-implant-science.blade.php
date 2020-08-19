<section class="science boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
		<?php $header_background = get_field('header_background'); ?>
		<img src="<?php echo esc_url($header_background['url']); ?>" alt="<?php echo esc_url($header_background['alt']); ?>" width="1200" height="691" />
  	</div>

  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
		  <?php $header_title = get_field('header_title'); ?>
         <img src="<?php echo esc_url($header_title['url']); ?>" alt="<?php echo esc_url($header_title['alt']); ?>" class="mx-auto" />
      </div>
  	</div>
  	  	
  </div>
</section>
<section class="desired-look text-center mx-auto">
  <header>
    <h2 class="image-h" style="background-image: url(<?php the_field('desired_look_background'); ?>); height:13vw;"><?php the_field('desired_look_text'); ?></h2>
  </header>
	<div class="h2-wrap">
		<h2><?php the_field('desired_look_subtitle'); ?></h2>
	</div>
	<div class="row">
		<div class="col-12 col-md-6 my-3 px-5">
			<p><?php the_field('round_implants'); ?></p>
			<?php $round_implants_diagram_mobile = get_field('round_implants_diagram_mobile'); ?>
			<img src="<?php echo esc_url($round_implants_diagram_mobile['url']); ?>" class="img-fluid d-md-none" alt="<?php echo esc_url($round_implants_diagram_mobile['alt']); ?>" width="1000" height="597" />
		</div>
		<div class="col-12 col-md-6 my-3 px-5">
			<p><?php the_field('teardrop_implants'); ?></p>
			<?php $teardrop_implants_diagram_mobile = get_field('teardrop_implants_diagram_mobile'); ?>
			<img src="<?php echo esc_url($teardrop_implants_diagram_mobile['url']); ?>" class="img-fluid d-md-none" alt="<?php echo esc_url($teardrop_implants_diagram_mobile['alt']); ?>" width="1091" height="845" />
		</div>
	</div><!-- .row -->
	<?php $implants_diagram = get_field('implants_diagram'); ?>
	<img src="<?php echo esc_url($implants_diagram['url']); ?>" class="img-fluid my-5 d-none d-md-block" alt="<?php echo esc_url($implants_diagram['alt']); ?>" width="2500" height="911" />
</section>
<section class="surfaces row text-center">
	
	<div class="mx-3 mb-3 wrap">
  	<div>
		<?php $smooth_surface_title = get_field('smooth_surface_title'); ?>
    	<img src="<?php echo esc_url($smooth_surface_title['url']); ?>" alt="<?php echo esc_url($smooth_surface_title['alt']); ?>" />
  		<?php the_field('smooth_surface'); ?>
  	</div>
	</div>
	<div class="mx-3 mb-3 wrap">
  	<div>
		<?php $microtextured_title = get_field('microtextured_title'); ?>
	  	<img src="<?php echo esc_url($microtextured_title['url']); ?>" class="micro" alt="<?php echo esc_url($microtextured_title['alt']); ?>" />
<?php the_field('microtextured'); ?>
  	</div>
	</div>
</section>
<section class="feel-so-real text-center"> 
	<header>
		<?php $feel_so_real = get_field('feel_so_real'); ?>
		<img src="<?php echo esc_url($feel_so_real['url']); ?>" class="w-50 mt-4"alt="<?php echo esc_url($feel_so_real['alt']); ?>" />
	</header>
	<div class="h2-wrap">
		<h2><?php the_field('choose'); ?></h2>
	</div>
	<div class="optimal-feel col-12">
  	<h2 class="image-h" style="background-image: url(<?php the_field('optimal_feel_image'); ?>); height:10vw;"><?php the_field('optimal_feel_text'); ?></h2>
  	
<!--   	<img src="@asset('images/optimal-feel.svg')" class="w-25 mb-4" alt="optimal-feel" /><br> -->
	</div>
	<div class="row">
  	<div class="col-12 col-sm-10 offset-sm-1 px-5">
		<?php $cohesivity = get_field('cohesivity'); ?>
  		<img src="<?php echo esc_url($cohesivity['url']); ?>" alt="<?php echo esc_url($cohesivity['alt']); ?>" />
  	</div>
		<?php $cohesive_image = get_field('cohesive_image'); ?>
		<?php $cohesive_image_animation = get_field('cohesive_image_animation'); ?>
		<?php $cohesive_plus_image = get_field('cohesive_plus_image'); ?>
		<?php $cohesive_plus_image_animation = get_field('cohesive_plus_image_animation'); ?>
		<div id="hscPress" class="col-12 col-md-5 px-4 offset-md-1">			
      <img src="<?php echo esc_url($cohesive_image['url']); ?>" alt="<?php echo esc_url($cohesive_image['alt']); ?>" id="hsc" class="img-fluid mb-4 d-none d-md-block" width="1000" height="656" />
      <img src="<?php echo esc_url($cohesive_image_animation['url']); ?>" alt="<?php echo esc_url($cohesive_image_animation['alt']); ?>" class="img-fluid mb-4 d-md-none" width="1000" height="656" />
      <script> 
	      jQuery.preloadImages = function() {
			  for (var i = 0; i < arguments.length; i++) {
			    jQuery("<img />").attr("src", arguments[i]);
			  }
			}
			
		  jQuery.preloadImages('<?php echo esc_url($cohesive_image_animation['url']); ?>','<?php echo esc_url($cohesive_plus_image_animation['url']); ?>');
		       
          function Start() {
            jQuery('#hscPress').on({
            
            mouseenter: function () { jQuery('#hsc').prop('src', '<?php echo esc_url($cohesive_image_animation['url']); ?>') },
            mouseleave: function () { jQuery('#hsc').prop('src', '<?php echo esc_url($cohesive_image['url']); ?>') }
            
              });
          }   
          jQuery(Start);
      </script>
      
			<?php the_field('cohesive'); ?>
		</div>
		<div id="hscPlusPress" class="col-12 col-md-5 px-4">
      <img src="<?php echo esc_url($cohesive_plus_image['url']); ?>" alt="<?php echo esc_url($cohesive_plus_image['alt']); ?>" id="hsc-plus" class="img-fluid mb-4 d-none d-md-block" width="1000" height="656" />
      <img src="<?php echo esc_url($cohesive_plus_image_animation['url']); ?>" alt="<?php echo esc_url($cohesive_plus_image_animation['alt']); ?>" class="img-fluid mb-4 d-md-none" width="1000" height="656" />
      <script>      
          function Start() {
            jQuery('#hscPlusPress').on({
            
            mouseenter: function () { jQuery('#hsc-plus').prop('src', '<?php echo esc_url($cohesive_plus_image_animation['url']); ?>') },
            mouseleave: function () { jQuery('#hsc-plus').prop('src', '<?php echo esc_url($cohesive_plus_image['url']); ?>') }
            
              });
          }   
          jQuery(Start);
      </script>
      
			<?php the_field('cohesive_plus'); ?>
		</div>
	</div><!-- .row -->
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
 <div class="_250-round col-12 col-md-4 mb-4 mb-md-0">
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
<section class="patient-safety row text-center">
  <div class="inner container-fluid">
    <header class="row mb-5">
      <div class="h-line col-12 col-md-7"> 
		  <?php $safety_title = get_field('safety_title'); ?>
		  <img src="<?php echo esc_url($safety_title['url']); ?>" alt="<?php echo esc_url($safety_title['alt']); ?>" /></div>
      <div class="col-12 col-md-4 text-center d-flex align-items-center"> <?php the_field('safety'); ?></div>
    </header>
    <div class="container">
      <div class="row">    
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
        	<div class="rounded-circle">
      		<strong><?php the_field('stat_circle_title_1'); ?></strong>
    <p><?php the_field('stat_circle_1'); ?></p>
      	</div>
    		<h3><?php the_field('term_title_1'); ?></h3>
    <p><?php the_field('term_1'); ?></p>
      	</article>
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
        	<div class="rounded-circle">
      		<strong><?php the_field('stat_circle_title_2'); ?></strong>
    <p><?php the_field('stat_circle_2'); ?></p>
      	</div>
    		<h3><?php the_field('term_title_2'); ?></h3>
    <p><?php the_field('term_2'); ?></p> 
      
      	</article>
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
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
  </div>
</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<!-- @php the_content() @endphp -->