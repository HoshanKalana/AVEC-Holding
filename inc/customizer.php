<?php
/**
 * base_theme Theme Customizer
 *
 * @package base_theme
 */

//Theme Options

// Set up the WordPress Theme logo feature.
 add_theme_support( 'custom-logo' );

// Add support for responsive embedded content.
add_theme_support( 'responsive-embeds' );

//Enable support for Post Thumbnails on posts and pages.
add_theme_support( 'post-thumbnails' );

//Enable Menu
add_theme_support( 'menus' );

//Enable Tag
add_theme_support( 'title-tag' );

// remove default editor
add_filter( 'use_block_editor_for_post', '__return_false' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
function theme_title( $title, $sep ) {
    if ( is_feed() ) {
        return $title;
    }
     
    global $page, $paged;
 
    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );
 
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep $site_description";
    }
 
    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
    }
    return $title;
}
add_filter( 'wp_title', 'theme_title', 10, 2 );


/**
* Register Custom Navigation Walker
**/
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

// Add Menu locations
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'base_theme'),
) );


//acf option page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Calendly Widget',
		'menu_title'	=> 'Calendly Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
        'icon_url' => 'dashicons-testimonial',
		//'position'      => false,
		'redirect'		=> false,
	));		
}

//Woocommerce
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

