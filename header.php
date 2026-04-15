<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Stratos Security</title>
  <meta name="description" content="">
  <meta name="author" content="">
	<?php wp_head(); ?>
	
	<script>
		// Track which scripts load
		window.scriptsLoaded = [];
		document.addEventListener('load', function(e) {
			if (e.target.tagName === 'SCRIPT') {
				window.scriptsLoaded.push(e.target.src);
				console.log('📜 Script loaded:', e.target.src);
			}
		}, true);
	</script>


</head>


<body>

<div id="top"></div>
<!-- header starts -->
<section class="miniheader">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<span><a href="tel:<?php the_field('tel',11); ?> ">Call Us <!-- +63 --> <?php the_field('tel',11); ?> </a></span>

					<span>
					    <a href="<?php the_field('facebook',11); ?>"><i class="fa fa-facebook-f"></i></a>
					    <a href="<?php the_field('linkedin',11); ?>"><i class="fa fa-linkedin"></i></a>
					    <a href="<?php the_field('instagram',11); ?>"><i class="fa fa-instagram"></i></a>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

<nav class="navbar navbar-inverse m_header">
  <div class="container">
    <div class="navbar-header">
    	<button id="ChangeToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
		  <div id="navbar-hamburger">
			 <span class="sr-only">Toggle navigation</span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
		  </div>
		</button>
      	<a class="navbar-brand" href="<?php bloginfo('url'); ?>/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/ALARM SYSTEM transparent.png" alt=""></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
	    <ul class="nav navbar-nav  navbar-right">
	      <li <?php echo (is_front_page() ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/">Home</a></li>
	      <li <?php echo (is_page('about-us') ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/about-us">About us</a></li>
	      <li <?php echo (is_page('services') ? 'class="active dropdown"' : ''); ?> class="dropdown"><a href="<?php bloginfo('url'); ?>/services">Services</a>
				<ul class="dropdown-menu">
				    <li ><a  href="<?php bloginfo('url'); ?>/services/burglar-and-alarm-system">Burglar and Alarm System</a></li>
				    <li><a href="<?php bloginfo('url'); ?>/services/access-control-system">Access Control System</a></li>
				    <li><a href="<?php bloginfo('url'); ?>/services/video-surveilance-analytics">Video Surveillance and Analytics</a></li>
				    <li><a href="<?php bloginfo('url'); ?>/services/fire-alarm-active-monitoring">Fire Alarm Active Monitoring</a></li>
				    <li><a href="<?php bloginfo('url'); ?>/services/central-management-system">24/7 Central Monitoring</a></li>
				    <li><a href="<?php bloginfo('url'); ?>/services/first-responders">First Responders</a></li>
				</ul>
	      </li>
	      <li <?php echo (is_page('contact') ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
	      <li class="search"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></a></li>
	    </ul>
	</div>
  </div>
</nav>

<!-- search modal -->
<div class="modal fade search_modal" id="myModal" role="dialog">
    <div class="modal_container">
      <div class="modal-content container ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="lnr lnr-cross"></i></button>
        </div>
        <div class="modal-body">
          <form action="" method="get" accept-charset="utf-8">
             <input type="text" name="" placeholder="Type and hit enter to search">
          </form>

        </div>
      </div>
    </div>
  </div>
<!-- search modal ends-->

<!--  header ends  -->
