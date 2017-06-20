<?php
/*
Template Name: Contact
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
					<div class="large-6 columns content">
						<?php if (have_posts()) : while (have_posts()) : the_post();?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
					<div class="large-6 columns contact-form">
						<?php echo do_shortcode( '[contact-form-7 id="35" title="Contact"]' ); ?>
					</div>	
				</div>
			</div>
			<div class="kstreet-tweets">
				<div class="row">
<div class="large-12 columns">
						<h3>Recent K Street Tweets</h3>
						<div class="header-line"></div>						
							<?php include('Twitter.php'); ?>	
							<div class="large-2 columns profile-pic"><a href="https://twitter.com/KStCapital" target="_blank"><img src="<?php echo $twitter_data[0]->user->profile_image_url ?>"></a></div>
							<div class="large-10 columns tweet-wrap">
								<span class="date"><?php 
/*
									$date = new DateTime($twitter_data[0]->created_at);
									$date->setTimezone(new DateTimeZone('America/New_York'));
									$formatted_date = $date->format('M d, Y');	
									echo $formatted_date;
*/			
								?></span>			
								<span class="tweet-text"><?php echo linkify_tweet($twitter_data[0]->text); ?></span>
								<div class="intents">
									<span class="reply"><a target="_blank" href="https://twitter.com/intent/tweet?in_reply_to=<?php echo $twitter_data[0]->id; ?>"><i class="fi-arrow-left small"></i> Reply</a></span>
									<span class="retweet"><a target="_blank" href="https://twitter.com/intent/retweet?tweet_id=<?php echo $twitter_data[0]->id; ?>"><i class="fi-loop small"></i> Retweet</a></span>					<span class="favorite"><a target="_blank" href="https://twitter.com/intent/favorite?tweet_id=<?php echo $twitter_data[0]->id; ?>"><i class="fi-star small"></i> Favorite</a></span>
								</div>			
							</div>						
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
