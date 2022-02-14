		<div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Pesquisar no blog">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3>Categoria</h3>
              <ul class="categories">
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
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Popular Articles</h3>
              <?php while ( have_posts() ) : the_post(); ?>


              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php the_time('d M') ?></a></div>
                    <div><a href="#"><span class="icon-person"></span><?php the_author() ?></a></div>
                    
                  </div>
                </div>
              </div>
              <?php endwhile; ?>

            </div>
            
            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <ul class="tagcloud m-0 p-0">
                <a href="#" class="tag-cloud-link">Contabilidade</a>
                <a href="#" class="tag-cloud-link">Contabil</a>
                <a href="#" class="tag-cloud-link">Finanças</a>
                <a href="#" class="tag-cloud-link">Empresa</a>
                <a href="#" class="tag-cloud-link">Home Office</a>
                <a href="#" class="tag-cloud-link">Kindergarten</a>
                <a href="#" class="tag-cloud-link">Teacher</a>
              </ul>
            </div>

       

          </div><!-- END COL -->