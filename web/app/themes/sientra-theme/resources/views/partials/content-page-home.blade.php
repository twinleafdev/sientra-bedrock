<section class="row">
	<div class="col-12 col-sm-6 p-0 augmentation">
		<?php the_field('left_image'); ?>
	</div>
	<div class="col-12 col-sm-6 p-0 reconstruction">
    	<?php the_field('right_image'); ?>
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
			if( have_rows('testimonials') ):

				// Loop through rows.
				while( have_rows('testimonials') ) : the_row(); ?>

					<div class="swiper-slide"><p><span class="q">&#8220;</span> <?php the_sub_field('testimonial'); ?> <span class="q">&#8221;</span><br><span class="sig">- <?php the_sub_field('author'); ?></span></p></div>

				<?php // End loop.
				endwhile;
			endif; ?>
            ...

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

</div>
</section>

<section class="social-love row">
<!--   <img src="@asset('images/social-love.png')" class="heading mx-auto mt-5 mb-3 img-fluid" alt="social love" width="400" height="123" /> -->
  <h2 class="image-h mt-5 mb-3" style="background-image: url(@asset('images/social-love.svg')); height: 8vw;">social love</h2>
  <div class="swiper-container swiper-social">
    <div class="swiper-wrapper">
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/amelia-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/insta5.jpg')" class="insta-bio my-2 mx-auto" alt="insta5" width="689" height="145" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/cindyprado-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/insta4.jpg')" class="insta-bio my-2 mx-auto" alt="insta4" width="645" height="145" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/hochstein-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/edenknows-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />        
        <img src="@asset('images/insta2.jpg')" class="insta-bio my-2 mx-auto" alt="insta2" width="644" height="145" /> 
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/summer-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/insta1.jpg')" class="insta-bio my-2 mx-auto" alt="insta1" width="550" height="145" />
      </div>
    </div><!-- .swiper-wrapper -->
  </div>
</section>

<!--
<section class="connect text-center">
  <img src="@asset('images/connect.png')" class="heading mx-auto mt-5 mb-1 img-fluid" alt="connect with us" width="400" height="66" />
  <div class="d-flex justify-content-center mb-1">
    <img src="@asset('images/facebook.svg')" class="social-icon" alt="facebook" />
    <img src="@asset('images/instagram.svg')" class="social-icon" alt="instagram" />
    <img src="@asset('images/linkedin.svg')" class="social-icon" alt="linkedin" />
  </div>
  <a href="#" class="mb-4 mt-1">CEO Corner</a>
</section>
-->
<!-- @php the_content() @endphp -->