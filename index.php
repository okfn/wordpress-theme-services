<?php get_header(); ?>

<header class="banner" role="banner" <? if ( has_post_thumbnail() ) {	?> style="background-image:url(<? echo $thumb_url; ?>)" <? ;} ?> >
  <div class="row">
		<div class="medium-6 columns end">
      <h1 class="entry-title">what you can do with <strong>data</strong>.</h1>
      <div class="intro">
        <?php the_field('intro'); ?>
      </div>
		</div>
	</div>
</header>

<div class="row">
	<div class="small-12 large-8 columns" role="main">
	
  SIGNOFF NEEDED (<a href="https://trello-attachments.s3.amazonaws.com/50a39d976403895f5b00ba10/51f238a3c58e95a076007c34/1280x1306/92756d932ef74bb543ae05478390c513/services_08_what_01.jpg">mockup</a>)
<?php if ( have_posts() ) : ?>
		
		<?php do_action('foundationPress_before_content'); ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
		<?php do_action('foundationPress_before_pagination'); ?>
		
	<?php endif;?>
	
	
	
	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>
	
	<?php do_action('foundationPress_after_content'); ?>
	
	</div>
	<?php get_sidebar(); ?>
</div>	
<?php get_footer(); ?>