<?php
/* WIDGETS */

// HABILITANDO IMAGENS DESTACADAS EM POSTS
add_theme_support('post-thumbnails', array('post'));

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'Sidebar',
        'before_widget'	=> '<div class="widget">',
        'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
    ));
}

/* Paginação */
function paginacao() {
	global $wp_query;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	$big = 999999999;

	return paginate_links(
		array(
			'base' => @add_query_arg('paged','%#%'),
			'format' => '?paged=%#%',
			'current' => $current,
			'total' => $wp_query->max_num_pages,
			'prev_next'    => false
		)
	);
}

?>