<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
			
			<div id="about-wrap" class="top-title-wrap">
				<div id="inner-content" class="row">
				    <div id="main" class="large-12 columns first" role="main">
						<h1 class="page-title"><?php echo get_the_title(); ?></h1>					
				    </div> <!-- end #main -->
				</div> <!-- end #inner-content -->
				<div class="overlay"></div>
			</div> <!-- end #content -->
			<div class="who-what">
				<div class="row">
					<div class="large-6 medium-6 small-12 columns who-we-are">
						<h3>Who we are</h3>
						<div class="header-line"></div>							
						<?php the_field('who_we_are'); ?>
					</div>
					<div class="large-6 medium-6 small-12 columns what-we-do">
						<h3>What we do</h3>
						<div class="header-line"></div>							
						<?php the_field('what_we_do'); ?>
					</div>					
				</div>
			</div>
			<div id="our-process"></div>
			<div class="process-heading">
				<div class="row">
					<div class="large-12 columns">
						<h3>Our Investment Process</h3>
					</div>
				</div>
			</div>
			<div class="process">
				<?php if( have_rows('process') ): ?>



					<?php while( have_rows('process') ): the_row(); 
					
						// vars
						$icon = get_sub_field('icon');
						$process_title = get_sub_field('process_title');
						$process_text = get_sub_field('process_text');
					
						?>
						<div class="process-item row">
							<div class="large-2 medium-2 columns process-icons">
								<?php echo $icon; ?>
							</div>
							<div class="large-10 medium-10 columns process-info">
								<h3><?php echo $process_title; ?></h3>
								<div class="process-text"><?php echo $process_text; ?></div>
							</div>
						</div>
					<?php endwhile; ?>
					

				
				<?php endif; ?>
			</div>
<?php get_footer(); ?>
