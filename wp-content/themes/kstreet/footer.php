					<div class="mobile-menu show-for-small-only">
						<?php joints_main_nav(); ?> 
					</div>
					<footer class="footer" role="contentinfo">
						<div class="row">
							<div class="large-6 columns footer-logo">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/kstreet-bw.png">
							</div>
							<div class="large-3 columns">
								<h4>Links</h4>
								<?php joints_footer_links(); ?>
							</div>
							<div class="large-3 columns">
								<h4>Social</h4>

							</div>														
						</div>
				        <div class="copy-wrap">
				        	<div class="row">
								<div class="large-12 medium-12 columns">
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
								</div>	
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