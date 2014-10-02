<?php get_header(); ?>

<?
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
$thumb_url = $thumb_url_array[0];
?>

<?php do_action('foundationPress_before_content'); ?>

<?php while (have_posts()) : the_post(); ?>

<header class="banner" role="banner" style=" <? if(get_field('banner_colour')) { echo 'background-color:' . get_field('banner_colour') . ';';}  if ( has_post_thumbnail() ) {	?> background-image:url(<? echo $thumb_url; ?>) <? ;} ?> ">
  <div class="row">
		<div class="medium-6 columns author-details">
      <span class="round-avatar">
        <?php echo get_avatar( get_the_author_email(), '160' ); ?>
      </span>
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" rel="author" class="author-name"><?php echo get_the_author() ?></a>
    </div>
    <div class="medium-6 columns end">
      <?php //the_tags(); ?>
		</div>
	</div>
</header>

<div class="row">
	<div class="small-12 columns" role="main">

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php FoundationPress_entry_meta(); ?>
			</header>
			<?php do_action('foundationPress_post_before_entry_content'); ?>
			<div class="entry-content">
			
			<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
			</footer>
			<?php do_action('foundationPress_post_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_post_after_comments'); ?>
		</article>


	</div>
	<?php //get_sidebar(); ?>
</div>

<?php endwhile;?>
	
<?php do_action('foundationPress_after_content'); ?>

<?php get_footer(); ?>