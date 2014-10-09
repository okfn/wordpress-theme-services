<?php 
/*
Template Name: Compare Three Products
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
      <table class="comparison-table compare-three">
        <thead>
          <tr class="orange">
            <th scope="col">&nbsp;</th>
            <th scope="col" class="compare-item">Essential Support</th>
            <th scope="col" class="compare-item">Premier Support</th>
            <th scope="col" class="compare-item">Total Support</th>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>£800 p/m</td>
            <td>£2100 p/m</td>
            <td>£10,000 p/m</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><p>Includes: news on upgrades, security and bug patches</p>
            <p>Receive real-time alerts on security updates</p>
            <p>Receive information about bug patches</p></td>
            <td><p>Includes: priority notification and guidance for security and bug fixes; packaged upgrade</p></td>
            <td><p>Dedicated project manager and developer overseeing your instance and how fixes or upgrades affect your set-up</p></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Included developer time</td>
            <td class="yes">1 day <br>(8 hours / month)</td>
            <td class="yes">3 days <br>(24 hours / month)</td>
            <td class="yes">12 days <br>(96 hours / month)</td>
          </tr>
          <tr>
            <td>Alerts on bugs</td>
            <td class="no">&nbsp;</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Security updates</td>
            <td class="no">&nbsp;</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Priority notification</td>
            <td class="no">&nbsp;</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>CKAN Association Membership discount</td>
            <td class="no">&nbsp;</td>
            <td class="yes">5%</td>
            <td class="yes">10%</td>
          </tr>
          <tr>
            <td>Newsletter of developments</td>
            <td class="no">&nbsp;</td>
            <td class="no">&nbsp;</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>CKAN Summit Discount</td>
            <td class="no">&nbsp;</td>
            <td class="no">&nbsp;</td>
            <td class="yes">5%</td>
          </tr>
          <tr>
            <td>Hours of support</td>
            <td class="yes">10am - 6pm (UTC 0)</td>
            <td class="yes">10am - 6pm (UTC 0)</td>
            <td class="yes">8am - 8pm (UTC 0)</td>
          </tr>
        </tbody>
      </table>
      
      <div class="row">
        <div class="small-12 columns">
          <?php
          if(get_field('content_2')) {
            echo get_field('content_2');
          }        
          ?>
        </div>
			</div>
      
      <div class="panel blue left-icon">
        <div class="icon">
          <span class="icon-thumbs-up"></span>
        </div>
        <div class="text">
          <h5>Recommended for</h5>
          <p>Organisations with a defined set of requirements Existing CKAN installations.</p>
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