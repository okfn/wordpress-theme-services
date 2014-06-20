<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php do_action('foundationPress_before_content'); ?>
  
<?php while (have_posts()) : the_post(); ?>
<?
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
$thumb_url = $thumb_url_array[0];
?>
<header id="homepage-hero" class="banner" role="banner" <? if ( has_post_thumbnail() ) {	?> style="background-image:url(<? echo $thumb_url; ?>)" <? ;} ?> >
	<div class="row">
		<div class="medium-6 columns end">
      <h1 class="word_split"><?php bloginfo('description'); ?></h1>
      <div class="intro">
        <?php the_field('intro'); ?>
      </div>
			<a class="large button" href="<?php the_field('cta_link'); ?>"><?php the_field('cta_button_text'); ?></a>
		</div>

	</div>

</header>

<div class="row">
  <div class="small-12 columns" role="main">

    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <?php do_action('foundationPress_page_before_entry_content'); ?>
      <div class="entry-content row show-for-large-up">
        <div class="medium-6 columns">
			    <?php the_content(); ?>
        </div>        
      </div>
      
      <div class="row feature-icons">
        <div class="small-12 medium-4 columns">
          <a class="feature-icon" <? if(get_field('link_1')){ ?> href="<? the_field('link_1') ?>" <? } ?>>            
            <?php
            $image1 = wp_get_attachment_image_src(get_field('image_1'), 'featured-icon' );
            $image1_large = wp_get_attachment_image_src(get_field('image_1'), 'full' );
            ?>
            <img src="<?php echo $image1[0]; ?>" data-interchange="[<?php echo $image1_large[0]; ?>, (retina)]" class="show-for-medium-up" />
            <h2><?php the_field('heading_1'); ?></h2>
            <?           
            if(get_field('descripton_1'))
            {
              echo '<p>' . get_field('descripton_1') . '</p>';
            }             
            ?>
          </a>
        </div>
        <div class="small-12 medium-4 columns">
          <a class="feature-icon" <? if(get_field('link_2')){ ?> href="<? the_field('link_2') ?>" <? } ?>>            
            <?php
            $image2 = wp_get_attachment_image_src(get_field('image_2'), 'featured-icon' );
            $image2_large = wp_get_attachment_image_src(get_field('image_2'), 'full' );
            ?>
            <img src="<?php echo $image2[0]; ?>" data-interchange="[<?php echo $image2_large[0]; ?>, (retina)]" class="show-for-medium-up" />
            <h2><?php the_field('heading_2'); ?></h2>
            <?           
            if(get_field('descripton_2'))
            {
              echo '<p>' . get_field('descripton_2') . '</p>';
            }             
            ?>
          </a>
        </div>
        <div class="small-12 medium-4 columns">
          <a class="feature-icon" <? if(get_field('link_3')){ ?> href="<? the_field('link_3') ?>" <? } ?>>            
            <?php
            $image3 = wp_get_attachment_image_src(get_field('image_3'), 'featured-icon' );
            $image3_large = wp_get_attachment_image_src(get_field('image_3'), 'full' );
            ?>
            <img src="<?php echo $image3[0]; ?>" data-interchange="[<?php echo $image3_large[0]; ?>, (retina)]" class="show-for-medium-up" />
            <h2><?php the_field('heading_3'); ?></h2>
            <?           
            if(get_field('descripton_3'))
            {
              echo '<p>' . get_field('descripton_3') . '</p>';
            }             
            ?>
          </a>
        </div>
      </div>
      
    </article>
  <?php endwhile;?>

  <?php do_action('foundationPress_after_content'); ?>
  
  </div>

<?php //get_sidebar(); ?>
</div>

<?php get_footer(); ?>