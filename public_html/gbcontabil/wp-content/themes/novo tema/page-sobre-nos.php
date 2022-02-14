<?php
	/* Template Name: Sobre Nós  */
	get_header();

	//VARIÁVEIS TOPO

	$titulo_principal_sobre_nos = get_field ('titulo_principal_sobre_nos');

	$imagem_sobre_nos = get_field ('imagem_sobre_nos');

	$sub_titulo_sobre_nos = get_field ('sub_titulo_sobre_nos');

	$conteudo_sobre_nos = get_field ('conteudo_sobre_nos');

	$imagem_lateral_sobre_nos = get_field ('imagem_lateral_sobre_nos');

	// MISSÃO VISÃO E VALORES
	$missao_visao_e_valores = get_field ('descricao_missao_visao_e_valores');
	
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $imagem_sobre_nos;?>');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread"><?php echo $titulo_principal_sobre_nos; ?></h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sobre Nós <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
		<div class="container consult-wrap">
			<div class="row d-flex align-items-stretch">
				<div class="col-md-6 wrap-about align-items-stretch d-flex">
					<div class="img" style="background-image: url(<?php echo $imagem_lateral_sobre_nos; ?>"></div>
				</div>
				<div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
					<div class="heading-section mb-4">
						<span class="subheading">GB Assessoria Contábil</span>
						<h2><?php echo $sub_titulo_sobre_nos;?></h2>
					</div>
					<p><?php echo $conteudo_sobre_nos;?></p>
					
				</div>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>	