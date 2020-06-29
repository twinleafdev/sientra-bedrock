<section class="boxy-box row text-center">
  <div class="container-fluid wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 px-lg-3">
      <img src="@asset('images/recon-before-after.jpg')" alt="recon-before-after" width="1500" height="861" />
  	</div>

  	<div class="col-12 col-lg-5 message bg-white">
      <div class="message-inner">
        <img src="@asset('images/before-after-gallery.svg')" alt="before-after-gallery" />
        
      </div>
  	</div>
  	  	
  </div>
</section>

<section class="container">
	<div class="low projection row">
  	<header class="col-12 text-center">
    	<img src="@asset('images/patient-one.svg')" alt="patient-one" />
      <h3>AlloX2 Mid-Height tissue expander exchanged to<br>Sientra <span class="opus">OPUS</span> high projection implant</h3>
  	</header>
      <article class="col-12 col-md-4"><img src="@asset('images/recon-b-a_01.jpg')" alt="recon-b-a_01" width="667" height="443" /></article>
      <article class="col-12 col-md-4"><img src="@asset('images/recon-b-a_02.jpg')" alt="recon-b-a_02" width="668" height="443" /></article>
      <article class="col-12 col-md-4"><img src="@asset('images/recon-b-a_03.jpg')" alt="recon-b-a_03" width="665" height="443" /></article>
    <footer class="col-12 text-center mt-4">
    	<p>Photos courtesy of Dr. Troy Pittman, MD, FACS</p>
    </footer>
	</div><!-- .container -->

</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp

