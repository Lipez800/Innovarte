<?php
namespace Mediavine\Grow;

class Share_Counts extends \Social_Pug {

	/** @var string WordPress post meta key for the last updated timestamp. */
	public static $last_updated_key = 'dpsp_networks_shares_last_updated';

	/** @var null */
	private static $instance = null;

	/**
	 * @return Share_Counts|\Social_Pug|null
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self;
			self::$instance->init();
		}

		return self::$instance;
	}

	public function init() {
	}

	/**
	 * Set the last updated timestamp to a value very far in the past so that the value will be updated when it is next checked.
	 */
	public static function invalidate_all() {
		$posts = self::get_all_posts_with_counts();
		foreach ( $posts as $post ) {
			\update_post_meta( $post->ID, self::$last_updated_key, 1 );
		}
	}

	/**
	 * Return an array with all posts that have share counts.
	 *
	 * @return \WP_Post[]
	 */
	public static function get_all_posts_with_counts() {
		$args = [
			'meta_query' => [ // @codingStandardsIgnoreLine
				[
					'key'     => self::$last_updated_key,
					'compare' => 'EXISTS',
				],
			],
			// WordPress.VIP.PostsPerPage.posts_per_page_nopaging —
			// Disabling pagination is prohibited in VIP context, do not set `nopaging` to `true` ever.
			// @todo Discussion: would a custom SQL call be faster than using WP_Query?
			'nopaging'   => true, // @codingStandardsIgnoreLine
		];

		return \get_posts( $args );
	}
}
