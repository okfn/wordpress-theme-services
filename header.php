<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
    
    <?php wp_head(); ?>
    <style>
      .contain-to-grid {
        background-color:<? if(get_field('banner_colour')) { echo get_field('banner_colour') . ';';} else { echo '#E6E5E3';} ?>;
      }
      @media only screen and (min-width: 40.063em) { 
        .contain-to-grid {
          background-color:transparent;
        }
        .contain-to-grid.fixed,
        .top-bar.expanded {
          background-color:<? if(get_field('banner_colour')) { echo get_field('banner_colour') . ';';} else { echo '#E6E5E3';} ?>;
        }
        .invert-banner .top-bar-section ul .has-dropdown.active > a:after {
          border-top-color: <? if(get_field('banner_colour')) { echo get_field('banner_colour') . ';';} else { echo '#000';} ?>;
        }
      }
      .invert-banner .top-bar-section .search-bar .icon-search {
        color: <? if(get_field('banner_colour')) { echo get_field('banner_colour') . ';';} else { echo '#E6E5E3';} ?>;
      }
      .invert-banner .top-bar-section > ul > li.active:not(.has-form) > a:not(.button) {
        color: <? if(get_field('banner_colour')) { echo get_field('banner_colour') . ';';} else { echo '#000';} ?>;
      }
    </style>
  </head>
  <body <?php body_class(); ?>>
    <?php do_action('foundationPress_after_body'); ?>
    
    <div class="off-canvas-wrap">
      <div class="inner-wrap <? if( get_field('invert_banner_text') ) { echo "invert-banner"; } ?> ">
      
        <?php do_action('foundationPress_layout_start'); ?>
        
        <!--
        <nav class="tab-bar show-for-small-only">
          
          <section class="middle tab-bar-section">
            
            <h1 class="title"><?php bloginfo( 'name' ); ?></h1>
      
          </section>
          <section class="right-small">
            <a class="right-off-canvas-toggle menu-icon"><span></span></a>
          </section>
        </nav>
      
        <aside class="right-off-canvas-menu">
          <?php include("searchform.php"); ?>
          <?php foundationPress_mobile_off_canvas(); ?>
        </aside>
        -->
        
        <div class="top-bar-container contain-to-grid sticky">
            <nav class="top-bar" data-topbar="" data-options="sticky_on: large">
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>        
                </ul>
                <section class="top-bar-section">
                  <div class="search-bar">
                    <a class="icon-search show-for-large-up"></a> 
                    <?php include("searchform.php"); ?>
                  </div>
                  <?php foundationPress_top_bar_l(); ?>
                  <?php //foundationPress_top_bar_r(); ?>
              </section>
            </nav>
        </div>
    
  
      <section class="container" role="document">
        <?php do_action('foundationPress_after_header'); ?>