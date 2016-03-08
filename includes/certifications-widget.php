<?php

class JABon_Certifications_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'jabon_certifications_widget',
			__( 'Certifications', 'A place where to put your Quality Certifications.' ),
			array( 'description' => 'A place where to put your Quality Certifications.', )
		);
	}
	
	public function widget( $args, $instance ) {
		?><h4>Our Quality Certifications</h4><?php
		$certifications = explode( ',', $instance['certifications'] );
		if ( $instance['certifications'] !== '' ) {
			foreach ( $certifications as $cert ) {
				?><img src="<?php echo $cert; ?>" alt="Certification" height="125"> <?php
			}
		}
	}
	
	public function form( $instance ) {
		wp_enqueue_media();
		?>
		<div class="uploader">
			<input id="<?php echo $this->get_field_id( 'certifications' ); ?>" name="<?php echo $this->get_field_name('certifications'); ?>"
				type="text" value="<?php echo esc_url( $instance['certifications'] ); ?>" />
			<button id="_unique_name_button" type="button" class="button" name="_unique_name_button">Upload</button>
		</div>
		<script>
		jQuery(document).ready(function($){
			var _custom_media = true,
			_orig_send_attachment = wp.media.editor.send.attachment;

			$('#_unique_name_button').click(function(e) {
				var send_attachment_bkp = wp.media.editor.send.attachment;
				var button = $(this);
				var id = '<?php echo $this->get_field_id( 'certifications' ); ?>';
				_custom_media = true;
				wp.media.editor.send.attachment = function(props, attachment){
					if ( _custom_media ) {
						var urls = $("#"+id).val();
						if ( $("#"+id).val() !== '' ) {
							urls += ',' + attachment.url;
						} else {
							urls = attachment.url;
						}
						$("#"+id).val(urls);
					} else {
						return _orig_send_attachment.apply( this, [props, attachment] );
					};
				}

				wp.media.editor.open(button);
				return false;
			});

			$('.add_media').on('click', function(){
				_custom_media = false;
			});
		});
		</script>
		<?php
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['certifications'] = $new_instance['certifications'];
		return $instance;
	}
}