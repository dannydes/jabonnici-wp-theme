<?php

class JABon_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'jabon_contact_widget',
			__( 'Contact', 'A place where to place your contact information.' ),
			array( 'description' => 'A place where to place your contact information.', )
		);
	}
	
	public function widget( $args, $instance ) {
		$phone = $instance['phone'];
		$email = $instance['email'];
		
		?>
		<h4>Contact Us</h4>
		<p>
			<i class="fa fa-map-marker"></i>
			<?php echo esc_attr( $instance['address_line_1'] ); ?>,<br>
			<?php echo esc_attr( $instance['address_line_2'] ); ?>,<br>
			<?php echo esc_attr( $instance['address_line_3'] ); ?>,<br>
			<?php echo esc_attr( $instance['address_line_4'] ); ?>.
		</p>
		<p>
			<a href="tel:+356<?php echo esc_attr( $phone ); ?>"><i class="fa fa-phone"></i> +356 <?php echo esc_attr( $phone ); ?></a>
		</p>
		<p>
			<a href="mailto:<?php echo esc_attr( $email ); ?>"><i class="fa fa-envelope"></i> <?php echo esc_attr( $email ); ?></a>
		</p>
		<?php
		
	}
	
	public function form( $instance ) {
		$address_line_1 = $instance['address_line_1'];
		$address_line_2 = $instance['address_line_2'];
		$address_line_3 = $instance['address_line_3'];
		$address_line_4 = $instance['address_line_4'];
		$phone = $instance['phone'];
		$email = $instance['email'];
		
		?>
		<label for="<?php echo $this->get_field_id( 'address_line_1' ); ?>">Address Line 1</label>
		<input type="text" id="<?php echo $this->get_field_id( 'address_line_1' ); ?>" name="<?php echo $this->get_field_name( 'address_line_1' ); ?>"
			value="<?php echo esc_attr( $address_line_1 ); ?>">
		<label for="<?php echo $this->get_field_id( 'address_line_2' ); ?>">Address Line 2</label>
		<input type="text" id="<?php echo $this->get_field_id( 'address_line_2' ); ?>" name="<?php echo $this->get_field_name( 'address_line_2' ); ?>"
			value="<?php echo esc_attr( $address_line_2 ); ?>">
		<label for="<?php echo $this->get_field_id( 'address_line_3' ); ?>">Address Line 3</label>
		<input type="text" id="<?php echo $this->get_field_id( 'address_line_3' ); ?>" name="<?php echo $this->get_field_name( 'address_line_3' ); ?>"
			value="<?php echo esc_attr( $address_line_3 ); ?>">
		<label for="<?php echo $this->get_field_id( 'address_line_4' ); ?>">Address Line 4</label>
		<input type="text" id="<?php echo $this->get_field_id( 'address_line_4' ); ?>" name="<?php echo $this->get_field_name( 'address_line_4' ); ?>"
			value="<?php echo esc_attr( $address_line_4 ); ?>">
		<label for="<?php echo $this->get_field_id( 'phone' ); ?>">Phone</label>
		<input type="number" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>"
			value="<?php echo esc_attr( $phone ); ?>">
		<label for="<?php echo $this->get_field_id( 'email' ); ?>">Email</label>
		<input type="email" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>"
			value="<?php echo esc_attr( $email ); ?>">
		<?php
		
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['address_line_1'] = $new_instance['address_line_1'];
		$instance['address_line_2'] = $new_instance['address_line_2'];
		$instance['address_line_3'] = $new_instance['address_line_3'];
		$instance['address_line_4'] = $new_instance['address_line_4'];
		$instance['phone'] = $new_instance['phone'];
		$instance['email'] = $new_instance['email'];
		return $instance;
	}
}