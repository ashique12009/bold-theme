<div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <?php if (is_active_sidebar('footer-left')) : ?>
            <?php dynamic_sidebar('footer-left'); ?>
          <?php endif; ?>
        </div>
        <div class="col-md-6">
        <?php if (is_active_sidebar('footer-right')) : ?>
          <?php dynamic_sidebar('footer-right'); ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

<?php wp_footer(); ?>

</body>
</html>