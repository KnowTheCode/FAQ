<?php
/**
 * FAQ Taxonomy runtime configuration parameters.
 *
 * @package     FAQ
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace FAQ;

return array(
	'autoload'      => true,
	'taxonomy_name' => 'faq_category',
	'object_type'   => array( 'faq' ),
	'config'        => array(
		'plural_name'   => 'Categories',
		'singular_name' => 'Category',
		'args'          => array(
			'description'       => 'Categories for FAQ',
			'hierarchical'      => true,
			'show_admin_column' => true,
		),
	),
);
