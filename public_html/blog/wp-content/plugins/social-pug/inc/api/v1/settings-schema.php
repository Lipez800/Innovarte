<?php

namespace Mediavine\Grow\API\V1\SettingsSchema;

use Mediavine\Grow\API\V1\Partials;

function get_tool_settings() {
	$schema = Partials\get_settings_partials();

	return [
		'active'            => $schema['active'],
		'button_style'      => $schema['button_style'],
		'display'           => [
			'type'        => 'object',
			'description' => esc_html__( 'Display properties of the button', 'mediavine' ),
			'properties'  => Partials\get_partials_by_keys(
				[
					'count_round',
					'custom_color',
					'custom_hover_color',
					'icon_animation',
					'intro_animation',
					'minimum_individual_count',
					'position',
					'column_count',
					'message',
					'screen_size',
					'shape',
					'show_after_scrolling',
					'show_count',
					'show_count_total',
					'show_labels',
					'show_mobile',
					'size',
					'spacing',
					'double_inline_content_markup',
				]
			),
		],
		'networks'          => $schema['networks'],
		'post_type_display' => $schema['post_type_display'],
	];

}
