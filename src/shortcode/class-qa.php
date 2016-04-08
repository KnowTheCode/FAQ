<?php

/**
 * QA Shortcode
 *
 * @package     FAQ\Shortcode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace FAQ\Shortcode;

class QA_Shortcode extends Base {

	/**
	 * Build the Shortcode HTML and then return it.
	 *
	 * @since 1.0.0
	 *
	 * @return string Shortcode HTML
	 */
	protected function render() {
		$content = wp_kses_post( $this->content );
		$content = do_shortcode( $this->content );

		ob_start();
		include( $this->config->view );

		return ob_get_clean();
	}
}
