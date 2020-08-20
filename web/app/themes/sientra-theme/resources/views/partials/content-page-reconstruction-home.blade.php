<style>

	.breast-reconstruction .hero {
		background-image: url(<?php the_field('header_background_mobile'); ?>);
	}
	
	@media (min-width: 768px) {
		.breast-reconstruction .hero {
			background-image: url(<?php the_field('header_background'); ?>);
		}
	}
</style>

<section class="hero row flex-column">


</section>

<section class="intro row" >
  <div class="container">
    <header class="mx-auto">
		<?php $intro_title = get_field('intro_title'); ?>
		<?php $intro_title_mobile = get_field('intro_title_mobile'); ?>
    	<img src="<?php echo esc_url($intro_title['url']); ?>" class="d-none d-md-block" alt="<?php echo esc_url($intro_title['alt']); ?>" />
    	<img src="<?php echo esc_url($intro_title_mobile['url']); ?>" class="d-md-none" alt="<?php echo esc_url($intro_title_mobile['alt']); ?>" />
    	
    </header>
  	<div class="col text-center my-5 light">
  		<?php the_field('intro'); ?>
  	</div>  	
  </div><!-- .container -->

</section>
<section class="recon-woman-section-break row d-block" style="background-image: url(<?php the_field('post_intro_background_image'); ?>);">
<!--   <img src="@asset('images/recon-woman-section-break.jpg')" class="img-fluid" alt="recon-woman-section-break" width="2000" height="759" />	 -->
</section>
<style>
	.implant-bg {
		background-image: url(<?php the_field('implant_background'); ?>);
	}
</style>
<section class="guide text-center container light mt-5">
  <header>
	  <?php $breast_surgery_guide_title = get_field('breast_surgery_guide_title'); ?>
    <img src="<?php echo esc_url($breast_surgery_guide_title['url']); ?>" alt="<?php echo esc_url($breast_surgery_guide_title['alt']); ?>" />
  	<h3 class="light"><?php the_field('breast_surgery_guide_subtitle'); ?></h3>
  </header>
	<?php the_field('breast_surgery_guide'); ?>
</section>
<section class="two-step mt-5 text-center container">
  <div class="inner light">
    <header>
		<?php $two_step_reconstruction_title = get_field('two_step_reconstruction_title'); ?>
    	<img src="<?php echo esc_url($two_step_reconstruction_title['url']); ?>" alt="<?php echo esc_url($two_step_reconstruction_title['alt']); ?>" />
    </header>
  	<?php the_field('two_step_reconstruction'); ?>
  </div>

</section>
<section class="steps container light">
	<div class="step-one row my-5">
  	<div class="col-12 col-md-3">
  		<h2 class="image-h" style="background-image: url(<?php the_field('step_1_title'); ?>)"><?php the_field('step_1_title_text'); ?></h2>
  	</div>
  	<div class="col-12 col-md-9 d-flex align-items-center flex-column flex-md-row">
    	<?php the_field('step_1'); ?>
		<?php $step_1_diagram_mobile = get_field('step_1_diagram_mobile'); ?>
    	<img src="<?php echo esc_url($step_1_diagram_mobile['url']); ?>" class="img-fluid d-block d-md-none" alt="<?php echo esc_url($step_1_diagram_mobile['alt']); ?>" />
  	</div>
  </div>
  <div class="col-12 d-none d-md-block">
	  <?php $expander_diagram = get_field('expander_diagram'); ?>
    <img src="<?php echo esc_url($expander_diagram['url']); ?>" alt="<?php echo esc_url($expander_diagram['alt']); ?>" />
  </div>
  <div class="step-two row my-5">
  	<div class="col-12 col-md-3 order-md-2">
  		<h2 class="image-h" style="background-image: url(<?php the_field('step_2_title'); ?>)"><?php the_field('step_2_title_text'); ?></h2>
  	</div>
    <div class="col-12 col-md-9 d-flex align-items-center flex-column flex-md-row order-md-1">
      <?php the_field('step_2'); ?>	
	  <?php $step_2_diagram_mobile = get_field('step_2_diagram_mobile'); ?>
    	<img src="<?php echo esc_url($step_2_diagram_mobile['url']); ?>" class="img-fluid d-block d-md-none" alt="<?php echo esc_url($step_2_diagram_mobile['alt']); ?>" />
    </div>

  </div>
</section>
<section class="timing boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-5 model text-left px-0 pl-lg-3">
		<?php $timing_background = get_field('timing_background'); ?>
      <img src="<?php echo esc_url($timing_background['url']); ?>" alt="<?php echo esc_url($timing_background['alt']); ?>" width="708" height="834" />
  	</div>

  	<div class="col-12 col-lg-8 message">
      <div class="message-inner">
        <header class="col-12 flex-column">
        	<span style="background-image:url(<?php the_field('timing_title'); ?>);"><?php the_field('timing_title_text'); ?></span>
            <h3 class="light opus"><?php the_field('timing_subtitle'); ?></h3>
          	<?php the_field('timing_intro'); ?>
        
        </header>
        <div class="row">        
          <div class="col-12 col-md-6">
          	<?php the_field('timing_left_column'); ?>
          </div>
          <div class="col-12 col-md-6">
          	<?php the_field('timing_right_column'); ?>
          </div>       	
        </div><!-- .row -->
        <footer class="row light">
          <div class="col-12">
          	<?php the_field('timing_outro'); ?>
          </div>
        </footer> 
      </div>
  	</div>
  	  	
  </div>
   
</section>
<section class="quote row mb-5 my-md-5" style="background-image:url(<?php the_field('jane_cook_background'); ?>);">
<!--     <img src="@asset('images/recon-patient-break.jpg')" class="img-fluid my-5" alt="recon-patient-break" width="2500" height="1094" /> -->
    <?php $jane_cook_quote = get_field('jane_cook_quote'); ?>
	<?php $jane_cook_quote_mobile = get_field('jane_cook_quote_mobile'); ?>
	<img src="<?php echo esc_url($jane_cook_quote['url']); ?>" class="d-none d-md-block " alt="<?php echo esc_url($jane_cook_quote['alt']); ?>" />
    <img src="<?php echo esc_url($jane_cook_quote_mobile['url']); ?>" class="d-md-none" alt="<?php echo esc_url($jane_cook_quote_mobile['alt']); ?>" />
</section>
<section class="options row"> 
  <header class="col-12">
	  <?php $options_title = get_field('options_title'); ?>
  	 <img src="<?php echo esc_url($options_title['url']); ?>" class="img-fluid" alt="<?php echo esc_url($options_title['alt']); ?>" />
  </header>
	<div class="col-sm-12  col-lg-8 text-center">
  	<h2><?php the_field('options_subtitle'); ?></h2>
  </div>
	<?php $options_image = get_field('options_image'); ?>
  <img src="<?php echo esc_url($options_image['url']); ?>" class="img-fluid w-75 h-100 mx-auto" alt="<?php echo esc_url($options_image['alt']); ?>" width="1800" height="612" />
</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
