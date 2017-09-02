<?php
/*
Template Name: About
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
			<div class="process-list">
  			<?php $i = 1; $num = 1 ?>
				<?php if( have_rows('process') ):?>
  
					<?php while( have_rows('process') ): the_row(); 
					
						// vars
						$icon = get_sub_field('icon');
						$image = get_sub_field('process_image');
						$process_title = get_sub_field('process_title');
						$process_text = get_sub_field('process_text');
					
						?>
						<div class="process-wrap process-<?php echo $i++; ?>" id="step-<?php echo $num++; ?>">
  				  		
						  <div class="process-item row">
  							<div class="large-2 medium-2 columns process-icons">
    							<div class="icon-wrap spin circle">
      							<?php if($image): ?>
      							  <img src="<?php echo $image; ?>" />
      							<?php else: ?>  
    								  <?php echo $icon; ?>
    							  <?php endif; ?>  
    							</div>
  							</div>
  							<div class="large-4 medium-2 columns process-title">
    							<h3><?php echo $process_title; ?></h3>
  							</div>	
  							<div class="large-6 medium-10 columns process-info">
  								<div class="process-text"><?php echo $process_text; ?></div>
  							</div>
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
<?php get_footer(); ?>
