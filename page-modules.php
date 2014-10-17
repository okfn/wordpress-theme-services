<?php 
/*
Template Name: Modules
*/
get_header(); ?>

<?php do_action('foundationPress_before_content'); ?>
	
<?php while (have_posts()) : the_post(); ?>

<? include ("library/banner.php"); ?>
<div class="row">
	<div class="small-12 columns" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content">
				<?php the_content(); ?>
        
        <h2>Technical Modules</h2>
        <p>We provide a range of technical modules delivered face-to-face at a suitable location of your choice. Please see below our frequently requested modules (below). We are also able to offer custom modules. Please allow for additional preparation time for custom modules.</p>
        
        <dl class="accordion" data-accordion>
          <dd class="accordion-navigation active">
            <a href="#panel1">Introduction to CKAN</a>
            <div id="panel1" class="content active">
              <p><strong>Time Required:</strong> 2-4 hours<br>
              <strong>Audience:</strong> Non-technical staff and developers<br>
              <strong>Prerequisites:</strong> None</p>

              <p>By the end of this course delegates will know what CKAN is, understand CKAN’s key concepts (for example: the concepts of dataset and resource), know how to add data to CKAN and use its search, data management and personalization features, data visualization capabilities, API and extensions.</p>
            </div>
          </dd>
          <dd class="accordion-navigation">
            <a href="#panel2">The CKAN API</a>
            <div id="panel2" class="content">
              <p><strong>Time Required:</strong> 2-4 hours<br>
              <strong>Audience:</strong> Developers<br>
              <strong>Prerequisites:</strong> CKAN install, Python</p>
              <p>By the end of this course delegates will know how to write Python apps and scripts that interact with CKAN sites via the CKAN API.</p>
            </div>
          </dd>
          <dd class="accordion-navigation">
            <a href="#panel3">Writing CKAN plugins</a>
            <div id="panel3" class="content">
              <p><strong>Time Required:</strong> 4 hours minimum<br>
              <strong>Audience:</strong> Back-end (Python) Developers<br>
              <strong>Prerequisites:</strong> CKAN install, Python, CKAN API</p>

              <p>By the end of this course delegates will know how to customize and extend CKAN’s functionality by writing your own CKAN plugins.</p>
            </div>
          </dd>
          <dd class="accordion-navigation">
            <a href="#panel4">Geospatial features</a>
            <div id="panel4" class="content">
              <p><strong>Time Required:</strong> 4 hours<br>
              <strong>Audience:</strong> Developers<br>
              <strong>Prerequisites:</strong> Introduction to CKAN module</p>

              <p>By the end of this course delegates will know how to deploy and use CKAN’s geospatial search, harvesting, CSW and preview features provided by the ckanext-spatial plugin.</p>
            </div>
          </dd>
          <dd class="accordion-navigation">
            <a href="#panel5">Harvesting Data</a>
            <div id="panel5" class="content">
              <p><strong>Time Required:</strong> 2-4 hours<br>
              <strong>Audience:</strong> Developers<br>
              <strong>Prerequisites:</strong> CKAN install, Python</p>
              <p>By the end of this course delegates will know how to deploy and use CKAN’s data harvesting features, provided by the ckanext-harvest extension.</p>
            </div>
          </dd>
          <dd class="accordion-navigation">
            <a href="#panel6">Integrating CKAN with your Content Management System*</a>
            <div id="panel6" class="content">
              <p><strong>Time Required:</strong> 2 hours minimum<br>
              <strong>Audience:</strong> Back-end (Python) Developers<br>
              <strong>Prerequisites:</strong>  CKAN API, Writing CKAN plugins</p>

              <p>By the end of this course delegates will know how to integrate CKAN with a content management system like Drupal or WordPress.</p>
              <p><small>* Note: Please allow an extra day for detailed consultation to find out the exact requirements of your system for this course</small></p>
            </div>
          </dd>
        </dl>
        
        <?php
        if(get_field('content_2')) {
          echo get_field('content_2');
        }        
        ?>
        
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