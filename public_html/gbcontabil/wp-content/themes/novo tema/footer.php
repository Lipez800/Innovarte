	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Localização e Contato</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Rua Wadia Jafet Assad, 171 (Sala 02 e 03) - Bairro dos Casa, São Bernardo do Campo - SP, 09850-90</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">(11) 2779-2010</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text" style="padding-left:10px;">atendimento@gbassessoria.com.br</span></a></li>
							</ul>
						</div>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="https://www.facebook.com/gbassessoriacontabil"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/gbassessoriacontabil/"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-2">
					<div class="ftco-footer-widget mb-5 ml-md-4">
						<h2 class="ftco-heading-2">Links Úteis</h2>
						<ul class="list-unstyled">
							<li><a href="/gbcontabil"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
							<li><a href="/gbcontabil/sobre-nos"><span class="ion-ios-arrow-round-forward mr-2"></span>Sobre Nós</a></li>
							<li><a href="/gbcontabil/servicos-e-solucoes"><span class="ion-ios-arrow-round-forward mr-2"></span>Serviços e Soluções</a></li>
							<li><a href="/gbcontabil/blog"><span class="ion-ios-arrow-round-forward mr-2"></span>Blog</a></li>
							<li><a href="/gbcontabil/contato"><span class="ion-ios-arrow-round-forward mr-2"></span>Contato</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="ftco-footer-widget mb-5">
						<h2 class="ftco-heading-2">Recentes do Blog</h2>
						<?php 
						$aRecentPosts = new WP_Query("showposts=3&$nposts&cat='$catid'");
						while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
							global $post; 

							?>
							<div class="block-21 mb-4 d-flex">
								<a class="blog-img mr-4" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></a>
								<div class="text">
									<h3 class="heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<div class="meta">
										<div><a href="#"><span class="icon-calendar"></span><?php the_time('d m y') ?></a></div>
										<div><a href="#"><span class="icon-person"></span><?php the_author ();?></a></div>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p>
							<script>document.write(new Date().getFullYear());</script> - Todos os direitos reservados à GB Assessoria Contábil | Desenvolvido por <a href="https://www.agenciainnovarte.com.br/" target="_blank">Agência Innovarte</a>
						</p>
					</div>
				</div>
			</div>
		</footer>



		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.waypoints.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.stellar.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.animateNumber.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/google-map.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
		<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="d17a7fa6-65ac-4e7b-b47d-b25d0500cc1d" data-blockingmode="auto" type="text/javascript"></script>
<script id="CookieDeclaration" src="https://consent.cookiebot.com/d17a7fa6-65ac-4e7b-b47d-b25d0500cc1d/cd.js" type="text/javascript" async></script>

	</body>
	</html>