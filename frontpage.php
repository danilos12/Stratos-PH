<?php get_header(); /*Template Name: Front Page */ ?>

<section class="h_hero" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/stratos-hero.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="side_item">
				<div class="fs_item">
					<h2>Featured services</h2>
					<p>Check our notable Commercial Security Services</p>
					<hr>

					<div class="s_wrap">
						<span class="icon">
							<a href="<?php bloginfo('url'); ?>/services/burglar-and-alarm-system">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-bulgar.png" alt="">
								<hr>
								<p>Burglar & Alarm System</p>
							</a>
						</span>

						<span class="icon">
							<a href="<?php bloginfo('url'); ?>/services/access-control-system">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-access.png" alt="">
								<hr>
								<p>Access Control System</p>
							</a>
						</span>
					</div>
				</div>
				<div class="more">
					<a href="<?php bloginfo('url'); ?>/services">MORE INFO <i class="lnr lnr-chevron-right"></i> </a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="wrapper_main">
					<h1><?php the_field('headline'); ?></h1>
					<div class="separator">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-seperator.png" alt="">
					</div>
					<p><?php the_field('sub_headline'); ?></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="h_cta">
				
			<?php while ( have_rows('services_repeater') ) : the_row(); ?>
				<div class="col-md-3 col-sm-3 wrap">
					<div class="item">
						<a href="<?php the_sub_field('url'); ?>"><h2><?php the_sub_field('title'); ?></h2></a>
						<p><?php the_sub_field('description'); ?></p>
					</div>
				</div>

			<?php endwhile; ?>	

			</div>
		</div>
	</div>
</section>

<section class="we_are">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<h2>We are stratos</h2>

				<?php while ( have_rows('we_are_stratos_repeater') ) : the_row(); ?>
				<div class="col-md-3 col-sm-6 item_wrap">
					<div class="item">
						<h3><?php the_sub_field('title'); ?></h3>
						<?php the_sub_field('description'); ?>
					</div>
				</div>

				<?php endwhile; ?>

				
			</div>
		</div>
	</div>
</section>

<section class="cta_thumbs mb-10">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper-info space-between items-center">
				<div class="w-full flex justify-center">
					<h2 class="mb-3">Featured Services</h2>
				</div>
				
				<div style="width:100%; height:5px; background-color:#CC1A42;"></div>
				<div style="width:100%; height:50vh; background-color:#222222;" id="circular-gallery"></div>
				<div style="width:100%; height:5px; background-color:#CC1A42;"></div>
				
			</div>
		</div>
	</div>
</section>

<a href="<?php bloginfo('url'); ?>/services/central-management-system"><section class="h_cycle" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/stratos-homeft.jpg')no-repeat;">
	<iframe src="<?php echo get_template_directory_uri(); ?>/assets/animate/stratos-animate.html" height="100%" width="100%"></iframe>
	
</section></a>







  <?php get_footer(); ?>