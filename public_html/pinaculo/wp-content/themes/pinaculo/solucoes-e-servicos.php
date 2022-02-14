<?php 
	/*Template Name: Soluções e Serviços */
get_header(); 

    $titulo_principal = get_field ('titulo_principal');
    $solucoes_e_servicos = get_field ('solucoes_e_servicos');
    $descricao_solicite_um_orcamento = get_field ('descricao_solicite_um_orcamento');
    $titulo_solucoes_e_servicos = get_field ('titulo_solucoes_e_servicos');
    $titulo_solicite_um_orcamento = get_field ('titulo_solicite_um_orcamento');
    $descricao_do_botao_solicite_um_orcamento = get_field ('descricao_do_botao_solicite_um_orcamento');
    $url_do_botao_solicite_um_orcamento_copiar = get_field ('url_do_botao_solicite_um_orcamento_copiar');

?>

<!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>Soluções e Serviços</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->

        <!-- service_area_start -->
        <div class="service_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-50">
                            <h3><?php echo $titulo_principal; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                <?php
                    while ( have_rows('solucoes_e_servicos') ) : the_row();                      
                ?>

                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_service text-center">
                            <div class="service_icon">
                                <img src="<?php the_sub_field('icone_solucoes_e_servicos'); ?>" alt="">
                            </div>
                            <h3><?php the_sub_field ('titulo_solucoes_e_servicos'); ?></h3>
                            <p><?php the_sub_field ('descricao_solucao_e_servicos'); ?></p>
                        </div>
                    </div>

                <?php 
                    endwhile 
                ?>

                </div>
            </div>
        </div>
        <!-- service_area_end -->

        <!-- Information_area  -->
        <div class="Information_area overlay">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-8">
                        <div class="info_text text-center">
                            <h3><?php echo $titulo_solicite_um_orcamento; ?></h3>
                            <p><?php echo $descricao_solicite_um_orcamento; ?></p>
                            <a class="boxed-btn3" href="#"><?php echo $descricao_do_botao_solicite_um_orcamento; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Information_area  end -->

<?php get_footer (); ?>