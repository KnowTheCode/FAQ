<?php

/**
 * Base Shortcode
 *
 * @package     FAQ\Shortcode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace FAQ\Shortcode;

use Fulcrum\Custom\Shortcode\Shortcode;

abstract class Base extends Shortcode {

	/**************
	 * Helpers
	 *************/

	/**
	 * Get the font icon classname.
	 *
	 * @since 1.0.0
	 *
	 * @param bool $show_open Indicates whether icon should indicate an open position.
	 *
	 * @return string|void
	 */
	protected function get_icon( $show_open = false ) {
		$icon = $show_open ? 'close_icon' : 'open_icon';

		return esc_attr( $this->atts[ $icon ] );
	}
}
