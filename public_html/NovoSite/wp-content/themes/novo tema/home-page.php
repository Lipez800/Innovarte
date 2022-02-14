<?php get_header();

/* Template Name: Home Page */

/* Títulos Principais */
$titulo_principal = get_field('titulo_principal');
$subtitulo_principal = get_field('subtitulo_principal');
$botao_home = get_field('botao_home');
/*A Innovarte*/
$texto_a_innovarte = get_field('texto_a_innovarte');
$texto_dois_a_innovarte = get_field('texto_a_innovarte');
$check_um = get_field('check_um');
$check_dois = get_field('check_dois');
$check_tres = get_field('check_tres');
/* Serviços */
$subtitulo_servicos = get_field('subtitulo_servicos');
$titulo_caixa_um = get_field('titulo_caixa_um');
$descricao_caixa_um = get_field('descricao_caixa_um');
$titulo_caixa_dois = get_field('titulo_caixa_dois');
$descricao_caixa_dois = get_field('descricao_caixa_dois');
$titulo_caixa_tres = get_field('titulo_caixa_tres');
$descricao_caixa_tres = get_field('descricao_caixa_tres');
$imagem_gotas = get_field('imagem_gotas');
/* FAQ */
$titulo_criacao = get_field('titulo_criacao');
$descricao_criacao = get_field('descricao_criacao');
$titulo_marketing = get_field('titulo_marketing');
$descricao_marketing = get_field('descricao_marketing');
$titulo_comunicacao = get_field('titulo_comunicacao');
$descricao_comunicacao = get_field('descricao_comunicacao');
/* Meio */
$hashtag_meio = get_field('hashtag_meio');
/* Portfolio */
$subtitulo_principal_portfolio = get_field('subtitulo_principal_portfolio');
$titulo_galeria_todos = get_field('titulo_galeria_todos');
$titulo_um = get_field('titulo_um');
$titulo_dois = get_field('titulo_dois');
$titulo_tres = get_field('titulo_tres');
/* Equipe */
$subtitulo_principal_equipe = get_field('subtitulo_principal_equipe');
/* Contato */
$subtitulo_principal_contato = get_field('subtitulo_principal_contato');
$titulo_endereco = get_field('titulo_endereco');
$descricao_endereco = get_field('descricao_endereco');
$titulo_email = get_field('titulo_email');
$descricao_email = get_field('descricao_email');
$titulo_telefone = get_field('titulo_telefone');
$descricao_telefone = get_field('descricao_telefone');
$titulo_contato_email = get_field('titulo_contato_email');
$subtitulo_mensagem = get_field('subtitulo_mensagem');
$imagem_logo_contato = get_field('imagem_logo_contato');


?>

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <h3>Conheça a <strong>Innovarte</strong></h3>
    <h1><?php echo $titulo_principal; ?></h1>
    <h2><?php echo $subtitulo_principal; ?></h2>
    <a href="#about" class="btn-get-started scrollto"><?php echo $botao_home; ?></a>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Sobre Nós</h2>
        <h3>Conhecendo a <span>Agência Innovarte</span></h3>
        <p><?php echo $subtitulo_servicos; ?></p>
      </div>
      <div class="row content">
        <div class="col-lg-6" style="text-align: justify;">
          <p><?php echo $texto_a_innovarte; ?></p>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" style="text-align: justify;">
          <p><?php echo $texto_dois_a_innovarte; ?></p>
          <ul>
            <li><i class="ri-check-double-line"></i> <?php echo $check_um; ?></li>
            <li><i class="ri-check-double-line"></i> <?php echo $check_dois; ?></li>
            <li><i class="ri-check-double-line"></i> <?php echo $check_tres; ?></li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Serviços</h2>
        <h3>Conheça nossos <span>Serviços</span></h3>
        <p><?php echo $subtitulo_servicos; ?></p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><?php echo $titulo_caixa_um; ?></h4>
            <p class="description"><?php echo $descricao_caixa_um; ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><?php echo $titulo_caixa_dois; ?></h4>
            <p class="description"><?php echo $descricao_caixa_dois; ?><br></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><?php echo $titulo_caixa_tres; ?></h4>
            <p class="description"><?php echo $descricao_caixa_tres; ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <img src="<?php echo $imagem_gotas; ?>" alt="">
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">
    <div class="container">

      <div class="section-title">
        <h3>Por que <span>A Innovarte?</span></h3>
      </div>

      <ul class="faq-list">

        <li>
          <a data-toggle="collapse" class="collapsed" href="#faq1"><?php echo $titulo_criacao; ?><i class="icofont-simple-up"></i></a>
          <div id="faq1" class="collapse" data-parent=".faq-list">
            <p>
              <?php echo $descricao_criacao; ?>
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq2" class="collapsed"><?php echo $titulo_marketing; ?><i class="icofont-simple-up"></i></a>
          <div id="faq2" class="collapse" data-parent=".faq-list">
            <p>
              <?php echo $descricao_marketing; ?>
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq3" class="collapsed"><?php echo $titulo_comunicacao; ?><i class="icofont-simple-up"></i></a>
          <div id="faq3" class="collapse" data-parent=".faq-list">
            <p>
              <?php echo $descricao_comunicacao; ?>
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section><!-- End F.A.Q Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="text-center">
        <h3><?php echo $hashtag_meio; ?></h3>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">

    <div class="container">

      <div class="section-title">
        <h2>Portfólio</h2>
        <h3>Veja nosso <span>Portfólio</span></h3>
        <p><?php echo $subtitulo_principal_portfolio; ?></p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active"><?php echo $titulo_galeria_todos; ?></li>
            <li data-filter=".filter-app"><?php echo $titulo_um; ?></li>
            <li data-filter=".filter-card"><?php echo $titulo_dois; ?></li>
            <li data-filter=".filter-web"><?php echo $titulo_tres; ?></li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/sama-logo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Samá Contabilidade</h4>
              <p>Criação e Desenvolvimento</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/sama-site.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="Samá Contabilidade"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/pinaculo-logo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pináculo</h4>
              <p>Criação e Desenvolvimento</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/pinaculo-site.jpg" data-gall="portfolioGallery"
                class="venobox preview-link" title="Pináculo: Consultoria Empresarial"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/villas-vitoria-logo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Villa's Vitória</h4>
              <p>Criação e Desenvolvimento</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/villas-vitoria-site.jpg" data-gall="portfolioGallery"
                class="venobox preview-link" title="Villa's Vitória"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/nova-brasilia-logo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Padaria Nova Brasília</h4>
              <p>Criação e Desenvolvimento</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/nova-brasilia-site.jpg" data-gall="portfolioGallery"
                class="venobox preview-link" title="Padaria Nova Brasília"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/sipan-aipan-logo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sipan Aipan</h4>
              <p>Criação e Desenvolvimento</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/sipan-aipan-site.jpg" data-gall="portfolioGallery"
                class="venobox preview-link" title="Sipan Aipan"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/casa-independencia-logo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Casa Independência</h4>
              <p>Criação e Desenvolvimento</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/casa-independencia-site.jpg" data-gall="portfolioGallery"
                class="venobox preview-link" title="Casa Independência"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/psi-vanessa-logo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Psicóloga Vanessa</h4>
              <p>Comunicação</p>
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/psi-vanessa-posts.jpg" data-gall="portfolioGallery"
                  class="venobox preview-link" title="Psicóloga Vanessa"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/marzzi-logo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Marzzi Contabilidade</h4>
              <p>Comunicação</p>
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/marzzi-posts.jpg" data-gall="portfolioGallery"
                  class="venobox preview-link" title="Marzzi Contabilidade"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/edukids-logo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Edukids</h4>
              <p>Comunicação</p>
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/edukids-posts.jpg" data-gall="portfolioGallery"
                  class="venobox preview-link" title="Edukids"><i class="bx bx-plus"></i></a>
            </div>
          </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <h2>Equipe</h2>
        <h3>Nossa <span>Equipe</span></h3>
        <p><?php echo $subtitulo_principal_equipe; ?></p>
      </div>

      <div class="row" style="justify-content: center;">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <div class="member-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/agenciainnovarte/"><i class="icofont-instagram"></i></a>
                <a href="https://br.linkedin.com/company/agencia-innovarte"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Nome aqui</h4>
              <span>Cargo aqui</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contato</h2>
        <h3>Fale <span>Conosco</span></h3>
        <p><?php echo $subtitulo_principal_contato; ?></p>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.38908064963172!2d-46.56154259551017!3d-23.66789998612202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4304f777c893%3A0xcb1461dff2135559!2sR.%20Paulo%20di%20Favari%2C%20694%20-%20Rudge%20Ramos%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009618-100!5e0!3m2!1spt-BR!2sbr!4v1610392862902!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4><?php echo $titulo_endereco; ?></h4>
              <p><?php echo $descricao_endereco; ?></p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4><?php echo $titulo_email; ?></h4>
              <p><?php echo $descricao_email; ?></p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4><?php echo $titulo_telefone; ?></h4>
              <p><?php echo $descricao_telefone; ?></p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 pt-4 pt-lg-0" style="text-align: justify;">

          <div class="section-title" style="font-size: 20px;">
            <h2><?php echo $titulo_contato_email; ?></h2>
            <p><?php echo $subtitulo_mensagem; ?></p>
            <img src="<?php echo $imagem_logo_contato; ?>" style="width: 300px;">
          </div>

        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->

  <?php get_footer(); ?>