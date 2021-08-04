<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/


/************* INCLUDE NEEDED FILES ***************/

require_once( 'library/navwalker.php' ); // needed for bootstrap navigation

/* library/bones.php (functions specific to BREW)
  - navwalker
  - Redux framework
  - Read more > Bootstrap button
  - Bootstrap style pagination
  - Bootstrap style breadcrumbs
*/
require_once( 'library/brew.php' ); // if you remove this, BREW will break
/*
1. library/bones.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once( 'library/bones.php' ); // if you remove this, bones will break
/*
2. library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
// require_once( 'library/custom-post-type.php' ); // you can disable this if you like
/*
3. library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
// require_once( 'library/admin.php' ); // this comes turned off by default
/*
4. library/translation/translation.php
	- adding support for other languages
*/
// require_once( 'library/translation/translation.php' ); // this comes turned off by default

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
add_image_size( 'post-featured', 750, 300, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar: Posts', 'bonestheme' ),
		'description' => __( 'The sidebar designated for posts.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

  register_sidebar(array(
    'id' => 'sidebar2',
    'name' => __( 'Sidebar: Pages', 'bonestheme' ),
    'description' => __( 'The sidebar designated for pages.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'bonestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!


/************* CUSTOM FUNCTIONS ****************/
// error_reporting(E_ERROR | E_PARSE);

function dynamic_stylesheet() {
  include('library/css/dynamic-style.php');
}
add_action( 'wp_head', 'dynamic_stylesheet', 999 );

/* Convert hexdec color string to rgb(a) string */

function custom_excerpt_length( $length ) {

  if ( is_home() ) {
    return 40;
  } else {
    return 13;
  }

}


add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function register_sidebar_menu() {
  register_nav_menu('sidebar-menu-pages',__( 'Sidebar Menu: Pages' ));
}
add_action( 'init', 'register_sidebar_menu' );
 
function hex2rgba($color, $opacity = false) {
 
  $default = 'rgb(0,0,0)';
 
  //Return default if no color provided
  if(empty($color))
          return $default; 
 
  //Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
          $color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
          if(abs($opacity) > 1)
            $opacity = 1.0;
          $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
          $output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}
 

// Web Developer Permissions - hiding menu items from all other roles
add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {
    global $user_ID;
    if ( !current_user_can( 'web_dev' ) ) {
      remove_menu_page('tools.php'); // Tools
      remove_menu_page( 'wpcf' ); // Types
      remove_menu_page( 'aiowpsec' ); // WP All in One Security       
      remove_menu_page( 'edit.php?post_type=acf-field-group' ); // Advanced Custom Fields      
    }
}

function rebranding_wordpress_logo(){
  global $wp_admin_bar;

     $wp_admin_bar->add_menu( array(
          'parent' => 'wp-logo',
          'id'     => 'sub-menu-id-3',
          'title'  => __('Raindrop Marketing'),
          'href'  => __('http://raindropmarketing.com/'),
  ) );                  
 
}

add_action('wp_before_admin_bar_render', 'rebranding_wordpress_logo' );

function custom_url_admin_logo(){
  return ('http://www.raindropmarketing.com/'); // verander in de url van je website
}
add_filter('login_headerurl', 'custom_url_admin_logo');

// Custom WordPress Login Logo
function login_css() {
  wp_enqueue_style( 'login_css', get_template_directory_uri() . '/library/css/login.css' );
}
add_action('login_head', 'login_css');

function editing_admin_menu() {
    global $menu;
    $url = '/';
    $menu[0] = array( __('Company-logo'), 'read', $url, 'company-logo', 'company-logo');
}
add_action('admin_menu', 'editing_admin_menu');

function backend_admin_style() {
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/library/css/admin_style.css" type="text/css" media="all" />';
}
add_action('admin_head', 'backend_admin_style');

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

}

// Create a new role through cloning a pre-existing role
add_action('init', 'cloneRole');
function cloneRole()
{
    global $wp_roles;
    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    $adm = $wp_roles->get_role('administrator');
    $wp_roles->add_role('web_dev', 'Web Developer', $adm->capabilities);
}



/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix comment-container">
			<div class="comment-author vcard">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<?php // custom gravatar call ?>
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=64" class="load-gravatar avatar avatar-48 photo" height="64" width="64" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
				<?php // end custom gravatar call ?>
			</div>
      <div class="comment-content">
        <?php printf(__( '<cite class="fn">%s</cite>', 'bonestheme' ), get_comment_author_link()) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>
        <?php edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ?>
  			<?php if ($comment->comment_approved == '0') : ?>
  				<div class="alert alert-info">
  					<p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
  				</div>
  			<?php endif; ?>
  			<section class="comment_content clearfix">
  				<?php comment_text() ?>
  			</section>
  			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div> <!-- END comment-content -->
		</article>
	<?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!

function allow_all_tinymce_elements_attributes( $init ) {
  // Allow all elements and all attributes
  $ext = '*[*]';
  // Add to extended_valid_elements if it already exists
  if ( isset( $init['extended_valid_elements'] ) ) {
      $init['extended_valid_elements'] .= ',' . $ext;
  } else {
      $init['extended_valid_elements'] = $ext;
  }

  // return value
  return $init;
}
add_filter('tiny_mce_before_init', 'allow_all_tinymce_elements_attributes');


function override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');

/*************** PINGS LAYOUT **************/

function list_pings( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>
	<li id="comment-<?php comment_ID(); ?>">
		<span class="pingcontent">
			<?php printf(__('<cite class="fn">%s</cite> <span class="says"></span>'), get_comment_author_link()) ?>
			<?php comment_text(); ?>
		</span>
	</li>
<?php } // end list_pings
?>
