<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script>
    //Altera o titulo da página no navegador
    $('title').text('Rede Akiba | Contatos');

    //Comportamento dos players na página
    $('.player-top').hide();
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'});
    
    //Tema da página
    switch(Cookies.get('akiba-theme')){
        case 'light-theme':
            $('.body').css({'background': '#e6e6e6'});
            
            $('.advertise').css({'background-color': '#EDEDED'});

            $('.block-description').css({'color': '#000000'});

            $('.recruitment-requirement > h6, .recruitment-form > div > label, .advertise-form > div > label, .partner-form > div > label').css({'color': '#000000'});

            $('.guidelines > div > button').css({'color': '#ffebd7'});
        break;
        case 'dark-theme':
            $('.body').css({'background': '#1a1a1a'});
            
            $('.advertise').css({'background-color': '#000000'});

            $('.block-description').css({'color': '#ffebd7'});

            $('.recruitment-requirement > h6, .recruitment-form > div > label, .advertise-form > div > label, .partner-form > div > label').css({'color': '#ffebd7'});

            $('.guidelines > div > button').css({'color': '#ffebd7'});
        break;
        default:
            $('.body').css({'background': '#00061a'});

            $('.advertise').css({'background-color': ''});

            $('.block-description').css({'color': '#ffebd7'});

            $('.recruitment-requirement > h6, .recruitment-form > div > label, .advertise-form > div > label, .partner-form > div > label').css({'color': ''});

            $('.guidelines > div > button').css({'color': ''});
        break;
    }
</script>

<!---------------------------------CONTEÚDO DA PÁGINA--------------------------------->
<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xll-8">
            <section class="block-start">
                <div class="block-container">
                    <h6 class="block-title text-center text-uppercase">Entre para a equipe</h6>
                </div>
                <p class="block-description text-center text-uppercase">Só preencher o formulário com criatividade e esperar a gente responder!</p>
            </section>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="recruitment-title position-relative">
                <h6 class="text-uppercase">É só preencher o formulário</h6>
            </section>
        </div>
    </div>

    <div class="row mt-2 mb-4">
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 mb-3 mb-lg-0">
            <section class="recruitment-requirement">
                <h6 class="text-center text-uppercase">Tenha certeza de:</h6>
                <ul>
                    <li class="text-uppercase">Ter mais de 15 anos de idade</li>
                    <li class="text-uppercase">Ter um bom microfone</li>
                    <li class="text-uppercase">Ter uma boa oralidade e dissertação</li>
                    <li class="text-uppercase">Conhecer parte técnica dos animes</li>
                    <li class="text-uppercase">Ter um espaço sem ruidos</li>
                    <li class="text-uppercase">Estar sempre livre aos sábados 3 da tarde</li>
                    <li class="text-uppercase">Ter responsabilidade</li>
                </ul>
            </section>
            <section class="guidelines mt-3">
                <p>
                    A REDE AKIBA trabalha de forma independente, porém seguindo certas diretrizes, portanto sua participação também terá de seguí-las.
                    Logo abaixo tem um PDF com todas as diretrizes, se concordar com elas pode seguir sua inscrição.
                </p>
                <div class="d-flex justify-content-center"><button class="btn text-uppercase">Diretrizes_rede_akiba</button></div>
            </section>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
            <form class="recruitment-form">
                <div class="mb-3">
                    <label for="cargo" class="form-label text-uppercase">Qual cargo você quer exercer?</label>
                    <select class="form-control shadow-none border-0" id="cargo" aria-label="Cargo">
                        <option selected>Selecione um cargo</option>
                        <option value="locutor">Locutor</option>
                        <option value="podcaster">Podcaster</option>
                        <option value="youtuber">Youtuber</option>
                        <option value="colunista">Colunistas</option>
                        <option value="webeart">Web & Art</option>
                        <option value="streamer">Streamer</option>
                        <option value="socialmidia">Social Media</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label text-uppercase">Qual é seu nome completo?</label>
                    <input type="text" class="form-control shadow-none border-0" id="nome" aria-label="Nome completo" required>
                </div>
                <div class="mb-3">
                    <label for="apelido" class="form-label text-uppercase">Qual é seu apelido/nickname?</label>
                    <input type="text" class="form-control shadow-none border-0" id="apelido" aria-label="Apelido / nickname" required>
                </div>
                <div class="mb-3">
                    <label for="idade" class="form-label text-uppercase">Quando você nasceu?</label>
                    <input type="date" class="form-control shadow-none border-0" id="idade" aria-label="Data de nascimento" required>
                </div>
                <div class="mb-3">
                    <label for="trabalhos" class="form-label text-uppercase">Tem alguns trabalhos que a gente possa ver? Coloca os links ai pra gente!</label>
                    <textarea class="form-control shadow-none border-0" id="trabalhos" rows="3" aria-label="Trabalhos"></textarea>
                </div>
                <div class="mb-3">
                    <label for="contato" class="form-label text-uppercase">Coloca um contato ai pra gente!</label>
                    <input type="text" class="form-control shadow-none border-0" id="contato" aria-label="Contato" required>
                </div>
                <div class="mb-3">
                    <label for="discord" class="form-label text-uppercase">Fala ai! Qual é o seu nick no Discord?</label>
                    <input type="text" class="form-control shadow-none border-0" id="discord" aria-label="Discord" required>
                </div>
                <div class="mb-3">
                    <label for="preentrevista" class="form-label text-uppercase">Hora da pré entrevista! Por quê você quer entrar na Akiba?</label>
                    <textarea class="form-control shadow-none border-0" id="preentrevista" rows="5" aria-label="Motivo de ingresso na equipe" required></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn text-uppercase" aria-label="Enviar">Enviar minha inscrição</button>
                </div>
            </form>
        </div>
    </div>


</div>

<div class="advertise pt-4 pb-4 mb-4">

    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xll-8">
                <section class="block-start">
                    <div class="block-container">
                        <h6 class="block-title text-center text-uppercase">Quer anunciar na akiba?</h6>
                    </div>
                    <p class="block-description text-center text-uppercase">Tem várias formas de anunciar, é só escolher a que se encaixa com seu produto!</p>
                </section>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="advertise-title position-relative">
                    <h6 class="text-uppercase">No nosso site?</h6>
                </section>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-3 mb-lg-0">
                <form class="advertise-form">
                    <div class="mb-3">
                        <label for="empresa" class="form-label text-uppercase">Quem é você / sua empresa?</label>
                        <input type="text" class="form-control shadow-none border-0" id="empresa" aria-label="Empresa ou nome">
                    </div>
                    <div class="mb-3">
                        <label for="formas" class="form-label text-uppercase">Como quer anunciar?</label>
                        <select class="form-control shadow-none border-0" id="formas" aria-label="Formas de anunciar">
                            <option selected>Selecione uma opção</option>
                            <option value="banners">Em banners dentro do site</option>
                            <option value="programacao">Nos intervalos gerais na programação da rádio</option>
                            <option value="programa">Em um único programa da rádio</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tempo" class="form-label text-uppercase">Vai anunciar até o dia?</label>
                        <input type="date" class="form-control shadow-none border-0" id="tempo" aria-label="Tempo de duração do anúncio">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn text-uppercase" aria-label="Enviar">Pedir uma avaliação</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <section class="guidelines mt-3">
                    <p>
                        A REDE AKIBA trabalha de forma independente, porém seguindo certas diretrizes, portanto os anúncios também terá de seguí-las.
                        Logo abaixo tem um PDF com todas as diretrizes, se concordar com elas pode seguir com a inscrição do seu anúncio.
                    </p>
                    <div class="d-flex justify-content-center"><button class="btn text-uppercase">Diretrizes_rede_akiba</button></div>
                </section>
            </div>
        </div>

    </div>

</div>

<div class="container mb-4">

        <div class="row d-flex justify-content-center">
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xll-9">
                <section class="block-start">
                    <div class="block-container">
                        <h6 class="block-title text-center text-uppercase">Quer fazer parceria?</h6>
                    </div>
                    <p class="block-description text-center text-uppercase">Tem várias formas de fazer parceria, é só pedir uma avaliação e esperar a gente responder!</p>
                </section>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="partner-title position-relative">
                    <h6 class="text-uppercase">No nosso site?</h6>
                </section>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-3 mb-lg-0">
                <form class="partner-form">
                    <div class="mb-3">
                        <label for="player" class="form-label text-uppercase d-flex justify-content-center">É só colocar nosso player em seu site!</label>
                        <textarea class="form-control shadow-none border-0" id="player" rows="7" aria-label="Código do player"></textarea>
                    </div>
                </form>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <form class="partner-form">
                    <div class="mb-3">
                        <label for="site" class="form-label text-uppercase">Nos diga qual é o seu site, blog, página ou perfil?</label>
                        <input type="text" class="form-control shadow-none border-0" id="site" aria-label="Site, blog, página, perfil">
                    </div>
                    <div class="mb-3">
                        <label for="contato" class="form-label text-uppercase">Coloca um contato ai pra gente</label>
                        <input type="text" class="form-control shadow-none border-0" id="contato" aria-label="Contato">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn text-uppercase" aria-label="Enviar>Pedir uma avaliação</button>
                    </div>
                </form>
            </div>
        </div>

    </div>