<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Textarea
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_textarea extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo wp_kses_post( $this->element_before() );
    echo wp_kses_post( $this->shortcode_generator() );
    echo '<textarea name="'. $this->element_name() .'"'. $this->element_class() . $this->element_attributes() .'>'. $this->element_value() .'</textarea>';
    echo wp_kses_post( $this->element_after() );

  }

  public function shortcode_generator() {
    if( isset( $this->field['shortcode'] ) && CS_ACTIVE_SHORTCODE ) {
      echo '<a href="#" class="button button-primary cs-shortcode cs-shortcode-textarea">'. esc_html__( 'Add Shortcode', 'gecko' ) .'</a>';
    }
  }
}
