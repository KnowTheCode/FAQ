<?php
/**
 * Minimized Fulcrum FAQ build runtime configuration parameters
 *
 * @package     FAQ
 * @since       1.0.1
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace FAQ;

return array(
	'is_script' => true,
	'handle'    => 'fulcrum_faq_js',
	'config'    => array(
		'file'      => FAQ_PLUGIN_URL . 'assets/build/jquery.plugin.min.js',
		'deps'      => array( 'jquery' ),
		'version'   => Plugin::VERSION,
		'in_footer' => true,
		'localize'  => array(
			'params'      => array(
				'faq' => array(
					'iconEl'        => '.faq-icon',
					'iconClassname' => array(
						'open'  => 'fa-chevron-down',
						'close' => 'fa-chevron-up',
					),
				),
				'qa' => array(
					'iconEl'        => '.qa-icon',
					'iconClassname' => array(
						'open'  => 'fa-chevron-down',
						'close' => 'fa-chevron-up',
					),
				),
			),
			'js_var_name' => 'faqParameters',
		),
	),
);
