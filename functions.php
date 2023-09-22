<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$composer_autoload = __DIR__ . '/vendor/autoload.php';
if ( file_exists($composer_autoload) ) {
	require_once( $composer_autoload );
	$timber = new Timber\Timber();
}

if ( ! class_exists( 'Timber' ) ) {

	add_action( 'admin_notices', function() {
		echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
	});

	add_filter('template_include', function( $template ) {
		return get_stylesheet_directory() . '/static/no-timber.html';
	});
	return;
}

Timber::$dirname = array( 'templates', 'views' );

Timber::$autoescape = false;

class StarterSite extends Timber\Site {
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'theme_supports' ) );
		add_filter( 'timber/context', array( $this, 'add_to_context' ) );
		add_filter( 'timber/twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
		parent::__construct();
	}
	public function register_post_types() {

	}
	public function register_taxonomies() {

	}

	public function add_to_context( $context ) {
		$context['foo'] = 'bar';
		$context['stuff'] = 'I am a value set in your functions.php file';
		$context['notes'] = 'These values are available everytime you call Timber::context();';
		$context['menu'] = new Timber\Menu();
		$context['site'] = $this;
		return $context;
	}

	public function theme_supports() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support(
			'html5', array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		add_theme_support(
			'post-formats', array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			)
		);

		add_theme_support( 'menus' );
	}

	public function myfoo( $text ) {
		$text .= ' bar!';
		return $text;
	}

	public function add_to_twig( $twig ) {
		$twig->addExtension( new Twig_Extension_StringLoader() );
		$twig->addFilter( new Twig_SimpleFilter( 'myfoo', array( $this, 'myfoo' ) ) );
		return $twig;
	}

}

add_theme_support( 'editor-styles' );
add_action('admin_init', 'el_add_editor_styles');

function el_add_editor_styles() {
	add_editor_style( get_template_directory_uri() . '/dist/editor-styles/app.css' );
}

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        
		// register a twin block
		acf_register_block(array(
			'name'              => 'twin',
			'title'             => __('twin'),
			'description'       => __('A custom twin block.'),
			'render_callback'   => 'my_acf_block_render_callback',
			'category'          => 'acf-block',
			'icon'              => "format-gallery",
			'keywords'          => array( 'twin', 'title', 'subtitle', 'text' ),
		));

		// register a vision block
		acf_register_block(array(
			'name'              => 'vision',
			'title'             => __('vision'),
			'description'       => __('A custom vision block.'),
			'render_callback'   => 'my_acf_block_render_callback',
			'category'          => 'acf-block',
			'icon'              => "images-alt2",
			'keywords'          => array( 'vision', 'title', 'subtitle', 'text' ),
		));

		// register a jaw block
		acf_register_block(array(
			'name'              => 'jaw',
			'title'             => __('jaw'),
			'description'       => __('A custom jaw block.'),
			'render_callback'   => 'my_acf_block_render_callback',
			'category'          => 'acf-block',
			'icon'              => "align-full-width",
			'keywords'          => array( 'jaw', 'title', 'text' ),
		));
		
		// register a simple block
		acf_register_block(array(
			'name'              => 'simple',
			'title'             => __('simple'),
			'description'       => __('A custom simple block.'),
			'render_callback'   => 'my_acf_block_render_callback',
			'category'          => 'acf-block',
			'icon'              => "format-image",
			'keywords'          => array( 'simple', 'title', 'subtitle', 'text' ),
		));
		
		// register a gallery block
		acf_register_block(array(
			'name'              => 'gallery',
			'title'             => __('gallery'),
			'description'       => __('A custom gallery block.'),
			'render_callback'   => 'my_acf_block_render_callback',
			'category'          => 'acf-block',
			'icon'              => "layout",
			'keywords'          => array( 'gallery', 'title', 'subtitle', 'text' ),
		));

		// register a quote block
		acf_register_block(array(
			'name'              => 'quote',
			'title'             => __('quote'),
			'description'       => __('A custom quote block.'),
			'render_callback'   => 'my_acf_block_render_callback',
			'category'          => 'acf-block',
			'icon'              => "format-quote",
			'keywords'          => array( 'quote', 'title', 'subtitle', 'text' ),
		));

		// register a twist block
		acf_register_block(array(
			'name'              => 'twist',
			'title'             => __('twist'),
			'description'       => __('A custom twist block.'),
			'render_callback'   => 'my_acf_block_render_callback',
			'category'          => 'acf-block',
			'icon'              => "columns",
			'keywords'          => array( 'twist', 'title', 'subtitle', 'text' ),
		));
    }
}

function my_acf_block_render_callback( $block ) {
    
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    
    // include a template part from within the "acf-block" folder
    if( file_exists( get_theme_file_path("acf-block/{$slug}/{$slug}.php") ) ) {
        include( get_theme_file_path("acf-block/{$slug}/{$slug}.php") );
    }
}

function uniques_allowed_block_types( $allowed_blocks ) {
	return array(
		//  Common blocks category
		'acf/vision',
		'acf/simple',
		'acf/twin',
		'acf/jaw',
		'acf/gallery',
		'acf/quote',
		'acf/twist',

	);
}
add_filter( 'allowed_block_types', 'uniques_allowed_block_types' );

function register_acfblock_category( $categories ) {
	
	$categories[] = array(
		'slug'  => 'acf-block',
		'title' => 'acf-block'
	);

	return $categories;
}

if ( version_compare( get_bloginfo( 'version' ), '5.8', '>=' ) ) {
	add_filter( 'block_categories_all', 'register_acfblock_category' );
} else {
	add_filter( 'block_categories', 'register_acfblock_category' );
}

new StarterSite();
