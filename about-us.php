<?php get_header(); /*Template Name: About Us */ ?>



<section class="cstm_hero about_hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
					<li class="active">About us</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="wrapper">
				<h1>About us</h1>
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


<section class="a_content" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/stratos-about-globe.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="m_v">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-6 col-sm-6">
					<div class="item">
						<h3>Stratos Vision</h3>
						<hr>
						<p>We aspire  to be the leading Electronic and Physical Security Solution Integrator in the region. This is achieved  by partnering with High-tech and physical security solution providers globally.</p>
					</div>
				</div>

				<div class="col-md-6 col-sm-6">
					<div class="item">
						<h3>Stratos Mission</h3>
						<hr>
						<p>To streamline traditional security services using state of the art technology for cost efficiency and provide a modern and efficient centralized monitoring system with localized response unit.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ateam">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<h2>Team</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-about-team.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>



  <?php get_footer(); ?>