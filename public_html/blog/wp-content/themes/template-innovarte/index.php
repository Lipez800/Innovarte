<?php get_header(); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->

	<!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="col-md-6 d-flex align-items-stretch">
                <article class="entry">

                  <div class="entry-img">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                          href="<?php the_permalink() ?>"><?php the_author() ?></a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                          href="<?php the_permalink() ?>"><time datetime="<?php the_time('d/M/Y') ?>">Data</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Texto de descrição da postagem
                    </p>
                    <div class="read-more">
                      <a href="<?php the_permalink() ?>">Leia mais</a> <!-- (Leva para a página de postagem individual) -->
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>
			  <?php endwhile?>
			  
			  <div class="navegacao">
					<div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
					<div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
				</div>

              <?php else: ?>
				<div class="artigo">
					<h2>Nada Encontrado</h2>
					<p>Erro 404</p>
					<p>Lamentamos mas não foram encontrados artigos.</p>
				</div>			
			<?php endif; ?>

            </div>

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

		  <?php get_sidebar(); ?>


          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

</main>
	
		
<?php get_footer(); ?>