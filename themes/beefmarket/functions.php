<?php
// Registro del menú de WordPress

add_theme_support( 'nav-menus' );

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main'
        )
    );
}
?>
<?php

     //  Main Sidebar
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Main Sidebar',
           'before_widget' => '<hr>',
            'after_widget' => '',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));

?>

<?php
//Habilitar thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150, true);
?>

<?php
function the_excerpt_max_charlength($charlength) {
  $excerpt = get_the_excerpt();
  $charlength++;

  if ( mb_strlen( $excerpt ) > $charlength ) {
    $subex = mb_substr( $excerpt, 0, $charlength - 5 );
    $exwords = explode( ' ', $subex );
    $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
    if ( $excut < 0 ) {
      echo mb_substr( $subex, 0, $excut );
    } else {
      echo $subex;
    }
    echo '...';
  } else {
    echo $excerpt;
  }
}
?>

<?
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_home_text' );
function jk_change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Appartment'
  $defaults['home'] = 'Inicio';
  return $defaults;
}
?>