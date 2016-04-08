<?php

/**
 * FAQ Shortcode
 *
 * @package     FAQ\Shortcode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

namespace FAQ\Shortcode;

class FAQ_Shortcode extends Base {

	/**
	 * Build the Shortcode HTML and then return it.
	 *
	 * @since 1.0.0
	 *
	 * @return string Shortcode HTML
	 */
	protected function render() {
		$args = $this->build_args();

		$query = new \WP_Query( $args );
		if ( ! $query->have_posts() ) {
			return '';
		}

		$show_first = $this->atts['show_first'] == 1;
		$is_first   = true;
		$icon       = $this->get_icon( $show_first );

		ob_start();

		$html = sprintf( '<dl%s class="faq%s">', $this->get_id(), $this->get_class() );

		while ( $query->have_posts() ) :
			$query->the_post();

			include( $this->config->view );

			if ( $show_first && $is_first ) {
				$is_first = false;
				$icon     = $this->get_icon();
			}

		endwhile;

		$html .= ob_get_clean();
		$html .= '</dl>';

		wp_reset_postdata();

		return $html;
	}

	/**************
	 * Helpers
	 *************/

	/**
	 * Builds the arguments for the query.
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	protected function build_args() {
		$args = array(
			'post_type' => 'faq',
			'order'     => 'ASC',
			'orderby'   => 'menu_order',
		);

		if ( $this->atts['category'] ) {
			$terms = explode( ',', $this->atts['category'] );

			$args['tax_query'] = array(
				array(
					'taxonomy' => 'faq_category',
					'field'    => 'slug',
					'terms'    => $terms,
				),
			);
		}

		return $args;
	}
}
