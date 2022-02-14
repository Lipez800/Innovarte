<?php get_header(); 
/*Template Name: Blog */
?>

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Blog</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">                       
             <div class="blog_left_sidebar">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="<?php the_post_thumbnail_url(); ?>" alt="">
                            <a href="#" class="blog_item_date">
                                <h3><?php the_time('d') ?></h3>
                                <p><?php the_time('M') ?></p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="<?php the_permalink() ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <p><?php the_content(); ?></p>
                            <ul class="blog-info-link">
                                <li><a href="<?php the_permalink() ?>"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                
                            </ul>
                        </div>
                    </article>

                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

            <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                            <i class="ti-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                            <i class="ti-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        
    </div>
    <?php get_sidebar(); ?>
</div>
</div>
</section>
<!--================Blog Area =================-->



<?php get_footer(); ?>