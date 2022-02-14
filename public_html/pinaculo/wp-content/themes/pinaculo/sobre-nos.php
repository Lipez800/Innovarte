<?php 
 /*Template Name: Sobre Nos */
get_header(); 

    $descricao_principal_sobre_nos = get_field('descricao_principal_sobre_nos');
    $titulo_principal_sobre_nos = get_field ('titulo_principal_sobre_nos');
    $imagem_principal_sobre_nos = get_field ('imagem_principal_sobre_nos');
    $missao_visao_e_valores = get_field('missao_visao_e_valores');
    $nossos_gestores = get_field ('nossos_gestores');
?>

<!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>Sobre Nós</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->

        <!-- about_info_area start  -->
        <div class="about_info_area plus_padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about_text">
                            <h3><?php echo $titulo_principal_sobre_nos; ?></h3>
                            <p><?php echo $descricao_principal_sobre_nos; ?></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about_thumb">
                            <img src="<?php echo $imagem_principal_sobre_nos; ?>" alt="">
                        </div>
                    </div>
                </div>
                <br><br><br><br>
                <div class="row">

                    <?php
                      while ( have_rows('missao_visao_e_valores') ) : the_row();                                    
                    ?>

                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_service text-center">
                            <h3><?php the_sub_field ('titulo'); ?></h3>
                            <p><?php the_sub_field ('descricao'); ?></p>
                        </div>
                    </div>

                    <?php
                       endwhile;
                    ?>

                </div>
            </div>
        </div>
        <!-- /about_info_area end  -->

        <!-- team_area  -->
        <div class="team_area minus_padding">
            <div class="container">
                <div class="border_bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title mb-40 text-center">
                                <h3>Nossos Gestores</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    <?php
                      while ( have_rows('nossos_gestores') ) : the_row();                                    
                    ?>

                        <div class="col-xl-4 col-lg-4 col-md-6 team">
                            <div class="single_team">
                                <div class="team_thumb">
                                    <img src="<?php the_sub_field('imagem'); ?>" alt="">
                                </div>
                                <div class="team_info text-center">
                                    <h3><?php the_sub_field('nome'); ?></h3>
                                    <p><?php the_sub_field('cargo'); ?></p>
                                    <div class="social_link">
                                        <ul>
                                            <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>                    
                </div>       
            </div>
        <?php
            endwhile;
        ?>            
</div>
</div>
</div>
</div>
<!-- /team_area  -->

<?php get_footer (); ?>