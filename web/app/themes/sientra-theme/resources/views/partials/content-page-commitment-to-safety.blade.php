<section class="hero row" style="background-image:url(<?php the_field('hero_background'); ?>)">
	<?php $page_title = get_field('page_title'); ?>
	
	<h1 class="image-h w-100" style="background-image:url(<?php echo esc_url($page_title['url']); ?>); height: 13vw;">A commitment to patient safety</h1>
</section>

<section class="lead my-5 light">
	<?php the_field('intro'); ?>
</section>

<section class="faq">
	
	<?php if( have_rows('faq') ):

        while( have_rows('faq') ) : the_row(); ?>
			<div class="card">  
				<div class="card-body light">
					<h2><?php the_sub_field('faq_title'); ?></h2>
					<?php the_sub_field('faq_content'); ?>
				</div>
			</div>

        <?php 
        endwhile;
    endif; ?>
  
</section>
<small><?php the_field('note'); ?></small> 

<section class="warranty container mt-5">
  <div class="row">
    <div class="col-8 offset-2 offset-md-0 col-md-3 mb-4 mb-md-0">
  		<?php 
		$warranty_image = get_field('warranty_image');
		if( !empty( $warranty_image ) ): ?>
			<img src="<?php echo esc_url($warranty_image['url']); ?>" alt="<?php echo esc_attr($warranty_image['alt']); ?>" />
		<?php endif; ?>
  	</div>
  	<div class="col-12 col-md-8">
  		<h3 class="medium opus"><?php the_field('warranty_title'); ?></h3>
      	<div class="light"><?php the_field('warranty_content'); ?></div>
  	</div>
  	<div class="col-12 text-center my-5">
  		<?php the_field('closing_paragraph'); ?>
  	</div>
  </div>
</section> 

<section class="resources container">
	<div class="row">
		<article class="col-12 col-md-6">			
			<header class="mb-4"><h3 class="image-h" style="background-image:url(<?php the_field('for_physicians_image'); ?>);  height: 4.5vw; "><?php the_field('for_physicians_title'); ?></h3></header>
			
			<?php // Check rows exists.
			if( have_rows('for_physicians_content') ):

				// Loop through rows.
				while( have_rows('for_physicians_content') ) : the_row(); ?>

					<span><?php if (get_sub_field('column_1_file')) { ?><a href="<?php the_sub_field('column_1_file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('column_1_url'); ?>" target="_blank">WEB</a><?php } ?> </span> <?php the_sub_field('column_1_text'); ?>

				<?php // End loop.
				endwhile;
			endif; ?>
		<!--
        <span><a href="@asset('images/Sientra-FDA-Breast-Advisory-Committee-Meeting-Statement-5.6.2019.pdf')" target="_blank">PDF</a> </span> <p>Letter to Plastic Surgeons – FDA Breast Panel Statement</p>
        <span><a href="@asset('images/Sientra-Breast-Implant-Safety-Update-21419.pdf')" target="_blank">PDF</a> </span> <p>Letter to Plastic Surgeons – Breast Implant Safety Update, February 2019</p>
        <span><a href="/breast-augmentation/warranty-details/" target="_blank">WEB</a> </span> <p>Sientra Breast Implant Warranty Information</p>
        <span><a href="@asset('images/2019-BIA-ALCL-FAQandResources-from-Sientra-Medical-Affairs-MDC-0365-R1.pdf')" target="_blank">PDF</a> </span> <p>2019 BIA-ALCL Frequently Asked Questions from Sientra Medical Affairs</p>
        <span><a href="@asset('EXT-0029-R2-14-Point-Plan.pdf')" target="_blank">PDF</a> </span> <p>Surgical Best Practices: 14-Point Plan</p>
        <span><a href="https://www.plasticsurgery.org/patient-safety/breast-implant-safety" target="_blank">WEB</a> </span> <p>ASPS – Important Notes About Breast Implant Safety</p>
        <span><a href="https://www.plasticsurgery.org/for-medical-professionals/publications/psn-extra/news/fda-announces-new-initiatives-on-breast-implant-safety" target="_blank">WEB</a> </span> <p>ASPS – FDA Announcement and Registry Information</p>
        <span><a href="https://www.surgery.org/media/resources" target="_blank">WEB</a> </span> <p>ASAPS – Breast Implant-Associated Illness References</p>
        <span><a href="https://www.fda.gov/medical-devices/breast-implants/risks-and-complications-breast-implants" target="_blank">WEB</a> </span> <p>FDA – Summary of Breast Implant Risks</p>
        <span><a href="https://www.fda.gov/news-events/press-announcements/statement-fda-principal-deputy-commissioner-amy-abernethy-md-phd-and-jeff-shuren-md-jd-director-fdas" target="_blank">WEB</a> </span> <p>FDA- Statement on new efforts to protect women’s health and ensure safety of breast implants</p>-->

		</article>
		
		<article class="col-12 col-md-6 patient">
  		  		
			<header class="mb-4"><h3 class="image-h" style="background-image:url(<?php the_field('for_patients_image'); ?>); height: 4.8vw; "><?php the_field('for_patients_title'); ?></h3></header>
			
			<?php // Check rows exists.
			if( have_rows('for_patients_content') ):

				// Loop through rows.
				while( have_rows('for_patients_content') ) : the_row(); ?>

					<span><?php if (get_sub_field('column_1_file')) { ?><a href="<?php the_sub_field('column_1_file'); ?>" target="_blank">PDF</a><?php } else { ?><a href="<?php the_sub_field('column_1_url'); ?>" target="_blank">WEB</a><?php } ?> </span> <?php the_sub_field('column_1_text'); ?>

				<?php // End loop.
				endwhile;
			endif; ?>
			
		<!--
        <span><a href="@asset('images/MDC-0342-R1-SafetyofSilicone.pdf')" target="_blank">PDF</a> </span> <p>Safety of Silicone</p>
        <span><a href="/breast-reconstruction/safety/" target="_blank">WEB</a> </span> <p>Sientra Breast Implant Safety Data</p>
        <span><a href="/breast-augmentation/warranty-details/" target="_blank">WEB</a> </span> <p>Sientra Breast Implant Warranty Information</p>
        <span><a href="@asset('images/Sientra-PatientLabel-Augmentation-MDC-0010-R2-11717-1.pdf')" target="_blank">PDF</a> </span> <p>Sientra Breast Augmentation Patient Educational Brochure</p>
        <span><a href="@asset('images/Sientra-PatientLabel-Reconstruction-MDC-0011-R2-11717-1.pdf')" target="_blank">PDF</a> </span> <p>Sientra Breast Reconstruction Patient Educational Brochure</p>
        <span><a href="https://www.plasticsurgery.org/patient-safety/breast-implant-safety" target="_blank">WEB</a> </span> <p>ASPS – Important Notes About Breast Implant Safety</p>
        <span><a href="https://www.surgery.org/media/resources" target="_blank">WEB</a> </span> <p>ASAPS – Breast Implant-Associated Illness References</p>
        <span><a href="https://www.fda.gov/medical-devices/breast-implants/risks-and-complications-breast-implants" target="_blank">WEB</a> </span> <p>FDA – Summary of Breast Implant Risks</p>-->

		</article>
	
	</div><!-- .row -->	
	
</section>




<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<!-- @php the_content() @endphp -->