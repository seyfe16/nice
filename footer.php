    <footer class="page-footer fixed-bottom font-small teal pt-4">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3 footer_menu">
            <ul class="list-unstyled">
              <?php

                  $args  = array('theme_location' => 'footer' );

               ?>
              <?php wp_nav_menu($args); ?>
            </ul>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3">
          <div class="col-md-6 mb-md-0 mb-3">
            <h5 class="text-uppercase font-weight-bold"><?php bloginfo('name') ?></h5>
            <p><?php bloginfo('description') ?></p>
          </div>
        </div>
      </div>
      <div class="footer-copyright text-center py-3">
        <p>&copy; <?php echo Date('Y'); ?> Copyright: <?php bloginfo('name') ?></p>
      </div>
    </footer>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>


  </body>
</html>
<!-- © 2018 Copyright -->
