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

<section class="lead container text-center d-flex" style="background-image: url(<?php the_field('intro_background'); ?>);">
	<h1 class="light m-auto"><?php the_field('intro'); ?></h1>
</section>

<section class="features container">
	<div class="row">
		<article class="col-12 col-md-6">
			<h2 class="book"><?php the_field('shipping_title'); ?></h2>
			<div class="light">
				<?php $shipping_icon = get_field('shipping_icon'); ?>
        <img src="<?php echo esc_url($shipping_icon['url']); ?>" class="icon w-25" alt="<?php echo esc_url($shipping_icon['alt']); ?>" />
        <ul class="opus-list-dash">
          <li><?php the_field('shipping'); ?></li>				
        </ul>
			</div>
		</article>
		
		<article class="col-12 col-md-6">
			<h2 class="book"><?php the_field('restocking_title'); ?></h2>
			<div class="light">
				<?php $restocking_icon = get_field('restocking_icon'); ?>
        <img src="<?php echo esc_url($restocking_icon['url']); ?>" class="icon w-25" alt="<?php echo esc_url($restocking_icon['alt']); ?>" />
        <ul class="opus-list-dash">
          <li><?php the_field('restocking'); ?></li>					
        </ul>
      </div>
		</article>
	</div><!-- .row -->
	
	<div class="row">
		<article class="col-12 col-md-6">
			<h2 class="book"><?php the_field('stock_title'); ?></h2>
			<div class="light">
				<?php $stock_icon = get_field('stock_icon'); ?>
        <img src="<?php echo esc_url($stock_icon['url']); ?>" class="icon w-25" alt="<?php echo esc_url($stock_icon['alt']); ?>" />
        <ul class="opus-list-dash">
          <li><?php the_field('stock'); ?></li>				
        </ul>
			</div>
		</article>
		
		<article class="col-12 col-md-6">
			<h2 class="book"><?php the_field('consignments_title'); ?></h2>
			<div class="light">
				<?php $consignments_icon = get_field('consignments_icon'); ?>
        <img src="<?php echo esc_url($consignments_icon['url']); ?>" class="icon w-25" alt="<?php echo esc_url($consignments_icon['alt']); ?>" />
        <ul class="opus-list-dash">
          <li><?php the_field('consignments'); ?></li>				
        </ul>
      </div>
		</article>
	</div><!-- .row -->

	<div class="row">
		<article class="col-12 col-md-6">
			<h2 class="book"><?php the_field('hours_title'); ?></h2>
			<div class="light">
				<?php $hours_icon = get_field('hours_icon'); ?>
        <img src="<?php echo esc_url($hours_icon['url']); ?>" class="icon w-25" alt="<?php echo esc_url($hours_icon['alt']); ?>" />
        <ul class="opus-list-dash">
          <li><?php the_field('hours'); ?></li>				
        </ul>
			</div>
		</article>
		
		<article class="col-12 col-md-6">
			<h2 class="book"><?php the_field('education_title'); ?></h2>
			<div class="light">
				<?php $education_icon = get_field('education_icon'); ?>
        <img src="<?php echo esc_url($education_icon['url']); ?>" class="icon w-25" alt="<?php echo esc_url($education_icon['alt']); ?>" />
        <ul class="opus-list-dash">
          <li><?php the_field('education'); ?></li>				
        </ul>
			</div>
		</article>
	</div><!-- .row -->
	

</section>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp