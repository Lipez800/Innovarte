<?php

use Mediavine\Grow\View_Loader;
use Mediavine\Grow\Networks;

/**
 * Displays the HTML of the plugin admin header.
 */
function dpsp_admin_header() {
	if ( empty( filter_input( INPUT_GET, 'page' ) ) ) {
		return;
	}

	if ( strpos( filter_input( INPUT_GET, 'page' ), 'dpsp' ) === false ) {
		return;
	}

	$page = esc_attr( wp_unslash( trim( filter_input( INPUT_GET, 'page' ) ) ) );

	echo '<div class="dpsp-page-header">';
	echo '<span class="dpsp-logo">';
	echo '<svg version="1.1" class="mv-grow-logo" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 20 20" fill="white" xml:space="preserve">
			<path d="M0 7.2c0 .1-.6 4.7 2 7.2 1.7 1.8 4.3 2 5.9 2h.9A12.7 12.7 0 014.4 14a6.7 6.7 0 01-1.6-2.3c-.3-.9-.5-1.9-.4-3 0-.7.2-1.6.5-2.4h-2l-.7.1-.1.8zM4.7 3.4l-.4.6-.8 1.8 2.4.5 1.3-2c-1-.5-1.7-.7-1.8-.7l-.7-.2z"/>
			<path d="M3.3 11.5c1.1 2.8 4.3 4 5.5 4.4l-.5-.4-.4-.4a10.7 10.7 0 01-2.2-3c-.4-1-.6-1.9-.6-2.8 0-.7.2-1.4.4-2.1l.1-.2.1-.3a10.8 10.8 0 00-2.1-.4h-.3v.4a7.4 7.4 0 000 4.8zM10.6 2.8l-.6-.4-.6.4L8 4.2l2 1.3c.6-.5 1.3-1 2-1.3l-1.4-1.4zM6.5 6.6h.2l1.6 1.1a6.4 6.4 0 011.4-1.9L8 4.8l-.2-.2-.2-.1-.2.2-.1.2c-.4.4-.8 1-1 1.6h.1z"/>
			<path d="M6 7.1v.2a6 6 0 00-.4 2c0 3 2.4 5.4 3.4 6.2l-.3-.5-.2-.6a12.5 12.5 0 01-.8-3.4A7 7 0 018 8.4l.1-.3a6 6 0 00-1.6-1L6.3 7h-.2V7zM15.3 3.5l-.7.1s-.8.2-1.8.7c.5.7 1 1.3 1.3 2l.5-.1a11 11 0 011.9-.4l-.8-1.7-.4-.6zM13.4 6.6l.3-.1-1-1.6-.2-.2-.2-.2-.2.1-.2.1-1.6 1.1.2.2.1.2c.5.4.8 1 1 1.5a6.6 6.6 0 011.8-1.1zM10.3 6.5l-.2-.2-.1-.1-.2.1-.1.2a5.8 5.8 0 00-1 1.6v.1h.1l.2.2c.4.5.7 1.1 1 1.8a7 7 0 011-1.8l.1-.2.2-.2c-.2-.6-.6-1-1-1.5z"/>
			<path d="M8.7 8.9v-.2h-.1l-.2-.2V9h-.1c-.6 2.5.5 5 1 6.1v-.6-.6-1.1l.2-1 .1-.5.1-.4a6.9 6.9 0 00-1-2zM17 6.3h-.4c-.7 0-1.5.2-2.3.4l-.2.1-.3.1h-.2l-.2.2A6 6 0 0012 8l-.2.2-.2.2-.2.2-.1.2c-.5.6-.8 1.3-1 2l-.1.4-.1.3v.2l-.1.5v.2a12 12 0 000 3V16.4h.5l.2.1H12c1.6 0 4.2-.2 6-2 2.5-2.5 1.8-7 1.8-7.3v-.7H19a10.2 10.2 0 00-2-.1zm-.4 6.8c-1.3 1.2-3.3 1.4-4.6 1.4h-.3c0-1.3.1-3.6 1.4-4.9 1.2-1.2 3.3-1.4 4.5-1.4h.4c0 1.2 0 3.5-1.4 4.9z"/>
		  </svg>
		  ';
	echo '<span class="dpsp-logo-inner">Grow Social by Mediavine</span>';
	echo '<small class="dpsp-version">v.' . esc_attr( DPSP_VERSION ) . '</small>';
	echo '</span>';

	echo '<nav>';
	echo '<a href="' . esc_url( dpsp_get_documentation_link( $page ) ) . '" target="_blank"><i class="dashicons dashicons-book"></i>Documentation</a>';
	echo '</nav>';
	echo '</div>';
}

/**
 * Returns the link to the docs depending on the page the user is on.
 *
 * @param $page
 *
 * @return string
 */
function dpsp_get_documentation_link( $page ) {
	$page = str_replace( 'dpsp-', '', $page );

	switch ( $page ) {
		case 'sidebar':
			$url = 'https://help.mediavine.com/en/articles/3625801-how-to-add-social-sharing-buttons-as-a-floating-sidebar';
			break;
		case 'content':
			$url = 'https://help.mediavine.com/en/articles/3667466-how-to-add-social-share-buttons-before-and-after-your-post-s-content';
			break;
		case 'sticky-bar':
		case 'mobile':
			$url = 'https://help.mediavine.com/en/articles/3667616-sticky-bar-sharing-buttons';
			break;
		case 'pinterest-images':
			$url = 'https://help.mediavine.com/en/articles/3667495-how-to-add-a-pin-it-button-to-your-post-s-images';
			break;
		case 'import-export':
		case 'follow-widget':
		case 'pop-up':
		default:
			$url = 'https://help.mediavine.com/en/collections/2071158-grow-by-mediavine';
			break;
	}

	return $url;
}

/**
 * Displays the HTML for a given tool.
 *
 * @param string $tool_slug
 * @param array $tool
 */
function dpsp_output_tool_box( $tool_slug, $tool ) {
	$grow_url     = 'https://marketplace.mediavine.com/grow-social-pro/';
	$is_extension = empty( $tool['admin_page'] );
	$box_class    = Social_Pug::is_free() && ! $is_extension ? 'dpsp-col-3-8' : 'dpsp-col-1-4';
	echo '<div class="' . esc_attr( $box_class ) . '">';
	echo '<div class="dpsp-tool-wrapper dpsp-card ' . ( $is_extension ? 'dpsp-unavailable' : '' ) . '">';

	if ( $is_extension ) {
		if ( empty( $tool['url'] ) ) {
			$tool['url'] = $grow_url;
		}

		echo '<a href="' . esc_url( $tool['url'] ) . '">';
	}

	// Tool image
	echo '<img src="' . esc_url( strpos( $tool['img'], 'http' ) === false ? DPSP_PLUGIN_DIR_URL . $tool['img'] : $tool['img'] ) . '" />';

	if ( $is_extension ) {
		echo '</a>';
	}

	// Tool name
	echo '<h4 class="dpsp-tool-name">' . esc_html( $tool['name'] ) . '</h4>';

	if ( ! empty( $tool['desc'] ) ) {
		echo '<p class="dpsp-description">' . esc_html( $tool['desc'] ) . '</p>';
	}

	$tool_active = dpsp_is_tool_active( $tool_slug );

	// Tool actions
	echo '<div class="dpsp-tool-actions dpsp-card-footer dpsp-' . ( (bool) $tool_active ? 'active' : 'inactive' ) . '">';

	if ( ! $is_extension ) {
		// Tool admin page
		echo '<a class="dpsp-tool-settings" href="' . esc_url( admin_url( $tool['admin_page'] ) ) . '"><i class="dashicons dashicons-admin-generic"></i>' . esc_html__( 'Settings', 'social-pug' ) . '</a>';

		// Tool activation switch
		echo '<div class="dpsp-switch small">';

		echo( (bool) $tool_active ? '<span>' . esc_html__( 'Active', 'social-pug' ) . '</span>' : '<span>' . esc_html__( 'Inactive', 'social-pug' ) . '</span>' );

		echo '<input id="dpsp-' . esc_attr( $tool_slug ) . '-active" data-tool="' . esc_attr( $tool_slug ) . '" data-tool-activation="' . esc_attr( ! empty( $tool['activation_setting'] ) ? $tool['activation_setting'] : '' ) . '" class="cmn-toggle cmn-toggle-round" type="checkbox" value="1"' . ( $tool_active ? 'checked' : '' ) . ' />';
		echo '<label for="dpsp-' . esc_attr( $tool_slug ) . '-active"></label>';

		echo '</div>';
	} else {
		if ( empty( $tool['url'] ) ) {
			$tool['url'] = $grow_url;
		}

		echo '<a href="' . esc_url( $tool['url'] ) . '" class="dpsp-button-primary">' . esc_html__( 'Learn More', 'social-pug' ) . '</a>';

	}
	echo '</div>';

	echo '</div>';
	echo '</div>';
}

/**
 * Function that displays the HTML for a settings field.
 *
 * @param $type
 * @param $name
 * @param string $saved_value
 * @param string $label
 * @param array $options
 * @param string $tooltip
 * @param array $editor_settings
 * @param string $disabled
 */
function dpsp_settings_field( $type, $name, $saved_value = '', $label = '', $options = [], $tooltip = '', $editor_settings = [], $disabled = '' ) {

	$settings_field_slug = ( ! empty( $label ) ? strtolower( str_replace( ' ', '-', $label ) ) : '' );

	echo '<div class="dpsp-setting-field-wrapper dpsp-setting-field-' . esc_attr( $type ) . ( is_array( $options ) && count( $options ) === 1 ? ' dpsp-single' : ( is_array( $options ) && count( $options ) > 1 ? ' dpsp-multiple' : '' ) ) . ' ' . ( ! empty( $label ) ? 'dpsp-has-field-label dpsp-setting-field-' . esc_attr( $settings_field_slug ) : '' ) . '">';

	switch ( $type ) {
		// Display input type text
		case 'text':
			echo ! empty( $label ) ? '<label for="' . esc_attr( $name ) . '" class="dpsp-setting-field-label">' . esc_attr( $label ) . '</label>' : '';
			echo '<input type="text" ' . ( isset( $label ) ? 'id="' . esc_attr( $name ) . '"' : '' ) . ' name="' . esc_attr( $name ) . '" value="' . esc_attr( $saved_value ) . '" ' . esc_attr( $disabled ) . ' />'; // @todo WordPress' disabled() function should be used instead
			break;

		// Display textareas
		case 'textarea':
			echo ! empty( $label ) ? '<label for="' . esc_attr( $name ) . '" class="dpsp-setting-field-label">' . esc_attr( $label ) . '</label>' : '';
			echo '<textarea ' . ( isset( $label ) ? 'id="' . esc_attr( $name ) . '"' : '' ) . ' name="' . esc_attr( $name ) . '">' . esc_attr( $saved_value ) . '</textarea>';
			break;

		// Display wp_editors
		case 'editor':
			echo ! empty( $label ) ? '<label for="' . esc_attr( $name ) . '" class="dpsp-setting-field-label">' . esc_attr( $label ) . '</label>' : '';
			wp_editor( $saved_value, $name, $editor_settings );
			break;

		// Display input type radio
		case 'radio':
			echo ! empty( $label ) ? '<label class="dpsp-setting-field-label">' . esc_attr( $label ) . '</label>' : '';
			if ( ! empty( $options ) ) {
				foreach ( $options as $option_value => $option_name ) {
					echo '<input type="radio" id="' . esc_attr( $name ) . '[' . esc_attr( $option_value ) . ']' . '" name="' . esc_attr( $name ) . '" value="' . esc_attr( $option_value ) . '" ' . checked( $option_value, $saved_value, false ) . ' />';
					echo '<label for="' . esc_attr( $name ) . '[' . esc_attr( $option_value ) . ']' . '" class="dpsp-settings-field-radio">' . ( isset( $option_name ) ? esc_attr( $option_name ) : esc_attr( $option_value ) ) . '<span></span></label>';
				}
			}
			break;

		// Display input type checkbox
		case 'checkbox':
			// If no options are passed make the main label as the label for the checkbox
			if ( count( $options ) === 1 ) {
				if ( is_array( $saved_value ) ) {
					$saved_value = $saved_value[0];
				}
				echo '<input type="checkbox" ' . ( isset( $label ) ? 'id="' . esc_attr( $name ) . '"' : '' ) . ' name="' . esc_attr( $name ) . '" value="' . esc_attr( $options[0] ) . '" ' . checked( $options[0], $saved_value, false ) . ' />';
				echo ! empty( $label ) ? '<label for="' . esc_attr( $name ) . '" class="dpsp-setting-field-label">' . esc_attr( $label ) . '<span></span></label>' : '';

				// Else display checkboxes just like radios
			} else {
				echo ! empty( $label ) ? '<label class="dpsp-setting-field-label">' . esc_attr( $label ) . '</label>' : '';
				if ( ! empty( $options ) ) {
					foreach ( $options as $option_value => $option_name ) {
						echo '<input type="checkbox" id="' . esc_attr( $name ) . '[' . esc_attr( $option_value ) . ']' . '" name="' . esc_attr( $name ) . '" value="' . esc_attr( $option_value ) . '" ' . ( in_array( $option_value, $saved_value, true ) ? 'checked' : '' ) . ' />';
						echo '<label for="' . esc_attr( $name ) . '[' . esc_attr( $option_value ) . ']' . '" class="dpsp-settings-field-checkbox">' . ( isset( $option_name ) ? esc_attr( $option_name ) : esc_attr( $option_value ) ) . '<span></span></label>';
					}
				}
			}
			break;

		// Display switch
		case 'switch':
			if ( count( $options ) === 1 ) {
				if ( is_array( $saved_value ) ) {
					$saved_value = $saved_value[0];
				}
				echo '<div class="dpsp-switch">';
				echo '<input type="checkbox" ' . ( isset( $label ) ? 'id="' . esc_attr( $name ) . '"' : '' ) . ' name="' . esc_attr( $name ) . '" class="cmn-toggle cmn-toggle-round" value="' . esc_attr( $options[0] ) . '" ' . checked( $options[0], $saved_value, false ) . ' />';
				echo ! empty( $label ) ? '<label for="' . esc_attr( $name ) . '"></label>' : '';
				echo '</div>';
				echo ! empty( $label ) ? '<label for="' . esc_attr( $name ) . '" class="dpsp-setting-field-label">' . esc_attr( $label ) . '<span></span></label>' : '';
			}
			break;

		case 'select':
			echo ! empty( $label ) ? '<label for="' . esc_attr( $name ) . '" class="dpsp-setting-field-label">' . esc_attr( $label ) . '</label>' : '';
			echo '<select id="' . esc_attr( $name ) . '" name="' . esc_attr( $name ) . '"' . esc_attr( $disabled ) . '>';
			foreach ( $options as $option_value => $option_name ) {
				echo '<option value="' . esc_attr( $option_value ) . '" ' . selected( $saved_value, $option_value, false ) . '>' . esc_attr( $option_name ) . '</option>';
			}
			echo '</select>';
			break;

		case 'color-picker':
			echo ! empty( $label ) ? '<label for="' . esc_attr( $name ) . '" class="dpsp-setting-field-label">' . esc_attr( $label ) . '</label>' : '';
			echo '<input class="dpsp-color-picker" type="text" ' . ( isset( $label ) ? 'id="' . esc_attr( $name ) . '"' : '' ) . ' name="' . esc_attr( $name ) . '" value="' . esc_attr( $saved_value ) . '" />';
			break;

		case 'image':
			echo ! empty( $label ) ? '<label for="' . esc_attr( $name ) . '" class="dpsp-setting-field-label">' . esc_attr( $label ) . '</label>' : '';
			echo '<div>';
			if ( ! empty( $saved_value['id'] ) ) {
				$thumb_details = wp_get_attachment_image_src( $saved_value['id'], 'medium' );
				$image_details = wp_get_attachment_image_src( $saved_value['id'], 'full' );
			}
			if ( ! empty( $thumb_details[0] ) && ! empty( $image_details[0] ) ) {
				$thumb_src = $thumb_details[0];
				$image_src = $image_details[0];
			} else {
				$thumb_src         = '';
				$image_src         = '';
				$saved_value['id'] = '';
			}
			echo '<div>';
			echo '<img src="' . esc_attr( $thumb_src ) . '">';
			echo '</div>';
			echo '<a class="dpsp-image-select button button-primary ' . ( ! empty( $saved_value['id'] ) ? 'hidden' : '' ) . '" href="#">' . esc_html__( 'Select Image', 'social-pug' ) . '</a>';
			echo '<a class="dpsp-image-remove button button-secondary ' . ( empty( $saved_value['id'] ) ? 'hidden' : '' ) . '" href="#">' . esc_html__( 'Remove Image', 'social-pug' ) . '</a>';
			echo '<input class="dpsp-image-id" type="hidden" name="' . esc_attr( $name ) . '[id]" value="' . esc_attr( $saved_value['id'] ) . '" />';
			echo '<input class="dpsp-image-src" type="hidden" name="' . esc_attr( $name ) . '[src]" value="' . esc_attr( $image_src ) . '" />';
			echo '</div>';
			break;
	} // end of switch

	// Tooltip
	if ( ! empty( $tooltip ) ) {
		dpsp_output_backend_tooltip( $tooltip );
	}

	do_action( 'dpsp_inner_after_settings_field', $settings_field_slug, $type, $name );
	echo '</div>';
}


/**
 * Set the column_count option to 1 when displaying the buttons inside the WP dashboard admin
 *
 * @param array $settings - the settings array for the current location
 * @param string $action - the current type of action ( share/follow )
 * @param string $location - the display location for the buttons
 *
 * @return array
 */
function dpsp_admin_buttons_display_column_count_to_one( $settings, $action, $location ) {
	if ( empty( $settings['display']['column_count'] ) ) {
		return $settings;
	}
	if ( ! is_admin() ) {
		return $settings;
	}

	$settings['display']['column_count'] = 1;

	return $settings;
}

/**
 * Returns the HTML output with the selectable networks.
 *
 * @param array $networks - the networks available to be sorted
 * @param array $settings_networks - the networks saved for the location
 *
 * @return string
 */
function dpsp_output_selectable_networks( $networks = [], $settings_networks ) {
	$networks_container = Networks::get_instance();
	$output             = '<div id="dpsp-networks-selector-wrapper">';
	$output            .= '<ul id="dpsp-networks-selector">';

	if ( ! empty( $networks ) ) {
		foreach ( $networks as $network_slug => $network_name ) {
			$network = $networks_container->get( $network_slug );
			if ( ! $network ) {
				continue;
			}
			$tooltip = $network->get_tooltip();
			$output .= '<li>';
			$output .= '<div class="dpsp-network-item" data-network="' . $network_slug . '" data-network-name="' . $network->get_name() . '" ' . ( isset( $settings_networks[ $network_slug ] ) ? 'data-checked="true"' : '' ) . '>';
			$output .= '<div class="dpsp-network-item-checkbox dpsp-icon-ok">' . dpsp_get_svg_icon_output( 'ok' ) . '</div>';
			$output .= '<div class="dpsp-network-item-name-wrapper dpsp-network-' . $network_slug . ' dpsp-background-color-network-' . $network_slug . '">';
			$output .= '<span class="dpsp-list-icon dpsp-list-icon-social dpsp-icon-' . $network_slug . ' dpsp-background-color-network-' . $network_slug . '">' . dpsp_get_svg_icon_output( $network_slug ) . '</span>';
			$output .= '<h4>' . $network->get_name() . '</h4>';
			$output .= '</div>';
			if ( ! empty( $tooltip ) ) {
				$output .= dpsp_output_backend_tooltip( $tooltip, true );
			}
			$output .= '</li>';

		}
	}

	$output .= '</ul>';
	$output .= '<div id="dpsp-networks-selector-footer" class="dpsp-card-footer">';
	$output .= '<a href="#" class="dpsp-button-primary">' . esc_html__( 'Apply Selection', 'social-pug' ) . '</a>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;
}


/**
 * Returns the HTML output with the sortable networks.
 *
 * @param $networks
 * @param $settings_name
 *
 * @return string
 */
function dpsp_output_sortable_networks( $networks, $settings_name ) {
	$networks_container = Networks::get_instance();
	$output             = '<ul class="dpsp-social-platforms-sort-list sortable">';
	$current_network    = 1;
	if ( ! empty( $networks ) ) {

		foreach ( $networks as $network_slug => $network_name ) {
			//var_dump($networks[$network_slug]);
			$network = $networks_container->get( $network_slug );
			if ( ! $network ) {
				continue;
			}
			$output .= '<li data-network="' . esc_attr( $network_slug ) . '" ' . ( count( $networks ) === $current_network ? 'class="dpsp-last"' : '' ) . '>';

			// The sort handle
			$output .= '<div class="dpsp-sort-handle"><!-- --></div>';

			// The social network icon
			$output .= '<div class="dpsp-list-icon dpsp-list-icon-social dpsp-icon-' . esc_attr( $network_slug ) . ' dpsp-background-color-network-' . esc_attr( $network_slug ) . '">' . dpsp_get_svg_icon_output( $network_slug ) . '</div>';

			// The label edit field
			$output .= '<div class="dpsp-list-input-wrapper">';
			$output .= '<input type="text" placeholder="' . __( 'This button has no label text.', 'social-pug' ) . '" name="' . esc_attr( $settings_name ) . '[networks][' . $network_slug . '][label]" value="' . ( $networks[ $network_slug ]['label'] ? $networks[ $network_slug ]['label'] : $network->get_label() ) . '" />';
			$output .= '</div>';

			// List item actions
			$output .= '<div class="dpsp-list-actions">';
			$output .= '<a class="dpsp-list-edit-label" href="#"><span class="dashicons dashicons-edit"></span>' . esc_html__( 'Edit Label' ) . '</a>';
			$output .= '<a class="dpsp-list-remove" href="#"><span class="dashicons dashicons-no-alt"></span>' . esc_html__( 'Remove' ) . '</a>';
			$output .= '</div>';
			$output .= '</li>';

			$current_network ++;

		}
	}

	$output .= '</ul>';

	return $output;
}


/**
 * Outputs the HTML of the tooltip
 *
 * @param string tooltip - the text of the tooltip
 * @param bool $return - wether to return or to output the HTML
 *
 * @return string
 */
function dpsp_output_backend_tooltip( $tooltip = '', $return = false ) {
	$output  = '<div class="dpsp-setting-field-tooltip-wrapper ' . ( ( strpos( $tooltip, '</a>' ) !== false ) ? 'dpsp-has-link' : '' ) . '">';
	$output .= '<span class="dpsp-setting-field-tooltip-icon"></span>';
	$output .= '<div class="dpsp-setting-field-tooltip dpsp-transition">' . $tooltip . '</div>';
	$output .= '</div>';

	if ( $return ) {
		return $output;
	} else {
		echo wp_kses( $output, View_Loader::get_allowed_tags() );
	}
}

/**
 * Registers an extra column for the shares with all active custom post types.
 */
function dpsp_register_custom_post_type_columns() {
	$active_post_types = dpsp_get_active_post_types();

	if ( ! empty( $active_post_types ) ) {
		foreach ( $active_post_types as $post_type ) {
			add_filter( 'manage_' . $post_type . '_posts_columns', 'dpsp_set_shares_column' );
			add_filter( 'manage_edit-' . $post_type . '_sortable_columns', 'dpsp_set_shares_column_sortable' );
			add_action( 'manage_' . $post_type . '_posts_custom_column', 'dpsp_output_shares_column', 10, 2 );
		}
	}
}

/**
 * Adds the Shares column to all active post types.
 *
 * @param array $columns
 *
 * @return array
 */
function dpsp_set_shares_column( $columns ) {
	$column_output = '<span class="dpsp-list-table-shares"><i class="dashicons dashicons-share"></i><span>' . __( 'Shares', 'social-pug' ) . '</span></span>';

	if ( isset( $columns['date'] ) ) {
		$array = array_slice( $columns, 0, array_search( 'date', array_keys( $columns ), true ) );

		$array['dpsp_shares'] = $column_output;

		$columns = array_merge( $array, $columns );
	} else {
		$columns['dpsp_shares'] = $column_output;
	}

	return $columns;
}

/**
 * Defines the total shares column as sortable.
 *
 * @param array $columns
 *
 * @return array
 */
function dpsp_set_shares_column_sortable( $columns ) {
	$columns['dpsp_shares'] = 'dpsp_shares';

	return $columns;
}

/**
 * Outputs the share counts in the Shares columns.
 *
 * @param string $column_name
 * @param int $post_id
 */
function dpsp_output_shares_column( $column_name, $post_id ) {
	if ( 'dpsp_shares' === $column_name ) {
		echo '<span class="dpsp-list-table-post-share-count">' . esc_html( dpsp_get_post_total_share_count( $post_id ) ) . '</span>';
	}
}


/**
 * Check to see if the user selected to order the posts by share counts and changes the query accordingly.
 *
 * @param WP_Query $query
 */
function dpsp_pre_get_posts_shares_query( $query ) {
	if ( ! is_admin() ) {
		return;
	}

	$orderby = $query->get( 'orderby' );
	if ( 'dpsp_shares' === $orderby ) {
		$query->set( 'meta_key', 'dpsp_networks_shares_total' );
		$query->set( 'orderby', 'meta_value_num' );
	}
}

/**
 * Makes a call to Facebook to scrape the post's Open Graph data after the post has been saved.
 *
 * @param int $post_id
 * @param WP_Post $post
 */
function dpsp_save_post_facebook_scrape_url( $post_id, $post ) {
	if ( ! is_admin() ) {
		return;
	}

	/**
	 * Allow 3rd party plugins to add their CPTs to the excluded list
	 *
	 * @param array Array of excluded post types
	 *
	 * @return array
	 */
	$not_allowed_post_types = apply_filters( 'mv_grow_not_allowed_post_types', [ 'nav_menu_item', 'wprm_recipe' ] );
	if ( in_array( $post->post_type, $not_allowed_post_types, true ) ) {
		return;
	}

	$not_allowed_post_statuses = [ 'draft', 'auto-draft', 'future', 'pending', 'trash' ];
	if ( in_array( $post->post_status, $not_allowed_post_statuses, true ) ) {
		return;
	}

	$post_url = get_permalink( $post );
	$post_url = rawurlencode( $post_url );

	$url = add_query_arg(
		[
			'id'     => $post_url,
			'scrape' => 'true',
		],
		'https://graph.facebook.com/'
	);

	$response = wp_remote_post( $url );
}

/**
 * Output settings sidebar — CTA to upgrade to Pro.
 */
function dpsp_add_submenu_page_sidebar() {
	$icon = '<span class="dpsp-dashicons"><span class="dashicons dashicons-yes"></span></span>';
	$url  = 'https://marketplace.mediavine.com/grow-social-pro/?utm_source=plugin&utm_medium=sidebar&utm_campaign=social-pug';

	echo '<div class="dpsp-settings-sidebar">';
	echo '<div id="dpsp-settings-sidebar-social-pug-pro" class="dpsp-card">';
	echo '<div class="dpsp-card-inner">';

	echo '<img data-pin-nopin="true" src="' . esc_url( DPSP_PLUGIN_DIR_URL . 'assets/dist/social-pug-upgrade.' . DPSP_VERSION . '.png' ) . '" />';

	echo '<h3>' . esc_html__( 'Skyrocket your social media marketing', 'social-pug' ) . '</h3>';
	echo '<p>' . wp_kses_post( $icon ) . esc_html__( 'Force a custom image to be shared on Pinterest when using the Pinterest button.', 'social-pug' ) . '</p>';
	echo '<p>' . wp_kses_post( $icon ) . esc_html__( 'Add unlimited hidden Pinterest images to your posts and pages.', 'social-pug' ) . '</p>';
	echo '<p>' . wp_kses_post( $icon ) . esc_html__( 'Add a "Pin It" button that appears when visitors hover your in-post images.', 'social-pug' ) . '</p>';
	echo '<p>' . wp_kses_post( $icon ) . esc_html__( 'Add custom pin descriptions and repin IDs to your in-post images.', 'social-pug' ) . '</p>';
	echo '<p>' . wp_kses_post( $icon ) . esc_html__( "Recover your lost social share counts if you've ever changed your permalink structure.", 'social-pug' ) . '</p>';
	echo '<p>' . wp_kses_post( $icon ) . esc_html__( 'Add unlimited "Click to Tweet" boxes so that your users can share your content on Twitter with just one click.', 'social-pug' ) . '</p>';
	echo '<p>' . wp_kses_post( $icon ) . esc_html__( 'Get immediate help with priority support.', 'social-pug' ) . '</p>';
	echo '<p>' . wp_kses_post( $icon ) . esc_html__( 'And much, much more...', 'social-pug' ) . '</p>';

	echo '</div>';
	echo '<div class="dpsp-card-footer"><a class="dpsp-button-primary" href="' . esc_url( $url ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'social-pug' ) . '</a></div>';
	echo '</div>';
}

/**
 * Register hooks for functions-admin.php.
 */
function dpsp_register_functions_admin() {
	add_action( 'admin_notices', 'dpsp_admin_header', 1 );
	add_filter( 'dpsp_network_buttons_outputter_settings', 'dpsp_admin_buttons_display_column_count_to_one', 10, 3 );
	add_action( 'admin_init', 'dpsp_register_custom_post_type_columns' );
	add_action( 'pre_get_posts', 'dpsp_pre_get_posts_shares_query' );
	add_action( 'save_post', 'dpsp_save_post_facebook_scrape_url', 99, 2 );
}
