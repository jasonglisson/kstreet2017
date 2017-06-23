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
	<div class="large-6 columns">what we do</div>
	<div class="large-6 columns" style="background: #ddd;">picture</div>
	<div class="large-6 columns" style="background: #ddd;">picture</div>
	<div class="large-6 columns">who we are</div>  			  			
</div>	
<div class="process">
  <div class="row">
    <h1 class="large-12 columns">Investment Process</h1>
    <div classs="large-12 columns">
      <div class="process-wrap">
        <div class="round-step step-1"><img src="<?php print get_template_directory_uri(); ?>/library/images/application-icon.png" alt="Application" title="Application"/></div>
        <div class="process-line line-1"></div>
        <div class="round-step step-2"><img src="<?php print get_template_directory_uri(); ?>/library/images/pre-screen-icon.png" alt="Pre-Screening Committee" title="Pre-Screening Committee"/></div>
        <div class="process-line line-2"></div>      
        <div class="round-step step-3"><img src="<?php print get_template_directory_uri(); ?>/library/images/presentation-icon.png" alt="Presentation" title="Presentation"/></div>
        <div class="process-line line-3"></div>      
        <div class="round-step step-4"><img src="<?php print get_template_directory_uri(); ?>/library/images/diligence-icon.png" alt="Diligence" title="Diligence"/></div>
        <div class="process-line line-4"></div>      
        <div class="round-step step-5"><img src="<?php print get_template_directory_uri(); ?>/library/images/funding-icon.png" alt="Funding" title="Funding"/></div>
        <div class="process-line line-5"></div>      
        <div class="round-step step-6"><img src="<?php print get_template_directory_uri(); ?>/library/images/growth-icon.png" alt="Growth" title="Growth"/></div>  
      </div>                            
    </div>  
  </div>
</div>  
<div class="portfolio">
  <div class="row">
    <h2 class="large-12 columns">Portfolio</h2>
  </div>
</div> 
  
  
<?php get_footer(); ?>