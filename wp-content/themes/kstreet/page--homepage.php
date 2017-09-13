<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
<div id="content">

  <div id="inner-content" class="row">
    <div id="main" class="large-12 medium-12 columns" role="main">
      <img src="<?php print get_template_directory_uri(); ?>/library/images/bg.jpg" class="hide-for-large-up">
      <br>
      <h3 class="raleway"><?php the_field('homepage_heading'); ?></h3>    					
    </div> <!-- end #main -->
  </div> <!-- end #inner-content -->
	<div class="arrow show-for-medium-up"></div>
</div> <!-- end #content -->
<div class="about-us">
	<div class="large-6 medium-12 columns hide-for-large-up"><img src="<?php the_field('sub_section_image_1'); ?>"></div>  
	<div class="large-6 medium-12 columns">
  	<h1 class="raleway"><?php the_field('sub_section_header_1'); ?></h1>
  	<div class="about-text"><?php the_field('sub_section_text_1'); ?></div> 
  	<a href="<?php the_field('sub_section_button_1'); ?>" class="button hollow application-btn">View Our Portfolio</a>
	</div>
	<div class="large-6 medium-12 columns show-for-large-up"><img src="<?php the_field('sub_section_image_1'); ?>"></div>
	<div class="large-6 medium-12 columns"><img src="<?php the_field('sub_section_image_2'); ?>"></div>
	<div class="large-6 medium-12 columns">
  	<h1 class="raleway"><?php the_field('sub_section_header_2'); ?></h1>
  	<div class="about-text"><?php the_field('sub_section_text_2'); ?></div>   
  	<a href="<?php the_field('sub_section_button_link_2'); ?>" class="button hollow application-btn">Meet Our Members</a>   	
	</div>  			  			
</div>	
<div class="process">
  <div class="row">
    <h1 class="large-12 columns">Investment Process</h1>
    <div classs="large-12 columns">
      <div class="process-wrap">
        <a href="/investment-process#step-1"><div class="round-step spin circle step-1"><img src="<?php print get_template_directory_uri(); ?>/library/images/application-icon.png" alt="Application" title="Application"/><span>1. Application</span></div></a>
        <div class="process-line line-1"></div>
        <a href="/investment-process#step-2"><div class="round-step spin circle step-2"><img src="<?php print get_template_directory_uri(); ?>/library/images/pre-screen-icon.png" alt="Pre-Screening Committee" title="Pre-Screening Committee"/><span>2. Pre-Screening<br>&nbsp;&nbsp;&nbsp;&nbsp;Committee</span></div></a>
        <div class="process-line line-2"></div>      
        <a href="/investment-process#step-3"><div class="round-step spin circle step-3"><img src="<?php print get_template_directory_uri(); ?>/library/images/presentation-icon.png" alt="Presentation" title="Presentation"/><span>3. Presentation</span></div></a>
        <div class="process-line line-3"></div>      
        <a href="/investment-process#step-4"><div class="round-step spin circle step-4"><img src="<?php print get_template_directory_uri(); ?>/library/images/diligence-icon.png" alt="Diligence" title="Diligence"/><span>4. Diligence</span></div></a>
        <div class="process-line line-4"></div>      
        <a href="/investment-process#step-5"><div class="round-step spin circle step-5"><img src="<?php print get_template_directory_uri(); ?>/library/images/funding-icon.png" alt="Funding" title="Funding"/><span>5. Funding</span></div></a>
        <div class="process-line line-5"></div>      
        <a href="/investment-process#step-6"><div class="round-step spin circle step-6"><img src="<?php print get_template_directory_uri(); ?>/library/images/growth-icon.png" alt="Growth" title="Growth"/><span>6. Growth</span></div></a>  
      </div> 
      <div class="mobile-process-wrap hide-for-large-up">
        <div class="process-list">
    			<?php $i = 1; $num = 1; $l = 1; ?>
  				<?php if( have_rows('process', 6) ):?>
    
  					<?php while( have_rows('process', 6) ): the_row(); 
  					
  						// vars
  						$icon = get_sub_field('icon', 6);
  						$image = get_sub_field('process_image', 6);
  						$process_title = get_sub_field('process_title', 6);
  					
  						?>
  						<div class="process-<?php echo $i++; ?>" id="step-<?php echo $num++; ?>">
    				  		
  						  <div class="process-item row">
    							<div class="medium-3 small-12 columns process-icons">
      							<a href="/investment-process#step-<?php echo $l++; ?>">
      							<div class="icon-wrap spin circle">
        							<?php if($image): ?>
        							  <img src="<?php echo $image; ?>" />
        							<?php else: ?>  
      								  <?php echo $icon; ?>
      							  <?php endif; ?>  
      							</div>
    							</div>
    							<div class="medium-9 small-12 columns process-title">
      							<h3><?php echo $process_title; ?></h3>
    							</div>
    							</a>	
    							<hr>
    						</div>
  						</div>
  					<?php endwhile; ?>
  				
  				<?php endif; ?>
  				<div class="process-wrap">
    				<div class="process-item row">
              <a href="<?php the_field('application_link', 'option'); ?>" class="button hollow process-btn" target="_blank">Startup Submission</a> 
    				</div>	
  				</div>
  			</div>        
      </div>           
    </div>  
  </div>
</div> 
<div class="large-12 columns process-button-area">
  <div class="row">
    <a href="<?php the_field('application_link', 'option'); ?>" class="button hollow process-btn" target="_blank">Submit Application</a> 
    <a href="/investment-process" class="learn-more">Learn More</a>
  </div>
</div> 
<div class="portfolio">
  <div class="row">
    <h1 class="large-12 columns">Portfolio</h1>
    <?php 
  
    $posts = get_field('portfolio_grid');
  
    if( $posts ): ?>
      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
          <div class="large-4 medium-6 small-6 columns portfolio-img">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php the_field('investment_image', $post->ID);?>">
            </a>
          </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
    <a href="/portfolio" class="button hollow portfolio-btn">View All</a>   
  </div>
</div> 
<div class="members">
  <div class="row">
    <h1 class="large-12 columns">Members</h1>
    <div class="large-12 columns members-text"><?php the_field('members_text'); ?></div>
    <a href="/members" class="button hollow member-btn">Meet Our Members</a>   
    </div>
  </div>  
</div> 
<div class="contact">
  <div class="row">
    <h1 class="large-12 columns">Contact</h1> 
      <div class="contact-box">
        <div class="large-5 columns left-contact">
          <h4 class="">Interested in learning more?</h4>  
          <a href="/contact" class="button hollow contact-btn">Contact Us</a>
          <a href="" target="_blank" class="linkedin">Visit Our LinkedIn Page</a>        
        </div>
        <div class="large-7 columns right-contact">
          <h4 class="">Follow Us on Twitter <a href="https://twitter.com/KStCapital" target="_blank">@KstCapital</a></h4>
<!-- 						<div class="large-2 columns profile-pic"><a href="https://twitter.com/KStCapital" target="_blank"><img src="<?php echo $twitter_data[0]->user->profile_image_url ?>"></a></div> -->
						<div class="large-12 columns tweet-wrap">
  						<?php twitter_code(); ?>		
						</div>	          
        </div>
      </div>  
  </div>
</div>   
<div class="press">
  <div class="next">Next</div>
<!--   <div class="prev">Prev</div> -->
  <div class="row">
    <h1 class="large-12 columns">Press</h1>
  </div>  
    <div id="press-slider">
      <?php
    		$args = array( 'post_type' => 'press', 'posts_per_page' => -1 );
    		$loop = new WP_Query( $args );
    		while ( $loop->have_posts() ) : $loop->the_post(); ?>
    		<div class="press-content large-5 end columns">
    			<div class="press-source"><span><?php echo get_field('press_source'); ?><span></div>
    			<div class="press-inner">
    				<a class="press-link-box" href="<?php echo get_field('press_link'); ?>" target="_blank"></a>
    				<h4><a href="<?php echo get_field('press_link'); ?>" target="_blank"><?php the_title(); ?></a></h4>
    				<div class="press-readmore"><a href="<?php echo get_field('press_link'); ?>">Read</a></div>
    			</div>	
    		</div><?php
    		endwhile;
    	?>
    </div>
</div>  
  
  
<?php get_footer(); ?>