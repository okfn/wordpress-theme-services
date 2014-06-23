<?
$bg2url = wp_get_attachment_image_src(get_field('home_banner_slider_image_2'), 'full' );
$bg3url = wp_get_attachment_image_src(get_field('home_banner_slider_image_3'), 'full' );
?>

<header id="homepage-hero" class="slider banner" role="banner">
	
  <ul class="orbit-content" data-orbit data-options="navigation_arrows: false; slide_number: false; bullets: false; pause_on_hover: false;">
    <li data-orbit-slide="banner-1" <? if ( has_post_thumbnail() ) {	?> style="background-image:url(<? echo $thumb_url; ?>)" <? ;} ?> >
    </li>
    <li data-orbit-slide="banner-2" style="background-image:url(<? echo $bg2url[0]; ?>)">
    </li>
    <li data-orbit-slide="banner-3" style="background-image:url(<? echo $bg3url[0]; ?>)">
    </li>
  </ul>
  
  <div class="row text">
		<div class="medium-6 columns end">
      <h1 class="word_split"><?php bloginfo('description'); ?></h1>
      <div class="intro">
        <?php the_field('intro'); ?>
      </div>
			<a class="large button" href="<?php the_field('cta_link'); ?>"><?php the_field('cta_button_text'); ?></a>
		</div>
	</div>
</header>