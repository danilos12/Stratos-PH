<?php /* Template Name: Case Studies */ ?>
<?php get_header(); ?>


<section class="cstm_hero case_hero">
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


<section class="case_content" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<h2>Customers Stories</h2>

					<div class="filter">
						<form action="" method="get" accept-charset="utf-8">
							<select name="" >
								<option value="">Industries</option>
								<option value="">option</option>
								<option value="">option</option>
							</select>

							<select name="" >
								<option value="">Products</option>
								<option value="">option</option>
								<option value="">option</option>
							</select>

							<select name="" >
								<option value="">Solutions</option>
								<option value="">option</option>
								<option value="">option</option>
							</select>

							<button class="clr" type="">Clear all</button>
						</form>
					</div>

					<div class="row">
						<div class="item_wrap">
							
							<?php 
	
							 $args = array(
							 'post_type' => array('case-study'),
											                   					  
							 's' => $keyword,
							'posts_per_page' => -1,
											                                     
							);

							$loop = new WP_Query( $args );
							 if ( $loop->have_posts() ) :
								while ( $loop->have_posts() ) :
								$loop->the_post();

							 ?>
							<div class="col-md-4 col-sm-6">
								<div class="item">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="case_logo" alt="">
									<p><?php echo get_the_excerpt(); ?></p>

									<a href="<?php the_permalink(); ?>" class="readm">READ MORE</a>
								</div>
							</div>

							<?php endwhile; ?>		
							<?php endif; ?>
						</div>
					</div>


					<div class="row">
						<div class="col-md-12">
							<div class="more">
								<a href="">MORE</a>
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>