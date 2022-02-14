<?php 
	/*Template Name: Contato */
get_header(); ?>

<div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>Contato</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->

        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title" style="color: #003d6b;">Entre em contato conosco!</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'" placeholder="Telefone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" placeholder=" Mensagem"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Endereço</h3>
                                <p>Rua Dr. Gabriel Nicolau, 477 - Rudge Ramos, São Bernardo do Campo - SP, 09632-040</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>Telefone</h3>
                                <p>(11) 93334 - 7327<br> (11) 99199 - 9426</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>E-mail</h3>
                                <p>contato@pinaculoconsultoria.com.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-sm-block mb-5 pb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.637920050576!2d-46.568020585381554!3d-23.653134670871985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce433c9e58bab3%3A0x256693df12692462!2sRua%20Dr.%20Gabriel%20Nicolau%2C%20477%20-%20Jardim%20Orlandina%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009632-040!5e0!3m2!1spt-BR!2sbr!4v1601556680837!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0; width:100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                featureType: "all",
                                stylers: [{
                                    saturation: -90
                                },
                                {
                                    lightness: 50
                                }
                                ]
                            },
                            {
                                elementType: 'labels.text.fill',
                                stylers: [{
                                    color: '#ccdee9'
                                }]
                            }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://www.google.com.br/maps/place/Pinaculo+Adm/@-23.6531431,-46.5680407,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce433c9e600b6f:0x4ec631a11b024d8b!8m2!3d-23.653148!4d-46.565852">
                    </script>

                </div>
            </div>
        </section>


<?php get_footer(); ?>