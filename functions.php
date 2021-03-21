<?php

//REGISTRAMOS BOOTSTRAP STYLOS
function custom_styles() { 
	wp_deregister_style( 'bootstrap' );
	wp_register_style( 'bootstrap', 'https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css', false, '4.6' );
	wp_enqueue_style( 'bootstrap' ); 
}

add_action( 'wp_enqueue_scripts', 'custom_styles' );

//REGISTRAMOS JAVASCRIPTS
function custom_scripts() {
    // REGISTRAMOS JQUERY
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, '3.5.1', false );
	wp_enqueue_script( 'jquery' );

    //REGISTRAMOS BOOTSTRAP MIN JS
	wp_deregister_script( 'bootstrap' );
	wp_register_script( 'bootstrap', 'https://getbootstrap.com/docs/4.6/dist/js/bootstrap.min.js', array( 'jquery' ), '4.6', false );
	wp_enqueue_script( 'bootstrap' );
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );
    
//REGISTRAR EL SIDEBAR
add_action( 'widgets_init', 'jorge_registrar_sidebar' );

function jorge_registrar_sidebar() {
    register_sidebar( array(
        'name' =>'Sidebar',
        'id' => 'sidebar-raiola',
        'description' => 'Barra lateral del tema.',
        //DIVs del sidebar en documento HTML
        'before_widget' => '<div id="%1$s" class="card my-4 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h5 class="card-header">',
        'after_title'   => '</h5>
        <div class="card-body">',
    ) );
}

//Tamaniode imagen 
add_image_size( 'destacada', 750, 300,true );

// Etiqueta de titulo 
add_theme_support( 'title-tag' );

/* Cambiar imagen que aparece en wp-login */
function jc_change_image_logo() { 
?>
  <style type="text/css">
    #login h1 a, .login h1 a {
    background-image: url(https://endeavor.prueba.limpioybueno.com/wp-content/themes/mitemajorge/img/log.png);
      background-repeat: no-repeat;
      background-size: cover;
      height: 150px;
      width: 150px;

    }
  </style>
<?php 
}

add_action( 'login_enqueue_scripts', 'jc_change_image_logo' );
  