<?php

/**
* NativeAD_Widget
*
* @uses     WP_Widget
*
* @category Category
* @package  Package
* @author   Pedro Ventura <pedro@native.ad>
* @license  
* @link     
*/
class NativeAD_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'nativead_widget',
			'NativeAD Widget',
			array( 'description' => __( 'Set the Sidebar position') )
		);
	}

	public function widget($args, $instance) {
		echo $args['before_widget'];
		if ($instance['nativeout'] == 'on') {
			echo '<div data-nad-template="' . $instance['templateId'] . '" data-nad-out="true"></div>';
		} else {
			echo '<div data-nad-template="' . $instance['templateId'] . '"></div>';
		}
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		if ( $instance ) {
			$templateId = $instance['templateId'];
			$nativeout = $instance['nativeout'];
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'templateId' ); ?>"><?php esc_html_e( 'ID Template:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'templateId' ); ?>" name="<?php echo $this->get_field_name( 'templateId' ); ?>" type="text" value="<?php echo $templateId; ?>" />
		<br />
		<label for="<?php echo $this->get_field_id( 'nativeout' ); ?>"><?php esc_html_e( 'Tipo Native OUT:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'nativeout' ); ?>" name="<?php echo $this->get_field_name( 'nativeout' ); ?>" type="checkbox" <?php echo ($nativeout == 'on' ? 'checked' : ''); ?> />
		</p>
		<?php
	}

	public function update($new_instance, $old_instance) {
		$instance = $old_instance;
		// Fields
		$instance['templateId'] = strip_tags($new_instance['templateId']);
		$instance['nativeout'] = strip_tags($new_instance['nativeout']);
		return $instance;
	}
}

// Load Widget
function nativead_register_widgets() {
	register_widget( 'NativeAD_Widget' );
}

add_action( 'widgets_init', 'nativead_register_widgets' );
