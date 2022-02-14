<?php
/* Template Name: Contato */
get_header();

  // VARIÁVEIS DO TOPO
$titulo_principal = get_field ('titulo_principal');

$imagem_principal = get_field ('imagem_principal');

$sub_titulo = get_field ('sub_titulo');

  //VARIÁVEIS DO CONTATO
$contato = get_field ('contato');

$campo_de_contato = get_field ('campo_de_contato');

$descricao_do_botao = get_field ('descricao_do_botao');

$contato = get_field ('contato');
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $imagem_principal; ?>');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread"><?php echo $titulo_principal; ?></h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contato <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row d-flex mb-5 contact-info justify-content-center">
     <div class="col-md-10">
      <div class="row mb-5">
        <?php

        while ( have_rows('contato') ) : the_row();

          ?>
          <div class="col-md-4 text-center d-flex">
           <div class="border w-100 p-4">
            <div class="icon">
             <span class="<?php the_sub_field ('icone'); ?>"></span>
           </div>
           <p style="font-size: 0.9em"><span><?php the_sub_field ('titulo'); ?></span> <?php the_sub_field ('descricao'); ?></p>
         </div>
       </div>

       <?php
     endwhile;
     ?>
   </div>
 </div>
</div>
<div class="row block-9 justify-content-center mb-5">
  <div class="col-md-10 mb-md-5">
   <h2 class="text-center"><?php echo $sub_titulo; ?></h2>
   <form action="#" class="border p-5 contact-form">

    <?php

    while ( have_rows('campo_de_contato') ) : the_row();

      ?>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="<?php the_sub_field ('nome'); ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="<?php the_sub_field ('email'); ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="<?php the_sub_field ('telefone'); ?>">
      </div>
      <div class="form-group">
        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="<?php the_sub_field ('mensagem'); ?>"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="<?php echo $descricao_do_botao; ?>" class="btn btn-primary py-3 px-5">
      </div>

      <?php
    endwhile;
    ?>
  </form>

</div>
</div>
</div>
</section>


<!-- FEEDBACK -->      
<div id="carousel site" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testmonial.png" class="img-fluid d-block">
    </div>

    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testmonial.png" class="img-fluid d-block">
    </div>

    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testmonial.png" class="img-fluid d-block">
    </div>
    
  </div>
</div>



<!-- FEEDBACK END -->

<!--MAPS -->
<section class="ftco-section ftco-no-pb ftco-no-pt">
 <div class="container-fluid px-0">
  <div class="row justify-content-center">
   <div class="col-md-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.575499516815!2d-46.57216188537961!3d-23.726848673608558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4168b99d9fdf%3A0x9e7df615a30a8690!2sR.%20Wadia%20Jafete%20Assad%2C%20171%20-%20sl%2002%20e%2003%20-%20Dos%20Casa%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009850-090!5e0!3m2!1spt-BR!2sbr!4v1601318294764!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</div>
</div>
</section>
<!-- END MAPS -->


<?php get_footer(); ?>