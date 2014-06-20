<?php
/*
Template Name: Contact
*/
get_header(); ?>

<?php do_action('foundationPress_before_content'); ?>
	
<?php while (have_posts()) : the_post(); ?>

<header class="banner" role="banner">
</header>
<div class="row" role="banner">
  <div class="small-12 columns">
    <h1 class="entry-title"><?php the_title(); ?>.</h1>
    <div class="intro">
      <?php the_field('intro'); ?>
    </div>
  </div>
</div>
   
<section class="secondary">
  <div class="row">
    <div class="small-12 columns" role="main">
      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <?php do_action('foundationPress_page_before_entry_content'); ?>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
      </div>
  </div>
  <form action="http://ckan-express-contact.herokuapp.com/new" method="post">
    <div class="row">
      <div class="small-12 columns">
  
        <script type="text/javascript"
           src="http://www.google.com/recaptcha/api/challenge?k=6LfN1_ESAAAAABgKhymanyjLTxaqpmewh9HbpWSE ">
        </script>
        <noscript>
           <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LfN1_ESAAAAABgKhymanyjLTxaqpmewh9HbpWSE"
               height="300" width="500" frameborder="0"></iframe><br>
           <textarea name="recaptcha_challenge_field" rows="3" cols="40">
           </textarea>
           <input type="hidden" name="recaptcha_response_field"
               value="manual_challenge">
        </noscript>
      </div>
    </div>
    
    <div class="row">
      <div class="small-12 medium-6 columns">
        <label>Name
          <input type="text" name="name" class="radius" placeholder="enter your name" />
        </label>
      </div>
      <div class="small-12 medium-6 columns">
        <label>Email
          <input type="text" name="email" class="radius" placeholder="enter your email" />
        </label>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <label>Subject
          <input type="text" name="subject" class="radius" placeholder="enter the subject" />
        </label>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <label>Message
          <textarea name="comment" class="radius" rows=10 placeholder="enter your message"></textarea>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <input type="submit" value="Submit" class="button">
      </div>
    </div>
    
  </form>

</section>
        
		
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>


<?php get_footer(); ?>