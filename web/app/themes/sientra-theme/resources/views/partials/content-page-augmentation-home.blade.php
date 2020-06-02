<section class="hero row flex-column">
<!-- 	<img src="@asset('images/aug_home_hero.jpg')" class="img-fluid" alt="aug_home_hero" width="2500" height="1552" /> -->
	<img class="img-fluid"
	   srcset="@asset('images/aug_home_hero-1200.jpg') 1200w,
             @asset('images/aug_home_hero-2500.jpg') 2500w"
     sizes="(max-width: 1200px) 1200px,
            2500px"
     src="@asset('images/aug_home_hero-2500.jpg')"
     alt="Safer more beautiful results" width="2500" height="1552" >
</section>

<section class="row why-choose text-center my-4  py-5">
	<div class="col-12 mb-5">
  	<img src="@asset('images/why-choose.svg')" class="why-choose-h" alt="why choose" />
		<h3>Sientra <span class="opus">OPUS</span> implants?</h3>
	</div> 
	<div class="col">
		<p class="lead">Next-generation <br>
implant science</p>
<span class="opus">•••</span><br>
Implants designed <br>
to perform better with a high safety profile.<sup>1,2</sup>
	</div>
	<div class="col">
		<p class="lead">Only the best, most<br>  
highly trained plastic surgeons</p>
<span class="opus">•••</span><br>
Sientra is available exclusively through board-certified plastic surgeons. With <span class="opus">OPUS</span> you can trust you are in 
exceptionally skilled hands. 
	</div>
	<div class="col">
		<p class="lead">The industry’s most comprehensive
20-year warranty</p>
<span class="opus">•••</span><br>
It’s more than a warranty, it’s 
our commitment to your health and safety. 
	</div>
</section>
<section class="shape row text-center py-5">
	<div class="col-8">
		<h2>Implants designed to hold their shape<br> 
while maintaining a remarkably soft feel</h2>
	</div>
	<div class="col-8">
		<img src="@asset('images/shape-implant.png')" class="img-fluid mx-auto" alt="shape-implant" width="700" height="601" />
	</div>
</section>
<section class="pair row text-center py-5">
	<div class="col-5">
		<img src="@asset('images/perfect-pair.svg')" alt="perfect-pair" />
	</div>
	<div class="col-5 tag d-flex align-items-end">
		<p>When it comes to patient safety, not all implants are created equal. Sientra <span class="opus">OPUS</span> implants are clinically shown to have low complication rates.<sup>2</sup></p>
	</div>
	<div class="col-12 py-4">
		<h3>1,116 patients enrolled  |  evaluated for 10 years</h3>
	</div>
	<div class="col">
		<h3>Capsular Contracture</h3>
A tightening/hardening 
of the scar tissue around 
the implant
	</div>
	<div class="col">
		<h3>Implant Rupture</h3>
A hole or tear in the 
shell of the implant 

*(primary augmentation cohort)
	</div>
	<div class="col">
		<h3>Reoperation</h3>
Any additional surgery performed to the breast after the first breast implantation 
	</div>
</section>

<section class="row matters text-center">
	<div class="col-12">
		<img src="@asset('images/board-certified-matters.svg')" class="matters-h" alt="board-certified-matters" />
	</div>
  <div class="col wrap">
  	<div class="col-8 ml-auto boxed-wrap">
  		<div>
  		  <h2>Is your plastic surgeon board-certified?</h2>
  		  This is the first criteria to consider when researching a surgeon. Not all surgeons who perform breast augmentation are board-certified. Board-certification requires the highest level of surgical training and education and, as a result, is shown to minimize complications related to breast surgery.3 
  ONLY Sientra implants are available exclusively through board-certified plastic surgeons. You can trust if a surgeon offers Sientra, they are board-certified. 
  		</div>
  	</div>
  	<div class="col-5 img">
  		<img src="@asset('images/pittman.jpg')" alt="pittman" width="800" height="767" />
  	</div>
  </div>
</section>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp