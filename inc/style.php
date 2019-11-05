<?php


// Enqueue Styles.
 
function reveal_onepage_scripts(){
    wp_enqueue_style('reveal_onepage-style', get_stylesheet_uri());
    wp_enqueue_style('reveal_onepage-google-font', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700', false, '1.1', 'all');
    wp_enqueue_style('reveal_onepage-bootstrap-min', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_style('reveal_onepage-font-awesome', get_template_directory_uri() . '/assets/lib/font-awesome/css/font-awesome.min.css', false, '1.1', 'all');
    wp_enqueue_style('reveal_onepage-animate', get_template_directory_uri() . '/assets/lib/animate/animate.min.css', false, '1.1', 'all');
    wp_enqueue_style('reveal_onepage-ionicons', get_template_directory_uri() . '/assets/lib/ionicons/css/ionicons.min.css', false, '1.1', 'all');
    wp_enqueue_style('reveal_onepage-owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', false, '1.1', 'all');
    wp_enqueue_style('reveal_onepage-magnific-popup', get_template_directory_uri() . '/assets/lib/magnific-popup/magnific-popup.css', false, '1.1', 'all');
    wp_enqueue_style('reveal_onepage-main', get_template_directory_uri() . '/assets/css/style.css', false, '1.1', 'all');

// Enqueue Scripts.

    wp_enqueue_script('reveal_onepage-jquery-migrate', get_template_directory_uri() . '/assets/lib/jquery/jquery-migrate.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-jquery-bootstrap-bundle', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-jquery-easing-min', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-jquery-hoverIntent', get_template_directory_uri() . '/assets/lib/superfish/hoverIntent.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-jquery-superfish', get_template_directory_uri() . '/assets/lib/superfish/superfish.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-jquery-wow', get_template_directory_uri() . '/assets/lib/wow/wow.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-jquery-owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-jquery-magnific-popup', get_template_directory_uri() . '/assets/lib/magnific-popup/magnific-popup.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-jquery-sticky', get_template_directory_uri() . '/assets/lib/sticky/sticky.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-jquery-contactform', get_template_directory_uri() . '/assets/contactform/contactform.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-jquery-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 1.1, true);
    wp_enqueue_script('reveal_onepage-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
    wp_enqueue_script('reveal_onepage-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'reveal_onepage_scripts');