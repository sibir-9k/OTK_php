<?php 

function wpse_enqueue_page_template_styles() {

  if ( is_page_template( 'blog.php' ) ) {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/css/blog.css' );
    wp_enqueue_style( 'footer_green_light', get_template_directory_uri() . '/assets/css/footer_green_light.css' );
  }
  if ( is_page_template( 'catalog_insight.php' ) ) {
    wp_enqueue_style( 'preconnect', 'https://fonts.googleapis.com' );
    wp_enqueue_style( 'gstatic', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap' );
    wp_enqueue_style( 'catalog_insight', get_template_directory_uri() . '/assets/css/catalog_insight.css' );
  }
  if ( is_page_template( 'catalog.php' ) ) {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap' );
    wp_enqueue_style( 'catalog', get_template_directory_uri() . '/assets/css/catalog.css' );
    wp_enqueue_style( 'footer_green_light', get_template_directory_uri() . '/assets/css/footer_green_light.css' );
  }
  if ( is_page_template( 'contacts.php' ) ) {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap' );
    wp_enqueue_style( 'contacts', get_template_directory_uri() . '/assets/css/contacts.css' );
    wp_enqueue_style( 'footer_contact', get_template_directory_uri() . '/assets/css/footer_contact.css' );
  }
  if ( is_page_template( 'Q-A.php' ) ) {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap' );
    wp_enqueue_style( 'q_a', get_template_directory_uri() . '/assets/css/q_a.css' );
  }
  if ( is_page_template( 'home.php' ) ) {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
  }

  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery-core', '/https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js');
	
  wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'js-bootstrap', get_template_directory_uri() . '/assets/js/range.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>