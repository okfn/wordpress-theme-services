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
  
	return '<div class="'.$class.'">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'column', 'column_shortcode' );


//lead
function lead_shortcode( $atts, $content = null ) {
	return '<p class="lead">' . $content . '</p>';
}
add_shortcode( 'lead', 'lead_shortcode' );


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


//hr
function hr_func( $atts ){
	return "<hr>";
}
add_shortcode( 'hr', 'hr_func' );


//panel
function panel_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'icon' => '',
    'heading' => '',
    'colour' => '',
    'iconposition' => '',
	), $atts );
  
  $i = esc_attr($a['icon']);
  $h = esc_attr($a['heading']);
  $c = esc_attr($a['colour']);
  $p = esc_attr($a['iconposition']);
  
  $r = '<div class="panel';
  if (!empty($c)) {
    $r .= ' '.$c;
  }
  if (!empty($p)) {
    $r .= ' '.$p.'-icon';
  }
  $r .= '">';
  if (!empty($i)) {
    $r .= '<div class="icon">
              <span class="icon-'.$i.'"></span>
            </div>';
  }
  if (!empty($p)) {
    $r .= '<div class="text">';
  }
  if (!empty($h)) {
    $r .= '<h5>'.$h.'</h5>';
  }
  $r .= $content;
	if (!empty($p)) {
    $r .= '</div>';
  }			
  $r .= '</div>';
  
	return $r;
}
add_shortcode( 'panel', 'panel_shortcode' );


//blockquote
function blockquote_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'by' => '',
    'image' => '',
	), $atts );
  
  $b = esc_attr($a['by']);
  $i = esc_attr($a['image']);
  
  $r0 = '<div class="panel blockquote">';
  if (!empty($i)) {
    $r1 = '<div class="image-quote">
    <div class="image"><img src="'.$i.'" alt="'.$b.'"></div>
    <div class="text">';
  }
  $r2 = '<blockquote>'. $content ;
  if (!empty($b)) {
    $r2 .= '<cite>'.$b.'</cite>';
  }
  $r2 .= '</blockquote>';
  if (!empty($i)) {
    $r3 = '</div></div>';
  }
  $r4 = '</div>';
  
	return $r0.$r1.$r2.$r3.$r4;
}
add_shortcode( 'blockquote', 'blockquote_shortcode' );

?>