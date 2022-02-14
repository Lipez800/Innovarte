
	  <div class="col-lg-4">

<div class="sidebar">

  <h3 class="sidebar-title">Buscar</h3>
  <div class="sidebar-item search-form">
	<form action="">
	  <input type="text">
	  <button type="submit"><i class="icofont-search"></i></button>
	</form>

  </div><!-- End sidebar search formn-->

  <h3 class="sidebar-title">Categorias</h3>
  <div class="sidebar-item categories">
	<ul>
	<?php
                $args=array(
                  'orderby' => 'name',
                  'order' => 'ASC'
              );
                $categories=get_categories($args);
                foreach($categories as $category) {

                  echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Ver postagens em %s" ), $category->name ) . '" ' . 'class="d-flex"> ' . $category->name.'</a> ';
                  echo '</li>';  

              }
              ?>
	</ul>

  </div><!-- End sidebar categories-->

  <h3 class="sidebar-title">Postagens Recentes</h3>
  <div class="sidebar-item recent-posts">
	<div class="post-item clearfix">
	  <img src="assets/img/blog-recent-1.jpg" alt="">
	  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
	  <time datetime="2020-01-01">Jan 1, 2020</time>
	</div>

	<div class="post-item clearfix">
	  <img src="assets/img/blog-recent-2.jpg" alt="">
	  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
	  <time datetime="2020-01-01">Jan 1, 2020</time>
	</div>

  </div><!-- End sidebar recent posts-->

  </div><!-- End sidebar tags-->

</div><!-- End sidebar -->

</div><!-- End blog sidebar -->