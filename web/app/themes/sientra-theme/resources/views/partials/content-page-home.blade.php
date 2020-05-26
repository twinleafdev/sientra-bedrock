<section class="row">
	<div class="col p-0 augmentation">
		<img class="img-fluid" src="@asset('images/augmentation.jpg')" alt="augmentation" width="1500" height="1120" />
	</div>
	<div class="col p-0 reconstruction">
    <img class="img-fluid" src="@asset('images/restoration.jpg')" alt="restoration" width="1500" height="1122" />
	</div>
</section>

<section class="row">
<!-- Slider main container -->
<div class="swiper-container swiper-testimonial">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">“ I feel great and they feel more and more a part of me each day. Truly one of the best things I have done for myself. I am so happy with my decision. ”</div>
        <div class="swiper-slide">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ”</div>
        <div class="swiper-slide">“ Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. ”</div>
            ...

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

</div>
</section>

<section class="social-love row">
  <img src="@asset('images/social-love.png')" class="heading mx-auto my-5" alt="social love" width="400" height="123" />
  <div class="swiper-container swiper-social">
    <div class="swiper-wrapper">
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/hochstein-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/hochstein-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/hochstein-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/hochstein-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/hochstein-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/hochstein-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/hochstein-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        <img src="@asset('images/hochstein-insta-bio.jpg')" class="insta-bio my-2 mx-auto" alt="hochstein-insta-bio" width="300" height="81" />
      </div>
    </div><!-- .swiper-wrapper -->
</section>

<section class="connect">
	<img src="@asset('images/connect.png')" class="heading mx-auto my-5" alt="connect with us" width="400" height="66" />
</section>
@php the_content() @endphp