<?php get_header(); /*Template Name: Contact Page */ ?>


<section class="cstm_hero contact_hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Contact</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="wrapper">
				<h1>Contact</h1>
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


<section class="c_content" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-map.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h2>ENQUIRE ON STRATOS’ SECURITY SERVICES</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="item_wrap">
					<div class="col-md-4 left">
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-mail.png" alt="">
							<h4>
							   General Inquiries
							   <a href="mailto:<?php the_field('general_email'); ?>"><?php the_field('general_email'); ?></a>
							</h4>
						</div>

						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-user.png" alt="">
							<h4>
							   HR and Recruitment
							   <a href="mailto:<?php the_field('hr_email'); ?>"><?php the_field('hr_email'); ?></a>
							</h4>
						</div>

						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-map.png" alt="">
							<h4>
							   Google Maps
							   <a href="<?php the_field('google_map'); ?>">Click here for coordinates</a>
							</h4>
						</div>
					</div>

					<div class="col-md-8 right">
						<h4>Your enquiry</h4>

						<?php echo do_shortcode('[contact-form-7 id="141" title="Contact"]'); ?>
					</div>

					<div class="cftr">
						<div class="col-md-6 col-sm-6 wrap_left">
							<div class="cftr_item">
								<h4>Office</h4>
								<p>
									<?php the_field('office_address'); ?> <br>
									<a class="gmap" href="<?php the_field('google_map'); ?>"><i class="fa fa-map-marker"></i>Google Map</a>

								</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 wrap_right">
							<div class="cftr_item">
								<h4>Contacts</h4>
								<p>
									Tel:  <a href="tel:<?php the_field('tel'); ?>"><?php the_field('tel'); ?></a> <br>
									Fax:  <a href="tel:<?php the_field('fax'); ?>"><?php the_field('fax'); ?></a> <br>
									Email:  <a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a> <br>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>