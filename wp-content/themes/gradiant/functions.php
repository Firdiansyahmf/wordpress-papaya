<?php
if ( ! function_exists( 'gradiant_setup' ) ) :
function gradiant_setup() {

/**
 * Define Theme Version
 */
define( 'GRADIANT_THEME_VERSION', '11.1' );

// Root path/URI.
define( 'GRADIANT_PARENT_DIR', get_template_directory() );
define( 'GRADIANT_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'GRADIANT_PARENT_INC_DIR', GRADIANT_PARENT_DIR . '/inc');
define( 'GRADIANT_PARENT_INC_URI', GRADIANT_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'gradiant' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'gradiant' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	
	add_theme_support('custom-logo');
	
	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
		add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', gradiant_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gradiant_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'gradiant_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gradiant_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gradiant_content_width', 1170 );
}
add_action( 'after_setup_theme', 'gradiant_content_width', 0 );


/**
 * All Styles & Scripts.
 */
require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';


/**
 * Called Breadcrumb
 */
require_once get_template_directory() . '/inc/breadcrumb/breadcrumb.php';

/**
 * Sidebar.
 */
require_once get_template_directory() . '/inc/sidebar/sidebar.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/gradiant-customizer.php';


/**
 * Customizer additions.
 */
 require get_template_directory() . '/inc/customizer-repeater/functions.php';

// VIEW ITEM
function display_warung_items() {
    global $wpdb;

    // Query untuk mengambil data barang, jenis, dan ketersediaan di warung
    $items = $wpdb->get_results("
        SELECT 
            wi.id_item, 
            wi.nama_barang, 
            wi.gambar,
            wi.harga, 
            wi.deskripsi, 
            j.nama_jenis, 
            GROUP_CONCAT(w.nama_warung SEPARATOR ', ') AS warungs,
            GROUP_CONCAT(CONCAT('<a href=\"', w.link_lokasi, '\" target=\"_blank\">', w.nama_warung, '</a>') SEPARATOR ', ') AS links_warungs
        FROM 
            warung_items wi
        JOIN 
            jenis_items j ON wi.id_jenis = j.id_jenis
        JOIN 
            warung_items_availability wa ON wi.id_item = wa.id_item
        JOIN 
            warung w ON wa.id_warung = w.id_warung
        GROUP BY 
            wi.id_item
    ");

    // Membuat HTML untuk menampilkan item sebagai card
    $output = '<div class="warung-items-container" style="display: flex; flex-wrap: wrap; gap: 20px;">';

    foreach ($items as $item) {
        $output .= '
            <div class="warung-item-card" style="border: 1px solid #ddd; border-radius: 5px; padding: 20px; width: 250px;">
                <img src="'. esc_html($item->gambar) .'" alt="Gambar ' . esc_html($item->nama_barang) . '">
                <h4>' . esc_html($item->nama_barang) . '</h4>
                <p><strong>Harga:</strong> Rp ' . number_format($item->harga, 0, ',', '.') . '</p>
                <p><strong>Jenis:</strong> ' . esc_html($item->nama_jenis) . '</p>
                <p><strong>Deskripsi:</strong> ' . esc_html($item->deskripsi) . '</p>
            </div>
        ';
    }

    $output .= '</div>';

    return $output;
}

// Register shortcode
add_shortcode('warung_items', 'display_warung_items');