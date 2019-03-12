<?php
/**
@ Khai bao hang gia tri
	@ THEME_URL = lay duong dan thu muc theme
	@ CORE = lay duong dan cua thu muc /core
**/
define( 'THEME_URL', get_stylesheet_directory() );
define ( 'CORE', THEME_URL . "/core" );
/**
@ Nhung file /core/init.php
**/
require_once( CORE . "/init.php" );

/**
@ Thiet lap chieu rong noi dung
**/
if ( !isset($content_width) ) {
	$content_width = 620;
}

/**
@ Khai bao chuc nang cua theme
**/
if ( !function_exists('wp_theme_setup') ) {
	function wp_theme_setup() {

		/* Thiet lap textdomain */
		$language_folder = THEME_URL . '/languages';
		load_theme_textdomain( 'wp', $language_folder );
		/* Tu dong them link RSS len <head> **/
		add_theme_support( 'automatic-feed-links' );

		/* Them post thumbnail */
		add_theme_support( 'post-thumbnails' );

		/* Post Format */
		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'
		) );

		/* Them title-tag */
		add_theme_support( 'title-tag' );

		/* Them custom background */
		$default_background = array(
			'default-color' => '#e8e8e8'
		);
		add_theme_support( 'custom-background', $default_background );

		/* Them menu */
		register_nav_menu( 'primary-menu', __('Primary Menu', 'wp') );

		/* Tao sidebar */
		$sidebar = array(
			'name' => __('Main Sidebar', 'wp'),
			'id' => 'main-sidebar',
			'description' => __('Default sidebar'),
			'class' => 'main-sidebar',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		);
		register_sidebar( $sidebar );

	}
	add_action( 'init', 'wp_theme_setup' );
}


/*--------
TEMPLATE FUNCTIONS */
if (!function_exists('wp_header')) {
	function wp_header() { ?>
		<div class="site-name">
			<?php
				global $tp_options;

				if( $tp_options['logo-on'] == 0 ) :
			?>
				<?php
					if ( is_home() ) {
						printf( '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
						get_bloginfo('url'),
						get_bloginfo('description'),
						get_bloginfo('sitename') );
					} else {
						printf( '<p><a href="%1$s" title="%2$s">%3$s</a></p>',
						get_bloginfo('url'),
						get_bloginfo('description'),
						get_bloginfo('sitename') );
					}
				?>

			<?php
				else :
			?>
				<img src="<?php echo $tp_options['logo-image']['url']; ?>" />
		<?php endif; ?>
		</div>
		<div class="site-description"><?php bloginfo('description'); ?></div><?php
	}
}

/**
Thiet lap menu
**/
if ( !function_exists('wp_menu') ) {
	function wp_menu($menu) {
		$menu = array(
			'theme_location' => $menu,
			'container' => 'nav',
			'container_class' => $menu,
			'items_wrap' => '<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>'
		);
		wp_nav_menu( $menu );
	}
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/**
Ham tao phan trang don gian
**/
if ( !function_exists('wp_pagination') ) {
	function wp_pagination() {
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return '';
		} ?>
		<nav class="pagination" role="navigation">
			<?php if ( get_next_posts_link() ) : ?>
				<div class="next"><?php next_posts_link( __('Next', 'wp') ); ?></div>
			<?php endif; ?>
			<?php if ( get_previous_posts_link() ) : ?>
				<div class="prev"><?php previous_posts_link( __('Previous', 'wp') ); ?></div>
			<?php endif; ?>
		</nav>
	<?php }
}

/**
Ham hien thi thumbnail
**/
if ( !function_exists('wp_thumbnail') ) {
	function wp_thumbnail($size) {
		if( !is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
		<figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure>
	<?php endif; ?>
	<?php }
}

/**
wp_entry_header = hien thi tieu de post
**/
if ( !function_exists('wp_entry_header') ) {
	function wp_entry_header() { ?>
		<?php if ( is_single() ) : ?>
			<!-- <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1> -->
			<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php else : ?>
					<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php endif; ?>
	<?php }
}

/**
wp_entry_meta = lay du lieu post
**/
if ( !function_exists('wp_entry_meta') ) {
	function wp_entry_meta() { ?>
		<?php if ( !is_page() ) : ?>
			<div class="entry-meta">
			<?php
				printf( __('<span class="author">Posted by %1$s', 'wp'),
				get_the_author() );

				printf( __('<span class="date-published"> at %1$s', 'wp'),
				get_the_date() );

				printf( __('<span class="category"> in %1$s ', 'wp'),
				get_the_category_list( ',' ) );

				if ( comments_open() ) :
					echo '<span class="meta-reply">';
						comments_popup_link(
							__('Leave a comment', 'wp'),
							__('One comment', 'wp'),
							__('% comments', 'wp'),
							__('Read all comments', 'wp')
							);
					echo '</span>';
				endif;
			?>
			</div>
		<?php endif; ?>
	<?php }
}

/**
wp_entry_content = ham hien thi noi dung cua post/page
**/
if ( !function_exists('wp_entry_content') ) {
	function wp_entry_content() {
		if( !is_single() && !is_page() ) {
			the_excerpt();
		} else {
			the_content();

			/* Phan trang trong single */
			$link_pages = array(
				'before' => __('<p>Page: ', 'wp'),
				'after' => '</p>',
				'nextpagelink' => __('Next Page', 'wp'),
				'previouspagelink' => __('Previous Page', 'wp')
			);
			wp_link_pages( $link_pages );
		}
	}
}

function wp_readmore() {
	return '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">'.__('...[Read More]', 'wp').'</a>';
}
add_filter('excerpt_more', 'wp_readmore');


/**
wp_entry_tag = hien thi tag
**/
if ( !function_exists('wp_entry_tag') ) {
	function wp_entry_tag() {
		if ( has_tag() ) :
			echo '<div class="entry-tag">';
			printf( __('Tagged in %1$s', 'wp'), get_the_tag_list( '', ',' ) );
			echo '</div>';
		endif;
	}
}



/*=====Nhúng file style.css=====*/
function wp_style() {
	// wp_register_style( 'main-stylesheet', get_template_directory_uri() . "/css/main.css", 'all' );
	// wp_enqueue_style('main-stylesheet');
	wp_register_style( 'main-bootstrap', get_template_directory_uri() . "/assets/bootstrap/css/bootstrap.min.css", 'all' );
	wp_enqueue_style('main-bootstrap');
	wp_register_style( 'awesome-icon', get_template_directory_uri() . "/assets/awesome/css/font-awesome.min.css", 'all' );
	wp_enqueue_style('awesome-icon');
	wp_register_style( 'slick-style', get_template_directory_uri() . "/assets/web/assets/css/slick.css", 'all' );
	wp_enqueue_style('slick-style');
	wp_register_style( 'slick-theme-style', get_template_directory_uri() . "/assets/web/assets/css/slick-theme.css", 'all' );
	wp_enqueue_style('slick-theme-style');
	wp_register_style( 'select-2', get_template_directory_uri() . "/assets/web/assets/css/select2.min.css", 'all' );
	wp_enqueue_style('select-2');
	wp_register_style( 'reset-style', get_template_directory_uri() . "/reset.css", 'all' );
	wp_enqueue_style('reset-style');
	wp_register_style( 'main-style', get_template_directory_uri() . "/style.css", 'all' );
	wp_enqueue_style('main-style');

	wp_register_script( 'jquery-script', get_template_directory_uri() . "/assets/web/assets/jquery/jquery.min.js", array('jquery') );
	wp_enqueue_script('jquery-script');
	wp_register_script( 'cookie-script', get_template_directory_uri() . "/assets/web/assets/jquery/jquery.cookie.min.js", array('jquery') );
	wp_enqueue_script('cookie-script');
	wp_register_script( 'popper-script', get_template_directory_uri() . "/assets/web/assets/jquery/popper.min.js", array('jquery') );
	wp_enqueue_script('popper-script');
	wp_register_script( 'bootstrap-script', get_template_directory_uri() . "/assets/web/assets/jquery/bootstrap.min.js", array('jquery') );
	wp_enqueue_script('bootstrap-script');
	wp_register_script( 'select2-script', get_template_directory_uri() . "/assets/web/assets/jquery/select2.min.js", array('jquery') );
	wp_enqueue_script('select2-script');
	wp_register_script( 'slick-script', get_template_directory_uri() . "/assets/web/assets/jquery/slick.js", array('jquery') );
	wp_enqueue_script('slick-script');
}
add_action('wp_enqueue_scripts', 'wp_style');


// create post topic
add_action('init', 'create_post_type');
 
function create_post_type() {
    register_post_type('topic', array(
            'labels' => array(
                'name' => __('Topics'),
                'singular_name' => __('Topics')
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}


// search post
function Jam_SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','Jam_SearchFilter');


if( ! function_exists( 'the_paginate' ) ) :
function the_paginate($args = null) {
	$defaults = array(
		'title'		=> 'Pages',
		'query'		=> null
	);
	$args = wp_parse_args($args, $defaults);
	extract($args, EXTR_SKIP);
	if(is_404()) {
		return;
	}
	$currentPage = null;
	$totalPage = null;
	if(empty($query)) {
		global $wp_query;
		$query = $wp_query;
	}
	
	$currentPage = stheme_get_paged();
	$title .= ':';
	$ppp = intval($query->query['posts_per_page']);
	if($ppp < 1) {
		return;
	}
	$totalPage = intval(ceil($query->found_posts / $ppp));
	if($totalPage <= 1) {
		return;
	}
	$paginateResult = '<div id="sPaginate" class="spaginate paginate"><div class="spaginate-inner paginate-inner"><span class="spaginate-title paginate-title">'.$title.'</span>';
	
	if ($currentPage > 1) {
		$paginateResult .= '<a class="spaginate-prev prev page-item" href="'.get_pagenum_link($currentPage - 1).'">&laquo;</a>';
	}else {
		$paginateResult .= '<a class="spaginate-prev prev page-item" href="javascript:void(0)" disabled="disabled">&laquo;</a>';
	}
	$paginateResult .= the_paginate_list(1, $totalPage, $currentPage);
	if ($currentPage < $totalPage) {
		$paginateResult .= "<a href='" . get_pagenum_link($currentPage + 1) . "' class='spaginate-next next page-item'>&raquo;</a>";
	}else {
		$paginateResult .= "<a href='javascript:void(0)' disabled='disabled' class='spaginate-next next page-item'>&raquo;</a>";
	}
	$paginateResult .= "</div></div>";	
	echo $paginateResult;
}
endif;

if( ! function_exists( 'stheme_paginate' ) ) :
function stheme_paginate($args = null) {
	the_paginate($args);
}
endif;

if( ! function_exists( 'the_paginate_list' ) ) :
function the_paginate_list($intStart, $totalPage, $currentPage) {
	$pageHidden = '<span class="spaginate-hidden hidden">...</span>';
	$linkResult = "";
	$hiddenBefore = false;
	$hiddenAfter = false;
	for ($i = $intStart; $i <= $totalPage; $i++) {
		if($currentPage === intval($i)) {
			$linkResult .= '<span class="spaginate-current page-item current">'.$i.'</span>';
		}
		else if(($i <= 6 && $currentPage < 10) || $i == $totalPage || $i == 1 || $i < 4 || ($i <= 6 && $totalPage <= 6) || ($i > $currentPage && ($i <= ($currentPage + 2))) || ($i < $currentPage && ($i >= ($currentPage - 2))) || ($i >= ($totalPage - 2) && $i < $totalPage)) {
			$linkResult .= '<a class="spaginate-link page-item" href="'.get_pagenum_link($i).'">'.$i.'</a>';
			if($i <= 6 && $currentPage < 10) {
				$hiddenBefore = true;
			}
		}
		else {
			if(!$hiddenBefore) {
				$linkResult .= $pageHidden;
				$hiddenBefore = true;
			}
			else if(!$hiddenAfter && $i > $currentPage) {
				$linkResult .= $pageHidden;
				$hiddenAfter = true;
			}
		}
	}
	return $linkResult;
}
endif;

function stheme_get_paged() {
	$paged = intval(get_query_var('paged')) ? intval(get_query_var('paged')) : 1;
	return $paged;
}
