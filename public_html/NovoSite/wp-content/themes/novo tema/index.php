<?php get_header(); 

/* Template Name: Blog */

?>

	<main id="main">

		<!-- ======= Breadcrumbs ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">

				<ol>
					<li><a href="index.html">Home</a></li>
					<li>Blog</li>
				</ol>
				<h2>Blog</h2>

			</div>
		</section><!-- End Breadcrumbs -->

		<!-- ======= Blog Section ======= -->
		<section id="blog" class="blog">
			<div class="container">

				<div class="row">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="col-lg-8 entries">

						<div class="row">

							<div class="col-md-6 d-flex align-items-stretch">
								<article class="entry">

									<div class="entry-img">
										<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
									</div>

									<h2 class="entry-title">
										<a href="blog-single.html"><?php the_title(); ?></a>
									</h2>

									<div class="entry-meta">
										<ul>
											<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?php the_author(); ?></a></li>
											<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="the_time"><?php the_time(); ?></time></a></li>
										</ul>
									</div>

									<div class="entry-content">
										<p>
										<?php the_content(); ?>
										</p>
										<div class="read-more">
											<a href="<?php the_permalink(); ?>">Leia mais</a> <!-- (Leva para a página de postagem individual) -->
										</div>
									</div>

								</article><!-- End blog entry -->
							</div>

							</div>

						</div>

						<div class="blog-pagination">
							<ul class="justify-content-center">
							<?php
                $paginas = paginacao();
                if ( ! empty( $paginas ) ): 
                    ?> 
                    <style type="text/css">
                        .paginacao{
                            width: 100%;
                            padding: 10px;
                        }
                        .page-numbers{
                            padding: 10px;
                            border: 1px solid #208488;
                            color: #208488;
                            border-radius: 6px;
                        }
                        .current{
                            background: #208488;
                            border: 1px solid #208488;;
                            color: #fff;
                        }
                    </style>
                    <div class="paginacao">
                        <?php echo $paginas;?>
                    </div>
                <?php endif; ?>
							</ul>
						</div>

					</div><!-- End blog entries list -->

					<div class="col-lg-4">

					<?php get_sidebar(); ?>

					</div><!-- End sidebar -->
					
					<?php endwhile?>
					
				</div><!-- End blog sidebar -->
				
			</section><!-- End Blog Section -->
				
	</main>
