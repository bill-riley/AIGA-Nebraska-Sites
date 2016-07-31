<?php

/**
 * Hide Dashboard sections not is use
 *
 */

function remove_menus() {
	//remove_menu_page( 'themes.php' );                 // Appearance
	//remove_menu_page( 'edit.php' );                     // Posts
}

// attach
add_action( 'admin_menu', 'remove_menus' );

/**
 * Start WP-login custom logo
 *
 */
function neighborhood_login_logo() { ?>
<style type="text/css">
	body.login div#login h1 a {
		background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/assets_compiled/images/login.png");
		padding-bottom: 0px;
		background-size: 155px;
		background-position: center top;
		background-repeat: no-repeat;
		color: #999;
		height: 155px;
		margin: 0 auto 5px;
		text-decoration: none;
		width: 155px;
		outline: none;
		overflow: hidden;
		display: block;
		pointer-events: none;
	}
</style>
<?php }

// attach
add_action( 'login_enqueue_scripts', 'neighborhood_login_logo' );


add_action('admin_head', 'neighborhood_custom_css');

function neighborhood_custom_css() {
	echo '<style>
		a[href="admin.php?page=theme-general-settings"] .wp-menu-name {
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			padding-right: 10px !important;
		}
	</style>';
}
