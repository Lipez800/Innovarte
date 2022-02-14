<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	
<?php endwhile; else: ?>

<?php endif; ?>

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

<section class="blog_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="blog_left_sidebar">
					<article class="blog_item">
					<div class="blog_item_img">
					    <img class="card-img rounded-0" src="<?php echo get_template_directory_uri('<?php the_post_thumbnail_url(); ?>'); ?>/assets/img/blog/single_blog_2.png" alt="">
					</div>

					<div class="blog_details">
					    <a class="d-inline-block" href="single-blog.html">
					        <h2><?php the_title(); ?></h2>
					    </a>
					    <ul class="blog-info-link">
					        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>           
					    </ul>
					        <p><?php the_content(); ?></p>					        					        
					</div>
					</article>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>