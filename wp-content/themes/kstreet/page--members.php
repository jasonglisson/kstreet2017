<?php
/*
Template Name: Members
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
				        	<br>
				        	
				            <a href="<?php the_permalink(); ?>">
				            	<?php if (get_field('member_image', $post)) {?>
				            		<div><img src="<?php echo get_field('member_image', $post); ?>"></div>
				            	<?php } else { ?>
				            		<div><img src="<?php echo get_template_directory_uri(); ?>/library/images/default-member.jpg"></div>	
				            	<?php } ?>			            		
				            	<h5><?php the_title(); ?></h5>
				            </a>
<!--
				            <div class="member-social">
					            <?php if (get_field('linkedin_link', $post)) {?>
				            		<a target="_blank" class="linkedin" href="<?php echo get_field('linkedin_link', $post); ?>"><i class="fi-social-linkedin large"></i></a>
				            	<?php } ?>
					            <?php if (get_field('twitter_link', $post)) {?>
				            		<a target="_blank" class="twitter" href="<?php echo get_field('twitter_link', $post); ?>"><i class="fi-social-twitter large"></i></a>
				            	<?php } ?>				            	
				            </div>
				            <br>
-->
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
				        	<br>
				        	
				            <a href="<?php the_permalink(); ?>">
				            	<?php if (get_field('member_image', $post)) {?>
				            		<div><img src="<?php echo get_field('member_image', $post); ?>"></div>
				            	<?php } else { ?>
				            		<div><img src="<?php echo get_template_directory_uri(); ?>/library/images/default-member.jpg"></div>	
				            	<?php } ?>			            		
				            	<h5><?php the_title(); ?></h5>
				            </a>
<!--
				            <div class="member-social">
					            <?php if (get_field('linkedin_link', $post)) {?>
				            		<a target="_blank" class="linkedin" href="<?php echo get_field('linkedin_link', $post); ?>"><i class="fi-social-linkedin large"></i></a>
				            	<?php } ?>
					            <?php if (get_field('twitter_link', $post)) {?>
				            		<a target="_blank" class="twitter" href="<?php echo get_field('twitter_link', $post); ?>"><i class="fi-social-twitter large"></i></a>
				            	<?php } ?>				            	
				            </div>
				            <br>
-->
				        </li>
				    <?php endforeach; ?>
				    </ul>
				</div>   
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>		
			</div>
			<div class="mailchimp-signup">
				<div class="row">
					<h3>K Street Newsletter Signup</h3>
					<div class="header-line"></div>
					<?php echo do_shortcode( '[mc4wp_form]' ); ?>					
				</div>	
			</div>			
<?php get_footer(); ?>
