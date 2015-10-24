			<footer class="footer text-center" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="inner-footer" class="wrap">
					<div class="row">
						<div class="col-md-3">
							<img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/library/images/whiteLogo@2x.png">
						</div>
						<div class="col-md-6">
							<nav role="navigation" class="hidden-xs">
								<?php wp_nav_menu(array(
		    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
		    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
		    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
		    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
		    					'theme_location' => 'footer-links',             // where it's located in the theme
		    					'before' => '',                                 // before the menu
		    					'after' => '',                                  // after the menu
		    					'link_before' => '',                            // before each link
		    					'link_after' => '',                             // after each link
		    					'depth' => 0,                                   // limit the depth of the nav
		    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
								)); ?>
							</nav>
						</div>
						<div class="col-md-3">
							<div class="footer__detail">
								Phone:   718-321-8862 <br/>
								Fax:   718-321-1468 <br/>
								P.O. Box 520048,  Flushing, NY 11352 <br/>  
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="source-org footer__copyright">&copy; <?php echo date('Y'); ?> by Garden of Hope New York, all rights reserved.</p>
						</div>
					</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
