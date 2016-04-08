<?php
/**
 * AnimatedQA Script runtime configuration parameters
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
	'handle'    => 'fulcrumFAQ_js',
	'config'    => array(
		'file'      => FAQ_PLUGIN_URL . 'assets/js/jquery.fulcrumFAQ.js',
		'deps'      => array( 'jquery' ),
		'version'   => '1.0.0',
		'in_footer' => true,
	),
);
