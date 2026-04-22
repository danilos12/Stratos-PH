<?php get_header(); /*Template Name: Fire Alarm Active Monitoring */ ?>



<section class="cstm_hero faam_hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
					<li><a href="<?php bloginfo('url'); ?>/services">Services</a></li>
					<li class="active"><?php the_title(); ?></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="wrapper">
				<h1>Services</h1>
				<div class="separator">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-seperator.png" alt="">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="float_logo">
				<a href="<?php bloginfo('url'); ?>/services/central-management-system/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sonitrol-verified-response.png" alt=""></a>
			</div>
		</div>
	</div>
</section>


<section class="cstm_serv faam_serv">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper_main">
					<h2><?php the_field('headline'); ?></h2>
					<span class="clrd"><?php the_field('sub_headline'); ?></span>
					<img class="ftrd" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					<div class="desc">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cstm_half faam_half" >
	<div class="container-fluid">
		<div class="row">

			<div class="bg" style="background: url('<?php the_field('mid_keyvisual'); ?>')no-repeat;" data-opacity="0">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12 item_hidden"></div>

			<div class="container">
				<div class=" col-md-5  col-sm-5  col-xs-12 item">
					<div class="wrapper">
						<?php the_field('other_description'); ?>

					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="cstm_enquire faam_enquire mb-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">

					<img class="ftrd" src="<?php the_field('left_keyvisual'); ?>" alt="">
					<img class="ftrd" src="<?php the_field('right_keyvisual'); ?>" alt="">

					<?php the_field('headline_e'); ?>

					<a class="get" href="<?php bloginfo('url'); ?>/contact">INQUIRE NOW</a>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- <section class="cta_thumbs other_serv">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 intro">
				<h2>our services</h2>
			</div>
		</div>
		<div class="row">
			<div class="wrapper">
				<div class=" item">
					<a href="<?php bloginfo('url'); ?>/services/burglar-and-alarm-system"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-burglar-th.jpg" alt=""></a>
				</div>

				<div class=" item">
					<a href="<?php bloginfo('url'); ?>/services/access-control-system/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-access-control.jpg" alt=""></a>
				</div>


				<div class=" item">
					<a href="<?php bloginfo('url'); ?>/services/video-surveilance-analytics"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-video-th.jpg" alt=""></a>
				</div>

				<div class=" item">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-fire-alarm-th.jpg" alt=""></a>
				</div>

				<div class=" item">
					<a href="<?php bloginfo('url'); ?>/services/central-management-system"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-central-monitoring-th.jpg" alt=""></a>
				</div>

				<div class=" item">
					<a href="<?php bloginfo('url'); ?>/services/first-responders"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-first-response.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="cta_thumbs mb-10">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper-info space-between items-center">
				<div class="w-full flex justify-center">
					<h2 class="mb-3">Our Featured Services</h2>
				</div>
				
				<div style="width:100%; height:5px; background-color:#CC1A42;"></div>
				<div style="width:100%; height:50vh; background-color:#ebeced;" id="circular-gallery"></div>
				<div style="width:100%; height:5px; background-color:#CC1A42;"></div>
				
			</div>
		</div>
	</div>
</section>

  <?php get_footer(); ?>
