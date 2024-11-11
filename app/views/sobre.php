<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo isset($titulo) ? $titulo : 'Sobre - Ki Oficina'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php BASE_URL ?>assets/style/reset.css" />
    <link rel="stylesheet" type="text/css" href="/style/slick.css" />
    <link rel="stylesheet" type="text/css" href="/style/slick-theme.css" />
    <link rel="stylesheet" href="assets/style/lity.css">
    <link rel="stylesheet" href="assets/style/style.css" />


</head>

<body>

    <!-- header -->
    <?php require_once('template/topo.php'); ?>

    <!-- Start common page title  -->
    
    

    <div class="pagSobre">
        <h3>About Us</h3>
        <p>home/ About Us</p>

    </div>

    <section class="pagSobre_valores">
        <article class="site">
            
            <ul>
                <li class="active-valores">Mission</li>
                <li>Vision</li>
                <li>History</li>
            </ul>

            <div class="tabs-content">
                <div class="list">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="background-text">About Company</div>
                        <h3 class="desp">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's stan. Lorem Ipsum is simply dummy text of the
                            printing
                            and typesetting industry.</h3>
                    </div>
                </div>
                <div class="list">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="background-text">About Company</div>
                        <h3 class="desp"> Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            been the industry's stanLorem Ipsum has.
                        </h3>
                    </div>
                </div>
                <div class="list">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="background-text">About Company</div>
                        <h3 class="desp"> Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has
                            been the industry's stan.</h3>
                    </div>
                </div>
            </div>
        
        </article>
    </section>

    
    <div class="espaco"></div>


    <section class="escolha">
        <article class="site">

            <div>
                <div>
                    <div class="text_fundo">Oficina</div>
                    <h3>Por que nos <br>escolher?</h3>
                    <p>Na KiOficina, oferecemos um serviço automotivo de excelência, com profissionais qualificados,
                        atendimento personalizado e soluções eficientes para garantir sua segurança e satisfação.
                    </p>
                </div>
                <div class="espacomin"></div>
                <div class="text">
                    <h3>Equipe Qualificada</h3>
                    <h3>Tecnologia de Ponta</h3>
                    <h3>Peças de Qualidade</h3>
                    <h3>Atendimento Personalizado</h4>
                </div>
                <div class="espacomin"></div>
                <a href=""><button>Saiba mais</button></a>
            </div>
            <div>

                <img class="img_circle" src="assets/img/circulo.png" alt="">
                <img class="img_choose" src="assets/img/choose-us.png" alt="">

            </div>

        </article>

    </section>

    <div class="espaco"></div>

    <section class="depoimento">

        <article class="site">
            <div class="text_fundo">Depoimento</div>
            <div class="item_titulo">
                <div>
                    <h2>DEPOIMENTO DE NOSSOS <br> CLIENTES</h2>
                </div>
                <div class="slick-arrows">
                    <button class="slick-prev">Previous</button>
                    <button class="slick-next">Next</button>
                </div>
            </div>

            <div class="espacomin"></div>
            <div class="depos_cliente">
                <div class="depos">
                    <div class="depos_inf">
                        <div class="espaco"></div>
                        <div class="depos_t">
                            <div>
                                <h5>Jessica Silva</h5>
                                <p>Rio de Janeiro, RJ</p>
                            </div>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="109" height="81" viewBox="0 0 109 81"
                                    fill="none">
                                    <g opacity="0.7" clip-path="url(#clip0_219_726)">
                                        <path
                                            d="M24.8606 80.2504C27.2135 76.6896 47.9194 44.6582 51.3233 31.1053C53.5194 22.3053 51.8096 15.5445 45.739 9.14449C36.0449 -1.09865 19.8567 -1.11431 11.0096 6.43079C1.59785 14.4622 -1.14726 29.8504 5.45666 39.2622C10.539 46.4935 15.2292 48.219 25.1586 51.4503C25.4253 56.5797 24.9861 77.0975 24.8606 80.2504Z"
                                            fill="#FFFF00"></path>
                                        <path
                                            d="M81.2214 80.2504C83.5743 76.6896 104.28 44.6582 107.668 31.1053C109.88 22.3053 108.155 15.5445 102.084 9.14449C92.4057 -1.09865 76.2175 -1.11431 67.3704 6.43079C57.9586 14.4622 55.1978 29.8504 61.8174 39.2622C66.8841 46.4935 71.5743 48.219 81.5194 51.4503C81.7861 56.5797 81.3312 77.0975 81.2214 80.2504Z"
                                            fill="#FFFF00"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_219_7263">
                                            <rect width="108.235" height="80" fill="white"
                                                transform="translate(0.671997 0.966797)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                        </div>
                        <div class="depor-p">
                            <h4>“There are many variations of passages of Lorem
                                Ipsum available,
                                but
                                the
                                majority have
                                suffered alteration in some form injected humour, or randomised”</h4>
                        </div>
                    </div>
                    <img src="assets/img/testimaonial-jessica.png" alt="..." class="depo-slide-img">
                    <img class="fundo-img" src="assets/img/testimaonial-img-bg.png" alt="...">
                </div>

                <div class="depos">
                    <div class="depos_inf">
                        <div class="espaco"></div>

                        <div class="depos_t">
                            <div>
                                <h5>JOÃO MENDES</h5>
                                <p>São Paulo, SP</p>
                            </div>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="109" height="81" viewBox="0 0 109 81"
                                    fill="none">
                                    <g opacity="0.7" clip-path="url(#clip0_219_726)">
                                        <path
                                            d="M24.8606 80.2504C27.2135 76.6896 47.9194 44.6582 51.3233 31.1053C53.5194 22.3053 51.8096 15.5445 45.739 9.14449C36.0449 -1.09865 19.8567 -1.11431 11.0096 6.43079C1.59785 14.4622 -1.14726 29.8504 5.45666 39.2622C10.539 46.4935 15.2292 48.219 25.1586 51.4503C25.4253 56.5797 24.9861 77.0975 24.8606 80.2504Z"
                                            fill="#FFFF00"></path>
                                        <path
                                            d="M81.2214 80.2504C83.5743 76.6896 104.28 44.6582 107.668 31.1053C109.88 22.3053 108.155 15.5445 102.084 9.14449C92.4057 -1.09865 76.2175 -1.11431 67.3704 6.43079C57.9586 14.4622 55.1978 29.8504 61.8174 39.2622C66.8841 46.4935 71.5743 48.219 81.5194 51.4503C81.7861 56.5797 81.3312 77.0975 81.2214 80.2504Z"
                                            fill="#FFFF00"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_219_7263">
                                            <rect width="108.235" height="80" fill="white"
                                                transform="translate(0.671997 0.966797)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="depor-p">
                            <h4 class="desp">“There are many variations of passages of Lorem
                                Ipsum available,
                                but
                                the
                                majority have
                                suffered alteration in some form injected humour, or randomised”</h4>
                        </div>
                    </div>
                    <img src="assets/img/testimaonial.png" alt="..." class="depo-slide-img">
                    <img class="fundo-img" src="assets/img/testimaonial-img-bg.png" alt="...">
                </div>
            </div>




        </article>
    </section>

    <div class="espaco"></div>

    <section class="time_oficina">

        <article class="site">
            <div class="text_fundo">EQUIPE</div>
            <div>
                <div class="sessao_team">
                    <div>
                        <div class="titulo">
                            <h2>Nossa equipe</h2>
                            <p>Especialistas dedicados, prontos para garantir o melhor cuidado ao seu veículo.
                                Com anos de experiência e paixão por mecânica, nossa equipe está sempre preparada
                                para oferecer um serviço de excelência e confiança.</p>
                            <div>
                                <a href="">Ver Mais</a>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="team-container">
                    <div class="team">
                        <div class="team-member" style="background-image: url(assets/img/team_1.jpg);">
                            <div class="team-member-inf">
                                <div class="equipes">
                                    <a href="">Alle Palmeira</a>
                                    <p>Especialista em Motores Diesel</p>
                                </div>
                                <div class="equipe_info-social">
                                    <a href="https://www.facebook.com/" class="icon"><img
                                            src="assets/img/SVG/linkedinicon.svg" alt="..."></a>
                                    <a href="https://bd.linkedin.com/" class="icon"><img
                                            src="assets/img/SVG/instagramicon.svg" alt=""></a>
                                    <a href="https://www.instagram.com/" class="icon"><img
                                            src="assets/img/SVG/twittericon.svg" alt=""></a>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="team">
                        <div class="team-member" style="background-image: url(assets/img/team_2.jpg);">
                            <div class="team-member-inf">
                                <div class="equipes">
                                    <a href="#">Davi Palmeira</a>
                                    <p>Diagnóstico Eletrônico</p>
                                </div>
                                <div class="equipe_info-social">
                                    <a href="https://www.facebook.com/" class="icon"><img
                                            src="assets/img/SVG/linkedinicon.svg" alt="..."></a>
                                    <a href="https://bd.linkedin.com/" class="icon"><img
                                            src="assets/img/SVG/instagramicon.svg" alt=""></a>
                                    <a href="https://www.instagram.com/" class="icon"><img
                                            src="assets/img/SVG/twittericon.svg" alt=""></a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="team">
                        <div class="team-member" style="background-image: url(assets/img/team_3.jpg);">
                            <div class="team-member-inf">
                                <div class="equipes">
                                    <a href="#">Arthur Palmeira</a>
                                    <p>Alinhamento e Balanceamento</p>>
                                </div>
                                <div class="equipe_info-social">
                                    <a href="https://www.facebook.com/" class="icon"><img
                                            src="assets/img/SVG/linkedinicon.svg" alt="..."></a>
                                    <a href="https://bd.linkedin.com/" class="icon"><img
                                            src="assets/img/SVG/instagramicon.svg" alt=""></a>
                                    <a href="https://www.instagram.com/" class="icon"><img
                                            src="assets/img/SVG/twittericon.svg" alt=""></a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </article>
    </section>

    <div class="espaco"></div>

    <section class="logo_client">
        <article class="site">
            <h4>Marcas Confiável</h4>
            <div class="logo">

                <div class="clientes">
                    <div class="item"><img src="assets/img/trusted-client_1.png" alt="Client Logo 1"></div>
                    <div class="item"><img src="assets/img/trusted-client_2.png" alt="Client Logo 2"></div>
                    <div class="item"><img src="assets/img/trusted-client_3.png" alt="Client Logo 3"></div>
                    <div class="item"><img src="assets/img/trusted-client_4.png" alt="Client Logo 4"></div>
                    <div class="item"><img src="assets/img/trusted-client_5.png" alt="Client Logo 5"></div>
                    <div class="item"><img src="assets/img/trusted-client_6.png" alt="Client Logo 6"></div>
                    <div class="item"><img src="assets/img/trusted-client_7.png" alt="Client Logo 7"></div>
                    <div class="item"><img src="assets/img/trusted-client_1.png" alt="Client Logo 1"></div>
                    <div class="item"><img src="assets/img/trusted-client_2.png" alt="Client Logo 2"></div>
                    <div class="item"><img src="assets/img/trusted-client_3.png" alt="Client Logo 3"></div>
                    <div class="item"><img src="assets/img/trusted-client_4.png" alt="Client Logo 4"></div>
                    <div class="item"><img src="assets/img/trusted-client_5.png" alt="Client Logo 5"></div>
                    <div class="item"><img src="assets/img/trusted-client_6.png" alt="Client Logo 6"></div>
                    <div class="item"><img src="assets/img/trusted-client_7.png" alt="Client Logo 7"></div>
                </div>
            </div>
        </article>

    </section>

    <div class="espaco"></div>



    <!-- footer -->

    <?php require_once('template/final.php'); ?>


    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script src="assets/js/lity.min.js"></script>
    <script src="https://kit.fontawesome.com/6a9aa14b39.js" crossorigin="anonymous"></script>
    <script src="assets/js/oficina.js"></script>
</body>

</html>