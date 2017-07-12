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
	<div class="arrow show-for-medium-up"></div>
</div> <!-- end #content -->
<div class="about-us">
	<div class="large-6 medium-12 columns">
  	<h1 class="raleway"><?php the_field('sub_section_header_1'); ?></h1>
  	<div class="about-text"><?php the_field('sub_section_text_1'); ?></div> 
  	<a href="<?php the_field('sub_section_button_link_1'); ?>" target="_blank" class="button hollow application-btn">View Our Portfolio</a>
	</div>
	<div class="large-6 medium-12 columns"><img src="<?php the_field('sub_section_image_1'); ?>"></div>
	<div class="large-6 medium-12 columns"><img src="<?php the_field('sub_section_image_2'); ?>"></div>
	<div class="large-6 medium-12 columns">
  	<h1 class="raleway"><?php the_field('sub_section_header_2'); ?></h1>
  	<div class="about-text"><?php the_field('sub_section_text_2'); ?></div>   
  	<a href="<?php the_field('sub_section_button_link_2'); ?>" target="_blank" class="button hollow application-btn">Meet Our Members</a>   	
	</div>  			  			
</div>	
<div class="process">
  <div class="row">
    <h1 class="large-12 columns">Investment Process</h1>
    <div classs="large-12 columns">
      <div class="process-wrap">
        <div class="round-step spin circle step-1"><img src="<?php print get_template_directory_uri(); ?>/library/images/application-icon.png" alt="Application" title="Application"/><span>1. Application</span></div>
        <div class="process-line line-1"></div>
        <div class="round-step spin circle step-2"><img src="<?php print get_template_directory_uri(); ?>/library/images/pre-screen-icon.png" alt="Pre-Screening Committee" title="Pre-Screening Committee"/><span>2. Pre-Screening<br>&nbsp;&nbsp;&nbsp;&nbsp;Committee</span></div>
        <div class="process-line line-2"></div>      
        <div class="round-step spin circle step-3"><img src="<?php print get_template_directory_uri(); ?>/library/images/presentation-icon.png" alt="Presentation" title="Presentation"/><span>3. Presentation</span></div>
        <div class="process-line line-3"></div>      
        <div class="round-step spin circle step-4"><img src="<?php print get_template_directory_uri(); ?>/library/images/diligence-icon.png" alt="Diligence" title="Diligence"/><span>4. Diligence</span></div>
        <div class="process-line line-4"></div>      
        <div class="round-step spin circle step-5"><img src="<?php print get_template_directory_uri(); ?>/library/images/funding-icon.png" alt="Funding" title="Funding"/><span>5. Funding</span></div>
        <div class="process-line line-5"></div>      
        <div class="round-step spin circle step-6"><img src="<?php print get_template_directory_uri(); ?>/library/images/growth-icon.png" alt="Growth" title="Growth"/><span>6. Growth</span></div>  
      </div>                            
    </div>  
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
          <div class="large-4 columns portfolio-img">
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
          <a href="" target="_blank" class="linkedin">visit our LinkedIn page</a>        
        </div>
        <div class="large-7 columns right-contact">
          <h4 class="">Follow Us on Twitter <a href="https://twitter.com/kstcapital" target="_blank">@KstCapital</a></h4>
        </div>
      </div>  
  </div>
</div>   
  
  
<?php get_footer(); ?>