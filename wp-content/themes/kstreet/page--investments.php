<?php
/*
Template Name: Investments
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
			<div class="investments">
				<?php 
				
				$posts = get_field('investments');
				
				if( $posts ): ?>
				    <div class="row">
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <div class="large-4 columns invest">
					        <?php $company_link = get_field('link_to_company_site', $post); 
						        if(!empty($company_link)): ?>
									<a href="<?php echo $company_link; ?>" title="<?php the_title(); ?>" target="_blank"><img src="<?php echo get_field('investment_image', $post); ?>"></a>
							<?php else: ?>
									<img src="<?php echo get_field('investment_image', $post); ?>">
							<?php endif; ?>		
				        </div>
				    <?php endforeach; ?>
				    </div>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>
			<div class="process-heading">
				<div class="row">
					<div class="large-12 columns">
						<h3>Exits</h3>
					</div>
				</div>
			</div>
			<div class="investments">
				<?php 
				
				$posts = get_field('exits');
				
				if( $posts ): ?>
				    <div class="row">
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <div class="large-4 columns invest">
					        <?php $company_link = get_field('link_to_company_site', $post); 
						        if(!empty($company_link)): ?>
									<a href="<?php echo $company_link; ?>" title="<?php the_title(); ?>" target="_blank"><img src="<?php echo get_field('investment_image', $post); ?>"></a>
							<?php else: ?>
									<img src="<?php echo get_field('investment_image', $post); ?>">
							<?php endif; ?>	
				        </div>
				    <?php endforeach; ?>
				    </div>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>

			</div>
<?php get_footer(); ?>
