<?php
/*
Template Name: Investments
*/
?>

<?php get_header(); ?>
			
	<div class="top-title-wrap">
		<div id="inner-content" class="row">
	    <div class="large-12 columns title-wrap first" role="main">
			  <h1 class="page-title"><?php echo get_the_title(); ?></h1>					
	    </div> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
	<div class="row">
  	<div class="large-3 medium-3 columns port-menu">
    	<?php
      //$field = get_field_object('investment_category');
      $field_key = "field_5971513da958f";
      $field = get_field_object($field_key);
      
      if( $field ):
        '<ul>';
      		foreach( $field['choices'] as $k => $v ) {
      			echo '<li class=""><a href="#' . $k . '">' . $v . '</a></li>';
      		}
      	'</ul>';	
      endif;
      ?>	
  	</div>	
	  <div class="investments large-9 medium-9 columns">
  	  
    	<?php
      //$field = get_field_object('investment_category');
      $field_key = "field_5971513da958f";
      $field = get_field_object($field_key);
      
      if( $field ):
    		foreach( $field['choices'] as $k => $v ):
      		//print_r($field);
    			echo '<h2 class="large-12 columns" id="'. $k . '">' . $v . '</h2>';
    		
    		  // args
          $args = array(
          	'numberposts'	=> -1,
          	'post_type'		=> 'investment',
          	'meta_key'		=> 'investment_category',
          	'meta_value'	=> $k
          );
      		
          // query
          $the_query = new WP_Query( $args );
          
          ?>
          <?php if( $the_query->have_posts() ): ?>
          	<ul class="port-cat-list">
          	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
          		<li class="portfolio-item large-4 medium-4 small-12 columns">
<!--         				<img src="<?php the_field('investment_image', $post->ID);?>"> -->
        				<div class="port-img-wrap">
            		  <div class="port-inner-img">          				
          				  <img src="<?php the_field('investment_image', $post->ID);?>">
            		  </div>
        				</div>	
        				<div class="inner-port-wrap">
          				<div class="port-img-wrap">
            				<div class="port-inner-img">
            				  <img src="<?php the_field('investment_image', $post->ID);?>">
            				</div>  
          				</div>
          				<h5><?php the_title(); ?> <a href="<?php the_field('link_to_company_site', $post->ID);?>" target="_blank">visit site</a></h5>
          				<div class="blurb"><?php the_field('investment_blurb', $post->ID);?></div>
        				</div>	
          		</li>
          	<?php endwhile; ?>
          	</ul>
          <?php endif; ?>
          
          <?php wp_reset_query();	 // Restore global post data stomped by the_post().       		
          		
         
          	  
  	  endforeach;
      
       endif;?>
  
  	</div>
	</div>  
	<div class="top-title-wrap">
		<div id="inner-content" class="row">
	    <div class="large-12 columns title-wrap first" role="main">
			  <h1 class="page-title">Exits</h1>					
	    </div> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->  
	<div class="investments">
		<?php 
		
		$posts = get_field('exits');
		
		if( $posts ): ?>
		    <div class="row">
		    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		        <?php setup_postdata($post); ?>
		        <div class="portfolio-item large-4 medium-4 small-12 columns invest">
			        <?php $company_link = get_field('link_to_company_site', $post); 
				        if(!empty($company_link)): ?>
							<a href="<?php echo $company_link; ?>" title="<?php the_title(); ?>" target="_blank"><img src="<?php echo get_field('investment_image', $post); ?>"></a>
					<?php else: ?>
							<img src="<?php echo get_field('investment_image', $post); ?>">
					<?php endif; ?>	
		        </div>
		    <?php endforeach; ?>
		    </div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>

	</div>  

	
<?php get_footer(); ?>
