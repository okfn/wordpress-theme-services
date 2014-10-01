<?
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
$thumb_url = $thumb_url_array[0];
?>

<header class="banner<? if ( has_post_thumbnail() ) {	?> has-image<? ;} ?>" role="banner" style=" <? if(get_field('banner_colour')) { echo 'background-color:' . get_field('banner_colour') . ';';}  if ( has_post_thumbnail() ) {	?> background-image:url(<? echo $thumb_url; ?>) <? ;} ?> ">
  <div class="row">
		<div class="small-12<? if ( has_post_thumbnail() ) {	?> medium-6<? ;} ?> columns end">
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="intro">
        <?php the_field('intro'); ?>
      </div>
		</div>
	</div>
</header>