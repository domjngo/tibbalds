</main>
<!-- #main -->

<footer id="footer" class="bc-footer">
  <div class="container">
    <div class="row">
        <?php if ( is_active_sidebar( 'footer-logos' ) ) { ?>
            <div class="footer-logos">
                <?php dynamic_sidebar( 'footer-logos' ); ?>
            </div>
        <?php } ?>
    </div>
      <div class="row bc-footer-details clearfix">
          <div class="footer-col col-sm-12 col-md-6 col-lg-6">
              <p><small>Tweet</small></p>
          </div>
          <div class="footer-col col-sm-12 col-md-4 col-lg-4">
              <p><small>Address</small></p>
          </div>
          <div class="footer-col col-sm-12 col-md-2 col-lg-2">
              <p><small>Copyright © <?php echo date("Y"); ?></small></p>
          </div>
      </div>
  </div>
</footer>
<!-- #foot -->
</div>
<!-- #page -->

<?php wp_footer(); ?>

<!-- jQuery --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 

<!-- BC JavaScript --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bc.js"></script>
</body></html>