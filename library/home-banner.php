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