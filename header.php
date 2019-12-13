<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title>
      <?php bloginfo('name')?> |
      <?php is_front_page() ? bloginfo('description') :  wp_title()?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mdb.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <style media="screen">
    .submit{
      background: transparent;
      color: #212121;
      border: 0.5px solid #dddddd;
      padding: 5px 20px;
      border-radius: 3px;
    }
    .submit:hover{
      box-shadow: 0 0 2px rgba(35, 173, 255, 1);
    }
    </style>
  </head>
  <?php wp_head() ?>
  <body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark default-color">
        <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>"><strong><?php bloginfo('name') ?></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
          <ul class="navbar-nav">
            <li class="nav-item" style="color: white;">
              <strong><?php bloginfo('description') ?></strong>
            </li>
          </ul>
        </div>
      </nav>
