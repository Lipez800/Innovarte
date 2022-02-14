<li class="dpsp-network-list-item <?php echo 'dpsp-network-list-item-' . $args['network_slug']; ?>">
	<?php
	echo'<' . $args['tag'] . ' rel="' . $args['rel'] . '" ' . $args['href_attribute'] . ' class="' . $args['button_classes'] . '" target="_blank" aria-label="' . $args['title_attribute'] . '" title="' . $args['title_attribute'] . '">';
	?>
	<span class="dpsp-network-icon <?php echo 'grow' === $args['network_slug'] ? 'dpsp-network-icon-outlined' : ''; ?>">
		<span class="dpsp-network-icon-inner"><?php echo $args['icon_svg']; ?></span>
	</span>
	<?php
	if ( $args['show_labels'] && 'sidebar' !== $args['location'] ) {
		echo '<span class="dpsp-network-label">' . $args['network_label'] . '</span>';
	}
	if ( $args['show_share_counts'] ) {
		echo '<span class="dpsp-network-count">' . $args['network_shares'] . '</span>';
	}
	echo '</' . $args['tag'] . '>';
	if ( $args['show_labels'] && 'sidebar' === $args['location'] ) {
		echo '<span class="dpsp-network-label">' . $args['network_label'] . '</span>';
	}
	?>
</li>
