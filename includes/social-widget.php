<?php

class JABon_Social_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'jabon_social_widget',
			__( 'Social Buttons', 'A place where to place your social buttons.' ),
			array( 'description' => __( 'Social Buttons Widget', 'A place where to place your social buttons.' ), )
		);
	}
	
	public function widget( $args, $instance ) { ?>
		<h4>Follow Us</h4>
		<?php if ( ! empty( $instance['facebook'] ) ): ?>
			<a href="<?php echo esc_url( $instance['facebook'] ); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
		<?php endif;
		
		if ( ! empty( $instance['twitter'] ) ): ?>
			<a href="<?php echo esc_url( $instance['twitter'] ); ?>" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
		<?php endif;
		
		if ( ! empty( $instance['linkedin'] ) ): ?>
			<a href="<?php echo esc_url( $instance['linkedin'] ); ?>" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
		<?php endif;
		
		if ( ! empty( $instance['googleplus'] ) ): ?>
			<a href="<?php echo esc_url( $instance['googleplus'] ); ?>" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
		<?php endif;
	}
	
	public function form( $instance ) {
		$facebook = $instance['facebook'];
		$twitter = $instance['twitter'];
		$linkedin = $instance['linkedin'];
		$googleplus = $instance['googleplus'];
		
		?>
		<label for="<?php echo $this->get_field_id( 'facebook' ); ?>">Facebook</label>
		<input type="url" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>"
			value="<?php echo esc_attr( $facebook ); ?>"><br>
		<label for="<?php echo $this->get_field_id( 'twitter' ); ?>">Twitter</label>
		<input type="url" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>"
			value="<?php echo esc_attr( $twitter ); ?>"><br>
		<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>">LinkedIn</label>
		<input type="url" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>"
			value="<?php echo esc_attr( $linkedin ); ?>"><br>
		<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>">Google+</label>
		<input type="url" id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>"
			value="<?php echo esc_attr( $googleplus ); ?>">
		<?php
		
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ? strip_tags( $new_instance['facebook'] ) : '' );
		$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ? strip_tags( $new_instance['twitter'] ) : '' );
		$instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ? strip_tags( $new_instance['linkedin'] ) : '' );
		$instance['googleplus'] = ( ! empty( $new_instance['googleplus'] ) ? strip_tags( $new_instance['googleplus'] ) : '' );
		return $instance;
	}
}