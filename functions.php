<?php
if( !function_exists( 'LinkaMY_setup') ){
   function LinkaMY_setup(){
     add_theme_support( 'title-tag' );

     add_theme_support( 'custom-logo', array(
       'width' => 300,
       'height' => 100,
       'flex-width' => true
     ));

     register_nav_menus(array(
       'primary' => __( 'Principale','LinkaMY' )
     ) );
    }
}
add_action( 'after_setup_theme', 'LinkaMY_setup' );

function LinkaMY_widgets_init() {
    register_sidebar( array(
      'name'          => __( 'footer', 'LinkaMY' ),
      'id'            => 'footer',
      'description'   => __( 'Aggiungi la widget da mostrare nel footer del tema.', 'LinkaMY' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'LinkaMY_widgets_init' );

function LinkaMY_scripts() {
  wp_enqueue_style( 'LinkaMY-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'LinkaMY_scripts' );

 ?>
