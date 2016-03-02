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
		?><h4>Quality Certifications</h4><?php
		$instance[]
	}
	
	public function form( $instance ) {
		wp_enqueue_media();
		?>
		<div class="uploader">
			<input id="_unique_name" name="settings[_unique_name]" type="text" />
			<input id="_unique_name_button" class="button" name="_unique_name_button" type="text" value="Upload" />
		</div>
		<script>
		jQuery(document).ready(function($){
			var _custom_media = true,
			_orig_send_attachment = wp.media.editor.send.attachment;

			$('#_unique_name_button').click(function(e) {
				var send_attachment_bkp = wp.media.editor.send.attachment;
				var button = $(this);
				var id = button.attr('id').replace('_button', '');
				_custom_media = true;
				wp.media.editor.send.attachment = function(props, attachment){
					if ( _custom_media ) {
						$("#"+id).val(attachment.url);
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
		
	}
}