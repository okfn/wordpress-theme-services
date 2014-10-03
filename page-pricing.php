<?php 
/*
Template Name: Pricing
*/
get_header();
?>

<?php do_action('foundationPress_before_content'); ?>
	
<?php while (have_posts()) : the_post(); ?>

<? include ("library/banner.php"); ?>
<section>
  <div class="row feature-list">
    <div class="small-12 medium-6 columns">
      <div class="feature-icon-ckan">
        <h4>Proven technology</h4>
        <p>CKAN Express is powered by CKAN — the world's leading open data platform. It powers the official national portals of the US, UK, Brazil, Germany, Canada, Australia, Italy and numerous other national, local and regional government and international organisation sites (see the full list at <a href="http://ckan.org/instances/" target="_blank">ckan.org/instances</a>). Started in 2007, this is a mature, well used and tested technology customised for out-of-the-box needs.</p>
      </div>
      <div class="feature-icon-code">
        <h4>No geeks required</h4>
        <p>CKAN Express is a fully managed service. We take care of all the technology and hosting so you can focus on getting your data published rather than battling with IT. Your site is in safe hands, managed by the leading experts and maintainers of CKAN and hosted on Amazon’s world class cloud based hosting platform.</p>
			</div>
      <div class="feature-icon-lock">
        <h4>A safe home for your open data</h4>
        <p>CKAN has been developed according to best practices for building secure web applications. CKAN is used by multiple governments around the world and has been subjected to penetration testing as part of these deployments. All our plans use SSL to ensure that user logins are encrypted and can’t be intercepted.</p>
      </div>
      <div class="feature-icon-puzzle">
        <h4>Plays well with others</h4>
        <p>CKAN provides a rich API to your data catalogue. This means that data published in your site can be automatically harvested into national catalogues like data.gov.uk massively increasing the reach of your data publishing. </p>
			</div>
    </div>
    <div class="small-12 medium-6 columns">
			<div class="feature-icon-cursor">
        <h4>User friendly</h4>
        <p>CKAN is easy to use with an intuitive <a data-reveal-id="interface" href="{{ site.baseurl}}/img/screenshots/interface.png">interface</a> — loved by publishers and end users. </p>
			</div>
      <div class="feature-icon-chart">
        <h4>Publish any type of data with visualizations of common types</h4>
        <p>You can publish your data in any format and it will be available for users to download. For common formats like CSV and Excel your users can preview and <a data-reveal-id="charts" href="{{ site.baseurl}}/img/screenshots/charts.png">graph</a> the data online before they download it. </p>
			</div>
      <div class="feature-icon-open">
        <h4>No lock in</h4>
        <p>CKAN Express is built with open source software. This means that you can choose your own hosting, move to another provider or upgrade to a more custom solution at any time. Should you wish to migrate we will provide an export of all your data and the code.</p>
			</div>
      <div class="feature-icon-phone">
        <h4>Encourage data reuse</h4>
        <p>CKAN provides a Data API to your tabular datasets which allows developers to search through and query the data, combine similar data or build applications directly off the datastore.</p>
			</div>
      <div class="feature-icon-org">
        <h4>Support for your workflow</h4>
        <p>CKAN Express allows you to create publishing organisations within your site and choose authorisation and <a data-reveal-id="access" href="{{ site.baseurl}}/img/screenshots/access.png">access levels</a> in a modular fashion to specify which users can view private datasets, who can publish and edit datasets and who can administer users per organisation - which allows a scalable decentralisation of management.</p>
			</div>
    </div>
  </div>
</section>
<hr>
<section id="pricing">
  <div class="row">
    <div class="small-12 medium-6 columns">
      <h2>Pricing</h2>
    </div>
    <div class="small-12 medium-6 columns end">
      <dl class="currency sub-nav">
        <dt>Currency:</dt>
        <dd class="gbp-link active"><a href="?currency=GBP#pricing">GBP</a></dd>
        <dd class="usd-link"><a href="?currency=USD#pricing">USD</a></dd>
        <dd class="eur-link"><a href="?currency=EUR#pricing">EUR</a></dd>
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
        <li class="price"><span class="gbp">&pound;850</span> <span class="usd">&#36;<? echo round (convertCurrency(850, "GBP", "USD"), -1); ?>*</span> <span class="eur">&euro;<? echo round (convertCurrency(850, "GBP", "EUR"), -1); ?>*</span> <small>per month</small></li>
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
        <li class="price"><span class="gbp">&pound;1500</span> <span class="usd">&#36;<? echo round (convertCurrency(1500, "GBP", "USD"), -1); ?>*</span> <span class="eur">&euro;<? echo round (convertCurrency(1500, "GBP", "EUR"), -1); ?>*</span> <small>per month</small></li>
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
        <li class="price"><span class="gbp">&pound;2500</span> <span class="usd">&#36;<? echo round (convertCurrency(2500, "GBP", "USD"), -1); ?>*</span> <span class="eur">&euro;<? echo round (convertCurrency(2500, "GBP", "EUR"), -1); ?>*</span> <small>per month</small></li>
        <li class="bullet-item">Includes 1 day of administrator training on site<sup>1</sup></li>
        <li class="bullet-item">100GB of file storage<sup>2</sup></li>
        <li class="bullet-item">Up to 10 editors</li>
        <li class="bullet-item">Support by email and phone. Support for editors as well as administrators</li>
        <li class="bullet-item">Response within two working hours<sup>4</sup></li>
        <li class="cta-button"><a class="button" href="{{ site.baseurl}}/contact">Get Started</a></li>
      </ul>
    </div>
  </div>
</section>
<hr>
<div class="row">
	<div class="small-12 columns" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content">
				<?php the_content(); ?>
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
<hr>
<section>
  <div class="row">
    <div class="large-12 columns">
      <h4>Notes on Pricing</h4>
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-6 columns">
      <ul class="disc">
        <li>All prices quoted are in GBP and exclude VAT.</li>
        <li>All plans have a one year minimum subscription, then move to a rolling monthly contract which can be cancelled with 30 days notice.</li>
        <li>You can upgrade to a bigger plan at any time. You can downgrade to a smaller package after an initial 6 months.</li>
      </ul>
    </div>
    <div class="small-12 medium-6 columns">
      <div class="panel callout radius">
        <p>Save 10% by paying up front for a  2 year subscription or save 15% with a 3 year subscription paid at commencement.<br>
        <small>Discounts for advanced payment are available for subscriptions started before 1 May 2014.</small></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <p><small><sup>*</sup> Price for reference only. All prices are based on GBP.<br>
      <sup>1</sup> We will only charge for travel expenses (since these will be variable depending on your location).<br>
      <sup>2</sup> You can buy as much extra storage as you need, whenever you need it, so you’ll never have to worry about running out of space. Extra storage is charged at 50 pence per GB per month. I.e. 15 GB of additional space would be £7.50 per month.<br>
      <sup>3</sup> You will need to register your chosen domain name (or sub-domain) and then point it to our servers.<br>
      <sup>4</sup> Support is available Monday to Friday between 09:00 and 18:00 GMT and excludes UK public holidays. Response times refer to working hours. </small></p>
    </div>
  </div>
</section>

<div id="interface" class="reveal-modal screenshot" data-reveal>
  <img src="http://services.okblogfarm.org/files/2014/10/interface.png" alt="" />
  <a class="close-reveal-modal">&#215;</a>
</div>
<div id="previews" class="reveal-modal screenshot" data-reveal>
  <img src="http://services.okblogfarm.org/files/2014/10/previews.png" alt="" />
  <a class="close-reveal-modal">&#215;</a>
</div>
<div id="charts" class="reveal-modal screenshot" data-reveal>
  <img src="http://services.okblogfarm.org/files/2014/10/charts.png" alt="" />
  <a class="close-reveal-modal">&#215;</a>
</div>
<div id="access" class="reveal-modal screenshot" data-reveal>
  <img src="http://services.okblogfarm.org/files/2014/10/access.png" alt="" />
  <a class="close-reveal-modal">&#215;</a>
</div>
<div id="searchable" class="reveal-modal screenshot" data-reveal>
  <img src="http://services.okblogfarm.org/files/2014/10/searchable.png" alt="" />
  <a class="close-reveal-modal">&#215;</a>
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