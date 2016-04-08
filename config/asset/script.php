<?php
/**
 * FAQ script runtime configuration parameters
 *
 * @package     FAQ
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace FAQ;

return array(
	'is_script' => true,
	'handle'    => 'faq_js',
	'config'    => array(
		'file'      => FAQ_PLUGIN_URL . 'assets/js/jquery.plugin.js',
		'deps'      => array( 'jquery', 'fulcrumFAQ_js' ),
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
