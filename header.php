<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <?php if ( has_nav_menu( 'primary' ) ) : ?>
  <nav id="ms-navbar" class="navbar navbar-default navbar-static-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ms-navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rightbuddha-sm.png" alt="Midnight Spaghetti" width="44" height="60" />
        </a>
      </div>

      <div class="collapse navbar-collapse" id="ms-navbar-collapse">
        <?php wp_nav_menu( array(
                'menu_class' => 'nav navbar-nav',
                'theme_location' => 'primary',
                'depth' => 1
              ) );
        ?>

        <?php wp_nav_menu( array(
                'menu_class' => 'nav navbar-nav navbar-right social-links',
                'theme_location' => 'social',
                'depth' => 1
              ) );
        ?>
      </div>
    </div>
  </nav>
  <?php endif; ?>
