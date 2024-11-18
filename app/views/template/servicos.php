<section class="service">
    <article class="site">

        <div>
            <div class="text_fundo">SERVIÇOS</div>
            <div class="titulo_service">
                <div>
                    <h2><span>Ki</span> <br>
                        Serviços</h2>
                </div>

                <p>Oferecemos uma gama completa de serviços automotivos, voltados para garantir o desempenho, a
                    segurança e a durabilidade do seu veículo. Desde manutenções preventivas até reparos
                    especializados, nossa equipe de profissionais qualificados utiliza tecnologia de ponta para
                    entregar resultados rápidos e eficientes.</p>
            </div>
            <div class="espacomin"></div>
            <div>
                <a href="">Ver todos os Serviços</a>

            </div>


        </div>



        <div class="ki-servicos-itens">
            <div class="servico">
 
                <?php  foreach ($servicos as $servico): ?>
                    <div class="ki-servicos-card">
                        <a class="img_card_servico" href="#">
                            <img src=" <?php
                            $caminhoArquivo = $_SERVER['DOCUMENT_ROOT'] . "/kioficina/public/uploads/" . $servico['foto_galeria'];
                            if ($servico['foto_galeria'] != ""){
                                if (file_exists($caminhoArquivo)){
                                    echo "http://localhost/kioficina/public/uploads/" . htmlspecialchars($servico['foto_galeria'], ENT_QUOTES, 'UTF-8');
                                }else{
                                
                                echo("http://localhost/kioficina/public/uploads/galeria/sem_foto_servico.png");

                                }

                            }else{
                                echo("http://localhost/kioficina/public/uploads/galeria/sem_foto_servico.png");

                            }
                            ?>" alt="...">
                        </a>
                        <div class="servico-card-info">
                            <a href="#" class="card-titulo">
                                <?php  echo htmlspecialchars($servico['nome_servico'], ENT_QUOTES,'UTF-8') ;?>
                            </a>
                            <p class="card-desc">
                                <?php  echo htmlspecialchars($servico['descricao_servico'], ENT_QUOTES,'UTF-8') ;?>
                            </p>
                            <a href="#">ver mais</a>
                        </div>
                    </div>

                <?php  endforeach?>
 
           
 
            </div>
        </div>
        

        



    </article>
</section>


