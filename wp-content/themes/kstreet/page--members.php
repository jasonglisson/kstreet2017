<?php
/*
Template Name: Members
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
					<div class="large-12 columns content">
						<?php if (have_posts()) : while (have_posts()) : the_post();?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>	
			</div>
			<div class="member-wrap">
				<div class="row">
					<h3>Executive Committee</h3>
					<div class="header-line"></div>
				</div>
				<?php 
				
				$posts = get_field('executive_committee');
				
				if( $posts ): ?>
				  <div class="row">
				    <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-5">
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <li class="large-3 medium-4 small-12 columns member">
			            	<?php if (get_field('member_image', $post)) {?>
			            		<img src="<?php echo get_field('member_image', $post); ?>">
			            	<?php } else { ?>
			            		<img class="default-img" src="<?php echo get_template_directory_uri(); ?>/library/images/default-member.jpg">
			            	<?php } ?>
			            	<h5 class="show-for-small-only"><?php the_title(); ?></h5>	
			            	<?php if (get_field('linkedin_link', $post)) {?>
			            		<a target="_blank" class="linkedin show-for-small-only" href="<?php echo get_field('linkedin_link', $post); ?>" title="LinkedIn"><i class="fi-social-linkedin"></i></a>
			            	<?php } ?>		            		
                  <div class="member-inner">
                    <?php if (get_field('member_image', $post)) {?>
			            		<img src="<?php echo get_field('member_image', $post); ?>">
			            	<?php } else { ?>
			            		<img class="default-img" src="<?php echo get_template_directory_uri(); ?>/library/images/default-member.jpg">
			            	<?php } ?>	
                    <h5><?php the_title(); ?></h5>
				            <?php if (get_field('linkedin_link', $post)) {?>
			            		<a target="_blank" class="linkedin" href="<?php echo get_field('linkedin_link', $post); ?>" title="LinkedIn"><i class="fi-social-linkedin"></i></a>
			            	<?php } ?>                    
                  </div>
				        </li>
				    <?php endforeach; ?>
				    </ul>
				  </div>   
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>		
			</div>			
			<div class="member-wrap">
				<div class="row">
					<h3>Kstreet Members</h3>
					<div class="header-line"></div>
				</div>				
				<?php 
				
				$posts = get_field('membership');
				
				if( $posts ): ?>
				  <div class="row">
				    <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-5">
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <li class="large-3 medium-4 small-12 columns member">
			            	<?php if (get_field('member_image', $post)) {?>
			            		<img src="<?php echo get_field('member_image', $post); ?>">
			            	<?php } else { ?>
			            		<img class="default-img" src="<?php echo get_template_directory_uri(); ?>/library/images/default-member.jpg">
			            	<?php } ?>
			            	<h5 class="show-for-small-only"><?php the_title(); ?></h5>	
			            	<?php if (get_field('linkedin_link', $post)) {?>
			            		<a target="_blank" class="linkedin show-for-small-only" href="<?php echo get_field('linkedin_link', $post); ?>" title="LinkedIn"><i class="fi-social-linkedin"></i></a>
			            	<?php } ?>		            		
                  <div class="member-inner">
                    <?php if (get_field('member_image', $post)) {?>
			            		<img src="<?php echo get_field('member_image', $post); ?>">
			            	<?php } else { ?>
			            		<img class="default-img" src="<?php echo get_template_directory_uri(); ?>/library/images/default-member.jpg">
			            	<?php } ?>	
                    <h5><?php the_title(); ?></h5>
				            <?php if (get_field('linkedin_link', $post)) {?>
			            		<a target="_blank" class="linkedin" href="<?php echo get_field('linkedin_link', $post); ?>" title="LinkedIn"><i class="fi-social-linkedin"></i></a>
			            	<?php } ?>                    
                  </div>
				        </li>
				    <?php endforeach; ?>
				    </ul>
				  </div>   
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>		
			</div>		
<?php get_footer(); ?>
