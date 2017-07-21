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
  	<div class="large-3 columns port-menu">
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
	  <div class="investments large-9 columns">
    <?php 
    
    // args
    $args = array(
    	'numberposts'	=> -1,
    	'post_type'		=> 'investment',
    	'meta_key'		=> 'investment_category',
    	'meta_value'	=> 'gov_tech'
    );
    
    
    // query
    $the_query = new WP_Query( $args );
    
    ?>
    <?php if( $the_query->have_posts() ): ?>
    	<ul>
    	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
    		<li>
    			<a href="<?php the_permalink(); ?>">
    				<?php the_title(); ?>
    			</a>
    		</li>
    	<?php endwhile; ?>
    	</ul>
    <?php endif; ?>
    
    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

	</div>
	</div>  
<?php get_footer(); ?>
