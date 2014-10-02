<?php 
/*
Template Name: Pricing
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
      
      <div class="row">
        <div class="small-12 medium-6 columns">
          <h2>Pricing</h2>
        </div>
        <div class="small-12 medium-6 columns end">
          <dl class="currency sub-nav">
            <dt>Currency:</dt>
            <dd class="gbp-link active"><a href="?currency=GBP">GBP</a></dd>
            <dd class="usd-link"><a href="?currency=USD">USD</a></dd>
            <dd class="eur-link"><a href="?currency=EUR">EUR</a></dd>
          </dl>
        </div>
      </div>
      <?
        function convertCurrency($amount, $from, $to){
          $url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
          $data = file_get_contents($url);
          preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
          $converted = preg_replace("/[^0-9.]/", "", $converted[1]);
          return round($converted, 3);
        }
      ?>
      <div class="row" data-equalizer>
        <div class="small-12 medium-4 columns">
          <ul class="pricing-table" data-equalizer-watch>
            <li class="title">Pilot</li>
            <li class="price"><span class="gbp">&pound;850</span> <span class="usd">&#36;<? echo round (convertCurrency(850, "GBP", "USD")); ?></span> <span class="eur">&euro;<? echo round (convertCurrency(850, "GBP", "EUR")); ?></span> <small>per month</small></li>
            <li class="bullet-item">Online documentation</li>
            <li class="bullet-item">15GB of file storage<sup>2</sup></li>
            <li class="bullet-item">Up to 3 editors</li>
            <li class="bullet-item">Support via email for site administrators</li>
            <li class="bullet-item">Response within one business day<sup>4</sup></li>
            <li class="cta-button"><a class="button" href="{{ site.baseurl}}/contact">Get Started</a></li>
          </ul>
        </div>
        <div class="small-12 medium-4 columns">
          <ul class="pricing-table" data-equalizer-watch>
            <li class="title">Production</li>
            <li class="price"><span class="gbp">&pound;1500</span> <span class="usd">&#36;<? echo round (convertCurrency(1500, "GBP", "USD")); ?></span> <span class="eur">&euro;<? echo round (convertCurrency(1500, "GBP", "EUR")); ?></span> <small>per month</small></li>
            <li class="bullet-item">Online documentation</li>
            <li class="bullet-item">50GB of file storage<sup>2</sup></li>
            <li class="bullet-item">Up to 5 editors</li>
            <li class="bullet-item">Support by email and phone for site administrators</li>
            <li class="bullet-item">Response within 4 working hours<sup>4</sup></li>
            <li class="cta-button"><a class="button" href="{{ site.baseurl}}/contact">Get Started</a></li>
          </ul>
        </div>
        <div class="small-12 medium-4 columns">
          <ul class="pricing-table" data-equalizer-watch>
            <li class="title">Professional</li>
            <li class="price"><span class="gbp">&pound;2500</span> <span class="usd">&#36;<? echo round (convertCurrency(2500, "GBP", "USD")); ?></span> <span class="eur">&euro;<? echo round (convertCurrency(2500, "GBP", "EUR")); ?></span> <small>per month</small></li>
            <li class="bullet-item">Includes 1 day of administrator training on site<sup>1</sup></li>
            <li class="bullet-item">100GB of file storage<sup>2</sup></li>
            <li class="bullet-item">Up to 10 editors</li>
            <li class="bullet-item">Support by email and phone. Support for editors as well as administrators</li>
            <li class="bullet-item">Response within two working hours<sup>4</sup></li>
            <li class="cta-button"><a class="button" href="{{ site.baseurl}}/contact">Get Started</a></li>
          </ul>
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

<script>
	  // GET URL variables.
		function getQueryVariable(variable) {
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
		}
    $(document).foundation({
			equalizer: {
				before_height_change: function(){
					// do something before the height changes
					$('html').addClass('currency-gbp');
					var currency = getQueryVariable('currency');
					if (currency === 'GBP') {
						$('html').removeClass('currency-usd currency-eur');
						$('html').addClass('currency-gbp');
						$('.currency.sub-nav dd').removeClass('active');
						$('.currency.sub-nav dd.gbp-link').addClass('active');
					}
					if (currency === 'USD') {
						$('html').removeClass('currency-gbp currency-eur');
						$('html').addClass('currency-usd');
						$('.currency.sub-nav dd').removeClass('active');
						$('.currency.sub-nav dd.usd-link').addClass('active');
					}
					if (currency === 'EUR') {
						$('html').removeClass('currency-gbp currency-usd');
						$('html').addClass('currency-eur');
						$('.currency.sub-nav dd').removeClass('active');
						$('.currency.sub-nav dd.eur-link').addClass('active');
					}
				}
			}
		});
</script>