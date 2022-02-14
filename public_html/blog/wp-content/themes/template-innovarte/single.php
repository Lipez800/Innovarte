<?php get_header(); ?>
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">


	<ol>
	  <li>Home</li>
	  <li><?php the_title(); ?></li>
	</ol>

  </div>
</section><!-- End Breadcrumbs -->
<section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#"><?php the_title(); ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                      href="#"><?php the_author() ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                      href="#"><time datetime="<?php the_time('d/M/Y') ?>"><?php the_time('d/M/Y') ?></time></a></li>
                </ul>
              </div>

              <div class="entry-content">
			  <?php the_content(); ?>
              </div>

              <div class="entry-footer clearfix">

              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

			<?php get_sidebar(); ?>
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
</main>
	
<?php get_footer(); ?>