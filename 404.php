<?php get_header(); ?>

<header class="banner" role="banner">
  <div class="row">
		<div class="medium-6 columns end">
      <h1 class="entry-title"><?php _e('Page Not Found', 'FoundationPress'); ?></h1>
      <div class="intro">
        &nbsp;
      </div>
		</div>
	</div>
</header>
<div class="row">
	<div class="small-12 columns" role="main">
	
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
				<div class="error">
					<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'FoundationPress'); ?></p>
				</div>
				<p><?php _e('Please try the following:', 'FoundationPress'); ?></p>
				<ul> 
					<li><?php _e('Check your spelling', 'FoundationPress'); ?></li>
					<li><?php printf(__('Return to the <a href="%s">home page</a>', 'FoundationPress'), home_url()); ?></li>
					<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'FoundationPress'); ?></li>
				</ul>
			</div>
		</article>

	</div>
		
<?php get_footer(); ?>