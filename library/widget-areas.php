<?php

function foundationpress_sidebar_widgets() {
  $the_sidebars = wp_get_sidebars_widgets();
  $footer_widget_count = count( $the_sidebars['footer-widgets'] );
  $footer_widget_grid = (12 / $footer_widget_count);
  if ($footer_widget_grid == '3') {
    $footer_widget_columns = '3';
  }
  else if ($footer_widget_grid == '6') {
    $footer_widget_columns = '6';
  }
  else {
    $footer_widget_columns = '4';
  }
  register_sidebar(array(
      'id' => 'footer-widgets',
      'name' => __('Footer widgets', 'foundationpress'),
      'description' => __('Drag widgets to this footer container', 'foundationpress'),
      'before_widget' => '<article id="%1$s" class="large-'.$footer_widget_columns.' columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
  ));
  
  register_sidebar(array(
      'id' => 'subfooter-widgets',
      'name' => __('Subfooter widgets', 'foundationpress'),
      'description' => __('Drag widgets to this sidebar container.', 'foundationpress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );

?>