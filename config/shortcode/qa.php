<?php

/**
 * QA Shortcode - Runtime Configuration Parameters
 *
 * Use the QA for questions/answers, hints, bios, or any content that you want to show/hide via the click on the mouse.
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
	'classname' => 'FAQ\Shortcode\QA_Shortcode',
	'config'    => array(
		'shortcode' => 'qa',
		'view'      => FAQ_PLUGIN_DIR . 'src/shortcode/views/qa.php',
		'defaults'  => array(
			'id'         => '',
			'class'      => '',
			'question'   => '',
			'open_icon'  => 'fa fa-chevron-down',
			'close_icon' => 'fa fa-chevron-up',
		),
	),
);
