<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row">
					
					<div class="large-3 columns">
						<div class="member-image">
							<?php if (get_field('member_image')) { ?>
								<img src="<?php the_field('member_image'); ?>">
							<?php } else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/default-member.jpg">
							<?php } ?>
						</div>
			            <div class="member-social">
				            <?php if (get_field('linkedin_link')) {?>
			            		<a target="_blank" class="linkedin" href="<?php echo get_field('linkedin_link'); ?>"><i class="fi-social-linkedin large"></i></a>
			            	<?php } ?>
				            <?php if (get_field('twitter_link')) {?>
			            		<a target="_blank" class="twitter" href="<?php echo get_field('twitter_link'); ?>"><i class="fi-social-twitter large"></i></a>
			            	<?php } ?>				            	
			            </div>						
					</div>
					<div class="large-9 columns">
						<h2><?php the_title(); ?></h2>
						<div class="member-bio">
							<?php the_field('member_bio'); ?>
						</div>
					</div>
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>