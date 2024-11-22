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
                <?php foreach ($especialidades as $especialidade): ?>
                    <h3><?php echo htmlspecialchars($especialidade['nome_especialidade'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <!-- <h3>Tecnologia de Ponta</h3>
                    <h3>Peças de Qualidade</h3>
                    <h3>Atendimento Personalizado</h4> -->

                <?php endforeach ?>
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