<?php

//row
function row_shortcode( $atts, $content = null ) {
	return '<div class="row">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'row', 'row_shortcode' );

//column
function column_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'width' => 'half',
	), $atts );
  
  $w = esc_attr($a['width']);
  
  if ($w == 'half') {
    $class = 'small-12 medium-6 columns';
  }
  elseif ($w == 'one-third') {
    $class = 'small-12 medium-4 columns';
  }
  elseif ($w == 'two-thirds') {
    $class = 'small-12 medium-8 columns';
  }
  else {
    $class = 'small-12 columns';
  }
  
	return '<div class="'.$class.'">' . $content . '</div>';
}
add_shortcode( 'column', 'column_shortcode' );

//small
function small_shortcode( $atts, $content = null ) {
	return '<small>' . do_shortcode($content) . '</small>';
}
add_shortcode( 'small', 'small_shortcode' );


//sup
function sup_shortcode( $atts, $content = null ) {
	return '<sup>' . $content . '</sup>';
}
add_shortcode( 'sup', 'sup_shortcode' );

?>