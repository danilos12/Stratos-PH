<?php get_header(); /*Template Name: Central Management System */ ?>


<section class="cstm_hero s_cms_hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
					<li><a href="<?php bloginfo('url'); ?>/services">Services</a></li>
					<li class="active">24/7 Central Monitoring</li>
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
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sonitrol-verified-response.png" alt=""></a>
			</div>
		</div>
	</div>
</section>


<section class="cstm_serv cms_serv">
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

<section class="cms_cc mb-3" style="background:url('<?php the_field('mid_keyvisual'); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<?php the_field('other_description'); ?>

					<div class="item">
						<h4><?php the_field('headline_c'); ?></h4>
						<ul>

						<?php while ( have_rows('benefits') ) : the_row(); ?>
						
						<li><?php the_sub_field('title'); ?></li>

						<?php endwhile; ?>
						    
						   
						</ul>
					</div>

					<div class="item">
						<h4><?php the_field('headline_r'); ?></h4>
						<?php the_field('description_r'); ?>
					</div>

					<div class="enquire">
						<?php the_field('headline_e'); ?>

						<a class="get" href="<?php bloginfo('url'); ?>/contact">Get a Free Assessment</a>
					</div>
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
					<a href="<?php bloginfo('url'); ?>/services/fire-alarm-active-monitoring"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-fire-alarm-th.jpg" alt=""></a>
				</div>

				<div class=" item">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-central-monitoring-th.jpg" alt=""></a>
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