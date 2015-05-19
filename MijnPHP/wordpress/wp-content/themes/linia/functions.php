<?php




/**********************************************************************************
/* Content Width *
**********************************************************************************/
if ( ! isset( $content_width ) )
	$content_width = 745;




/**********************************************************************************
/* Linia Setup *
**********************************************************************************/
function linia_setup() {
	
	/* Translation */
	load_theme_textdomain( 'linia', get_template_directory() . '/lang' );	

	
	add_theme_support( 'automatic-feed-links' );

	
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

	
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'image', 'quote', 'video'
	) );

	/* Custom Header */
	add_theme_support('custom-header',array(
		'default-image' => get_template_directory_uri().'/img/header-img.png',
		'height' => 250,
		'width' => 1600,
		'flex-width' => true,
		'flex-height' => false,
		'header-text' => false,
		'random-default' => true

		));

	/* Menu */
	register_nav_menus(array(
		'top-menu' => __( 'Top Menu', 'linia' ),
		'mobile-menu' => __('Mobile Top Menu', 'linia')
		));


	/* Thumbnail Size */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 220, 340, true );
	add_image_size( 'image',745, 270, true );


	
}
add_action( 'after_setup_theme', 'linia_setup' );





/**********************************************************************************
/* Load Custom Fonts *
**********************************************************************************/
function linia_fonts_url() {
	$fonts_url = '';

	
	$open_sans = _x( 'on', 'Source Sans Pro font: on or off', 'linia' );

	
	$bitter = _x( 'on', 'Bitter font: on or off', 'linia' );

	if ( 'off' !== $open_sans || 'off' !== $bitter ) {
		$font_families = array();

		if ( 'off' !== $open_sans )
			$font_families[] = 'Open Sans:400italic,600italic,400,300,600,700:latin';

		if ( 'off' !== $bitter )
			$font_families[] = 'Bitter:400,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
	}

	return $fonts_url;
}



/**********************************************************************************
/* Load Jquery Files *
**********************************************************************************/
function linia_scripts_styles() {
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	
	wp_enqueue_script('linia-custom',get_template_directory_uri().'/js/linia-custom.js',array('jquery'),'');

	wp_enqueue_script('linia-html5',get_template_directory_uri().'/js/html5.js',array(),'');

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '' );

	/* Custom font */
	wp_enqueue_style( 'linia-fonts', linia_fonts_url(), array(), null );

	/* Main Stylesheet */
	wp_enqueue_style( 'linia-style', get_stylesheet_uri(), array(), '' );

	
}
add_action( 'wp_enqueue_scripts', 'linia_scripts_styles' );






/**********************************************************************************
/* Title *
**********************************************************************************/
function linia_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;
	
	$title .= get_bloginfo( 'name' );
	
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'linia' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'linia_wp_title', 10, 2 );







/**********************************************************************************
/* Excerpt *
**********************************************************************************/
/* Excerpt Filter */
function linia_excerpt_length( $length ) {
	return 110;
}
add_filter( 'excerpt_length', 'linia_excerpt_length', 999 );



/* Excerpt More */
function new_excerpt_more( $more ) {
	return ' .....';
}
add_filter('excerpt_more', 'new_excerpt_more');





/**********************************************************************************
/* Register Sidebar *
**********************************************************************************/
function linia_widget(){

	register_sidebar(array(
	'id'          => 'sidebar',
    'name'        => __( 'Right Sidebar', 'linia' ),
    'description' => __( 'This sidebar is located right side.', 'linia' ),
    'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2>',
	'after_title'   => '</h2>',
	));

}

add_action('widgets_init','linia_widget');



/**********************************************************************************
/* Paging *
**********************************************************************************/
if ( ! function_exists( 'linia_paging_nav' ) ) :

function linia_paging_nav() {
	global $wp_query;

	
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<div class="pagination clearfix" role="navigation">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="older-posts pull-left"><?php next_posts_link('<i class="fa fa-angle-left fa-2x"></i>'); ?></div>
			<?php endif; ?>

			

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="newer-posts pull-right"><?php previous_posts_link('<i class="fa fa-angle-right fa-2x"></i>'); ?></div>
			<?php endif; ?>

			<?php if(get_query_var('paged')){ ?>
				<div class="query-page">Page : <?php echo get_query_var('paged'); ?></div>
			<?php } ?>
		
	</div><!-- end pagination -->
	<?php
}
endif;





/***********************************************************************************************/
/* Custom Comment Form */
/***********************************************************************************************/
function linia_custom_comment_form($defaults) {
	
	
	$defaults['comment_notes_before'] = '';	
	$defaults['id_form'] = 'comment-form';
	$defaults['comment_field'] = '<p><textarea name="comment" id="comment" class="form-control input-lg" rows="6"></textarea></p>';

	return $defaults;
}

add_filter('comment_form_defaults', 'linia_custom_comment_form');

function linia_custom_comment_fields() {
	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_email');
	$aria_req = ($req ? " aria-required='true'" : '');
	
	$fields = array(
		'author' => '<p>' . 
						'<input id="author" name="author" type="text" class="form-control input-lg" placeholder="Name ( required )" value="' . esc_attr($commenter['comment_author']) . '" ' . $aria_req . ' />' .
						
		            '</p>',
		'email' => '<p>' . 
						'<input id="email" name="email" type="text" class="form-control input-lg" placeholder="Email ( required )" value="' . esc_attr($commenter['comment_author_email']) . '" ' . $aria_req . ' />'  .
		            '</p>',
		'url' => '<p>' . 
						'<input id="url" name="url" type="text" class="form-control input-lg" placeholder="Website" value="' . esc_attr($commenter['comment_author_url']) . '" />'  .
		            '</p>'
	);

	return $fields;
}

add_filter('comment_form_default_fields', 'linia_custom_comment_fields');




/**********************************************************************************
/* Ephemera Widget *
**********************************************************************************/
function linia_widget_init() {

	require get_template_directory() . '/framework/widget.php';
	register_widget( 'Linia_Ephemera_Widget' );	

}

add_action( 'widgets_init', 'linia_widget_init' );