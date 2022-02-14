

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

						echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Ver postagens em %s" ), $category->name ) . '" ' . '><i class="fa fa-angle-right"></i> ' . $category->name.'</a> ';
						echo '</li>';  

						}
						?>
                
                
                </ul>

              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Postagens Recentes</h3>
              <div class="sidebar-item recent-posts">
			  <?php 
              $aRecentPosts = new WP_Query("showposts=4&$nposts&cat='$catid'");
              while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
                  global $post; 
                  $categories = get_the_category();
                  $cat = $categories['0']->cat_name;
              ?>

                <div class="post-item clearfix">
                  <img src="<?php the_post_thumbnail_url() ?>" alt="">
                  <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                  <time datetime="<?php the_time('d/m/y') ?>"><?php the_time('d/m/y') ?></time>
                </div>

				<?php endwhile; ?>

              </div><!-- End sidebar recent posts-->

              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->