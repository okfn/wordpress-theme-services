<?php 
/*
Template Name: Table
*/
get_header();
?>

<?php do_action('foundationPress_before_content'); ?>
	
<?php while (have_posts()) : the_post(); ?>

<? include ("library/banner.php"); ?>
<div class="row">
	<div class="small-12 columns" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
      
      <? 
      require_once 'library/currency-convert/convert.php';
      $convert = new Convert;
      ?>
      <div class="full-table">
      <table>
        <thead>
          <tr>
            <th class="blue" width="25%">Junior SysAdmin / Developer</th>
            <th class="blue" width="25%">Consultant / Developer / PM</th>
            <th class="blue" width="25%">Senior Consultant / Developer</th>
            <th class="blue" width="25%">Principal / Director</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>£750 GB Pounds Sterling</td>
            <td>£1,050 GB Pounds Sterling</td>
            <td>£1,275 GB Pounds Sterling</td>
            <td>£1,500 GB Pounds Sterling</td>
          </tr>
          <tr>
            <td>€<? echo number_format(round ($convert->convert(750, "GBP", "EUR"), -1)); ?>* Euros</td>
            <td>€<? echo number_format(round ($convert->convert(1050, "GBP", "EUR"), -1)); ?>* Euros</td>
            <td>€<? echo number_format(round ($convert->convert(1275, "GBP", "EUR"), -1)); ?>* Euros</td>
            <td>€<? echo number_format(round ($convert->convert(1500, "GBP", "EUR"), -1)); ?>* Euros</td>
          </tr>
          <tr>
            <td>$<? echo number_format(round ($convert->convert(750, "GBP", "USD"), -1)); ?>* US Dollars</td>
            <td>$<? echo number_format(round ($convert->convert(1050, "GBP", "USD"), -1)); ?>* US Dollars</td>
            <td>$<? echo number_format(round ($convert->convert(1275, "GBP", "USD"), -1)); ?>* US Dollars</td>
            <td>$<? echo number_format(round ($convert->convert(1500, "GBP", "USD"), -1)); ?>* US Dollars</td>
          </tr>
          <tr>
            <td colspan="4">10% discount when 31 days or more are booked <sup>1</sup></td>
            </tr>
        </tbody>
      </table>
      </div>
      
      <div class="panel blue full-panel left-icon">
        <div class="icon">
          <span class="icon-thumbs-up"></span>
        </div>
        <div class="text">
          <h5>Recommended for</h5>
          <p>Organisations with a defined set of requirements Existing CKAN installations.</p>
        </div>
      </div>
      
      <div class="row">
        <div class="small-12 columns">
          <?php
          if(get_field('content_2')) {
            echo get_field('content_2');
          }        
          ?>
        </div>
			</div>
      
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<?php //the_tags(); ?>
			</footer>
			<?php do_action('foundationPress_page_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_page_after_comments'); ?>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
</div>
<?php get_footer(); ?>