<?php


if (function_exists('get_field')) {

	include 'acf/brand.php'; // Responsible for setting up the brand tab at /wp-admin/admin.php?page=theme-general-settings
	include 'acf/images.php'; // Responsible for extra image settings
	include 'acf/users.php'; // responsible for extending what Information Users have

	if (get_field('enable_page_builder', 'options')) {
		include 'acf/page-content.php'; // Responsible for adding page sections functionality
	}


	include 'acf/seo.php'; // Responsible for adding site-wide SEO features
	include 'acf/sdo.php'; // Responsible for adding site-wide Social Discovery features
	include 'acf/apis.php'; // Responsible for adding site-wide API features
	include 'acf/page-seo_and_sdo.php'; // Responsible for adding page specific SEO & Social Discovery features

	include 'acf/_site.php'; // Responsible for loading site specific ACF

	if (function_exists('acf_add_options_page')) {
		/**
		 * Register settings page
		 */
		function plugin_admin_add_page() {


			acf_add_options_page(array(
				'page_title' 	=> 'Brand',
				'menu_title'	=> get_bloginfo('name'),
				'menu_slug' 	=> 'theme-general-settings',
				'redirect'		=> false,
				'position'		=> -1
				)
			);

			acf_add_options_sub_page(array(
				'page_title' 	=> 'SEO (Search Engine Optimization)',
				'menu_title'	=> 'SEO',
				'parent_slug'	=> 'theme-general-settings',
				)
			);

			acf_add_options_sub_page(array(
				'page_title' 	=> 'SDO (Social Discovery Optimization)',
				'menu_title'	=> 'SDO',
				'parent_slug'	=> 'theme-general-settings',
				)
			);

			acf_add_options_sub_page(array(
				'page_title' 	=> 'Third Party API\'S',
				'menu_title'	=> 'API\'s',
				'parent_slug'	=> 'theme-general-settings',
				)
			);

		}

		add_action('admin_menu', 'plugin_admin_add_page');
	}
}
