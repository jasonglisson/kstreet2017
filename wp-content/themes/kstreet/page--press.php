<?php
/*
Template Name: Press
*/
?>

<?php get_header(); ?>
			
			<div class="top-title-wrap">
				<div id="inner-content" class="row">
				    <div id="main" class="large-12 columns first" role="main">
						<h1 class="page-title"><?php echo get_the_title(); ?></h1>					
				    </div> <!-- end #main -->
				</div> <!-- end #inner-content -->
				<div class="overlay"></div>
			</div> <!-- end #content -->
			<div id="press-links">
				<div class="row">
					<div class="large-12 columns">
						<h3>K Street Press</h3>
						<div class="header-line"></div>
						<?php
							$args = array( 'post_type' => 'press', 'posts_per_page' => 3 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="press-content large-4 end columns">
								<div class="press-source"><?php echo get_field('press_source'); ?></div>
								<div class="press-inner">
									<h5><?php the_date(); ?></h5>
									<a class="press-link-box" href="<?php echo get_field('press_link'); ?>" target="_blank"></a>
									<h4><a href="<?php echo get_field('press_link'); ?>" target="_blank"><?php the_title(); ?></a></h4>
									<div class="press-readmore"><a href="<?php echo get_field('press_link'); ?>">Read More</a></div>
								</div>	
							</div><?php
							endwhile;
						?>
					</div>											
				</div>	
			</div>
			<div class="mailchimp-signup">
				<div class="row">
					<h3>K Street Newsletter Signup</h3>
					<div class="header-line"></div>
					<?php echo do_shortcode( '[mc4wp_form]' ); ?>					
				</div>	
			</div>			
<?php get_footer(); ?>
