<?php
/**
 * grass functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package grass
 */

if ( ! function_exists( 'grass_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function grass_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on grass, use a find and replace
		 * to change 'grass' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'grass', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-primary' => esc_html__( 'Primary', 'grass' ),
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

		// Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'grass_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'grass_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function grass_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'grass_content_width', 640 );
}
add_action( 'after_setup_theme', 'grass_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function grass_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer column one', 'grass' ),
		'id'            => 'footer_column_one',
		'before_widget' => '<div class="footer_column">',
		'after_widget'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer column two', 'grass' ),
		'id'            => 'footer_column_two',
		'before_widget' => '<div class="footer_column">',
		'after_widget'  => '</div>', 
	) );
}
add_action( 'widgets_init', 'grass_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function grass_scripts() {

	$path_template_directory = get_template_directory_uri();

	wp_enqueue_style( 'grass-style', get_stylesheet_uri() );

	wp_enqueue_style( 'google-font-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700', array(), '', 'all' );

	wp_enqueue_style( 'docs-theme', $path_template_directory . '/inc/css/docs.theme.min.css', array(), '', 'all' );

	wp_enqueue_style( 'owl-carousel-style', $path_template_directory . '/inc/css/owl.carousel.min.css', array(), '', 'all' );

	wp_enqueue_style( 'owl-theme-default', $path_template_directory . '/inc/css/owl.theme.default.min.css', array(), '', 'all' );

	wp_enqueue_style( 'bootstrap-grid', $path_template_directory . '/inc/libs/bootstrap/bootstrap-grid-3.3.1.min.css', array(), '', 'all' );

	wp_enqueue_style( 'sm', $path_template_directory . '/inc/css/sm.css', array(), '', 'all' );

	wp_enqueue_style( 'product-item', $path_template_directory . '/inc/css/product-item.css', array(), '', 'all' );

	wp_enqueue_style( 'main', $path_template_directory . '/inc/css/main.css', array(), '', 'all' );

	if ( is_archive( 'stocks') ) {
		wp_enqueue_style( 'news', $path_template_directory . '/inc/css/news.css', array(), '', 'all' );
	}

	if ( is_single() || is_shop() ) {
		wp_enqueue_style( 'catalog', $path_template_directory . '/inc/css/catalog.css', '', 'all' );
		wp_enqueue_style( 'news-item', $path_template_directory . '/inc/css/news-item.css', '', 'all' );
	}

	if ( is_product_category() ) {
		wp_enqueue_style( 'product', $path_template_directory . '/inc/css/product.css', '', 'all' );
	}

	wp_enqueue_style( 'media', $path_template_directory . '/inc/css/media.css', array(), '', 'all' );

	if ( is_page(10) ) {
		wp_enqueue_style( 'about-style', $path_template_directory . '/inc/css/about.css', array(), '', 'all' );
	}

	if ( is_page(34) ) {
		wp_enqueue_style( 'contact-style', $path_template_directory . '/inc/css/contacts.css', array(), '', 'all' );
		wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCbyFe5QSQQs55LgZZaQcfWwphPTIZo-TA&callback=initMap', array(), '', 'all' );
	}

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'grass-navigation', $path_template_directory . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'grass-skip-link-focus-fix', $path_template_directory . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'slick-modal-script', $path_template_directory . '/js/jquery.slick-modals.min.js', array(), '', true );

	wp_enqueue_script( 'owl-carousel-script', $path_template_directory . '/js/owl.carousel.js', array(), '', true );

	wp_enqueue_script( 'theme-script', $path_template_directory . '/js/common.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grass_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load Social networks file.
 */
require get_template_directory() . '/inc/social_networks.php';

/**
 * Load file register post type.
 */
require get_template_directory() . '/inc/register_post_types.php';

/**
 * Load file customizer woocommerce.
 */
require get_template_directory() . '/inc/customizer_woocommerce.php';

/* Walker for nav menu */

class Walker_Nav_Menu_grass extends Walker_Nav_Menu {
	/**
	 * What the class handles.
	 *
	 * @since 3.0.0
	 * @access public
	 * @var string
	 *
	 * @see Walker::$tree_type
	 */
	public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

	/**
	 * Database fields to use.
	 *
	 * @since 3.0.0
	 * @access public
	 * @todo Decouple this.
	 * @var array
	 *
	 * @see Walker::$db_fields
	 */
	public $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string   $output Passed by reference. Used to append additional content.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );

		// Default class.
		$classes = array( 'sub-menu' );

		/**
		 * Filters the CSS class(es) applied to a menu list element.
		 *
		 * @since 4.8.0
		 *
		 * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
		 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "{$n}{$indent}<ul $class_names>{$n}";
	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_lvl()
	 *
	 * @param string   $output Passed by reference. Used to append additional content.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );
		$output .= "$indent</ul>{$n}";
	}

	/**
	 * Starts the element output.
	 *
	 * @since 3.0.0
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string   $output Passed by reference. Used to append additional content.
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		$classes[] = 'navbar_li';
		// $classes[] = 'navbar4';
		$classes[] = 'col-md-2';

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param WP_Post  $item  Menu item data object.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		/**
		 * Filters the CSS class(es) applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';
		$atts['class']   = 'nav_text';

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title  Title attribute.
		 *     @type string $target Target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		/**
		 * Filters a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string   $title The menu item's title.
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $item        Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_el()
	 *
	 * @param string   $output Passed by reference. Used to append additional content.
	 * @param WP_Post  $item   Page data object. Not used.
	 * @param int      $depth  Depth of page. Not Used.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$output .= "</li>{$n}";
	}
}

/* Rename post in admin dashboard */
function rename_post_label(){
	global $menu,
		   $submenu;
	$menu[5][0] = __( 'Новости и статьи', 'grass' );
}
// add_action( 'admin_menu', 'rename_post_label' );

/* Remove taxonomy post in admin dashboard */
// add_action( 'init', 'remove_tax_admin_dashboard' );
function remove_tax_admin_dashboard(){
	register_taxonomy('category',array());
	register_taxonomy('post_tag',array());
}

/* Add format file and view for media */
function add_format_media($mimes){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'add_format_media' );

function svg_thumb_display(){
	echo '<style>
		td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail {
			width: 100%!important;
			height: auto !important;
		}
	</style>';
}
add_action( 'admin_head', 'svg_thumb_display' );

function get_phone( $class ){
	$phone = get_theme_mod( 'phone' );
	echo '<a class="' . $class . '" href="tel:' . $phone . '">' . substr( $phone, 0, 2) . '&nbsp;(' . substr( $phone, 2, 4) . ')&nbsp;<span class="phone_number_bold">' . substr( $phone, 6, 2) . '-' . substr( $phone, 8, 2) . '-' . substr( $phone, 10, 2) . '</span></a>';
}

function grass_pre_get_posts( $query ){
	if ( !is_admin() && ( is_archive( 'stocks' ) || is_archive( 'news' ) ) && $query->is_main_query() ) {
		$query->set( 'posts_per_page', 12 );
	}
}
add_action( 'pre_get_posts', 'grass_pre_get_posts' );

function grass_get_paginate_links( $wp_query ){
	$array_paginate = paginate_links( array(
		'base'               => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
		'format'             => '?paged=%#%',
		'total'              => $wp_query->max_num_pages,
		'current'            => max( 1, get_query_var('paged') ),
		'show_all'           => false,
		'end_size'           => 2,
		'mid_size'           => 2,
		'prev_next'          => true,
		'prev_text'          => __( '&#60;&nbsp;Назад', 'grass' ),
		'next_text'          => __( 'Вперед&nbsp;&#62;', 'grass' ),
		// 'before_page_number' => '&nbsp;',
		// 'after_page_number'  => '&nbsp;',
		'type'               => 'array',
	) ); ?>
	<div class="news-selection-row-counter">
		<span id="row-counter-item1"><?php echo $wp_query->query_vars['posts_per_page'] * ( ( $wp_query->query['paged'] == 0 ) ? 1 : $wp_query->query['paged'] )  - $wp_query->query_vars['posts_per_page'] ?></span>&nbsp;-&nbsp;<span id="row-conter-item2"><?php echo $wp_query->query_vars['posts_per_page'] * ( ( $wp_query->query['paged'] == 0 ) ? 1 : $wp_query->query['paged'] ) - $wp_query->query_vars['posts_per_page'] + $wp_query->post_count ?></span>&nbsp;из
		<span id="row-conter-items">&nbsp;<?php echo $wp_query->found_posts ?>&nbsp;</span> позиций
	</div>
	<div class="news-selection-row-list">
		<ul class="news-selection-ul">
			<?php for( $i = 0; $i < count( $array_paginate ); ++$i ) { ?>
				<li class="news-selection-item">
					<?php echo $array_paginate[$i] ?>
				</li>
			<?php } ?>
		</ul>
	</div>
	<?php
}

// add_filter( 'register_post_type_args', 'new_register_post_type_args', 10, 2 );
function new_register_post_type_args( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite']['slug'] = 'news';
		// $args['rewrite'] = array( 'slug' => 'news' );
		$args['rewrite']['with_front'] = true;
		$args['rewrite']['heirarchical'] = true;
		$args['capability_type'] = 'post';
		// $args['hierarchical'] = true;
		$args['has_archive'] = true;
		// $args['show_ui'] = false;
	}
	return $args;
}