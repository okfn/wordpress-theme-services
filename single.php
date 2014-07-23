<?php get_header(); ?>

<?php do_action('foundationPress_before_content'); ?>

<?php while (have_posts()) : the_post(); ?>

<header class="banner" role="banner" <? if ( has_post_thumbnail() ) {	?> style="background-image:url(<? echo $thumb_url; ?>)" <? ;} ?> >
  <div class="row">
		<div class="medium-6 columns end">
      <h1 class="entry-title">what you can do with <strong>data</strong>.</h1>
      <div class="intro">
        <?php the_tags(); ?>
      </div>
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
			
			<?php if ( has_post_thumbnail() ): ?>
				<div class="row">
					<div class="column">
						<?php the_post_thumbnail('', array('class' => 'th')); ?>
					</div>
				</div>
			<?php endif; ?>
			
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