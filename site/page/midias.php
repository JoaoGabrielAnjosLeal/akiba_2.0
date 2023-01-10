<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script defer>
    //Altera o titulo da página no navegador
    $('title').text('Rede Akiba | Mídias');

    //Comportamento dos players na página
    $('.player-top').hide();
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'});
    
    //Tema da página
    switch(Cookies.get('akiba-theme')){
        case 'light-theme':
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#e6e6e6'});
                }
                else{
                    $('.body').css({'background': 'linear-gradient(180deg, #e6e6e6 25rem, #f8f8f8 0%)'});
                };
            $(window).on('resize', function(){
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#e6e6e6'});
                }
                else{
                    $('.body').css({'background': 'linear-gradient(180deg, #e6e6e6 25rem, #f8f8f8 0%)'});
                };
            });

            $('.survey-content > h6 , .survey-content > form > div > label, .survey-content > form > button, .events-localization, .events-date').css({'color':'#ffebd7'})
        break;
        case 'dark-theme':
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#1a1a1a'});
                }
                else{
                    $('.body').css({'background': 'linear-gradient(180deg, #000000 25rem, #1a1a1a 0%)'});
                };
            $(window).on('resize', function(){
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#1a1a1a'});
                }
                else{
                    $('.body').css({'background': 'linear-gradient(180deg, #000000 25rem, #1a1a1a 0%)'});
                };
            });

            $('.survey-content > h6 , .survey-content > form > div > label, .survey-content > form > button, .events-localization, .events-date').css({'color':'#ffebd7'})
        break;
        default:
            if(window.screen.width < '992'){
                    $('.body').css({'background': '#050505'});
                }
                else{
                    $('.body').css({'background': 'linear-gradient(180deg, #050505 25rem, #0e1139 0%)'});
                };
            $(window).on('resize', function(){
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#050505'});
                }
                else{
                    $('.body').css({'background': 'linear-gradient(180deg, #050505 25rem, #0e1139 0%)'});
                };
            });

            $('.survey-content > h6 , .survey-content > form > div > label, .survey-content > form > button, .events-localization, .events-date').css({'color':''})
        break;
    }
</script>

<!---------------------------------CONTEÚDO DA PÁGINA--------------------------------->
<div class="container">

    <div class="row mb-4 mb-lg-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="survey">
                <div class="survey-title position-relative">
                    <h6 class="text-uppercase">Enquetes</h6>
                </div>
                <div class="survey-container d-flex flex-wrap gap-3 justify-content-center mt-3">
                    <div class="survey-content p-2">
                        <h6 class="survey-title text-uppercase text-center">Qual seria a melhor waifu de 2023 na sua opinião sincera?</h6>
                        <form>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-01" id="opcao-01" aria-label="#">
                                <label class="form-check-label" for="opcao-01">Waifuzinha Generica - Anime Ruim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-02" id="opcao-02" aria-label="#">
                                <label class="form-check-label" for="opcao-02">Ruivinha - ACRON X Mafalda da Quebrada </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-03" id="opcao-03" aria-label="#">
                                <label class="form-check-label" for="opcao-03">Aquela lá, até gostei mais não indico</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-04" id="opcao-04" aria-label="#">
                                <label class="form-check-label" for="opcao-04">Peituda - anime do haren</label>
                            </div>
                            <button type="submit" class="btn text-uppercase mt-2 border-0" aria-label="Votar"><i class="bi bi-send-fill"></i>&nbsp;Votar nessa enquete</button>
                        </form>
                    </div>
                    <div class="survey-content p-2">
                        <h6 class="survey-title text-uppercase text-center">Qual seria a melhor waifu de 2023 na sua opinião sincera?</h6>
                        <form>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-01" id="opcao-01" aria-label="#">
                                <label class="form-check-label" for="opcao-01">Waifuzinha Generica - Anime Ruim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-02" id="opcao-02" aria-label="#">
                                <label class="form-check-label" for="opcao-02">Ruivinha - ACRON X Mafalda da Quebrada </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-03" id="opcao-03" aria-label="#">
                                <label class="form-check-label" for="opcao-03">Aquela lá, até gostei mais não indico</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-04" id="opcao-04" aria-label="#">
                                <label class="form-check-label" for="opcao-04">Peituda - anime do haren</label>
                            </div>
                            <button type="submit" class="btn text-uppercase mt-2 border-0" aria-label="Votar"><i class="bi bi-send-fill"></i>&nbsp;Votar nessa enquete</button>
                        </form>
                    </div>
                    <div class="survey-content p-2">
                        <h6 class="survey-title text-uppercase text-center">Qual seria a melhor waifu de 2023 na sua opinião sincera?</h6>
                        <form>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-01" id="opcao-01" aria-label="#">
                                <label class="form-check-label" for="opcao-01">Waifuzinha Generica - Anime Ruim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-02" id="opcao-02" aria-label="#">
                                <label class="form-check-label" for="opcao-02">Ruivinha - ACRON X Mafalda da Quebrada </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-03" id="opcao-03" aria-label="#">
                                <label class="form-check-label" for="opcao-03">Aquela lá, até gostei mais não indico</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opcao-04" id="opcao-04" aria-label="#">
                                <label class="form-check-label" for="opcao-04">Peituda - anime do haren</label>
                            </div>
                            <button type="submit" class="btn text-uppercase mt-2 border-0" aria-label="Votar"><i class="bi bi-send-fill"></i>&nbsp;Votar nessa enquete</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="events">
                <div class="events-title position-relative">
                    <h6 class="text-uppercase">Eventos próximos a acontecer</h6>
                </div>
                <div class="events-container d-flex flex-wrap justify-content-center gap-2 mt-3">
                    <div class="events-content">
                        <img class="events-thumb mb-2" src="https://estacaogeek.com.br/wp-content/uploads/2017/04/AF-2016-banner.jpg" alt="Thumb do Evento" loading="lazy">
                        <h6 class="events-localization">Barra do Piraí - RJ</h6>
                        <h6 class="events-date">15, 16, 17 de Dezembro</h6>
                    </div>
                    <div class="events-content">
                        <img class="events-thumb mb-2" src="https://estacaogeek.com.br/wp-content/uploads/2017/04/AF-2016-banner.jpg" alt="Thumb do Evento" loading="lazy">
                        <h6 class="events-localization">Barra do Piraí - RJ</h6>
                        <h6 class="events-date">15, 16, 17 de Dezembro</h6>
                    </div>
                    <div class="events-content">
                        <img class="events-thumb mb-2" src="https://estacaogeek.com.br/wp-content/uploads/2017/04/AF-2016-banner.jpg" alt="Thumb do Evento" loading="lazy">
                        <h6 class="events-localization">Barra do Piraí - RJ</h6>
                        <h6 class="events-date">15, 16, 17 de Dezembro</h6>
                    </div>
                    <div class="events-content">
                        <img class="events-thumb mb-2" src="https://estacaogeek.com.br/wp-content/uploads/2017/04/AF-2016-banner.jpg" alt="Thumb do Evento" loading="lazy">
                        <h6 class="events-localization">Barra do Piraí - RJ</h6>
                        <h6 class="events-date">15, 16, 17 de Dezembro</h6>
                    </div>
                    <div class="events-content">
                        <img class="events-thumb mb-2" src="https://estacaogeek.com.br/wp-content/uploads/2017/04/AF-2016-banner.jpg" alt="Thumb do Evento" loading="lazy">
                        <h6 class="events-localization">Barra do Piraí - RJ</h6>
                        <h6 class="events-date">15, 16, 17 de Dezembro</h6>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="youtube-videos">
                <div class="youtube-videosTitle position-relative">
                    <h6 class="text-uppercase">Últimos no Youtube</h6>
                </div>
                <div class="youtube-videosContainer d-flex flex-wrap gap-2 mt-3">
                    <iframe src="https://www.youtube.com/embed/QgPaBb0UCc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/QgPaBb0UCc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/QgPaBb0UCc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/QgPaBb0UCc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="streamingVideo">
                <div class="streamingVideo-title position-relative">
                    <h6 class="text-uppercase">Transmissão ao vivo em vídeo</h6>
                </div>
                <div class="streamingVideo-container d-flex flex-wrap gap-2 mt-3">
                    <iframe src="https://player.twitch.tv/?channel=redeakiba&parent=www.example.com" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
                </div>
            </section>
        </div>
    </div>

</div>