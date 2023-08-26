<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-7">
                <p class="apresentation">
                Somos uma empresa focada em serviços de usinagem e mandrilhamento na Região Metropolitana do Vale do Paraíba
            Localizada no Jardim Diamante, próxima a Petrobrás em São José dos Campos (Zona Leste). 
                </p>
                <p class="apresentation-two">
                Contamos com uma equipe focada na qualidade do produto e excelência no processo de usinagem, em nossos aparatos contamos com a Mandrilhadora floor type  TOS WD130, fresadoras modelo ROMI Universal.
                </p>
            </div>

            <div class="col-sm-5 ml-sm-auto image-slider">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/wpp.png" alt="1">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/fresadora.png" alt="2">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>