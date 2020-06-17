<section class="boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
      <img src="@asset('images/implant-science.jpg')" alt="pittman" width="1200" height="691" />
  	</div>

  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
        <img src="@asset('images/patient-resources.svg')" alt="patient resources" />
      </div>
  	</div>
  	  	
  </div>
</section>
<section class="row why-choose text-center my-4">
  <div class="container-fluid wrap py-5">
  	<header class="col-12 mb-2 mb-sm-5">
    	<img src="@asset('images/why-choose.svg')" alt="why choose" />
  		<h3>Sientra <span class="opus">OPUS</span> implants?</h3>
  	</header> 
  	<article class="col-12 col-sm pt-3 pt-sm-0">
  		<p class="lead">Next-generation <br>
  implant science</p>
  <span class="opus">•••</span><br>
  Implants designed <br>
  to perform better with a high safety profile.<sup>1,2</sup>
  	</article>
  	<hr class="w-50 d-block d-sm-none">
  	<article class="col-12 col-sm pt-sm-0">
  		<p class="lead">Only the best, most<br>  
  highly trained plastic surgeons</p>
  <span class="opus">•••</span><br>
  Sientra is available exclusively through board-certified plastic surgeons. With <span class="opus">OPUS</span> you can trust you are in 
  exceptionally skilled hands. 
  	</article>
  	<hr class="w-50 d-block d-sm-none">
  	<article class="col-12 col-sm pt-sm-0">
  		<p class="lead">The industry’s most comprehensive
  20-year warranty</p>
  <span class="opus">•••</span><br>
  It’s more than a warranty, it’s 
  our commitment to your health and safety. 
  	</article>
  </div>
</section>
<section class="following boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
      <img src="@asset('images/implant-science.jpg')" alt="pittman" width="1200" height="691" />
  	</div>

  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
        Following a mastectomy, a temporary tissue expander is used to slowly stretch the muscle and skin to create a new pocket for the long-term breast implant.
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
          <div class="swiper-slide"><p><span class="q">&#8220;</span> I feel great and they feel more and more a part of me each day. Truly one of the best things I have done for myself. I am so happy with my decision. <span class="q">&#8221;</span><br><span class="sig">- RealSelf Member</span></p></div>
  
      </div>  
  
  </div>
</section>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp