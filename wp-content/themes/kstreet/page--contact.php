<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
			
    	<div class="top-title-wrap">
    		<div id="inner-content" class="row">
    	    <div class="large-12 columns title-wrap first" role="main">
    			  <h1 class="page-title"><?php echo get_the_title(); ?></h1>					
    	    </div> <!-- end .title-wrap -->
    		</div> <!-- end #inner-content -->
    	</div> <!-- end .top-title-wrap -->
			<div class="inner-wrap">
				<div class="row">
 					<div class="large-6 medium-6 small-12 columns contact-form">
						<?php echo do_shortcode( '[contact-form-7 id="35" title="Contact"]' ); ?>
					</div>	 				
					<div class="large-6 medium-6 small-12 columns content">
						<?php if (have_posts()) : while (have_posts()) : the_post();?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>				
<?php get_footer(); ?>
