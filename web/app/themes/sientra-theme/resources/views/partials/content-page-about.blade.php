<section class="hero row d-block">
<!-- 	<h1 class="image-h" style="background-image: url(@asset('images/about-hero-txt.svg'))">Advanced science. Exceptional Service. Unrivaled Safety.</h1> -->


  <video autoplay muted loop playsinline >
      <source src="<?php the_field('video'); ?>" type="video/mp4" >
  </video>



</section>
<h2 class="text-center light my-5"><?php the_field('intro'); ?></h2>

<section class="brands row my-5">
  	<header>
    	<h2 class="image-h" style="background-image: url(<?php the_field('brands_image'); ?>)"><?php the_field('brands_title'); ?></h2>
  	</header>
	
		<?php // Check rows exists.
        if( have_rows('brands') ):

            // Loop through rows.
            while( have_rows('brands') ) : the_row(); ?>
				<?php $image = get_sub_field('image'); ?>
				<div class="col-12 col-sm-6 col-md-3">
					<a href="<?php the_sub_field('url'); ?>"><img src="<?php echo esc_url($image['url']); ?>)" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
					<?php the_sub_field('content'); ?>
				</div>

            <?php // End loop.
            endwhile;
        endif; ?>
		
		<footer class="col-12 text-left">
		  <?php the_field('brands_footer'); ?>
		</footer>

</section>

<section class="manufacture px-md-5 text-center">
  <h2 class="silver"><?php the_field('manufactured'); ?></h2>
	<?php $manufacturing_map = get_field('manufacturing_map'); ?>
	<img src="<?php echo esc_url($manufacturing_map['url']); ?>" class="img-fluid my-5 d-none d-md-block" alt="<?php echo esc_attr($manufacturing_map['alt']); ?>" width="2500" height="1433" />
	
	
	<div class="row d-md-none">
    <article class="col-12">
    	<img src="@asset('images/hq-sientra.jpg')" class="img-fluid" alt="hq-sientra" width="800" height="697" />	
    	<img src="@asset('images/Sientra-logo.svg')" class="img-fluid w-50 mb-3" alt="Sientra-logo" />
    	<h3 class="hq">headquarters</h3>
    	<p class="location">Santa Barbara, CA</p>
    	<p class="des light px-5">Sientra is headquartered in Santa Barbara, California, known for its idyllic weather and fresh ocean air. And just a mile from spectacular coastline views.</p>
    </article>
    <article class="col-12">
    	<img src="@asset('images/hq-implant.jpg')" class="img-fluid" alt="hq-implant" width="800" height="569" />
    	<h3 class="hq">Breast Implant<br>ManufactUring</h3>
    	<p class="location">Franklin, WI</p>
    </article>
    <article class="col-12">
    	<img src="@asset('images/hq-expander.jpg')" class="img-fluid" alt="hq-expander" width="800" height="632" />
    	<h3 class="hq">Breast Tissue expander<br>ManufactUring</h3>
    	<p class="location">Victor, MT</p>
    </article>
    <article class="col-12">
    	<img src="@asset('images/hq-bio.jpg')" class="img-fluid" alt="hq-bio" width="800" height="641" />
    	<img src="@asset('images/biocorneum-logo.svg')" class="img-fluid w-50 mb-3" alt="biocorneum-logo" />
    	<h3 class="hq">BIOCORNEUM<br>ManufactUring</h3>
    	<p class="location">Largo, FL</p>
    </article>
    <article class="col-12">
    	<img src="@asset('images/hq-mira.jpg')" class="img-fluid" alt="hq-mira" width="800" height="743" />
    	<img src="@asset('images/miradry-logo.jpg')" class="img-fluid w-50 mb-3" alt="miradry-logo" width="789" height="230" />
    	<h3 class="hq">MIRADRY<br>ManufactUring</h3>
    	<p class="location">Santa Clara, CA</p>

    </article>
    
    
	</div><!-- .row -->

  	
</section>

<section class="meet row">
	<header class="container my-2 my-md-5 text-center">
  	<h2 class="image-h" style="background-image: url(<?php the_field('meet_sientra_image'); ?>)"><?php the_field('meet_sientra_title'); ?></h2>
  	<h2 class="silver"><?php the_field('meet_sientra_title'); ?></h2>
	</header>
	
  <div class="swiper-container swiper-team px-5 p-md-5 p-2 w-100">
    <div class="swiper-wrapper">
      <?php // Check rows exists.
      if( have_rows('sientra_team') ):
			
          $modal = 1;
		
          // Loop through rows.
          while( have_rows('sientra_team') ) : the_row(); ?>

			<div class="swiper-slide justify-content-center">

              <div class="card text-center" style="background-image: url(<?php the_sub_field('photo'); ?>);">
                <div class="card-bg">
                  <div class="card-body">
                    <h5 class="card-title medium"><?php the_sub_field('name'); ?></h5>
                    <p class="card-text light"><?php the_sub_field('title'); ?></p>
                  </div>
                </div>
                <div class="hover p-4">
                  <div><h2 class="medium opus"><?php the_sub_field('name'); ?></h2>
                  <p class="light"><?php the_sub_field('title'); ?></p></div>
                  <button class="btn" data-toggle="modal" data-target="#bio<?php echo $modal; ?>">view my profile</button>
                  <p class="text-left m-0"><span class="heavy"><?php the_sub_field('name'); ?></span> <?php the_sub_field('intro'); ?></p>             

                </div>
              </div>

            </div>

          <?php 
          $modal++;
          // End loop.
          endwhile;
      endif; ?>
    </div><!-- .swiper-wrapper -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>    
  </div>	
	
</section>

<section class="commitment boxy-box text-center my-5">
  <div class="wrap px-0 pl-lg-3">  	
  	
  	<div class="col-12 col-lg-8 model text-left px-0 pl-lg-3">
    	<img src="@asset('images/one-woman.jpg')" alt="one-woman" width="1500" height="992" />
      <p>ONE WOMAN’S <span class="heavy">BREAST<br>reconstruction</span><br>contributes to<br>another woman’s <span class="heavy">cure</span></p>
  	</div>

  	<div class="col-12 col-lg-5 message bg-white text-center light">
      <div class="message-inner">
        <h2 class="silver">Our Commitment</h2>
        <h4>goes beyond products and services</h4>
        <img src="@asset('images/sientra-full-circle.svg')" class="w-50 img-fluid my-3 px-md-5 mx-auto" alt="sientra-full-circle" />
        <p>Supports nonprofits in the breast cancer community dedicated to aid, research, patient outreach/advocacy and prevention</p>
        <p>A portion of sales of each <span class="opus">OPUS</span> expander is contributed 
to the Sientra Full Circle Fund</p>
        <p><a href="http://sientra.com/fullcircle/about/" class="opus">http://sientra.com/fullcircle/about/</a></p>
      </div>
  	</div>
	
  </div>
</section>
<section class="careers light text-center container my-5">
	<h3 class="opus light">We Help Build Relationships. And Careers.</h3>
<p>We are seeking exceptionally talented and motivated people to join our team. 
If you are looking for a career that is both challenging and rewarding, and to 
work for a company at the forefront of the aesthetic industry, please email us at <a href="mailto:careers@sientra.com" class="heavy opus">careers@sientra.com</a> for inquiries and opportunities.
 </p>

</section>


<?php // Check rows exists.
if( have_rows('sientra_team') ):

    $modal = 1;

    // Loop through rows.
    while( have_rows('sientra_team') ) : the_row(); ?>

      <!-- Modal -->
      <div class="modal fade" id="bio<?php echo $modal; ?>" tabindex="-1" role="dialog" aria-labelledby="bio" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
             <p class="text-left light"><span class="heavy opus"><?php the_sub_field('name'); ?></span> <?php the_sub_field('modal_content'); ?></p>

            </div>
          </div>
        </div>
      </div>

    <?php 
    $modal++;
    // End loop.
    endwhile;
endif; ?>

<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<!-- @php the_content() @endphp -->