<?php
/**
 * FAQ Plugin Runtime Configuration Parameters.
 *
 * @package     FAQ
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace FAQ;

return array(
	'plugin_activation_keys' => array(
		'faq.post_type',
		'faq.categories',
	),
	
	'service_providers' => array(
		/****************************
		 * Live Site Compressed Scripts
		 ****************************/
		'script.fulcrum_faq'     => array(
			'provider' => 'provider.asset',
			'config'   => FAQ_PLUGIN_DIR . 'config/asset/plugin-build.php',
		),

		/****************************
		 * Debug/Local Site Scripts
		 ****************************/
//		'script.faq'     => array(
//			'provider' => 'provider.asset',
//			'config'   => FAQ_PLUGIN_DIR . 'config/asset/script.php',
//		),
//		'script.animatedQA'  => array(
//			'provider' => 'provider.asset',
//			'config'   => FAQ_PLUGIN_DIR . 'config/asset/fulcrumFAQ.php',
//		),

		/****************************
		 * Custom Post Types
		 ****************************/
		'faq.post_type'  => array(
			'provider' => 'provider.post_type',
			'config'   => FAQ_PLUGIN_DIR . 'config/post-type/faq.php',
		),

		/****************************
		 * Taxonomies
		 ****************************/
		'faq.categories' => array(
			'provider' => 'provider.taxonomy',
			'config'   => FAQ_PLUGIN_DIR . 'config/taxonomy/faq-category.php',
		),

		/****************************
		 * Shortcodes
		 ****************************/
		'shortcode.faq'  => array(
			'provider' => 'provider.shortcode',
			'config'   => FAQ_PLUGIN_DIR . 'config/shortcode/faq.php',
		),
		'shortcode.qa'  => array(
			'provider' => 'provider.shortcode',
			'config'   => FAQ_PLUGIN_DIR . 'config/shortcode/qa.php',
		),
	),
);