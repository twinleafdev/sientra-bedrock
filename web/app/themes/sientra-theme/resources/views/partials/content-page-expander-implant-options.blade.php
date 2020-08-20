<section class="boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
		<?php $header_background = get_field('header_background'); ?>
		<img src="<?php echo esc_url($header_background['url']); ?>" alt="<?php echo esc_url($header_background['alt']); ?>" width="1800" height="1038" />
  	</div>
  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
        <?php $header_title = get_field('header_title'); ?>
         <img src="<?php echo esc_url($header_title['url']); ?>" alt="<?php echo esc_url($header_title['alt']); ?>" />
      </div>
  	</div>
  	  	
  </div>
</section>
<section class="row why-choose text-center mt-4">
  <div class="container-fluid wrap py-5">
  	<header class="col-12 mb-2 mb-sm-5">
		<?php $why_choose_title = get_field('why_choose_title'); ?>
    	<img src="<?php echo esc_url($why_choose_title['url']); ?>" alt="<?php echo esc_url($why_choose_title['alt']); ?>" />
  		<h3><?php the_field('why_choose_subtitle'); ?></h3>
  	</header> 
  	<article class="col-12 col-sm pt-3 pt-sm-0">
  		<p class="lead"><?php the_field('why_choose_column_1_title'); ?></p>
  <span class="opus">•••</span><br>
  <p><?php the_field('why_choose_column_1'); ?></p> 
  	</article>
  	<hr class="w-50 d-block d-sm-none">
  	<article class="col-12 col-sm pt-sm-0">
  		<p class="lead"><?php the_field('why_choose_column_2_title'); ?>
</p>
  <span class="opus">•••</span><br>
  <p><?php the_field('why_choose_column_2'); ?></p>
  	</article>
  	<hr class="w-50 d-block d-sm-none">
  	<article class="col-12 col-sm pt-sm-0">
  		<p class="lead"><?php the_field('why_choose_column_3_title'); ?></p>
  <span class="opus">•••</span><br>
  <p><?php the_field('why_choose_column_3'); ?></p> 
  	</article>
  	<small class="mt-5"><?php the_field('why_choose_footnote'); ?></small>
  </div>
</section>
<section class="following boxy-box text-center mb-5">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-7 model text-left px-0 pl-lg-3">
		<?php $following_image = get_field('following_image'); ?>
      <img src="<?php echo esc_url($following_image['url']); ?>" alt="<?php echo esc_url($following_image['alt']); ?>" width="1000" height="577" />
  	</div>

  	<div class="col-12 col-lg-6 message">
      <div class="message-inner light">
        <?php the_field('following'); ?>
      </div>
  	</div>
  	  	
  </div>
</section>
<section class="expanders row">
	<div class="col-12 text-center">
		<h2 class="light"><?php the_field('opus_family_title'); ?></h2>
	</div>
	<div class="allo-derm container">
		<?php $dermasphere_image = get_field('dermasphere_image'); ?>
		<?php $allox2_image = get_field('allox2_image'); ?>
<img src="<?php echo esc_url($dermasphere_image['url']); ?>" alt="<?php echo esc_url($dermasphere_image['alt']); ?>" width="1831" height="1500" /><img src="<?php echo esc_url($allox2_image['url']); ?>" alt="<?php echo esc_url($allox2_image['alt']); ?>" width="1843" height="1500" />
		
	</div>
</section>
<section class="row" id="testimonials">
  <img src="@asset('images/quote.svg')" class="quote-icon" alt="quote" />
<!-- Slider main container -->
  <div class="swiper-container swiper-testimonial">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->
		  
		  <?php // Check rows exists.
			if( have_rows('quotes') ):

				$cardCount = 1;

				// Loop through rows.
				while( have_rows('quotes') ) : the_row(); ?>
		  
		  			<div class="swiper-slide"><p><span class="q">&#8220;</span> 
						<?php the_sub_field('quote'); ?><span class="q">&#8221;</span><br><span class="sig">- <?php the_sub_field('author'); ?>
					</span></p></div>
		  
				<?php 
				// End loop.
				endwhile;
			endif; ?>
  
      </div>  
  
  </div>
</section>

<section class="implant-options text-center mx-auto mt-5">
  <header>
	  <?php $implant_options_title = get_field('implant_options_title'); ?>
    <img src="<?php echo esc_url($implant_options_title['url']); ?>" class="img-fluid mx-auto" alt="<?php echo esc_url($implant_options_title['alt']); ?>" />
    <div class="h2-wrap mx-auto">
      <h2><?php the_field('implant_options_subtitle'); ?></h2>
    </div>
  </header>
	<div class="row">
		<div class="col-12 col-md-6 my-3">
			<?php $luxe_title = get_field('luxe_title'); ?>
  		<img src="<?php echo esc_url($luxe_title['url']); ?>" alt="<?php echo esc_url($luxe_title['alt']); ?>" />
			<p><?php the_field('luxe'); ?></p>
			<?php $luxe_diagram = get_field('luxe_diagram'); ?>
			<img src="<?php echo esc_url($luxe_diagram['url']); ?>" class="img-fluid diagram" alt="<?php echo esc_url($luxe_diagram['alt']); ?>" width="1500" height="1067" />
		</div>
		<div class="col-12 col-md-6 my-md-3">
			<?php $curve_title = get_field('curve_title'); ?>
  		<img src="<?php echo esc_url($curve_title['url']); ?>" alt="<?php echo esc_url($curve_title['alt']); ?>" />
			<p><?php the_field('curve'); ?></p>
			<?php $curve_diagram = get_field('curve_diagram'); ?>
			<img src="<?php echo esc_url($curve_diagram['url']); ?>" class="img-fluid diagram" alt="<?php echo esc_url($curve_diagram['alt']); ?>" width="1500" height="1067" />
		</div>
	</div><!-- .row -->
<!-- 	<img src="@asset('images/desires-diagram.jpg')" class="img-fluid my-5 d-none d-md-block" alt="desires-diagram" width="2500" height="911" /> -->
</section>

<style>
	.hsc {
		background-image: url(<?php the_field('cohesive_image'); ?>);
	}
    .hsc:hover{
		background-image: url(<?php the_field('cohesive_image_animation'); ?>);
    }
    
    .hsc-plus {
		background-image: url(<?php the_field('cohesive_plus_image'); ?>);
	}
    .hsc-plus:hover{
		background-image: url(<?php the_field('cohesive_plus_image_animation'); ?>);
    }
</style>

<section class="feel-so-real text-center"> 
	<header>
		<?php $feel_so_real = get_field('feel_so_real'); ?>
		<img src="<?php echo esc_url($feel_so_real['url']); ?>" class="feel mt-md-4"alt="<?php echo esc_url($feel_so_real['alt']); ?>" />
	</header>
	<div class="h2-wrap">
		<h2><?php the_field('choose'); ?></h2>
	</div>
	<div class="col-12">
		<?php $optimal_feel_image = get_field('optimal_feel_image'); ?>
  	<img src="<?php echo esc_url($optimal_feel_image['url']); ?>" class="optimal mb-4" alt="<?php echo esc_url($optimal_feel_image['alt']); ?>" /><br>
	</div>
	<div class="row">
  	<div class="col-12 col-sm-10 offset-sm-1 px-5">
  		<?php $cohesivity = get_field('cohesivity'); ?>
  		<img src="<?php echo esc_url($cohesivity['url']); ?>" alt="<?php echo esc_url($cohesivity['alt']); ?>" />
  	</div>
		<div class="col-12 col-md-5 px-4 mb-5 offset-md-1">
  		<span class="press hsc mb-4"></span>
			<?php the_field('cohesive'); ?>
		</div>
  	<div class="col-12 col-sm-10 offset-sm-1 px-5 d-md-none">
  		<img src="<?php echo esc_url($cohesivity['url']); ?>" alt="<?php echo esc_url($cohesivity['alt']); ?>" />
  	</div>
		<div class="col-12 col-md-5 px-4">
			<span class="press hsc-plus mb-4"></span>
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
 <header class="col-6 col-sm-4"> <?php $opus_luxe = get_field('opus_luxe'); ?>
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

<section class="factor row text-center pb-5">
  <div class="container">
    <div class="row">
    	<div class="col-12 py-4 tag">
      	<img src="@asset('images/feel-good-factor.svg')" alt="feel good factor" />
    		<h2>patient satisfaction rates<sup>4</sup></h2>
    	</div>  
  	  
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
      	<div class="rounded-circle _80">
      		<strong>80.3<span class="light">%</span></strong><br>
      	</div>
    		<h3>Felt more<br>feminine</h3>
    	</article>
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
      	<div class="rounded-circle _75">
      		<strong>75.2<span class="light">%</span></strong><br>
      	</div>
    		<h3>felt their clothes<br>fit better</h3>
    	</article>
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
      	<div class="rounded-circle _71">
      		<strong>71.3<span class="light">%</span></strong><br>
      	</div>
    		<h3>felt their breasts look<br>natural and soft</h3>
    	</article>
    <!-- 	 -->
      <article class="col-12 my-4">
      	    *(primary reconstruction cohort)
      </article>
    </div><!-- .row -->
  </div><!-- .container -->

</section>

<section class="realself boxy-box text-center my-5">
  <div class="wrap px-0 pl-lg-3">  	
  	
    <div class="col-12 col-lg-8 model text-left px-0 px-lg-3">
      <img src="@asset('images/expander-realself.jpg')" alt="expander-realself" width="1500" height="992" />
    </div>

  	<div class="col-12 col-lg-5 message">
      <div class="message-inner light">
        <img src="@asset('images/realself.svg')" alt="realself" />
      	<h2>The <span class="opus"><strong>highest rated</strong></span><br>breast implant brand in the U.S.*</h2>
      </div>
      <small>*Among silicone gel breast implants; As of March, 2020, realself.com</small>

  	</div>
  	  	
  </div>
</section>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp