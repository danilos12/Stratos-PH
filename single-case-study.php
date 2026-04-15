<?php get_header(); ?>


<section class="cstm_hero single_case_hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
					<li class="active">Case Study</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="wrapper">
				<h1>Case study</h1>
				<div class="separator">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-seperator.png" alt="">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="float_logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sonitrol-verified-response.png" alt="">
			</div>
		</div>
	</div>
</section>


<section class="sc_sub_hero" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/case_subhero.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<a href=""><i class="lnr lnr-chevron-left"></i> All customer stories</a>

					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="sc_content" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="intro">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="sc_logo" alt="">
					</div>

					<div class="col-md-8">
						<div class="desc">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; endif; ?>
						</div>
					</div>

					<div class="col-md-4">
						<div class="sidebar">
							<h3>Other Case Studies</h3>
							<ul>
							<?php 
	
							 $args = array(
							 'post_type' => array('case-study'),
							 'post__not_in' => array(get_the_ID()),                					  
							 's' => $keyword,
							'posts_per_page' => -1,
											                                     
							);

							$loop = new WP_Query( $args );
							 if ( $loop->have_posts() ) :
								while ( $loop->have_posts() ) :
								$loop->the_post();

							 ?>
							    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							 <?php endwhile; ?>		
							<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer();?>