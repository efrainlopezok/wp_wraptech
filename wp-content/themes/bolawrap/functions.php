<?php
/**
 * Twenty Twenty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentytwenty_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Add custom image size used in Cover Template.
	add_image_size( 'twentytwenty-fullscreen', 1980, 9999 );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'twentytwenty' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentytwenty' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	/*
	 * Adds starter content to highlight the theme on fresh sites.
	 * This is done conditionally to avoid loading the starter content on every
	 * page load, as it is a one-off operation only needed once in the customizer.
	 */
	if ( is_customize_preview() ) {
		require get_template_directory() . '/inc/starter-content.php';
		add_theme_support( 'starter-content', twentytwenty_get_starter_content() );
	}

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
	$loader = new TwentyTwenty_Script_Loader();
	add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

add_action( 'after_setup_theme', 'twentytwenty_theme_support' );

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/template-tags.php';

// Handle SVG icons.
require get_template_directory() . '/classes/class-twentytwenty-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

// Handle Customizer settings.
require get_template_directory() . '/classes/class-twentytwenty-customize.php';

// Require Separator Control class.
require get_template_directory() . '/classes/class-twentytwenty-separator-control.php';

// Custom comment walker.
require get_template_directory() . '/classes/class-twentytwenty-walker-comment.php';

// Custom page walker.
require get_template_directory() . '/classes/class-twentytwenty-walker-page.php';

// Custom script loader class.
require get_template_directory() . '/classes/class-twentytwenty-script-loader.php';

// Non-latin language handling.
require get_template_directory() . '/classes/class-twentytwenty-non-latin-languages.php';

// Custom CSS.
require get_template_directory() . '/inc/custom-css.php';

/**
 * Register and Enqueue Styles.
 */
function twentytwenty_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'twentytwenty-style', get_stylesheet_uri(), array(), $theme_version );
	wp_style_add_data( 'twentytwenty-style', 'rtl', 'replace' );

	// Add output of Customizer settings as inline style.
	wp_add_inline_style( 'twentytwenty-style', twentytwenty_get_customizer_css( 'front-end' ) );

	// Animation
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', null, $theme_version, 'all' );

	// Add print CSS.
	wp_enqueue_style( 'twentytwenty-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'twentytwenty_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function twentytwenty_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'twentytwenty-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, true );
	wp_script_add_data( 'twentytwenty-js', 'async', true );
	
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), $theme_version, false );
    wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), $theme_version, true );
    wp_enqueue_script( 'mscrollbar-js', get_template_directory_uri() . '/assets/js/mCustomScrollbar.concat.min.js', array(), '5.5.6', true );
    wp_enqueue_script( 'gray-js', get_template_directory_uri() . '/assets/js/gray.min.js', array(), '5.5.5', true );
    wp_enqueue_script( 'isotop-js', get_template_directory_uri() . '/assets/js/isotop.js', array(), $theme_version, true );
    wp_enqueue_script( 'script-custom-js', get_template_directory_uri() . '/assets/js/scripts.js', array(), '5.6.1', false );

}

add_action( 'wp_enqueue_scripts', 'twentytwenty_register_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentytwenty_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentytwenty_skip_link_focus_fix' );

/** Enqueue non-latin language styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function twentytwenty_non_latin_languages() {
	$custom_css = TwentyTwenty_Non_Latin_Languages::get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'twentytwenty-style', $custom_css );
	}
}

add_action( 'wp_enqueue_scripts', 'twentytwenty_non_latin_languages' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function twentytwenty_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'twentytwenty' ),
		'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
		'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
		'footer'   => __( 'Footer Menu', 'twentytwenty' ),
		'social'   => __( 'Social Menu', 'twentytwenty' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'twentytwenty_menus' );

/**
 * Get the information about the logo.
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 *
 * @return string $html
 */
function twentytwenty_get_custom_logo( $html ) {

	$logo_id = get_theme_mod( 'custom_logo' );

	if ( ! $logo_id ) {
		return $html;
	}

	$logo = wp_get_attachment_image_src( $logo_id, 'full' );

	if ( $logo ) {
		// For clarity.
		$logo_width  = esc_attr( $logo[1] );
		$logo_height = esc_attr( $logo[2] );

		// If the retina logo setting is active, reduce the width/height by half.
		if ( get_theme_mod( 'retina_logo', false ) ) {
			$logo_width  = floor( $logo_width / 2 );
			$logo_height = floor( $logo_height / 2 );

			$search = array(
				'/width=\"\d+\"/iU',
				'/height=\"\d+\"/iU',
			);

			$replace = array(
				"width=\"{$logo_width}\"",
				"height=\"{$logo_height}\"",
			);

			// Add a style attribute with the height, or append the height to the style attribute if the style attribute already exists.
			if ( strpos( $html, ' style=' ) === false ) {
				$search[]  = '/(src=)/';
				$replace[] = "style=\"height: {$logo_height}px;\" src=";
			} else {
				$search[]  = '/(style="[^"]*)/';
				$replace[] = "$1 height: {$logo_height}px;";
			}

			$html = preg_replace( $search, $replace, $html );

		}
	}

	return $html;

}

add_filter( 'get_custom_logo', 'twentytwenty_get_custom_logo' );

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backwards compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function twentytwenty_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Skip to the content', 'twentytwenty' ) . '</a>';
}

add_action( 'wp_body_open', 'twentytwenty_skip_link', 5 );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentytwenty_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h4 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'twentytwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);
    register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Post Sidebar', 'twentytwenty' ),
				'id'          => 'postsidebar',
				'description' => __( 'Single Post sidebar', 'twentytwenty' ),
			)
		)
	);

}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentytwenty_block_editor_styles() {

	$css_dependencies = array();

	// Enqueue the editor styles.
	wp_enqueue_style( 'twentytwenty-block-editor-styles', get_theme_file_uri( '/assets/css/editor-style-block.css' ), $css_dependencies, wp_get_theme()->get( 'Version' ), 'all' );
	wp_style_add_data( 'twentytwenty-block-editor-styles', 'rtl', 'replace' );

	// Add inline style from the Customizer.
	wp_add_inline_style( 'twentytwenty-block-editor-styles', twentytwenty_get_customizer_css( 'block-editor' ),wp_get_theme()->get( 'Version' ), 'all' );
    
	wp_enqueue_style( 'mscrollbar-css', get_theme_file_uri( '/assets/css/mCustomScrollbar.min.css' ),'5.5.5' );
	wp_enqueue_style( 'gray-css', get_theme_file_uri( '/assets/css/gray.min.css' ),'5.5.5' );

	// Add inline style for non-latin fonts.
	wp_add_inline_style( 'twentytwenty-block-editor-styles', TwentyTwenty_Non_Latin_Languages::get_non_latin_css( 'block-editor' ) );

	// Enqueue the editor script.
	wp_enqueue_script( 'twentytwenty-block-editor-script', get_theme_file_uri( '/assets/js/editor-script-block.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
	
	wp_enqueue_style( 'custom-css', get_theme_file_uri( '/assets/css/custom.css' ),'','5.6.7','all' );

	wp_enqueue_style( 'jobs-css', get_theme_file_uri( '/assets/css/jobs.css' ),'','5.6.7','all' );
}

add_action( 'enqueue_block_editor_assets', 'twentytwenty_block_editor_styles', 1, 1 );

/**
 * Enqueue classic editor styles.
 */
function twentytwenty_classic_editor_styles() {

	$classic_editor_styles = array(
		'/assets/css/editor-style-classic.css',
	);

	add_editor_style( $classic_editor_styles );

}

add_action( 'init', 'twentytwenty_classic_editor_styles' );

/**
 * Output Customizer settings in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 *
 * @return array $mce_init TinyMCE styles.
 */
function twentytwenty_add_classic_editor_customizer_styles( $mce_init ) {

	$styles = twentytwenty_get_customizer_css( 'classic-editor' );

	if ( ! isset( $mce_init['content_style'] ) ) {
		$mce_init['content_style'] = $styles . ' ';
	} else {
		$mce_init['content_style'] .= ' ' . $styles . ' ';
	}

	return $mce_init;

}

add_filter( 'tiny_mce_before_init', 'twentytwenty_add_classic_editor_customizer_styles' );

/**
 * Output non-latin font styles in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 *
 * @return array $mce_init TinyMCE styles.
 */
function twentytwenty_add_classic_editor_non_latin_styles( $mce_init ) {

	$styles = TwentyTwenty_Non_Latin_Languages::get_non_latin_css( 'classic-editor' );

	// Return if there are no styles to add.
	if ( ! $styles ) {
		return $mce_init;
	}

	if ( ! isset( $mce_init['content_style'] ) ) {
		$mce_init['content_style'] = $styles . ' ';
	} else {
		$mce_init['content_style'] .= ' ' . $styles . ' ';
	}

	return $mce_init;

}

add_filter( 'tiny_mce_before_init', 'twentytwenty_add_classic_editor_non_latin_styles' );

/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 */
function twentytwenty_block_editor_settings() {

	// Block Editor Palette.
	$editor_color_palette = array(
		array(
			'name'  => __( 'Accent Color', 'twentytwenty' ),
			'slug'  => 'accent',
			'color' => twentytwenty_get_color_for_area( 'content', 'accent' ),
		),
		array(
			'name'  => __( 'Primary', 'twentytwenty' ),
			'slug'  => 'primary',
			'color' => twentytwenty_get_color_for_area( 'content', 'text' ),
		),
		array(
			'name'  => __( 'Secondary', 'twentytwenty' ),
			'slug'  => 'secondary',
			'color' => twentytwenty_get_color_for_area( 'content', 'secondary' ),
		),
		array(
			'name'  => __( 'Subtle Background', 'twentytwenty' ),
			'slug'  => 'subtle-background',
			'color' => twentytwenty_get_color_for_area( 'content', 'borders' ),
		),
	);

	// Add the background option.
	$background_color = get_theme_mod( 'background_color' );
	if ( ! $background_color ) {
		$background_color_arr = get_theme_support( 'custom-background' );
		$background_color     = $background_color_arr[0]['default-color'];
	}
	$editor_color_palette[] = array(
		'name'  => __( 'Background Color', 'twentytwenty' ),
		'slug'  => 'background',
		'color' => '#' . $background_color,
	);

	// If we have accent colors, add them to the block editor palette.
	if ( $editor_color_palette ) {
		add_theme_support( 'editor-color-palette', $editor_color_palette );
	}

	// Block Editor Font Sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'twentytwenty' ),
				'size'      => 18,
				'slug'      => 'small',
			),
			array(
				'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'M', 'Short name of the regular font size in the block editor.', 'twentytwenty' ),
				'size'      => 21,
				'slug'      => 'normal',
			),
			array(
				'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'twentytwenty' ),
				'size'      => 26.25,
				'slug'      => 'large',
			),
			array(
				'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'twentytwenty' ),
				'size'      => 32,
				'slug'      => 'larger',
			),
		)
	);

	// If we have a dark background color then add support for dark editor style.
	// We can determine if the background color is dark by checking if the text-color is white.
	if ( '#ffffff' === strtolower( twentytwenty_get_color_for_area( 'content', 'text' ) ) ) {
		add_theme_support( 'dark-editor-style' );
	}

}

add_action( 'after_setup_theme', 'twentytwenty_block_editor_settings' );

/**
 * Overwrite default more tag with styling and screen reader markup.
 *
 * @param string $html The default output HTML for the more tag.
 *
 * @return string $html
 */
function twentytwenty_read_more_tag( $html ) {
	return preg_replace( '/<a(.*)>(.*)<\/a>/iU', sprintf( '<div class="read-more-button-wrap"><a$1><span class="faux-button">$2</span> <span class="screen-reader-text">"%1$s"</span></a></div>', get_the_title( get_the_ID() ) ), $html );
}

add_filter( 'the_content_more_link', 'twentytwenty_read_more_tag' );

/**
 * Enqueues scripts for customizer controls & settings.
 *
 * @since 1.0.0
 *
 * @return void
 */
function twentytwenty_customize_controls_enqueue_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Add main customizer js file.
	wp_enqueue_script( 'twentytwenty-customize', get_template_directory_uri() . '/assets/js/customize.js', array( 'jquery' ), $theme_version, false );

	// Add script for color calculations.
	wp_enqueue_script( 'twentytwenty-color-calculations', get_template_directory_uri() . '/assets/js/color-calculations.js', array( 'wp-color-picker' ), $theme_version, false );

	// Add script for controls.
	wp_enqueue_script( 'twentytwenty-customize-controls', get_template_directory_uri() . '/assets/js/customize-controls.js', array( 'twentytwenty-color-calculations', 'customize-controls', 'underscore', 'jquery' ), $theme_version, false );
	wp_localize_script( 'twentytwenty-customize-controls', 'twentyTwentyBgColors', twentytwenty_get_customizer_color_vars() );
}

add_action( 'customize_controls_enqueue_scripts', 'twentytwenty_customize_controls_enqueue_scripts' );

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since 1.0.0
 *
 * @return void
 */
function twentytwenty_customize_preview_init() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'twentytwenty-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview', 'customize-selective-refresh', 'jquery' ), $theme_version, true );
	wp_localize_script( 'twentytwenty-customize-preview', 'twentyTwentyBgColors', twentytwenty_get_customizer_color_vars() );
	wp_localize_script( 'twentytwenty-customize-preview', 'twentyTwentyPreviewEls', twentytwenty_get_elements_array() );

	wp_add_inline_script(
		'twentytwenty-customize-preview',
		sprintf(
			'wp.customize.selectiveRefresh.partialConstructor[ %1$s ].prototype.attrs = %2$s;',
			wp_json_encode( 'cover_opacity' ),
			wp_json_encode( twentytwenty_customize_opacity_range() )
		)
	);
}

add_action( 'customize_preview_init', 'twentytwenty_customize_preview_init' );

/**
 * Get accessible color for an area.
 *
 * @since 1.0.0
 *
 * @param string $area The area we want to get the colors for.
 * @param string $context Can be 'text' or 'accent'.
 * @return string Returns a HEX color.
 */
function twentytwenty_get_color_for_area( $area = 'content', $context = 'text' ) {

	// Get the value from the theme-mod.
	$settings = get_theme_mod(
		'accent_accessible_colors',
		array(
			'content'       => array(
				'text'      => '#000000',
				'accent'    => '#cd2653',
				'secondary' => '#6d6d6d',
				'borders'   => '#dcd7ca',
			),
			'header-footer' => array(
				'text'      => '#000000',
				'accent'    => '#cd2653',
				'secondary' => '#6d6d6d',
				'borders'   => '#dcd7ca',
			),
		)
	);

	// If we have a value return it.
	if ( isset( $settings[ $area ] ) && isset( $settings[ $area ][ $context ] ) ) {
		return $settings[ $area ][ $context ];
	}

	// Return false if the option doesn't exist.
	return false;
}

/**
 * Returns an array of variables for the customizer preview.
 *
 * @since 1.0.0
 *
 * @return array
 */
function twentytwenty_get_customizer_color_vars() {
	$colors = array(
		'content'       => array(
			'setting' => 'background_color',
		),
		'header-footer' => array(
			'setting' => 'header_footer_background_color',
		),
	);
	return $colors;
}

/**
 * Get an array of elements.
 *
 * @since 1.0
 *
 * @return array
 */
function twentytwenty_get_elements_array() {

	// The array is formatted like this:
	// [key-in-saved-setting][sub-key-in-setting][css-property] = [elements].
	$elements = array(
		'content'       => array(
			'accent'     => array(
				'color'            => array( '.color-accent', '.color-accent-hover:hover', '.color-accent-hover:focus', ':root .has-accent-color', '.has-drop-cap:not(:focus):first-letter', '.wp-block-button.is-style-outline', 'a' ),
				'border-color'     => array( 'blockquote', '.border-color-accent', '.border-color-accent-hover:hover', '.border-color-accent-hover:focus' ),
				'background-color' => array( 'button:not(.toggle)', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file .wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.bg-accent', '.bg-accent-hover:hover', '.bg-accent-hover:focus', ':root .has-accent-background-color', '.comment-reply-link' ),
				'fill'             => array( '.fill-children-accent', '.fill-children-accent *' ),
			),
			'background' => array(
				'color'            => array( ':root .has-background-color', 'button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.wp-block-button', '.comment-reply-link', '.has-background.has-primary-background-color:not(.has-text-color)', '.has-background.has-primary-background-color *:not(.has-text-color)', '.has-background.has-accent-background-color:not(.has-text-color)', '.has-background.has-accent-background-color *:not(.has-text-color)' ),
				'background-color' => array( ':root .has-background-background-color' ),
			),
			'text'       => array(
				'color'            => array( 'body', '.entry-title a', ':root .has-primary-color' ),
				'background-color' => array( ':root .has-primary-background-color' ),
			),
			'secondary'  => array(
				'color'            => array( 'cite', 'figcaption', '.wp-caption-text', '.post-meta', '.entry-content .wp-block-archives li', '.entry-content .wp-block-categories li', '.entry-content .wp-block-latest-posts li', '.wp-block-latest-comments__comment-date', '.wp-block-latest-posts__post-date', '.wp-block-embed figcaption', '.wp-block-image figcaption', '.wp-block-pullquote cite', '.comment-metadata', '.comment-respond .comment-notes', '.comment-respond .logged-in-as', '.pagination .dots', '.entry-content hr:not(.has-background)', 'hr.styled-separator', ':root .has-secondary-color' ),
				'background-color' => array( ':root .has-secondary-background-color' ),
			),
			'borders'    => array(
				'border-color'        => array( 'pre', 'fieldset', 'input', 'textarea', 'table', 'table *', 'hr' ),
				'background-color'    => array( 'caption', 'code', 'code', 'kbd', 'samp', '.wp-block-table.is-style-stripes tbody tr:nth-child(odd)', ':root .has-subtle-background-background-color' ),
				'border-bottom-color' => array( '.wp-block-table.is-style-stripes' ),
				'border-top-color'    => array( '.wp-block-latest-posts.is-grid li' ),
				'color'               => array( ':root .has-subtle-background-color' ),
			),
		),
		'header-footer' => array(
			'accent'     => array(
				'color'            => array( 'body:not(.overlay-header) .primary-menu > li > a', 'body:not(.overlay-header) .primary-menu > li > .icon', '.modal-menu a', '.footer-menu a, .footer-widgets a', '#site-footer .wp-block-button.is-style-outline', '.wp-block-pullquote:before', '.singular:not(.overlay-header) .entry-header a', '.archive-header a', '.header-footer-group .color-accent', '.header-footer-group .color-accent-hover:hover' ),
				'background-color' => array( '.social-icons a', '#site-footer button:not(.toggle)', '#site-footer .button', '#site-footer .faux-button', '#site-footer .wp-block-button__link', '#site-footer .wp-block-file__button', '#site-footer input[type="button"]', '#site-footer input[type="reset"]', '#site-footer input[type="submit"]' ),
			),
			'background' => array(
				'color'            => array( '.social-icons a', 'body:not(.overlay-header) .primary-menu ul', '.header-footer-group button', '.header-footer-group .button', '.header-footer-group .faux-button', '.header-footer-group .wp-block-button:not(.is-style-outline) .wp-block-button__link', '.header-footer-group .wp-block-file__button', '.header-footer-group input[type="button"]', '.header-footer-group input[type="reset"]', '.header-footer-group input[type="submit"]' ),
				'background-color' => array( '#site-header', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal', '.menu-modal-inner', '.search-modal-inner', '.archive-header', '.singular .entry-header', '.singular .featured-media:before', '.wp-block-pullquote:before' ),
			),
			'text'       => array(
				'color'               => array( '.header-footer-group', 'body:not(.overlay-header) #site-header .toggle', '.menu-modal .toggle' ),
				'background-color'    => array( 'body:not(.overlay-header) .primary-menu ul' ),
				'border-bottom-color' => array( 'body:not(.overlay-header) .primary-menu > li > ul:after' ),
				'border-left-color'   => array( 'body:not(.overlay-header) .primary-menu ul ul:after' ),
			),
			'secondary'  => array(
				'color' => array( '.site-description', 'body:not(.overlay-header) .toggle-inner .toggle-text', '.widget .post-date', '.widget .rss-date', '.widget_archive li', '.widget_categories li', '.widget cite', '.widget_pages li', '.widget_meta li', '.widget_nav_menu li', '.powered-by-wordpress', '.to-the-top', '.singular .entry-header .post-meta', '.singular:not(.overlay-header) .entry-header .post-meta a' ),
			),
			'borders'    => array(
				'border-color'     => array( '.header-footer-group pre', '.header-footer-group fieldset', '.header-footer-group input', '.header-footer-group textarea', '.header-footer-group table', '.header-footer-group table *', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal nav *', '.footer-widgets-outer-wrapper', '.footer-top' ),
				'background-color' => array( '.header-footer-group table caption', 'body:not(.overlay-header) .header-inner .toggle-wrapper::before' ),
			),
		),
	);

	/**
	* Filters Twenty Twenty theme elements
	*
	* @since 1.0.0
	*
	* @param array Array of elements
	*/
	return apply_filters( 'twentytwenty_get_elements_array', $elements );
}


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}




// Load more for Recipe
function get_articles() {

 $offset = $_POST['offset'];
 $post_type = $_POST['post_type'];
 $np = $_POST['number_of_post'];
 $total_post = $_POST['total_post'];
 $s = $_POST['search_para'];
 $c = $_POST['cat_id'];

 $args = array(
	    'hide_empty'     => 1,
	    'offset' => $offset,
	    'posts_per_page' =>$np,
	    'post_type'      => $post_type,
	    'post_status'=>'publish',
	    'orderby'   => 'date',
		'order'     => 'DESC',
	);

	if(isset($s) && !empty($s)) $args['s'] =  $s;
	if(isset($c) &&  $c !="")         $args['cat'] = $c;

	$st =  query_posts($args);
	$count = $offset+count($st);
	$count_new = 0;

	$custom_count = 300;

	if($count < $total_post) {
		$count_new = 1;
	}

	if ( have_posts() ) :
		$i=1;

		while (have_posts()) :
			the_post(); ?>

			<div class="media-postitem animate animate-query-<?php echo $custom_count; ?>">
                <div class="d-flex">
					<?php if(get_field('post_logo')){ ?>
                    <div class="md-item-logo">
                       <?php 
                        $image = get_field('post_logo');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
					<?php } ?>
                    <div class="md-item-content">
                        <span class="md-date"><strong><?php echo get_the_date(); ?></strong></span>
                        <h4><span><?php echo wp_trim_words(get_the_title(),9,'...'); ?></span><a href="<?php the_permalink(); ?>">Read Press Release ></a></h4>
                    </div>
                </div>
            </div>

		<?php
		$custom_count += 300;
		endwhile;
	endif;

	echo "||". $count_new;

	wp_reset_postdata();

	die();
}

add_action("wp_ajax_nopriv_get_articles","get_articles");
add_action("wp_ajax_get_articles","get_articles");





add_action('wp_ajax_coverage_show_more', 'coverage_show_more');
add_action('wp_ajax_nopriv_coverage_show_more', 'coverage_show_more');
function coverage_show_more() {
	// validate the nonce
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'coverage_field_nonce')) {
		exit;
	}
	// make sure we have the other values
	if (!isset($_POST['post_id']) || !isset($_POST['coverageoffset'])) {
		return;
	}
	$show = 4; // how many more to show
	$start = $_POST['coverageoffset'];
	$end = $start+$show;
	$post_id = $_POST['post_id'];
	// use an object buffer to capture the html output
	// alternately you could create a varaible like $html
	// and add the content to this string, but I find
	// object buffers make the code easier to work with
	ob_start();
	if (have_rows('add_coverage_articles', $post_id)) {
		$coveragetotal = count(get_field('add_coverage_articles', $post_id));
		$coveragecount = 0;
		$custom_count = 300;
		while (have_rows('add_coverage_articles', $post_id)) {
			the_row();
			if ($coveragecount < $start) {
				// we have not gotten to where
				// we need to start showing
				// increment count and continue
				$coveragecount++;
				continue;
			} 
				$carticleimg = get_sub_field('article_image');
				$carticlename = get_sub_field('article_name');
				$carticledate = get_sub_field('article_date');
				$carticlelink = get_sub_field('article_link');
				$carticlepub = get_sub_field('publication');

				if($carticlename && $carticlelink){ ?>

					<div class="media-postitem animate animate-query-<?php echo $custom_count; ?>">
						<div class="d-flex">
							<div class="md-item-logo">
								<?php if( !empty( $carticleimg ) ): ?>
								<img src="<?php echo esc_url($carticleimg['url']); ?>" alt="<?php echo esc_attr($carticleimg['alt']); ?>" />
								<?php endif; ?>
							</div>
							<div class="md-item-content">
								<?php if( !empty( $carticledate ) ): ?><span class="md-date"><strong><?php echo $carticledate; ?></strong></span><?php endif; ?>
								<p><?php echo $carticlepub; ?></p>
								<h4><span><?php echo $carticlename; ?></span><a href="<?php echo $carticlelink; ?>" target="_blank">Read Article ></a></h4>
							</div>
						</div>
					</div> 
				<?php }
				$coveragecount++;
				if ($coveragecount == $end) {
					// we've shown the number, break out of loop
					break;
				}
			$custom_count += 300;
		} // end while have rows
	} // end if have rows
	$content = ob_get_clean();
	// check to see if we've shown the last item
	$more = false;
	if ($coveragetotal > $coveragecount) {
		$more = true;
	}
	// output our 3 values as a json encoded array
	echo json_encode(array('content' => $content, 'more' => $more, 'coverageoffset' => $end));
	exit;
} // end function coverage_show_more

add_action('wp_ajax_forcenews_show_more', 'forcenews_show_more');
add_action('wp_ajax_nopriv_forcenews_show_more', 'forcenews_show_more');
function forcenews_show_more() {
	// validate the nonce
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'forcenews_field_nonce')) {
		exit;
	}
	// make sure we have the other values
	if (!isset($_POST['post_id']) || !isset($_POST['forcenewsoffset'])) {
		return;
	}
	$show = 4; // how many more to show
	$start = $_POST['forcenewsoffset'];
	$end = $start+$show;
	$post_id = $_POST['post_id'];
	// use an object buffer to capture the html output
	// alternately you could create a varaible like $html
	// and add the content to this string, but I find
	// object buffers make the code easier to work with
	ob_start();
	if (have_rows('add_force_news_articles', $post_id)) {
		$forcenewstotal = count(get_field('add_force_news_articles', $post_id));
		$forcenewscount = 0;
		$custom_count = 300;
		while (have_rows('add_force_news_articles', $post_id)) {
			the_row();
			if ($forcenewscount < $start) {
				// we have not gotten to where
				// we need to start showing
				// increment count and continue
				$forcenewscount++;
				continue;
			} 
				$farticleimg = get_sub_field('fnarticle_image');
				$farticlename = get_sub_field('fnarticle_name');
				$farticledate = get_sub_field('fnarticle_date');
				$farticlelink = get_sub_field('fnarticle_link'); 
				$farticlepub = get_sub_field('publication');

				if($farticlename){ ?>

					<div class="media-postitem animate animate-query-<?php echo $custom_count; ?>">
						<div class="d-flex">
							<div class="md-item-logo">
								<?php if( !empty( $farticleimg ) ): ?>
								<img src="<?php echo esc_url($farticleimg['url']); ?>" alt="<?php echo esc_attr($farticleimg['alt']); ?>" />
								<?php endif; ?>
							</div>
							<div class="md-item-content">
								<?php if( !empty( $farticledate ) ): ?><span class="md-date"><strong><?php echo $farticledate; ?></strong></span><?php endif; ?>
								<p><?php echo $farticlepub; ?></p>
								<h4><span><?php echo $farticlename; ?></span><?php if($farticlelink){?><a href="<?php echo $farticlelink; ?>" target="_blank">Read Article ></a><?php }?></h4>
							</div>
						</div>
					</div> 
				<?php }
				$forcenewscount++;
				if ($forcenewscount == $end) {
					// we've shown the number, break out of loop
					break;
				}
			$custom_count += 300;
		} // end while have rows
	} // end if have rows
	$content = ob_get_clean();
	// check to see if we've shown the last item
	$more = false;
	if ($forcenewstotal > $forcenewscount) {
		$more = true;
	}
	// output our 3 values as a json encoded array
	echo json_encode(array('content' => $content, 'more' => $more, 'forcenewsoffset' => $end));
	exit;
} // end function forcenews_show_more



// Load more for Invest
function get_articles_invest() {

 $offset = $_POST['offset'];
 $post_type = $_POST['post_type'];
 $np = $_POST['number_of_post'];
 $total_post = $_POST['total_post'];
 $s = $_POST['search_para'];
 $c = $_POST['cat_id'];

 $args = array(
	    'hide_empty'     => 1,
	    'offset' => $offset,
	    'posts_per_page' =>$np,
	    'post_type'      => $post_type,
	    'post_status'=>'publish',
	    'orderby'   => 'date',
		'order'     => 'DESC',
	);

	if(isset($s) && !empty($s)) $args['s'] =  $s;
	if(isset($c) &&  $c !="")         $args['cat'] = $c;

	$st =  query_posts($args);
	$count = $offset+count($st);
	$count_new = 0;

	if($count < $total_post) {
		$count_new = 1;
	}

	if ( have_posts() ) :
		$i=1;

		while (have_posts()) :
			the_post(); ?>

			<div class="media-postitem animate">
                <div class="d-flex">
                    <div class="md-item-content">
                        <span class="md-date"><strong><?php echo get_the_date(); ?></strong></span>
                        <h3><span><?php echo wp_trim_words(get_the_title(),6,'...'); ?></span></h3>
                        <p><?php echo wp_trim_words(get_the_content(),40,'...'); ?> <a href="<?php the_permalink(); ?>">Read Article ></a></p>                        
                    </div>
                </div>
            </div>

		<?php
		endwhile;
	endif;

	echo "||". $count_new;

	wp_reset_postdata();

	die();
}

add_action("wp_ajax_nopriv_get_articles_invest","get_articles_invest");
add_action("wp_ajax_get_articles_invest","get_articles_invest");

		
// Load more for events
function get_articles_events() {
 
 $offset1 = $_POST['offset'];
 $post_type = $_POST['post_type1'];
 $np = $_POST['number_of_post1'];
 $total_post = $_POST['total_post1'];
 $s = $_POST['search_para1'];
 $c = $_POST['cat_id1'];
 $today = date('Ymd');
 $args1 = array(
	    'hide_empty'     => 1,
	    'offset' => $offset1,
	    'posts_per_page' =>$np,
	    'post_type'      => $post_type,
	    'post_status'=>'publish',
	);
	
	if(isset($s) && !empty($s)) $args1['s'] =  $s;
	if(isset($c) &&  $c !="")         $args1['cat'] = $c;

	$st =  query_posts($args1);
	
	$count = $offset1+count($st);
	$count_new = 0;


	if($count < $total_post) {
		$count_new = 1;
	}

	if ( have_posts() ) :
		$i=1;

		while (have_posts()) :
			the_post(); ?>

			<div class="upcoming-events">
                <div class="d-flex">
                   <div class="event-content">
                    <?php 
                     $date_string = get_field('event_date');
                    $date = DateTime::createFromFormat('Ymd', $date_string);
                    ?>
                      <p class="events-date-custom"><?php echo $date->format('F jS, Y'); ?></p>
                       <h3><?php the_title(); ?></h3>
                       <ul>
                          <?php
                            if( have_rows('links_repeater') ):
                                while ( have_rows('links_repeater') ) : the_row(); ?>                                                   
                                <li>
                                   <?php 
                                    $link = get_sub_field('link_item');
                                    if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>                                                
                                </li>
                            <?php endwhile;
                            endif;
                            ?>
                       </ul>
                   </div>
                </div>
            </div>

		<?php
		endwhile;
	endif;

	echo "||". $count_new;

	wp_reset_postdata();

	die();
}

add_action("wp_ajax_nopriv_get_articles_events","get_articles_events");
add_action("wp_ajax_get_articles_events","get_articles_events");

		
add_action('wp_ajax_fillings_show_more', 'fillings_show_more');
add_action('wp_ajax_nopriv_fillings_show_more', 'fillings_show_more');
function fillings_show_more() {
	// validate the nonce
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'fillings_field_nonce')) {
		exit;
	}
	// make sure we have the other values
	if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
		return;
	}
	$show = 10; // how many more to show
	$start = $_POST['offset'];
	$end = $start+$show;
	$post_id = $_POST['post_id'];
	// use an object buffer to capture the html output
	// alternately you could create a varaible like $html
	// and add the content to this string, but I find
	// object buffers make the code easier to work with
	ob_start();
	if (have_rows('sec_filings_repeater', $post_id)) {
		$coveragetotal = count(get_field('sec_filings_repeater', $post_id));
		$count = 0;
		while (have_rows('sec_filings_repeater', $post_id)) {
			the_row();
			if ($count < $start) {
				// we have not gotten to where
				// we need to start showing
				// increment count and continue
				$count++;
				continue;
			} ?>
				<tr>
                          <td data-column="Date"><?php if(get_sub_field('sec_filings_date')){ ?><?php the_sub_field('sec_filings_date') ?><?php }else{ ?> - <?php } ?></td>
                          <td data-column="Type"><?php if(get_sub_field('sec_filings_type')){ ?><?php the_sub_field('sec_filings_type') ?><?php }else{ ?> - <?php } ?></td>
                          <td data-column="Filling Discription"><?php if(get_sub_field('sec_filings_description')){ ?><?php the_sub_field('sec_filings_description') ?><?php }else{ ?> - <?php } ?></td>
                          <td data-column="View">
                              <a target="_blank" href="<?php the_sub_field('view_url') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/world.png" alt=""></a>
                              <a target="_blank" href="<?php the_sub_field('sec_fillings_upload_docs') ?>" class="<?php if(!get_sub_field('sec_fillings_upload_docs')){ ?> no-link-td <?php } ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/file.png " alt=""></a>
                          </td>
                        </tr>
				<?php $count++;
				if ($count == $end) {
					// we've shown the number, break out of loop
					break;
				}
		} // end while have rows
	} // end if have rows
	$content = ob_get_clean();
	// check to see if we've shown the last item
	$more = false;
	if ($coveragetotal > $count) {
		$more = true;
	}
	// output our 3 values as a json encoded array
	echo json_encode(array('content' => $content, 'more' => $more, 'offset' => $end));
	exit;
} // end function coverage_show_more


function gioga_add_async_attribute($tag, $handle) {
	if ( 'twentytwenty-js' == $handle){
		return str_replace( ' src', ' async src', $tag );
	}else{
		return $tag;
	}
}
add_filter('script_loader_tag', 'gioga_add_async_attribute', 10, 2);



// Change value text
function world_text_strings( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Events' :
			$translated_text = __( 'Sales Events', 'the-events-calendar' );
		break;
	}
	return $translated_text;
}
add_filter( 'gettext', 'world_text_strings', 20, 3 );


// Add CPT
function medd_cpt_taxonomy() {  
    // Register CPT job
    register_post_type( 'job',
        array(
            'labels' => array(
                'name' => __( 'Jobs' ),
                'singular_name' => __( 'Job' ),
                'add_new_item'  => __( 'Add a Job' ),
                'add_new'       => __( 'Add Job' ),
                'edit_item'     => __( 'Edit News Job' ),
            ),
            'public'              => true,
            'has_archive'         => true,
            'supports'            => array( 'editor','title' ,'thumbnail', 'custom-fields', 'page-attributes', 'excerpt', 'comments' )
        )
    );
    // create a new taxonomy
    register_taxonomy('properties_category', 
        'job',
            array(  
            'hierarchical' => true,  
            'label' => 'Jobs Category',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'job', // This controls the base slug that will display before each term
                'with_front' => false, // Don't display the category base before 
            )
        )
    );
    // End Register CPT job and taxonomy
}      
add_action( 'init', 'medd_cpt_taxonomy');


function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Footer col 1', 'your-theme-domain' ),
            'id' => 'footer-side-bar-1',
            'description' => __( 'Footer 1', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
	register_sidebar(
        array (
            'name' => __( 'Footer col 2', 'your-theme-domain' ),
            'id' => 'footer-side-bar-2',
            'description' => __( 'Footer 1', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
	register_sidebar(
        array (
            'name' => __( 'Footer col 3', 'your-theme-domain' ),
            'id' => 'footer-side-bar-3',
            'description' => __( 'Footer 3', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );


add_shortcode( 'social_link', 'list_redsocial_shortcode' );

function list_redsocial_shortcode() {
	ob_start();
	?>
		<div class="footer-social-link">
			<ul>
				<?php
				if( have_rows('social_link','option') ):
					while ( have_rows('social_link','option') ) : the_row(); ?>
						<li>
							<a href="<?php the_sub_field('link','option'); ?>" target="_blank"><?php the_sub_field('icon','option'); ?></a>
						</li>
					<?php endwhile;
				endif;
				?>
			</ul>
		</div>

	<?php
	return ob_get_clean();
}


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings Welcome Screen',
		'menu_title'	=> 'Theme Settings Welcome Screen',
		'menu_slug' 	=> 'theme-general-welcome-screen-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}
