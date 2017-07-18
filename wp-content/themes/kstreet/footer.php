					<div class="mobile-menu show-for-small-only">
						<?php joints_main_nav(); ?> 
					</div>
					<footer class="footer" role="contentinfo">
						<div class="row">
							<div class="large-3 columns">
								<?php joints_footer_links(); ?>
							</div>  						
							<div class="large-6 columns footer-logo">
								<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png"></a>
							</div>
							<div class="large-3 columns right-links">
  							<div class="">
    							<a href="<?php the_field('application_link', 'option'); ?>" target="_blank">Member Login</a>
  							</div>
  							<div class="social">
  								<a href="#" target="_blank">Facebook</a>
  								<a href="#" target="_blank">Twitter</a>				
  							</div>				
                <div class="copyright">&copy; <?php echo date('Y'); ?></div>
							</div>														
						</div>  
					</footer> <!-- end .footer -->

				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
		<!-- all js scripts are loaded in library/joints.php -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->