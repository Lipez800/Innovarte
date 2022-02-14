<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" width="70%">
                            </a>
                        </div>
                        <p>

                            Rua Dr. Gabriel Nicolau, 477 - Rudge Ramos, São Bernardo do Campo - SP, 09632-040
                            <br>
                            <a href="#">contato@pinaculoconsultoria.com.br</a> <br>
                            (11) 93334 - 7327 <br> (11) 99199 - 9426
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/Pinaculoconsultoria/">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/pinaculoconsultoria/?hl=pt-br">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Links Uteis
                        </h3>
                        <ul>
                            <li><a class="active" href="/pinaculo/home-page">Home</a></li>
                            <li><a href="/pinaculo/sobre-nos">Sobre Nós</a></li>
                            <li><a href="/pinaculo/solucoes-e-servicos">Soluções e Serviços</a></li>
                            <li><a href="/pinaculo/blog">Blog</a></li>
                            <li><a href="/pinaculo/contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Mais Vistos
                        </h3>
                        <?php 
                        $aRecentPosts = new WP_Query("showposts=3&$nposts&cat='$catid'");
                        while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
                            global $post; 

                            ?>
                            <h6><?php the_title(); ?></h6>
                            <p class="newsletter_text"><?php the_content (); ?></p>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <script>document.write(new Date().getFullYear());</script> Todos os direitos reservados a Pináculo | Desenvolvido Por <a href="https://www.agenciainnovarte.com.br/" target="_blank">agenciainnovarte.com.br</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS here -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ajax-form.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollIt.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/nice-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gijgo.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <!--contact js-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.form.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/mail-script.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>

</html>            