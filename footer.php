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
});
</script>
</body>
</html>