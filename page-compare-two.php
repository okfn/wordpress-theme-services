<?php 
/*
Template Name: Compare Two Products
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
      <table class="comparison-table compare-two">
        <thead>
          <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col" class="compare-item express-blue"><span data-tooltip aria-haspopup="true" class="has-tip" title="Ideal for municipalities, local authorities, universities and other organisations seeking to introduce an open data initiative.">CKAN Express</span></th>
            <th scope="col" class="compare-item blue"><span data-tooltip aria-haspopup="true" class="has-tip" title="Great for national governments, large cities, international organisations, research institutes.">Custom CKAN</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Browser previews for viewing Excel, CSV, geoJSON, and image files</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Ability to easily create chart, graphs and maps for tabular data</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Full authorization and access management (editors, admins, private datasets)</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Browsable, searchable interface with filters (via web interface and catalog API)</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Homepage customisation</td>
            <td class="no">Standard (logo, layout, colour)</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Standard content management: editable information pages, plus a blog feature</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Datastore and datapusher: allows querying and building on tabular data via Data API</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Ability to be harvested by Data.gov.uk and other aggregators (inc. publicdata.eu)</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Enhanced security: Secure Sockets Layer (SSL)</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Custom domain</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Setting up, basic customisation, system deployment and on-going management including updates and security fixes</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Guaranteed uptime and 99.9% system availability SLA</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Option to host on own infrastructure</td>
            <td class="no">&nbsp;</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
          <tr>
            <td>Themed and branded to complement existing sites</td>
            <td class="no">&nbsp;</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr><tr>
            <td>Bespoke application extensions developed</td>
            <td class="no">&nbsp;</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr><tr>
            <td>Custom metadata schema using your taxonomies and requirements</td>
            <td class="no">&nbsp;</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr><tr>
            <td>Integration with geospatial servers or other data portals for syncing and federation</td>
            <td class="no">&nbsp;</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr><tr>
            <td>Specialist modifications, extensions or new features for work-flows (e.g. approve stages, moderation), mapping, visualization, dashboards, spatial previews, showcases, and apps etc.</td>
            <td class="no">&nbsp;</td>
            <td class="yes"><span class="icon-checkmark" aria-label="Yes"></span></td>
          </tr>
        </tbody>
      </table>
      
      <div class="row">
				<div class="medium-6 columns">
					<div class="panel express-blue">
            <div class="icon">
              <span class="icon-checkmark-circle"></span>
            </div>
            <p>CKAN Express is available in three convenient price plans. Please contact services@okfn.org to get started.</p>
					</div>
				</div>
				<div class="medium-6 columns">
					<div class="panel blue">
            <div class="icon">
              <span class="icon-checkmark-circle"></span>
            </div>
						<p>Custom CKAN prices depend on the size, scope and complexity of your specific requirements. Please contact services@okfn.org to get started.</p>
					</div>
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