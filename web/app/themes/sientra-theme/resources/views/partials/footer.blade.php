<section class="connect text-center mb-5">
  <img src="@asset('images/connect.svg')" class="heading mx-auto mt-5 mb-1 img-fluid" alt="connect with us" width="400" height="66" />
  <div class="d-flex justify-content-center mb-1">
    <a href="https://www.facebook.com/SientraInc"><img src="@asset('images/facebook.svg')" class="social-icon" alt="facebook" /></a>
    <a href="https://www.instagram.com/sientrainc/?hl=en"><img src="@asset('images/instagram.svg')" class="social-icon" alt="instagram" /></a>
    <a href="https://www.linkedin.com/company/sientrainc"><img src="@asset('images/linkedin.svg')" class="social-icon" alt="linkedin" /></a>
  </div>
<!--
  <a href="#" class="mb-4 mt-1">CEO Corner</a>
  <div class="container my-5">
  	<div class="row">
  		<div class="col">
    		
  		<img src="@asset('images/social-section.png')" alt="social-section" class="img-fluid instagram-feed" width="1008" height="170" />
  		</div>
  	</div>
  </div>
-->
</section>
<a class="top" href="#top"><img src="@asset('images/scroll-top.svg')" alt="scroll-top" /><br>Scroll to top</a> 
<footer class="content-info">
  <div class="container-fluid">
    <div class="isi">
      <?php the_field('references'); ?>
    </div><!-- end .isi -->
   
   
    <div class="footerMenu row d-flex justify-content-between py-2 align-items-center">

      
      @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'container_class' => 'col-12 col-md-8 text-center text-md-left','menu_class' => 'nav', 'echo' => false]) !!}
      @endif      
      
      
      
        <div class="col-12 col-md-4 text-center text-md-right">© 2020 Sientra, Inc. All rights reserved.</div> 
      
    </div>    
  </div><!-- .container-fluid -->
</footer>


  <!--     @php dynamic_sidebar('sidebar-footer') @endphp -->
