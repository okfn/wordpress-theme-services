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

if( get_field('enable_home_banner_slider') ) {
?>

<div class="hide-for-large-up">
  <? include ("library/home-banner.php"); ?>
</div>
<div class="show-for-large-up">
  <? include ("library/home-banner-slider.php"); ?>
</div>

<? }
else { include ("library/home-banner.php"); } ?>

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
          <div class="feature-icon">
            <a <? if(get_field('link_1')){ ?> href="<? the_field('link_1') ?>" <? } ?>>            
              <?php
              $image1 = wp_get_attachment_image_src(get_field('image_1'), 'featured-icon' );
              $image1_large = wp_get_attachment_image_src(get_field('image_1'), 'full' );
              ?>
              <img src="<?php echo $image1[0]; ?>" data-interchange="[<?php echo $image1_large[0]; ?>, (retina)]" class="show-for-medium-up" />
              <h2><?php the_field('heading_1'); ?></h2>
            </a>
            <?           
            if(get_field('descripton_1'))
            {
              echo get_field('descripton_1');
            }             
            ?>
          </div>
        </div>
        <div class="small-12 medium-4 columns">
          <div class="feature-icon">
            <a <? if(get_field('link_2')){ ?> href="<? the_field('link_2') ?>" <? } ?>>            
              <?php
              $image2 = wp_get_attachment_image_src(get_field('image_2'), 'featured-icon' );
              $image2_large = wp_get_attachment_image_src(get_field('image_2'), 'full' );
              ?>
              <img src="<?php echo $image2[0]; ?>" data-interchange="[<?php echo $image2_large[0]; ?>, (retina)]" class="show-for-medium-up" />
              <h2><?php the_field('heading_2'); ?></h2>
            </a>
            <?           
            if(get_field('descripton_2'))
            {
              echo get_field('descripton_2');
            }             
            ?>
          </div>
        </div>
        <div class="small-12 medium-4 columns">
          <div class="feature-icon">
            <a <? if(get_field('link_3')){ ?> href="<? the_field('link_3') ?>" <? } ?>>            
              <?php
              $image3 = wp_get_attachment_image_src(get_field('image_3'), 'featured-icon' );
              $image3_large = wp_get_attachment_image_src(get_field('image_3'), 'full' );
              ?>
              <img src="<?php echo $image3[0]; ?>" data-interchange="[<?php echo $image3_large[0]; ?>, (retina)]" class="show-for-medium-up" />
              <h2><?php the_field('heading_3'); ?></h2>
            </a>
            <?           
            if(get_field('descripton_3'))
            {
              echo get_field('descripton_3');
            }             
            ?>
          </div>
        </div>
      </div>
      
    </article>
  <?php endwhile;?>

  <?php do_action('foundationPress_after_content'); ?>
  
  </div>

<?php //get_sidebar(); ?>
</div>

<?php get_footer(); ?>