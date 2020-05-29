<section class="row">
	<div class="col-12 col-sm-6 p-0 augmentation">
		<a href="/breast-augmentation/"><img class="img-fluid" src="@asset('images/augmentation.jpg')" alt="augmentation" width="1500" height="1120" /></a>
	</div>
	<div class="col-12 col-sm-6 p-0 reconstruction">
    <img class="img-fluid" src="@asset('images/restoration.jpg')" alt="restoration" width="1500" height="1122" />
	</div>
</section>

<section class="row" id="testimonials">
  <img src="@asset('images/quote.svg')" class="quote-icon" alt="quote" />
<!-- Slider main container -->
<div class="swiper-container swiper-testimonial">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><p><span class="q">&#8220;</span> I feel great and they feel more and more a part of me each day. Truly one of the best things I have done for myself. I am so happy with my decision. <span class="q">&#8221;</span><br><span class="sig">- RealSelf Member</span></p></div>
        <div class="swiper-slide"><p><span class="q">&#8220;</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. <span class="q">&#8221;</span><br><span class="sig">- RealSelf Member</span></p></div>
        <div class="swiper-slide"><p><span class="q">&#8220;</span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. <span class="q">&#8221;</span><br><span class="sig">- RealSelf Member</span></p></div>
            ...

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

</div>
</section>

<section class="social-love row">
  <img src="@asset('images/social-love.png')" class="heading mx-auto mt-5 mb-3 img-fluid" alt="social love" width="400" height="123" />
  <div class="swiper-container swiper-social">
    <div class="swiper-wrapper">
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/amelia-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/cindyprado-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/hochstein-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/edenknows-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/summer-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
    </div><!-- .swiper-wrapper -->
</section>

<section class="connect text-center">
  <img src="@asset('images/connect.png')" class="heading mx-auto mt-5 mb-1 img-fluid" alt="connect with us" width="400" height="66" />
  <div class="d-flex justify-content-center mb-1">
    <img src="@asset('images/facebook.svg')" class="social-icon" alt="facebook" />
    <img src="@asset('images/instagram.svg')" class="social-icon" alt="instagram" />
    <img src="@asset('images/linkedin.svg')" class="social-icon" alt="linkedin" />
  </div>
  <a href="#" class="mb-4 mt-1">CEO Corner</a>
</section>
@php the_content() @endphp