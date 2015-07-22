  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h4 class="footer-header">Midnight Spaghetti</h4>
          <nav>
            <?php wp_nav_menu( array(
                    'menu_class' => 'list-unstyled',
                    'theme_location' => 'footer',
                    'depth' => -1
                  ) );
            ?>
          </nav>
        </div>
        <div class="col-sm-3">
          <h4 class="footer-header">Contact Us</h4>
          <nav>
            <?php wp_nav_menu( array(
                    'menu_class' => 'list-unstyled',
                    'theme_location' => 'contact',
                    'depth' => -1
                  ) );
            ?>
          </nav>
        </div>
        <div class="col-sm-3">
          <h4 class="footer-header">Press</h4>
          <nav>
            <?php wp_nav_menu( array(
                    'menu_class' => 'list-unstyled',
                    'theme_location' => 'press',
                    'depth' => -1
                  ) );
            ?>
          </nav>
        </div>
        <div class="col-sm-3">
          <h4 class="footer-header">Media</h4>
          <nav>
            <?php wp_nav_menu( array(
                    'menu_class' => 'list-unstyled',
                    'theme_location' => 'media',
                    'depth' => -1
                  ) );
            ?>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <p class="copyright">&copy; <?php echo date("Y") ?> Midnight Spaghetti Productions. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>

<?php wp_footer(); ?>
</body>
</html>
