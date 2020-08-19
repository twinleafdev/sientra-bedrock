
<style>

	.breast-augmentation .hero {
		background-image: url(<?php the_field('header_background_mobile'); ?>);
	}
	
	@media (min-width: 768px) {
		.breast-augmentation .hero {
			background-image: url(<?php the_field('header_background'); ?>);
		}
	}
</style>

<section class="hero row">
<!-- 	<img src="@asset('images/aug_home_hero.jpg')" class="img-fluid" alt="aug_home_hero" width="2500" height="1552" /> -->
<!--
	<img class="img-fluid"
	   srcset="@asset('images/aug_home_hero-1200.jpg') 1200w,
             @asset('images/aug_home_hero-2500.jpg') 2500w"
     sizes="(max-width: 1200px) 1200px,
            2500px"
     src="@asset('images/aug_home_hero-2500.jpg')"
     alt="Safer more beautiful results" width="2500" height="1552" >
-->
  <div class="col-12 col-md-6 offset-md-6">
    <span class="image-h" style="background-image: url(<?php the_field('header_title'); ?>);"><?php the_field('header_title_text'); ?></span>
  </div>
  <div class="col-12 col-md-6 offset-md-6">
  	<h2 class="light"><?php the_field('header_text'); ?></h2>
  </div>
</section>

<section class="row why-choose text-center my-4  py-5">
	<header class="col-12 mb-2 mb-sm-5">
		<?php $why_choose_title = get_field('why_choose_title'); ?>
  	<img src="<?php echo esc_url($why_choose_title['url']); ?>" alt="<?php echo esc_url($why_choose_title['alt']); ?>" />
		<h3><?php the_field('why_choose_subtitle'); ?></h3>
	</header> 
	<article class="col-12 col-sm pt-3 pt-sm-0">
		<p class="lead"><?php the_field('why_choose_title_column_1'); ?></p>
<span class="opus">•••</span><br>
<?php the_field('why_choose_column_1'); ?>
	</article>
	<hr class="w-50 d-block d-sm-none">
	<article class="col-12 col-sm pt-sm-0">
		<p class="lead"><?php the_field('why_choose_title_column_2'); ?></p>
<span class="opus">•••</span><br>
<?php the_field('why_choose_column_2'); ?> 
	</article>
	<hr class="w-50 d-block d-sm-none">
	<article class="col-12 col-sm pt-sm-0">
		<p class="lead"><?php the_field('why_choose_title_column_3'); ?></p>
<span class="opus">•••</span><br>
<?php the_field('why_choose_column_3'); ?> 
	</article>
</section>
<section class="shape row text-center mt-5" style="background-image:url(<?php the_field('implants_background'); ?>);">
	<div class="tag col-6 col-md-8">
		<h2><?php the_field('implants'); ?></h2>
	</div>
	<div class="implant col-12 col-md-8">
		<?php $implants_diagram = get_field('implants_diagram'); ?>
		<img src="<?php echo esc_url($implants_diagram['url']); ?>" class="img-fluid mx-auto b-block" alt="<?php echo esc_url($implants_diagram['alt']); ?>" width="700" height="601" />
	</div>
</section>

<section class="pair row text-center py-5 mt-md-5">
	<header class="col-12 col-md-6 pl-5">
		<?php $perfect_pair_image = get_field('perfect_pair_image'); ?>
		<img src="<?php echo esc_url($perfect_pair_image['url']); ?>" alt="<?php echo esc_url($perfect_pair_image['alt']); ?>" />
	</header>
	<div class="col-12 col-md-6 tag d-flex align-items-end">
		<?php the_field('perfect_pair'); ?>
	</div>
	<div class="col-12 py-4 mt-md-5 tag">
		<h3><?php the_field('patients'); ?></h3>
	</div>

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

</section>

<section class="row matters text-center">
	<header class="col-12 my-5">
		<?php $board_certification_title = get_field('board_certification_title'); ?>
		<img src="<?php echo esc_url($board_certification_title['url']); ?>" alt="<?php echo esc_url($board_certification_title['alt']); ?>" />
	</header>
</section>
<section class="matters-vid boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
        <video
            id="matters-video"
            class="video-js"
            controls
            preload="auto"
            poster="<?php the_field('board_certification_video_poster'); ?>"
            data-setup='{}'>
          <source src="<?php the_field('board_certification_video'); ?>" type="video/mp4"></source>
  
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">
              supports HTML5 video
            </a>
          </p>
        </video>

      </div>
  	</div>
  	
  	
  	<div class="col-12 col-lg-8 model text-left pl-lg-3">
    	<div>
        <?php the_field('board_certification'); ?>
        <h3 class="image-h mx-auto" style="background-image:url(<?php the_field('experience_background'); ?>);  height: 10vw; "><?php the_field('experience'); ?></h3>

      </div>
  	</div>
  	  	
  </div>
</section>

<?php /*
<section class="row matters text-center">
	<header class="col-12 my-5">
		<img src="@asset('images/board-certified-matters.svg')" alt="board-certified-matters" />
	</header>
  <div class="col wrap">
  	
  	<div class="col-12 col-lg-6 col-xl-5 imgwrap">
<!--   		<img src="@asset('images/pittman.jpg')" alt="pittman" width="800" height="767" /> -->
      <video
          id="matters-video"
          class="video-js"
          controls
          preload="auto"
          poster="@asset('images/pittman.jpg')"
          data-setup='{}'>
        <source src="@asset('images/video/Sientra_Dr_Pittman_Consumer_Testimonial_B_PG_003.mp4')" type="video/mp4"></source>
      <!--
        <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm"></source>
        <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg"></source>
      -->
        <p class="vjs-no-js">
          To view this video please enable JavaScript, and consider upgrading to a
          web browser that
          <a href="https://videojs.com/html5-video-support/" target="_blank">
            supports HTML5 video
          </a>
        </p>
      </video>
  	</div>  	
  	
  	<div class="col-12 col-lg-8 ml-auto boxed-wrap">
  		<div>
  		  <h2>Is your plastic surgeon board-certified?</h2>
  		  <p>This is the first criteria to consider when researching a surgeon. Not all surgeons who perform breast augmentation are board-certified. Board-certification requires the highest level of surgical training and education and, as a result, is shown to minimize complications related to breast surgery.<sup>3</sup></p>
  <p><span class="opus">ONLY</span> Sientra implants are available exclusively through board-certified plastic surgeons. You can trust if a surgeon offers Sientra, they are board-certified. </p>
  <img src="@asset('images/14yrs.svg')" class="14yrs" alt="14 years of formalized training and experience" />
  		</div>
  	</div>
  	

  </div>
</section>

*/ ?>

<section class="love my-5">
	<div class="col-12 col-md-5">
		<?php $results_title = get_field('results_title'); ?>
		<img src="<?php echo esc_url($results_title['url']); ?>" alt="<?php echo esc_url($results_title['alt']); ?>" />
	</div>
	<div class="col-12 col-md-8 testimonial ml-auto">
  	<img src="@asset('images/quote.svg')" class="quote-icon" alt="quote" />
  	<p><span class="q">&#8220;</span> <?php the_field('quote'); ?> <span class="q">&#8221;</span><br><span class="sig"><?php the_field('quote_author'); ?></span></p>
	</div>
</section>


<section class="row realself text-center">
  <div class="container-fluid wrap px-0 px-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 px-lg-3">
		<?php $rating_background = get_field('rating_background'); ?>
      <img src="<?php echo esc_url($rating_background['url']); ?>" alt="<?php echo esc_url($rating_background['alt']); ?>" width="800" height="767" />
  	</div>

  	<div class="col-12 col-lg-5 ml-auto rated">
      <div class="rated-inner">
		  <?php $rating_image = get_field('rating_image'); ?>
        <img src="<?php echo esc_url($rating_image['url']); ?>" alt="<?php echo esc_url($rating_image['alt']); ?>" />
      	<h2><?php the_field('rating'); ?></h2>
      </div>
      <small><?php the_field('rating_footnote'); ?></small>
  	</div>
  	  	
  </div>
</section>

<section class="factor row text-center py-5 mt-5">
  <div class="container" style="background-image:url(<?php the_field('satisfaction_background'); ?>); ">
    <div class="row">
    	<div class="col-12 py-4 tag">
			<?php $satisfaction_title = get_field('satisfaction_title'); ?>
      	<img src="<?php echo esc_url($satisfaction_title['url']); ?>" alt="<?php echo esc_url($rating_image['satisfaction_title']); ?>" />
    		<h2><?php the_field('satisfaction_subtitle'); ?></h2>
    	</div>  
  	  
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
      	<div class="rounded-circle _90">
      		<strong><?php the_field('feminine_stat'); ?></strong><br>
      	</div>
    		<h3><?php the_field('feminine'); ?></h3>
    	</article>
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
      	<div class="rounded-circle _91">
      		<strong><?php the_field('natural_stat'); ?></strong><br>
      	</div>
    		<h3><?php the_field('natural'); ?>
</h3>
    	</article>
    <!-- 	 -->
    	<article class="col-12 col-sm-4 mb-5 mb-sm-0">
      	<div class="rounded-circle _79">
      		<strong><?php the_field('clothes_stat'); ?></strong><br>
      	</div>
    		<h3><?php the_field('clothes'); ?></h3>
    	</article>
    <!-- 	 -->
      <article class="col-12 mt-4">
      	    <?php the_field('stats_footnote'); ?>
      </article>
    </div><!-- .row -->
  </div><!-- .container -->

</section>

<style>
	@media (min-width: 768px) { 
		.unmatched {
			background-image:url(<?php the_field('warranty_background'); ?>);
		}
	}
	
	@media (max-width: 767px) { 
		.warranty {
			background-image:url(<?php the_field('warranty_background'); ?>);
		}
	}
</style>

<section class="row unmatched align-content-start">
<!--   <img src="@asset('images/unmatched.jpg')" class="img-fluid" alt="unmatched" width="2000" height="1182" /> -->
  <header class="col-12 col-md-6">
	  <?php $warranty_title = get_field('warranty_title'); ?>
  	<img src="<?php echo esc_url($warranty_title['url']); ?>" alt="<?php echo esc_url($warranty_title['alt']); ?>" />
  </header>
  <div class="w-100">
  	
  </div>
  <div class="col-12 order-2 order-md-1 col-md-6 col-lg-5 mt-md-5">
  	<?php the_field('warranty'); ?>
  </div>
  <div class="warranty col-12 offset-md-0 col-md-2 order-1 order-md-2 mt-md-5">
	  <?php $warranty_image = get_field('warranty_image'); ?>
  	<img src="<?php echo esc_url($warranty_image['url']); ?>" alt="<?php echo esc_url($warranty_image['alt']); ?>" />
  </div>
</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<!-- @php the_content() @endphp -->