		</div>
		<footer class="footer">
			<div class="container row">
				<div class="col-xs-6 col-md-3">
					<p>
						<i class="fa fa-map-marker"></i>
						KW18B,<br> 
						Corradino Industrial Estate,<br>
						Paola,<br>
						PLA3000, Malta.
					</p>
					<p><a href="tel:+35621821631"><i class="fa fa-phone"></i> +356 21821631</a></p>
					<p><a href="mailto:info@jabonnici.com"><i class="fa fa-envelope"></i> info@jabonnici.com</a></p>
				</div>
				<div class="col-xs-12 col-md-3"></div>
				<div class="col-xs-12 col-md-3">
				<?php if ( is_active_sidebar( 'footer-col-3' ) ): ?>
					<div class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-col-3' ); ?>
					</div>
				<?php endif; ?>
				</div>
				<div class="col-xs-12 col-md-3">
					<img src="<?php echo get_template_directory_uri(); ?>/static/UKAS Logo (generic).jpg" alt="UKAS Logo" title="UKAS Logo" height="125">
					<img src="<?php echo get_template_directory_uri(); ?>/static/MCCAA Logo.jpg" alt="MCCAA Logo" title="MCCAA Logo" height="125">
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>