<?php
  require_once('wp-bootstrap-navwalker.php');


  function wpb_theme_setup(){

    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
      'primary' => __('Primary Menu'),
      'footer' => __('Footer Menu')
    ));
  }

  function wpt_theme_styles(){
    wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');
	}

  function set_excerpt_length(){
    return 35;
  }

  function wpt_init_widgets($id){
    register_sidebar(array(
      'name' => 'Sidebar' ,
      'id' => 'sidebar',
      'before_widget' => '<div class="main-body">',
      'after_widget' => '</div>',
      'before_title' => '</h5>',
      'after_title' => '</h5>'
   ));
  }

  add_filter('excerpt_length', 'set_excerpt_length');
  add_action('after_setup_theme','wpb_theme_setup');
  add_action('wp_enqueue_scripts', 'wpt_theme_styles');
  add_action('widgets_init', 'wpt_init_widgets');
 ?>
