<section class="boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
		<?php $header_background = get_field('header_background'); ?>
		<img src="<?php echo esc_url($header_background['url']); ?>" alt="<?php echo esc_url($header_background['alt']); ?>" width="1500" height="865" />
  	</div>
  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
		  <?php $header_title = get_field('header_title'); ?>
         <img src="<?php echo esc_url($header_title['url']); ?>" alt="<?php echo esc_url($header_title['alt']); ?>" />
      </div>
  	</div>
  	  	
  </div>
</section>
<section class="expander-options text-center light">
	<header class="col-12">
		<h2 class="image-h mb-5" style="background-image:url(<?php the_field('options_title'); ?>); height: 18vw; "><?php the_field('options_title_text'); ?></h2>
	</header>
	<div class="wrap row" style="background-image:url(<?php the_field('options_background'); ?>);">
  	<div class="col-12 col-md-7 offset-md-5">
  		<?php the_field('options'); ?>
  	</div>
  	<div class="allox-info-box col-12 col-md-5 offset-md-7">
		<?php $options_image = get_field('options_image'); ?>
  		<img src="<?php echo esc_url($options_image['url']); ?>" class="img-fluid" alt="<?php echo esc_url($options_image['alt']); ?>" width="750" height="409" />
  	</div>
	</div>
</section>
<section class="row py-3" id="testimonials">
  <img src="@asset('images/quote.svg')" class="quote-icon" alt="quote" />
<!-- Slider main container -->
  <div class="swiper-container swiper-testimonial">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide"><?php the_field('quote'); ?></div>
  
      </div>  
  
  </div>
</section>
<section class="dermaspan row text-center light" style="background-image:url(<?php the_field('dermaspan_background'); ?>);">
	<div class="col-md-7">
		<?php the_field('dermaspan'); ?>
	</div>
</section>
<section class="reduce row mb-5">
	<footer class="col-md-6 offset-md-3">
		<h2 class="image-h" style="background-image:url(<?php the_field('financial_risks_background'); ?>); height: 18vw;" ><?php the_field('financial_risks_text'); ?></h2>
	</footer>
</section>


<section class="risks row">
  <div class="container-fluid">
    <div class="row text-center">
      <header class="col-12 mb-5">
      	<h2><?php the_field('managing_risks_title'); ?></h2>
      </header>
    	<div class="col-md-4 px-5">
			<?php $managing_risks_column_1_icon = get_field('managing_risks_column_1_icon'); ?>
        <img src="<?php echo esc_url($managing_risks_column_1_icon['url']); ?>" class="icon w-50 img-fluid mx-auto d-block" alt="<?php echo esc_url($managing_risks_column_1_icon['alt']); ?>" />
    		<?php the_field('managing_risks_column_1'); ?>
    	</div>
    	<div class="col-md-4 px-5">
			<?php $managing_risks_column_2_icon = get_field('managing_risks_column_2_icon'); ?>
      	<img src="<?php echo esc_url($managing_risks_column_2_icon['url']); ?>" class="icon w-50 img-fluid mx-auto d-block" alt="<?php echo esc_url($managing_risks_column_2_icon['alt']); ?>" />
    		<?php the_field('managing_risks_column_2'); ?>
    	</div>
    	<div class="col-md-4 px-5">
			<?php $managing_risks_column_3_icon = get_field('managing_risks_column_3_icon'); ?>
      	<img src="<?php echo esc_url($managing_risks_column_3_icon['url']); ?>" class="icon w-50 img-fluid mx-auto d-block" alt="<?php echo esc_url($managing_risks_column_3_icon['alt']); ?>" />
    		<?php the_field('managing_risks_column_3'); ?>
    	</div>
    </div>
  </div><!-- .container -->
</section>
<section class="standard container mt-5">
	<header class="row">
		<div class="col-md-8 pt-4">
			<?php $standard_of_care_title = get_field('standard_of_care_title'); ?>
			<img src="<?php echo esc_url($standard_of_care_title['url']); ?>" alt="<?php echo esc_url($standard_of_care_title['alt']); ?>" />
		</div>
		<div class="col-md-4 d-flex justify-content-center">
			<h2 class="light"><?php the_field('standard_of_care'); ?></h2>
		</div>
	</header><!-- .row -->
</section>
<section class="costs info-box mt-5 text-center container">
  <div class="inner light">
  	<?php the_field('reoperation_costs'); ?>
  </div>
</section>
<section class="flow-chart container">
	<?php $risk_flow_chart = get_field('risk_flow_chart'); ?>
	<?php $risk_flow_chart_mobile = get_field('risk_flow_chart_mobile'); ?>
	<img src="<?php echo esc_url($risk_flow_chart['url']); ?>" class="img-fluid d-none d-md-block" alt="<?php echo esc_url($risk_flow_chart['alt']); ?>" />
	<img src="<?php echo esc_url($risk_flow_chart_mobile['url']); ?>" class="img-fluid d-md-none" alt="<?php echo esc_url($risk_flow_chart_mobile['alt']); ?>" />
</section>
<style>
	@media (max-width: 768px) { 
		.clinical-outcomes-mobile {
			background-image:url(<?php the_field('clinical_outcomes_background'); ?>);
		}
	}
	
	@media (min-width: 768px) { 
		.clinical-outcomes {
			background-image:url(<?php the_field('clinical_outcomes_background'); ?>);
		}
	}
</style>
<section class="clinical-outcomes row text-center">
	<header class="col-md-7 mb-md-5">
		<h2 class="image-h" style="background-image:url(<?php the_field('clinical_outcomes_image'); ?>); height: 10vw;"><?php the_field('clinical_outcomes_text'); ?></h2>
		<h3 class="light"><?php the_field('clinical_outcomes_title'); ?></h3>
	</header>
	<div class="clinical-outcomes-mobile col-12 d-md-none"></div>
	<div class="info-box col-md-5 offset-md-1">
    <div class="inner light">
      <?php the_field('clinical_outcomes'); ?>    
    </div>		
	</div>
	<div class="col-md-7 text-left pl-5 mt-5">
		<h3><?php the_field('allox2_stats_title'); ?></h3>
    <?php the_field('allox2_stats'); ?>
	</div>
</section>

<section class="satisfaction row text-center my-5">
  <div class="col-md-8 offset-md-2">

  	<h2><?php the_field('satisfaction_title'); ?></h2>
  	<?php the_field('satisfaction'); ?>
  	
  </div>
</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp