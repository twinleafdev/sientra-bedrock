<section class="hero row">
	<h1 class="image-h" style="background-image: url(@asset('images/about-hero-txt.svg'))">Advanced science. Exceptional Service. Unrivaled Safety.</h1>
</section>
<h2 class="text-center light my-5">A portfolio of medical aesthetic brands designed to make a difference in patients’ lives by enhancing their body image, growing their self-esteem, and restoring their confidence. Purposeful and differentiated technologies supported by strong clinical outcomes, that’s the Sientra difference. </h2>

<section class="brands row my-5">
  	<header>
    	<h2 class="image-h" style="background-image: url(@asset('images/our-brands.svg'))">Our Brands</h2>
  	</header>
		<div class="col-12 col-sm-6 col-md-3">
  		<img src="@asset('images/brands_opus.jpg')" class="img-fluid" alt="brands_opus" width="610" height="558" />
			<p>Highest rated silicone gel breast implant brand.<sup>*</sup> Available exclusively through board-certified plastic surgeons</p>
		</div>
		<div class="col-12 col-sm-6 col-md-3">
  		<img src="@asset('images/brands_opus-recon.jpg')" class="img-fluid" alt="brands_opus-recon" width="619" height="558" />
			<p>One-of-a-kind breast tissue expanders and silicone gel breast implants uniquely designed to improve patient outcomes</p>
		</div>
		<div class="col-12 col-sm-6 col-md-3">
  		<img src="@asset('images/brands_biocorneum.jpg')" class="img-fluid" alt="brands_biocorneum" width="614" height="558" />
			<p>The plastic surgeons’ choice - #1 performing, preferred and recommended scar treatment gel<sup>**</sup></p>
		</div>
		<div class="col-12 col-sm-6 col-md-3">
  		<img src="@asset('images/brands_miradry.jpg')" class="img-fluid" alt="brands_miradry" width="612" height="558" />
			<p>Approved for sale in over 56 international markets, miraDry is the only non-surgical FDA-cleared device for permanent reduction of underarm sweat and hair and may reduce odor</p>
		</div>
		<footer class="col-12 text-left">
      <ul class="list-unstyled">
        <li><small>* Among silicone gel breast implants; As of March, 2020, realself.com</small></li>
        <li><small>** Data on file.</small></li>
      </ul>
		</footer>

</section>

<section class="manufacture px-5">
	<h2 class="image-h" style="background-image: url(@asset('images/proudly.svg'))">proudly manufactured in the United states</h2>
	<img src="@asset('images/about-map.jpg')" class="img-fluid my-5" alt="about-map" width="2500" height="1433" />
</section>

<section class="meet row">
	<header class="container my-5">
  	<h2 class="image-h" style="background-image: url(@asset('images/meet-sientra.svg'))">Meet Sientra</h2>
	</header>
	
  <div class="swiper-container swiper-team py-5">
    <div class="swiper-wrapper">
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/amelia-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/cindyprado-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/hochstein-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/edenknows-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />        
        
      </div>
      <div class="swiper-slide justify-content-center">
        <img src="@asset('images/summer-insta.jpg')" class="img-fluid" alt="hochstein-insta" width="300" height="368" />
        
      </div>
    </div><!-- .swiper-wrapper -->
  </div>	
	
</section>

<section class="commitment boxy-box text-center my-5">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
    	<img src="@asset('images/one-woman.jpg')" alt="one-woman" width="1500" height="992" />
      <p>ONE WOMAN’S BREAST<br>reconstruction<br>contributes to<br>another woman’s cure</p>
  	</div>

  	<div class="col-12 col-lg-5 message bg-white text-center light">
      <div class="message-inner">
        <p>Supports nonprofits in the breast cancer community dedicated to aid, research, patient outreach/advocacy and prevention</p>
<p>A portion of sales of each <span class="opus">OPUS</span> expander is contributed 
to the Sientra Full Circle Fund</p>
<p><a href="http://sientra.com/fullcircle/about/">http://sientra.com/fullcircle/about/</a></p>
      </div>
  	</div>
  	  	
  </div>
</section>
<section class="careers light text-center container my-5">
	<h3 class="opus light">We Help Build Relationships. And Careers.</h3>
<p>We are seeking exceptionally talented and motivated people to join our team. 
If you are looking for a career that is both challenging and rewarding, and to 
work for a company at the forefront of the aesthetic industry, please visit our </p>
<p class="heavy opus">Careers Website.</p>
</section>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp