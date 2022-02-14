<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	
<?php endwhile; else: ?>

<?php endif; ?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread"><?php the_title(); ?></h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="index.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title(); ?><i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 ftco-animate">
				<h2 class="mb-3"><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</div> <!-- .col-md-8 -->

			<?php get_sidebar(); ?>
			
		</div>
	</div>
</section>
<?php get_footer(); ?>