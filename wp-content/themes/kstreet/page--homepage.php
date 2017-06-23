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
    <h2 class="large-12 columns">Investment Process</h2>
    <div classs="large-12 columns">
      <div class="process-wrap">
        <div class="round-step step-1">icon</div>
        <div class="process-line line-1"></div>
        <div class="round-step step-2">icon</div>
        <div class="process-line line-2"></div>      
        <div class="round-step step-3">icon</div>
        <div class="process-line line-3"></div>      
        <div class="round-step step-4">icon</div>
        <div class="process-line line-4"></div>      
        <div class="round-step step-5">icon</div>
        <div class="process-line line-5"></div>      
        <div class="round-step step-6">icon</div>  
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