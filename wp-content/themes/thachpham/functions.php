<?php
/*khai bao hang gia tri
	@THEME_URL
	@CORE
*/
define('THEME_URL', get_stylesheet_directory_uri());
define('CORE',THEME_URL."/core");

/**
@Nhung file /core/init.php
**/

require_once(CORE."/init.php");

/**
Thiet lap chieu rong noi dung 
**/
if(!isset($content_width)){
	$content_width = 620;
}

/**
Khai bao chuc nang theme
**/
if (!function_exists('thachpham_theme_setup')) {
	function thachpham_theme_setup() {
		/** thiet lap textdomain */
		$language_folder = THEME_URL.'/languages';
		load_theme_textdomain( 'thachpham', $language_folder );

		/**tu dong them link rss len the head*/
		add_theme_support( 'automatic-feed-links' );

		/**them post thumbnail **/
		add_theme_support( 'post-thumbnails' );

		/** post format  **/
		add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

		/**them title tag**/
		add_theme_support( 'title-tag' );

		/**custom background**/
		add_theme_support( 'custom-background', array('default-color'=> '#7c7c7c'));

		/**them menu**/
		register_nav_menu('primary_menu' ,__('Primary Menu', 'thachpham') );

		/**tao sidebar**/
		register_sidebar( array(
								'name'          => __( 'Main Sidebar', 'thachpham' ),
								'id'            => 'main-sidebar',
								'description'   => __('Default Sidebar'),
							    'class'         => 'main-sidebar',
								//'before_widget' => '<li id="%1$s" class="widget %2$s">',
								//'after_widget'  => '</li>',
								'before_title'  => '<h3 class="widgettitle">',
								'after_title'   => '</h3>' ));
	}

	add_action('init','thachpham_theme_setup');
}

/**thachpham_header**/
if (!function_exists('thachpham_header')) {
	function thachpham_header() { ?>
		<div class="site-name">
			<?php if(is_home()){
			 printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>', get_bloginfo('url'),get_bloginfo('description'),get_bloginfo('name')); 
				} else {
					printf('<h3><a href="%1$s" title="%2$s">%3$s</a></h3>', get_bloginfo('url'),get_bloginfo('description'),get_bloginfo('name')); 
				}

			?> 
		</div>
		<div class="site-description">
			<?php bloginfo('description') ?>
		</div>

		<?php }}

/**lap menu**/
if (!function_exists('thachpham_menu')) {
	function thachpham_menu($menu) { 
		$menu = array(
			'theme_location'=> $menu,
			'container' => 'nav',
			'container_class'=>'$menu'
			);

		wp_nav_menu($menu);
	}}
/**phan trang**/
if (!function_exists('thachpham_pagination')) {
	function thachpham_pagination() {
		if($GLOBALS['wp_query']->max_num_pages < 2) {
			return '';
		} ?>
	
	<nav class="pagination" role="navigation">
		<?php if(get_next_posts_link() ):?>
			<div class="prev">
				<?php next_posts_link(__('Older Post','thachpham')); ?>
			</div>
		<?php endif ?>

		<?php if(get_previous_posts_link() ):?>
			<div class="next">
				<?php previous_posts_link(__('News Post','thachpham')); ?>
			</div>
		<?php endif ?>
	</nav>

<?php
	 }}

/** Hien thi thumbnail */

if (!function_exists('thachpham_thumbnail')) {
	function thachpham_thumbnail($size) { 
		if(!is_single()&&has_post_thumbnail()&&!post_password_required || has_post_format('image')): ?>
		
				<figure class="post-thumbnail">
					<?php the_post_thumbnail($size); ?>
					
				</figure>

		<?php endif;
	}}