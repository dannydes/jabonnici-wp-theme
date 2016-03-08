		</div>
		<footer class="footer">
			<div class="row">
				<div class="col-xs-6 col-md-3">
				<?php if ( is_active_sidebar( 'footer-col-1' ) ): ?>
					<div class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-col-1' ); ?>
					</div>
				<?php endif; ?>
				</div>
				<div class="col-xs-12 col-md-3">
				<?php if ( is_active_sidebar( 'footer-col-2' ) ): ?>
					<div class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-col-2' ); ?>
					</div>
				<?php endif; ?>
				</div>
				<div class="col-xs-12 col-md-3">
				<?php if ( is_active_sidebar( 'footer-col-3' ) ): ?>
					<div class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-col-3' ); ?>
					</div>
				<?php endif; ?>
				</div>
				<div class="col-xs-12 col-md-3">
					<h4>Our Quality Certifications</h4>
					<img src="<?php echo get_template_directory_uri(); ?>/static/UKAS Logo (generic).jpg" alt="UKAS Logo" title="UKAS Logo" height="125">
					<img src="<?php echo get_template_directory_uri(); ?>/static/MCCAA Logo.jpg" alt="MCCAA Logo" title="MCCAA Logo" height="125">
					<?php if ( is_active_sidebar( 'footer-col-4' ) ): ?>
					<div class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-col-4' ); ?>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>