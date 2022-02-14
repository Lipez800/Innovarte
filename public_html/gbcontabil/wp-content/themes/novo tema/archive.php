<?php
/* Template Name: Blog */
get_header();

  //VARIÁVEIS DO TOPO
$titulo_principal = get_field ('titulo_principal');

?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('http://localhost/wordpress/wp-content/uploads/2020/06/bg_1.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Blog</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row">



			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<div class="col-md-6 col-lg-4 ftco-animate">
					<div class="blog-entry">
						<a href="<?php the_permalink() ?>" class="block-20 d-flex align-items-end" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
							<div class="meta-date text-center p-2">
								<span class="day"><?php the_time('d') ?></span>
								<span class="mos"><?php the_time('M') ?></span>
								<span class="yr"><?php the_time('y') ?></span>
							</div>
						</a>
						<div class="text border border-top-0 p-4">
							<h3 class="heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<p><?php the_content(); ?></p>
							<div class="d-flex align-items-center mt-4">
								<p class="mb-0"><a href="<?php the_permalink() ?>" class="btn btn-primary">Continue Lendo <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2"><?php the_author() ?></a>
								</p>
							</div>
						</div>
					</div>
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

<? get_sidebar(); ?>

		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
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
                            border: 1px solid #e6e6e6;
                            color: #028bc8;
                            border-radius: 6px;
                        }
                        .current{
                            background: #028bc8;
                            border: 1px solid #028bc8;;
                            color: #fff;
                        }
                    </style>
                    <div class="paginacao">
                        <?php echo $paginas;?>
                    </div>
                <?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>