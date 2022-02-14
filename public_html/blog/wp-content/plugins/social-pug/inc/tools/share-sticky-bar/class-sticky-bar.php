<?php
namespace Mediavine\Grow\Tools;

use Mediavine\Grow\Custom_Color;

class Sticky_Bar extends Tool {
	use Renderable;

	/**
	 * Sticky_Bar constructor. Set metadata and slug.
	 */
	public function init() {
		$this->slug          = 'sticky_bar';
		$this->api_slug      = 'sticky-bar';
		$this->name          = __( 'Sticky Bar', 'social-pug' );
		$this->type          = 'share_tool';
		$this->settings_slug = 'dpsp_location_sticky_bar';
		$this->img           = 'assets/dist/tool-mobile.' . DPSP_VERSION . '.png';
		$this->admin_page    = 'admin.php?page=dpsp-sticky-bar';
		add_filter( 'dpsp_output_inline_style', [ $this, 'inline_styles' ] );
	}

	/**
	 * The rendering action of this tool.
	 *
	 * @return string HTML output of tool
	 */
	public function render() {
		// @TODO Migrate functionality from global function to this class
		$this->has_rendered = true;
		return '';
	}

	/**
	 * Filter styles for inline style output, used for custom color.
	 *
	 * @param string $styles Styles come in
	 * @return string Styles go out
	 */
	public function inline_styles( $styles ) {
		if ( $this->active ) {
			$styles .= Custom_Color::get_style( 'sticky_bar' );
		}

		return $styles;
	}
}
