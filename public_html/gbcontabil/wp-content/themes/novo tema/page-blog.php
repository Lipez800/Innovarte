<?php
	/* Template Name: Blog */
	get_header();

  //VARIÁVEIS DO TOPO
  $titulo_principal_blog = get_field ('titulo_principal_blog');

  $imagem_principal_blog = get_field ('imagem_principal_blog');
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $imagem_principal_blog; ?>');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread"><?php echo $titulo_principal_blog; ?></h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
   <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image_1.jpg');">
            <div class="meta-date text-center p-2">
              <span class="day">15</span>
              <span class="mos">Oct.</span>
              <span class="yr">2019</span>
            </div>
          </a>
          <div class="text border border-top-0 p-4">
            <h3 class="heading"><a href="#">Os fluxos de trabalho financeiro e jurídico ocorrem durante todo</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center mt-4">
             <p class="mb-0"><a href="#" class="btn btn-primary">Continue Lendo <span class="ion-ios-arrow-round-forward"></span></a></p>
             <p class="ml-auto mb-0">
              <a href="#" class="mr-2">Admin</a>
              <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 ftco-animate">
      <div class="blog-entry">
        <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image_1.jpg');">
          <div class="meta-date text-center p-2">
            <span class="day">15</span>
            <span class="mos">Oct.</span>
            <span class="yr">2019</span>
          </div>
        </a>
        <div class="text border border-top-0 p-4">
          <h3 class="heading"><a href="#">Os fluxos de trabalho financeiro e jurídico ocorrem durante todo</a></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <div class="d-flex align-items-center mt-4">
            <p class="mb-0"><a href="#" class="btn btn-primary">Continue Lendo <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
              <a href="#" class="mr-2">Admin</a>
              <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 ftco-animate">
      <div class="blog-entry">
        <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image_1.jpg');">
          <div class="meta-date text-center p-2">
            <span class="day">15</span>
            <span class="mos">Oct.</span>
            <span class="yr">2019</span>
          </div>
        </a>
        <div class="text border border-top-0 p-4">
          <h3 class="heading"><a href="#">Os fluxos de trabalho financeiro e jurídico ocorrem durante todo</a></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <div class="d-flex align-items-center mt-4">
            <p class="mb-0"><a href="#" class="btn btn-primary">Continue Lendo <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
              <a href="#" class="mr-2">Admin</a>
              <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 ftco-animate">
      <div class="blog-entry">
        <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image_1.jpg');">
          <div class="meta-date text-center p-2">
            <span class="day">15</span>
            <span class="mos">Oct.</span>
            <span class="yr">2019</span>
          </div>
        </a>
        <div class="text border border-top-0 p-4">
          <h3 class="heading"><a href="#">Os fluxos de trabalho financeiro e jurídico ocorrem durante todo</a></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <div class="d-flex align-items-center mt-4">
            <p class="mb-0"><a href="#" class="btn btn-primary">Continue Lendo <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
              <a href="#" class="mr-2">Admin</a>
              <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 ftco-animate">
      <div class="blog-entry">
        <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image_1.jpg');">
          <div class="meta-date text-center p-2">
            <span class="day">15</span>
            <span class="mos">Oct.</span>
            <span class="yr">2019</span>
          </div>
        </a>
        <div class="text border border-top-0 p-4">
          <h3 class="heading"><a href="#">Os fluxos de trabalho financeiro e jurídico ocorrem durante todo</a></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <div class="d-flex align-items-center mt-4">
            <p class="mb-0"><a href="#" class="btn btn-primary">Continue Lendo <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
              <a href="#" class="mr-2">Admin</a>
              <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 ftco-animate">
      <div class="blog-entry">
        <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image_1.jpg');">
          <div class="meta-date text-center p-2">
            <span class="day">15</span>
            <span class="mos">Oct.</span>
            <span class="yr">2019</span>
          </div>
        </a>
        <div class="text border border-top-0 p-4">
          <h3 class="heading"><a href="#">Os fluxos de trabalho financeiro e jurídico ocorrem durante todo</a></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <div class="d-flex align-items-center mt-4">
            <p class="mb-0"><a href="#" class="btn btn-primary">Continue Lendo <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
              <a href="#" class="mr-2">Admin</a>
              <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col text-center">
      <div class="block-27">
        <ul>
          <li><a href="#">&lt;</a></li>
          <li class="active"><span>1</span></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&gt;</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>

  <?php get_footer(); ?>