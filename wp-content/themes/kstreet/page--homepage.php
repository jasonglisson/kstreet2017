<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					    	<h3 class="raleway"><?php the_field('homepage_heading'); ?></h3>    					
    				</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
<!-- 				<div class="overlay"></div> -->
				<div class="arrow show-for-medium-up"></div>
			</div> <!-- end #content -->
			<div class="about-us">
  			<div class="large-6 columns">what we do</div>
  			<div class="large-6 columns" style="background: #ddd;">picture</div>
  			<div class="large-6 columns" style="background: #ddd;">picture</div>
  			<div class="large-6 columns">who we are</div>  			  			
			</div>	
			<div class="mailchimp-signup">
				<div class="row">
					<h3>K Street Newsletter Signup</h3>
					<div class="header-line"></div>
					<?php echo do_shortcode( '[mc4wp_form]' ); ?>					
				</div>	
			</div>
<?php get_footer(); ?>