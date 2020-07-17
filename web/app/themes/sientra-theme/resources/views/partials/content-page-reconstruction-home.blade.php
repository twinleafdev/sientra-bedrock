<section class="hero row flex-column">


</section>

<section class="intro row mb-5" >
  <div class="container">
    <header class="mx-auto">
    	<img src="@asset('images/helping-you-more.svg')" alt="helping-you-more" />
    </header>
  	<div class="col text-center my-5 light">
  		<p>For many women, restoring the look and feel of their breasts can be emotionally rewarding and promote a general sense of well-being. If you are considering breast reconstruction surgery, Sientra has a comprehensive portfolio of options to support you along your reconstructive journey.</p>
  	</div>  	
  </div><!-- .container -->

</section>
<section class="row d-block">
  <img src="@asset('images/recon-woman-section-break.jpg')" class="img-fluid" alt="recon-woman-section-break" width="2000" height="759" />	
</section>
<section class="guide text-center container light mt-5">
  <header>
    <img src="@asset('images/breast-surgery-guide.svg')" alt="breast-surgery-guide" />
  	<h3 class="light">what is breast reconstruction?</h3>
  </header>
	<p>Breast reconstruction is a surgical procedure that restores the shape and appearance of a breast. You may consider breast reconstruction following a mastectomy or a lumpectomy.</p>
	<p class="implant-bg">The most common approach is <span class="opus">implant-based reconstruction</span> which uses a breast implant to rebuild breast shape.<sup>1</sup> </p>
	<p>Breast reconstruction can either be performed in a <span class="opus">one-step procedure</span>, often referred to as <span class="opus">direct-to-implant</span>, where the implant is inserted at the time of your mastectomy. Or, more commonly, the reconstruction takes place in <span class="opus">two steps</span>.<sup>1</sup> </p>
</section>
<section class="two-step mt-5 text-center container">
  <div class="inner light">
    <header>
    	<img src="@asset('images/two-step-recon.svg')" alt="two-step-recon" />
    </header>
  	<p>During the <span class="opus">two-step</span> reconstruction method, a temporary breast tissue expander is used to form a new breast pocket which will eventually hold the long-term breast implant.</p>
  </div>

</section>
<section class="steps container light">
	<div class="step-one row my-5">
  	<div class="col-12 col-md-3">
  		<h2 class="image-h" style="background-image: url(@asset('images/step-one.svg'))">Step One</h2>
  	</div>
  	<div class="col-12 col-md-9 d-flex align-items-center flex-column flex-md-row">
    	Sterile saline is injected through the expander port to slowly stretch the muscle and skin creating a pocket for the breast implant
    	<img src="@asset('images/step-one-diagram.svg')" class="img-fluid d-block d-md-none" alt="step-one-diagram" />
  	</div>
  </div>
  <div class="col-12 d-none d-md-block">
    <img src="@asset('images/expander-diagram.svg')" alt="expander-diagram" />
  </div>
  <div class="step-two row my-5">
  	<div class="col-12 col-md-3 order-md-2">
  		<h2 class="image-h" style="background-image: url(@asset('images/step-two.svg'))">Step Two</h2>
  	</div>
    <div class="col-12 col-md-9 d-flex align-items-center flex-column flex-md-row order-md-1">
      Once the pocket is formed (typically within 2-6 months following surgery) the tissue expander is removed and replaced with a long-term breast implant	
      <img src="@asset('images/step-two-diagram.svg')" class="img-fluid d-block d-md-none" alt="step-two-diagram" />
    </div>

  </div>
</section>
<section class="timing boxy-box text-center">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-5 model text-left px-0 pl-lg-3">
      <img src="@asset('images/timing.jpg')" alt="timing" width="708" height="834" />
  	</div>

  	<div class="col-12 col-lg-8 message">
      <div class="message-inner">
        <header class="col-12 flex-column">
        	<span style="background-image:url( @asset('images/timing.svg') );">TIMING</span>
            <h3 class="light opus">Immediate vs. Delayed Reconstruction</h3>
          	<p class="light">Breast reconstruction can begin at the time of your mastectomy <span class="opus">(Immediate)</span> or it can be performed months or years later <span class="opus">(Delayed)</span>. Timing will depend on your stage of cancer and treatment plan post mastectomy:<sup>3</sup></p>
        
        </header>
        <div class="row">        
          <div class="col-12 col-md-6">
          	<h3>Some benefits of<br><span class="opus">Immediate Reconstruction</span><sup>3</sup></h3>
            <ul class="text-left">
              <li>One less surgery and potentially less costs</li>
              <li>Emotional benefit of beginning reconstruction at same time as 
              your mastectomy</li>
            </ul>
          </div>
          <div class="col-12 col-md-6">
          	<h3>Some benefits of<br><span class="opus">Delayed Reconstruction</span><sup>3</sup></h3>
            <ul class="text-left">
              <li> Allows for additional cancer therapies (such as chemo and radiation)</li>
              <li>More time to consider your reconstruction options</li>
            </ul>
          </div>       	
        </div><!-- .row -->
        <footer class="row light">
          <div class="col-12">
          	<p>You’ll want to discuss the timing of your breast reconstruction surgery with your doctor. Together you’ll determine your best path forward.</p>
          </div>
        </footer> 
      </div>
  	</div>
  	  	
  </div>
   
</section>
<section class="quote row my-5">
<!--     <img src="@asset('images/recon-patient-break.jpg')" class="img-fluid my-5" alt="recon-patient-break" width="2500" height="1094" /> -->
    <img src="@asset('images/jane-cook-quote.svg')" alt="jane-cook-quote" />
</section>
<section class="options row"> 
  <header class="col-12">
  	 <img src="@asset('images/options.svg')" class="img-fluid" alt="options" />
  </header>
	<div class="col-sm-12  col-lg-8 text-center">
  	<h2>breast tissue expanders and silicone gel breast implants
designed for your comfort and peace-of-mind</h2>
  </div>
  <img src="@asset('images/options-implant-group.jpg')" class="img-fluid w-75 h-100 mx-auto" alt="options-implant-group" width="1800" height="612" />
</section>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
@php the_content() @endphp