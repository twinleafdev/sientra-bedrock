<section class="safety-boxy boxy-box text-center">
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

<section class="commitment-patient-safety row text-center">
  <div class="inner container-fluid">
    
    
    <header class="row mb-5 px-2 px-md-5">
      <div class="h-line col-12 col-md-7">
        <?php $commitment_image = get_field('commitment_image'); ?>
         <img src="<?php echo esc_url($commitment_image['url']); ?>" alt="<?php echo esc_url($commitment_image['alt']); ?>" />
      </div>
      <div class="col-12 col-md-4 text-center d-flex align-items-center">
        <h2><?php the_field('commitment'); ?></p>
      </div>
    </header>

    <div class="row"> 
      <div class="col-12 evaluated">
      	<h2><?php the_field('study_title'); ?></h2>
      	<?php the_field('study'); ?>
      </div>
    </div>
  </div> 

</section>

<section class="rates aug-rates row text-center my-5">
        <div class="col-12">
        	<h3 class="boxed-h mb-4"><?php the_field('complication_rates_title'); ?></h3>
        </div>
           
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
        	<div class="rounded-circle">
        		<strong><?php the_field('capsular_rate'); ?></strong>
        	</div>
      		<h3><?php the_field('capsular_title'); ?></h3>
      	</article>
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
        	<div class="rounded-circle">
        		<strong><?php the_field('rupture_rate'); ?></strong>
        	</div>
      		<h3><?php the_field('rupture_title'); ?></h3>
      	</article>
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
        	<div class="rounded-circle">
        		<strong><?php the_field('reoperation_rate'); ?></strong>
        	</div>
      		<h3><?php the_field('reoperation_title'); ?></h3>
      	</article>
      <!-- 	 -->


  <div class="container my-5">
  
  	<div class="tb row">
      <h3 class="light mb-3"><?php the_field('key_complications_primary_augmentation_title'); ?></h3>
  		<article class="col-6 col-md-3">
  			<header>
        <h4>&nbsp;<br>&nbsp;</h4>
  			</header>
  
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('augmentation_number'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_mri'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_capsular'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_rupture'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_reoperation'); ?></li>
      </ul>
  		</article>
  		
  		<article class="sientra col-6 col-md-3">
  			<header>
  				<h4><?php the_field('augmentation_sientra'); ?></h4>
  			</header>
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('augmentation_number_sientra'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_mri_sientra'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_capsular_sientra'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_rupture_sientra'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_reoperation_sientra'); ?></li>
        </ul>
  		</article>
  		
  		<article class="d-md-none col-6 col-md-3">
  			<header>
        <h4>&nbsp;<br>&nbsp;</h4>
  			</header>
  
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('augmentation_number'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_mri'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_capsular'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_rupture'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_reoperation'); ?></li>
      </ul>
  		</article>	
  			
  		<article class="mentor col-6 col-md-3">
  			<header>
  				<h4><?php the_field('augmentation_mentor'); ?></h4>
  			</header>
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('augmentation_number_mentor'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_mri_mentor'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_capsular_mentor'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_rupture_mentor'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_reoperation_mentor'); ?></li>
        </ul>
  		</article>
  
  		<article class="d-md-none col-6 col-md-3">
  			<header>
        <h4>&nbsp;<br>&nbsp;</h4>
  			</header>
  
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('augmentation_number'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_mri'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_capsular'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_rupture'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_reoperation'); ?></li>
      </ul>
  		</article>	
  				
  		<article class="allergan col-6 col-md-3">
  			<header>
  				<h4><?php the_field('augmentation_allergan'); ?></h4>
  			</header>
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('augmentation_number_allergan'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_mri_allergan'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_capsular_allergan'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_rupture_allergan'); ?></li>
          <li class="list-group-item"><?php the_field('augmentation_reoperation_allergan'); ?></li>
        </ul>
  		</article>
  			
  	</div><!-- .row -->
  </div><!-- .container -->

</section>

<section class="rates recon-rates row text-center my-5">
        <div class="col-12">
        	<h3 class="boxed-h mb-4"><?php the_field('reconstruction_complication_rates_title'); ?></h3>
        </div>
           
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
        	<div class="rounded-circle">
        		<strong><?php the_field('reconstruction_capsular_rate'); ?></strong>
        	</div>
      		<h3><?php the_field('reconstruction_capsular_title'); ?></h3>
      	</article>
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
        	<div class="rounded-circle">
        		<strong><?php the_field('reconstruction_rupture_rate'); ?></strong>
        	</div>
      		<h3><?php the_field('reconstruction_rupture_title'); ?></h3>
      	</article>
      <!-- 	 -->
      	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
        	<div class="rounded-circle">
        		<strong><?php the_field('reconstruction_reoperation_rate'); ?></strong>
        	</div>
      		<h3><?php the_field('reconstruction_reoperation_title'); ?></h3>
      	</article>
      <!-- 	 -->

  <div class="container my-5">
  <h3 class="light mb-3"><?php the_field('key_complications_primary_reconstruction_title'); ?></h3>
  	<div class="tb row">
  		<article class="col-6 col-md-3">
  			<header>
        <h4>&nbsp;<br>&nbsp;</h4>
  			</header>
  
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('reconstruction_number'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_mri'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_capsular'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_rupture'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_reoperation'); ?></li>
      </ul>
  		</article>
  		
  		<article class="sientra col-6 col-md-3">
  			<header>
  				<h4><?php the_field('reconstruction_sientra'); ?></h4>
  			</header>
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('reconstruction_number_sientra'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_mri_sientra'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_capsular_sientra'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_rupture_sientra'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_reoperation_sientra'); ?></li>
        </ul>
  		</article>
  		
  		<article class="d-md-none col-6 col-md-3">
  			<header>
        <h4>&nbsp;<br>&nbsp;</h4>
  			</header>
  
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('reconstruction_number'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_mri'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_capsular'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_rupture'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_reoperation'); ?></li>
      </ul>
  		</article>	
  			
  		<article class="mentor col-6 col-md-3">
  			<header>
  				<h4><?php the_field('reconstruction_mentor'); ?></h4>
  			</header>
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('reconstruction_number_mentor'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_mri_mentor'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_capsular_mentor'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_rupture_mentor'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_reoperation_mentor'); ?></li>
        </ul>
  		</article>
  
  		<article class="d-md-none col-6 col-md-3">
  			<header>
        <h4>&nbsp;<br>&nbsp;</h4>
  			</header>
  
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('reconstruction_number'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_mri'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_capsular'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_rupture'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_reoperation'); ?></li>
      </ul>
  		</article>	
  				
  		<article class="allergan col-6 col-md-3">
  			<header>
  				<h4><?php the_field('reconstruction_allergan'); ?></h4>
  			</header>
        <ul class="list-group">
          <li class="list-group-item"><?php the_field('reconstruction_number_allergan'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_mri_allergan'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_capsular_allergan'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_rupture_allergan'); ?></li>
          <li class="list-group-item"><?php the_field('reconstruction_reoperation_allergan'); ?></li>
        </ul>
  		</article>
  			
  	</div><!-- .row -->
  </div><!-- .container -->

</section>

<section class="timing boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-5 model text-left px-0 pl-lg-3">
		<?php $board_certified_background = get_field('board_certified_background'); ?>
         <img src="<?php echo esc_url($board_certified_background['url']); ?>" alt="<?php echo esc_url($board_certified_background['alt']); ?>" width="708" height="834" />
  	</div>

  	<div class="col-12 col-lg-8 message">
      <div class="message-inner">    	    	
    	<h1 class="silver"><?php the_field('board_certified_title'); ?></h1>
  		<h2><?php the_field('board_certified_subtitle'); ?></h2>
		<?php the_field('board_certified'); ?>
      </div>
  	</div>
  	  	
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

            // Loop through rows.
            while( have_rows('quotes') ) : the_row(); ?>
				<div class="swiper-slide"><p>
					<span class="q">&#8220;</span> <?php the_sub_field('quote'); ?> <span class="q">&#8221;</span><br><span class="sig">- <?php the_sub_field('quote_author'); ?> </span>
				</p></div>

            <?php // End loop.
            endwhile;
        endif; ?>
            ...

    </div>
    <!-- If we need pagination -->
<!--     <div class="swiper-pagination"></div> -->

</div>
</section>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<!-- @php the_content() @endphp -->