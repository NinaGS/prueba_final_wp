<?php


function register_enqueue_style() {
    $theme_data = wp_get_theme();

     /* Registrando estilos */
     
     wp_register_style('bootstrap', 
      'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
      null, '1.0.0', 'screen');

     wp_register_style('fontawesome',
      'https://use.fontawesome.com/releases/v5.3.1/css/all.css',
      null, '1.0.0', 'screen');

     

     wp_register_style('main', 
      get_theme_file_uri('/assets/css/style.css'),
      null, '1.0.0', 'screen'); 


     /* Estilos en cola */
     
     wp_enqueue_style('bootstrap');
     wp_enqueue_style('fontawesome');
     wp_enqueue_style('main');

    }
    add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );


  function register_enqueue_scripts() {
    $theme_data = wp_get_theme();

 /* dergister scripts */
  wp_deregister_script( 'jquery' );
  wp_deregister_script( 'jquery-migrate' );   

 /* Registrando Scripts */
  
  wp_register_script('jQuery3',
    'https://code.jquery.com/jquery-3.3.1.slim.min.js',
    null, '3.3.1', true);
  wp_register_script('bootstrap',
   'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
    null, null, true);
  wp_register_script('popper',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
    null, null, true);
  wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/scripts.js'), null, null, true);
 
 /* Enqueue Scripts */
 
 wp_enqueue_script('jQuery3');
 wp_enqueue_script('bootstrap');
 wp_enqueue_script('popper');
 wp_enqueue_script('mainJS');

  }
  add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );
?>