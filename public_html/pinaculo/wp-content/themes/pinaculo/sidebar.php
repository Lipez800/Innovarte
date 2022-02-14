<div class="col-lg-4">
    <div class="blog_right_sidebar">

        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Categoria</h4>
            <ul class="list cat-list">
                
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
      </aside>

      <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Posts Recentes</h3>



        <?php 
        $aRecentPosts = new WP_Query("showposts=4&$nposts&cat='$catid'");
        while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
          global $post; 
          
          ?>

          <style type="text/css">
              .post_item img {
                width: 40%;
                padding: 10px;
            }
        </style>

        <div class="media post_item">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="post">
            <div class="media-body">
                <a href="<?php the_permalink() ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php the_time('d/m/y') ?></p>
            </div>
        </div>

    <?php endwhile; ?>
    
</aside>
</div>
</div>