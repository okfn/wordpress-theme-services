</section>
<footer id="footer">
  <div class="row">
    <?php do_action('foundationPress_before_footer'); ?>
    <?php dynamic_sidebar("footer-widgets"); ?>
    <?php do_action('foundationPress_after_footer'); ?>
  </div>
  <div class="sub-footer">
    <?php dynamic_sidebar("subfooter-widgets"); ?>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <? do_action('okf_footer'); ?>
    </div>
  </div>
</footer>
<a class="exit-off-canvas"></a>
	
  <?php do_action('foundationPress_layout_end'); ?>
  </div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
<script>
$(document).ready(function() {
  $(".word_split").lettering('words');
  
  $('#homepage-hero.slider .text').animate({left: '50%'});
});
</script>

<!-- temp zendesk -->
<script type="text/javascript" src="//assets.zendesk.com/external/zenbox/v2.6/zenbox.js"></script>
<style type="text/css" media="screen, projection">
  @import url(//assets.zendesk.com/external/zenbox/v2.6/zenbox.css);
</style>
<script type="text/javascript">
  if ((typeof(Zenbox) !== "undefined") && (matchMedia(Foundation.media_queries['large']).matches)) {
    Zenbox.init({
      dropboxID:   "20265572",
      url:         "https://okfn.zendesk.com",
      tabTooltip:  "Contact Us",
      tabImageURL: "https://p3.zdassets.com/external/zenbox/images/tab_ask_us.png",
      tabColor:    "#629300",
      tabPosition: "Left"
    });
  }
</script>
</body>
</html>