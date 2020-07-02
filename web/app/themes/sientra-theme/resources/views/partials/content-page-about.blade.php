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
</section>

<section class="manufacture">
	<h2 class="image-h" style="background-image: url(@asset('images/proudly.svg'))">proudly manufactured in the United states</h2>
</section>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp