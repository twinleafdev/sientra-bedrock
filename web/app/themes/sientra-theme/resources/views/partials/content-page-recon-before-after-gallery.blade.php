<section class="boxy-box row text-center">
  <div class="container-fluid wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 px-lg-3">
      <img src="@asset('images/before-after.jpg')" alt="before-after" width="1200" height="692" />
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
  	<header class="col-12"><img src="@asset('images/patient-one.svg')" alt="patient-one" /></header>
    <article class="col-12 col-md-4"><img src="@asset('images/before-after_01.jpg')" alt="before-after_01" width="339" height="300" /></article>
    <article class="col-12 col-md-4"><img src="@asset('images/before-after_02.jpg')" alt="before-after_02" width="339" height="300" /></article>
    <article class="col-12 col-md-4"><img src="@asset('images/before-after_03.jpg')" alt="before-after_03" width="339" height="300" /></article>
	</div><!-- .container -->

</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp