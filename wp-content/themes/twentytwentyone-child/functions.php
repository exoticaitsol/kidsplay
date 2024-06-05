<?php



// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twenty-twenty-one-custom-color-overrides','twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style' ) );
    }
endif;



 function styleAndScripts() {
 wp_enqueue_style( 'remixiconcss','https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css');
 wp_enqueue_style( 'slickcss','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
 wp_enqueue_style( 'slickthemecss','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');
 wp_enqueue_style( 'aoscss','https://unpkg.com/aos@2.3.1/dist/aos.css');
           wp_enqueue_style( 'stylecss', get_stylesheet_directory_uri() . '/assets/css/style.css?'.strtotime(date('Y-m-d H:i:s')).'');
           wp_enqueue_script( 'jqueryjs','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
            wp_enqueue_script( 'slickminjs','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
            
         wp_enqueue_script( 'jsmain', get_stylesheet_directory_uri() . '/assets/js/main.js?'.time().'');  
          
        }
        add_action( 'wp_enqueue_scripts', 'styleAndScripts');
        
         
    add_action( 'init', 'create_custom_post_type' );


    function custom_widgets_logo() {
        register_sidebar( array(
            'name'          => 'Custom logo',
            'id'            => 'custom-logo',
            'description'   => 'Add widgets here to appear in the custom sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
     }
     add_action( 'widgets_init', 'custom_widgets_logo' );
     
     function custom_widgets_logo_text() {
        register_sidebar( array(
            'name'          => 'Custom logo Text',
            'id'            => 'custom-logo-text',
            'description'   => 'Add widgets here to appear in the custom sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
     }
     add_action( 'widgets_init', 'custom_widgets_logo_text' );

     function custom_widgets_Contact_links() {
        register_sidebar( array(
            'name'          => 'Custom contact links',
            'id'            => 'custom-contact-links',
            'description'   => 'Add widgets here to appear in the custom sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
     }
     add_action( 'widgets_init', 'custom_widgets_Contact_links' );

     function custom_widgets_header_logo() {
        register_sidebar( array(
            'name'          => 'Custom logo header',
            'id'            => 'custom-logo-header',
            'description'   => 'Add widgets here to appear in the custom sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
     }
     add_action( 'widgets_init', 'custom_widgets_header_logo' );
 
function create_custom_post_type() {

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);


$labels = array(
'name' => _x('News', 'plural'),
'singular_name' => _x('News', 'singular'),
'menu_name' => _x('News', 'admin menu'),
'name_admin_bar' => _x('News', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New news'),
'new_item' => __('New News'),
'edit_item' => __('Edit News'),
'view_item' => __('View News'),
'all_items' => __('All News'),
'search_items' => __('Search news'),
'not_found' => __('No news found.'),
);
 
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'taxonomies' => array( 'category', 'post_tag' ),
  'has_archive' => false,
  'rewrite' => array('slug' => 'News'),
 );
 
register_post_type( 'News',$args);
}
// Hooking up our function to theme setup     
        


// END ENQUEUE PARENT ACTION


 
