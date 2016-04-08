<?php
/**
 * FAQ Custom Post Type
 *
 * @package     FAQ
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace FAQ;

return array(
	'autoload'       => true,
	'post_type_name' => 'faq',
	'config'         => array(
		'plural_name'   => 'FAQs',
		'singular_name' => 'FAQ',
		'args'          => array(
			'public'     => true,
			'taxonomies' => array( 'faq_category' ),
			'supports'   => array(
				'title',
				'editor',
				'page-attributes',
			),
			'menu_icon'  => 'dashicons-editor-help',
		),
	),
);
