<?php
/* Template Name: Serviços e Soluções */
get_header();

//VARIÁVEIS TOPO
$titulo_principal_servicos_e_solucoes = get_field('titulo_principal_servicos_e_solucoes');

$imagem_servicos_e_solucoes = get_field('imagem_servicos_e_solucoes');

$titulo_nossos_servicos = get_field('titulo_nossos_servicos');

$sub_titulos_lateral = get_field('sub_titulos_lateral');

$titulo_nossas_solucoes = get_field('titulo_nossas_solucoes');

$conteudo_solucoes_contabeis = get_field('conteudo_solucoes_contabeis');

//Nossos Serviços
$sub_titulos_lateral = get_field('sub_titulos_lateral');
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $imagem_servicos_e_solucoes; ?>');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread"><?php echo $titulo_principal_servicos_e_solucoes; ?></h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Serviços e Soluções <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pb">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<span class="subheading">Serviços</span>
				<h2 class="mb-4">Nossos serviços</h2>
				<p></p>
			</div>
		</div>
		<div class="row tabulation mt-4 ftco-animate">
			<div class="col-md-4">
				<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">

					<?php if (have_rows('sub_titulos_lateral')) :
						$primeiro = true;
						while (have_rows('sub_titulos_lateral')) : the_row();

							$id = get_sub_field('id');
							$titulo_lateral = get_sub_field('titulo_lateral');

							if ($primeiro == true) {
					?>

								<li class="nav-item text-left">
									<a class="nav-link active py-4" data-toggle="tab" href="#<?php echo $id; ?>"><?php echo $titulo_lateral; ?></a>
								</li>

							<?php $primeiro = null;
							} else {
							?>

								<li class="nav-item text-left">
									<a class="nav-link py-4" data-toggle="tab" href="#<?php echo $id; ?>"><?php echo $titulo_lateral; ?></a>
								</li>

					<?php
							}

						endwhile;
					endif;
					?>

				</ul>
			</div>
			<div class="col-md-8">
				<div class="tab-content">

					<?php if (have_rows('sub_titulos_lateral')) :
						$primeiro = true;
						while (have_rows('sub_titulos_lateral')) : the_row();

							$id = get_sub_field('id');
							$imagem = get_sub_field('imagem');
							$titulo_lateral = get_sub_field('titulo_lateral');
							$descricao = get_sub_field('descricao');

							if ($primeiro == true) {
					?>

								<div class="tab-pane container p-0 active" id="<?php echo $id; ?>">
									<div class="img" style="background-image: url('<?php echo $imagem; ?>');"></div>
									<h3 style="color:#fd7d4e;"><a href="#"><?php echo $titulo_lateral; ?></a></h3>
									<p><?php echo $descricao; ?></p>
								</div>

							<?php $primeiro = null;
							} else {
							?>

								<div class="tab-pane container p-0 fade" id="<?php echo $id; ?>">
									<div class="img" style="background-image: url('<?php echo $imagem; ?>');"></div>
									<h3><a href="#"><?php echo $titulo_lateral; ?></a></h3>
									<p><?php echo $descricao; ?></p>
								</div>

					<?php
							}

						endwhile;
					endif;
					?>

				</div>
			</div>
		</div>
	</div>
</section>


<!--Nossas soluções start -->
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><?php echo $titulo_nossas_solucoes; ?></h2>
				<p></p>
			</div>
		</div>
		<div class="row">

			<?php

			while (have_rows('conteudo_solucoes_contabeis')) : the_row();

			?>


				<div class="col-lg-3 d-flex">
					<div class="services-2 border rounded text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="<?php the_sub_field('icone'); ?>"></span></div>
						<div class="text media-body">
							<h3 style="color:#208488;"><?php the_sub_field('titulo'); ?></h3>
							<p><?php the_sub_field('descricao'); ?></p>
						</div>
					</div>
				</div>

			<?php
			endwhile;
			?>

		</div>
	</div>
</section>
<!-- Nossas soluções end -->


<?php get_footer(); ?>