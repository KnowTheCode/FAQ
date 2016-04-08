<?php

/**
 * FAQ Shortcode - Runtime Configuration Parameters
 *
 * @package     FAQ\Shortcode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace FAQ\Shortcode;

return array(
	'autoload'  => true,
	'classname' => 'FAQ\Shortcode\FAQ_Shortcode',
	'config'    => array(
		'shortcode' => 'faq',
		'view'      => FAQ_PLUGIN_DIR . 'src/shortcode/views/faq.php',
		'defaults'  => array(
			'id'         => '',
			'class'      => '',
			'show_first' => 0,
			'category'   => '',
			'open_icon'  => 'fa fa-chevron-down',
			'close_icon' => 'fa fa-chevron-up',
		),
	),
);
