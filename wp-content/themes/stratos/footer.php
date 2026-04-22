<!-- footer starts -->



<footer style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/stratos-footer.jpg') #222 no-repeat;">

	<div class="container">

		<div class="row">

			<div class="wrapper">

				<div class="col-md-3 col-sm-6">

					<div class="item logo">

						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ALARM SYSTEM transparent.png" alt="">

						<p>

							Tel: <a href="tel:(082) 233-6144">(082) 233-6144</a>

							<br>

							Email:  <a href="mailto:info@stratos.ph">info@stratos.ph</a>

						</p>
						
					</div>

				</div>



				<div class="col-md-3 col-sm-6">

					<div class="item sections">

						<h4>Sections</h4>

						<ul>

						   <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>

						   <li><a href="<?php bloginfo('url'); ?>/about-us">About us</a></li>

						   <li><a href="<?php bloginfo('url'); ?>/services">Services</a></li>

						   <!-- <li><a href="<?php bloginfo('url'); ?>/case-studies">Case Studies</a></li> -->

						   <li><a href="<?php bloginfo('url'); ?>/contact">Contact us</a></li>

						   <li><a href="<?php bloginfo('url'); ?>/support">IT Support</a></li>

						</ul>

					</div>

				</div>



				<!-- <div class="col-md-3 col-sm-6">

					<div class="item events">

						<h4>Upcoming events</h4>

						<ul>

						   <li>Event name #1 - April 2019</li>

						   <li>Event name#2 - May 2019</li>

						   <li>Event name#3 - June 2019</li>

						</ul>

					</div>

				</div> -->



				<div class="col-md-3 col-sm-6">

					<div class="item social">

						<h4>Follow us</h4>

						<div class="icons">

							<a href="<?php the_field('facebook',11); ?>"><i class="fa fa-facebook-f"></i> </a>

							<a href="<?php the_field('linkedin',11); ?>"><i class="fa fa-linkedin"></i> </a>

							<a href="<?php the_field('instagram',11); ?>"><i class="fa fa-instagram"></i> </a>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</footer>



<section class="copyright">

	<div class="container">

		<div class="row">

			<div class="wrapper">

				<div class=" w-full text-center flex items-center justify-center col-md-4">

					<p>2020 Stratos Security. All Rights Reserved. <br>
				Developed by Andre Dan Dayaganon</p> 

				</div>


<!-- 
				<div class="col-md-4 btop">

					<a href="#top" class="smoothScroll"><i class="fa fa-chevron-up"></i>Back to top </a>

				</div> -->



				<!-- <div class="col-md-4 terms">

					<a href="#">Terms and Conditions</a>

					<a href="#">Privacy Policy</a>

					<a href="#">Cookie Policy</a>

				</div> -->

			</div>

		</div>

	</div>

</section>



<!-- footer ends   -->



<!-- ////////////////   SCRIPT AREA  ///////////////-->

<script src="<?php echo get_template_directory_uri(); ?>/assets/framework/js/jquery-3.1.0.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/framework/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>



<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.selectric.js"></script>



<!-- smoothscroll starts-->

<script>

	$(function() {

  // This will select everything with the class smoothScroll

  // This should prevent problems with carousel, scrollspy, etc...

  $('.smoothScroll').click(function() {

    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

      var target = $(this.hash);

      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {

        $('html,body').animate({

          scrollTop: target.offset().top-120

        }, 900); // The number here represents the speed of the scroll in milliseconds

        return false;

      }

    }

  });

});



</script>

<!-- smoothscroll ends-->



<!-- selectric -->

<script>

	$('select').selectric();

</script>

<?php wp_footer(); ?>

<script>
	// Debug: Check if React bundle was loaded
	console.log('=== REACT BUNDLE DEBUG ===');
	console.log('Scripts loaded on this page:', window.scriptsLoaded);
	console.log('Bundle URL expected:', '<?php echo get_template_directory_uri(); ?>/assets/js/dist/bundle.js');
	
	// Check if initReactApp is defined
	console.log('initReactApp function exists?', typeof initReactApp !== 'undefined');
	
	// Check all scripts in document
	const allScripts = Array.from(document.querySelectorAll('script[src]')).map(s => s.src);
	console.log('All script tags found:', allScripts);
	
	// Check if bundle specifically is there
	const bundleScript = allScripts.find(s => s.includes('bundle.js'));
	if (bundleScript) {
		console.log('✅ Bundle script tag found:', bundleScript);
	} else {
		console.error('❌ Bundle script tag NOT found!');
	}
</script>

<script>
  /* Sticky nav: add .scrolled class after mini-header height */
  (function () {
    var nav = document.querySelector('nav.m_header');
    if (!nav) return;
    var mini = document.querySelector('section.miniheader');
    var threshold = mini ? mini.offsetHeight : 0;
    function onScroll() {
      if (window.scrollY > threshold) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  })();
</script>


