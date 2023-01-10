<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script defer>
    //Altera o titulo da página no navegador
    $('title').text('Rede Akiba | Rádio');

    //Comportamento dos players na página
    $('.player-top').hide();
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'});
    
    //Tema da página
    switch(Cookies.get('akiba-theme')){
        case 'light-theme':
            $('.body').css({'background': '#e6e6e6'});

            $('.block-description').css({'color': '#000000'});

            $('.playlistsBattle').css({'background-color':'#f8f8f8'});

            $('.rankingOne-title, .rankingOne-titleSpan, .rankingTwo-table > tbody > tr > td > h6, .rankingTwo-table > tbody > tr > td > span').css({'color': '#000000'});
            $('.rankingOne-music, .rankingOne-singer, .rankingOne-anime').css({'color': '#ffebd7'})
            $('.rankingTwo-table > tbody > tr > td > div').css({'border-right':'0.1rem solid #000000'});
            $('.rankingTwo-table').css({'border-top': '0.1rem solid #000000'});
            $('.rankingTwo-table > tbody > tr').css({'border-bottom': '0.1rem solid #000000'});
            $('.rankingThree-item').css({'background-color': '#ff9d17', 'color': '#ffebd7'})

            $('.listenerMonth').css({'background-color':'#f8f8f8'});
            $('.listenerMonth-information').css({'color': '#00000'});
        break;
        case 'dark-theme':
            $('.body').css({'background': '#1a1a1a'});

            $('.block-description').css({'color': '#ffebd7'});

            $('.playlistsBattle').css({'background-color':'#000000'});

            $('.rankingOne-title, .rankingOne-titleSpan, .rankingTwo-table > tbody > tr > td > h6, .rankingTwo-table > tbody > tr > td > span').css({'color': '#ffebd7'});
            $('.rankingOne-music, .rankingOne-singer, .rankingOne-anime, .rankingThree-item').css({'color': '#ffebd7'})
            $('.rankingTwo-table > tbody > tr > td > div').css({'border-right':'0.1rem solid #ffebd7'});
            $('.rankingTwo-table').css({'border-top': '0.1rem solid #ffebd7'});
            $('.rankingTwo-table > tbody > tr').css({'border-bottom': '0.1rem solid #ffebd7'});
            $('.rankingThree-item').css({'background-color': '', 'color': '#ffebd7'})

            $('.listenerMonth').css({'background-color':'#000000'});
            $('.listenerMonth-information').css({'color': '#ffebd7'});
        break;
        default:
            $('.body').css({'background': '#050505'});

            $('.block-description').css({'color': ''});

            $('.playlistsBattle').css({'background-color':''});

            $('.rankingOne-title, .rankingOne-titleSpan, .rankingTwo-table > tbody > tr > td > h6, .rankingTwo-table > tbody > tr > td > span').css({'color': ''});
            $('.rankingOne-music, .rankingOne-singer, .rankingOne-anime, .rankingThree-item').css({'color': ''})
            $('.rankingTwo-table > tbody > tr > td > div').css({'border-right':''});
            $('.rankingTwo-table').css({'border-top': '0.1rem solid #ffebd7'});
            $('.rankingTwo-table > tbody > tr').css({'border-bottom': ''});
            $('.rankingThree-item').css({'background-color': '', 'color': ''})

            $('.listenerMonth').css({'background-color':''});
            $('.listenerMonth-information').css({'color': ''});
        break;
    }

</script>

<!---------------------------------CONTEÚDO DA PÁGINA--------------------------------->
<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xll-10">
            <section class="block-start">
                <div class="block-container">
                    <h6 class="block-title text-center text-uppercase">Programação</h6>
                </div>
                <p class="block-description text-center text-uppercase">Tá ligado que só pode fazer pedido quando tem programa ao vivo? Então aqui você ve os horário tudo!</p>
            </section>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="schedule-title position-relative">
                <h6 class="text-uppercase">Os ao vivo e os gravados</h6>
            </section>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
            <section class="schedule d-flex flex-wrap gap-3 justify-content-center mb-3 mb-md-0">
                <div class="schedule-container position-relative">
                    <div class="schedule-day">
                        <h5 class="text-uppercase text-center m-0">Quarta-Feira</h5>
                        <h6 class="text-uppercase text-center m-0">10 da noite</h6>
                    </div>
                    <div class="schedule-streamer">
                        <h5 class="text-uppercase m-0">Com:</h5>
                        <h6 class="text-uppercase m-0">Roger Ventura</h6>
                    </div>
                    <img class="schedule-programLogo position-absolute" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_programa.webp" loading="lazy" alt="Programa do DJ">
                    <img class="schedule-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do DJ do programa">
                </div>
                <div class="schedule-container position-relative">
                    <div class="schedule-day">
                        <h5 class="text-uppercase text-center m-0">Quarta-Feira</h5>
                        <h6 class="text-uppercase text-center m-0">1 da noite</h6>
                    </div>
                    <div class="schedule-streamer">
                        <h5 class="text-uppercase m-0">Com:</h5>
                        <h6 class="text-uppercase m-0">Roger Ventura</h6>
                    </div>
                    <img class="schedule-programLogo position-absolute" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_programa.webp" loading="lazy" alt="Programa do DJ">
                    <img class="schedule-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do DJ do programa">
                </div>
                <div class="schedule-container position-relative">
                    <div class="schedule-day">
                        <h5 class="text-uppercase text-center m-0">Quarta-Feira</h5>
                        <h6 class="text-uppercase text-center m-0">1 da noite</h6>
                    </div>
                    <div class="schedule-streamer">
                        <h5 class="text-uppercase m-0">Com:</h5>
                        <h6 class="text-uppercase m-0">Roger Ventura</h6>
                    </div>
                    <img class="schedule-programLogo position-absolute" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_programa.webp" loading="lazy" alt="Programa do DJ">
                    <img class="schedule-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do DJ do programa">
                </div>
                <div class="schedule-container position-relative">
                    <div class="schedule-day">
                        <h5 class="text-uppercase text-center m-0">Quarta-Feira</h5>
                        <h6 class="text-uppercase text-center m-0">1 da noite</h6>
                    </div>
                    <div class="schedule-streamer">
                        <h5 class="text-uppercase m-0">Com:</h5>
                        <h6 class="text-uppercase m-0">Roger Ventura</h6>
                    </div>
                    <img class="schedule-programLogo position-absolute" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_programa.webp" loading="lazy" alt="Programa do DJ">
                    <img class="schedule-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do DJ do programa">
                </div>
            </section>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <div class="announcement-horizontal bg-dark">teste</div>
        </div>
    </div>

</div>

<div class="playlistsBattle mb-4">

    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <section class="playlistsBattle-container pt-3">
                <div class="playlistsBattle-title position-relative">
                    <h6 class="text-uppercase">Batalha de Playlists</h6>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide mt-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_batalha.webp" class="d-block w-100" loading="lazy" alt="Batalha de Domingo">
                        </div>
                        <div class="carousel-item active">
                            <img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_batalha.webp" class="d-block w-100" loading="lazy" alt="Batalha da segunda-feira">
                        </div>
                        <div class="carousel-item active">
                            <img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_batalha.webp" class="d-block w-100" loading="lazy" alt="Batalha da terça-feira">
                        </div>
                        <div class="carousel-item active">
                            <img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_batalha.webp" class="d-block w-100" loading="lazy" alt="Batalha da quarta-feira">
                        </div>
                        <div class="carousel-item active">
                            <img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_batalha.webp" class="d-block w-100" loading="lazy" alt="Batalha da quinta-feira">
                        </div>
                        <div class="carousel-item active">
                            <img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_batalha.webp" class="d-block w-100" loading="lazy" alt="Batalha da sexta-feira">
                        </div>
                        <div class="carousel-item active">
                            <img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_batalha.webp" class="d-block w-100" loading="lazy" alt="Batalha do sábado">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</div>

<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xll-8">
            <section class="block-start">
                <div class="block-container">
                    <h6 class="block-title text-center text-uppercase">Akiba Ranking</h6>
                </div>
                <p class="block-description text-center text-uppercase">Aqui tem todos os rankings e informações sobre o que toca em nossa rádio</p>
            </section>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="rankingOne">
                <div class="rankingOne-title position-relative">
                    <h6 class="text-uppercase">As mais pedidas da Akiba</h6>
                </div>
                <div class="rankingOne-container d-flex justify-content-center gap-4 mb-4">
                    <div class="rankingOne-content">
                        <h6 class="rankingOne-title text-uppercase text-center">2º Lugar <span class="rankingOne-titleSpan">3000 Pedidos</span></h6>
                        <h6 class="rankingOne-music text-uppercase">Fantastic Dreamer</h6>
                        <img class="rankingOne-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do ranking">
                        <h6 class="rankingOne-singer text-uppercase">Cantor/Anime: Machico</h6>
                        <h6 class="rankingOne-anime text-uppercase">Anime | Konosubarashii isekai seikatsu</h6>
                    </div>
                    <div class="rankingOne-content">
                        <h6 class="rankingOne-title text-uppercase text-center">3º Lugar <span class="rankingOne-titleSpan">3000 Pedidos</span></h6>
                        <h6 class="rankingOne-music text-uppercase">THE DAY</h6>
                        <img class="rankingOne-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do ranking">
                        <h6 class="rankingOne-singer text-uppercase">Cantor/Anime: Porno Graffitti</h6>
                        <h6 class="rankingOne-anime text-uppercase">Anime | Boku no Hero Academia</h6>
                    </div>                    <div class="rankingOne-content">
                        <h6 class="rankingOne-title text-uppercase text-center">1º Lugar <span class="rankingOne-titleSpan">3000 Pedidos</span></h6>
                        <h6 class="rankingOne-music text-uppercase">KUUSOU MESOWOGIWI</h6>
                        <img class="rankingOne-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do ranking">
                        <h6 class="rankingOne-singer text-uppercase">Cantor/Anime: YOUSEI TEIKOKU</h6>
                        <h6 class="rankingOne-anime text-uppercase">Anime | Mirai Nikki</h6>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row mt-4 mb-4">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
            <table class="rankingTwo-table table">
                <tbody>
                    <tr>
                        <td>
                            <h6 class="text-uppercase text-center m-0">3º Lugar</h6>
                            <span class="d-block text-uppercase text-center">3000 pedidos</span>
                            <div></div>
                        </td>
                        <td>
                            <h6 class="text-center text-uppercase m-0">Fantastic Dreamer</h6>
                            <div class="d-flex justify-content-between border-0"><h6 class="text-uppercase">Cantor/Banda: Machico</h6><h6 class="text-uppercase">Anime | Konosuba</h6></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-uppercase text-center m-0">4º Lugar</h6>
                            <span class="d-block text-uppercase text-center">3000 pedidos</span>
                            <div></div>
                        </td>
                        <td>
                            <h6 class="text-center text-uppercase m-0">Kuusou Mesowogiwi</h6>
                            <div class="d-flex justify-content-between border-0"><h6 class="text-uppercase">Cantor/Banda: Yousei Teikoku</h6><h6 class="text-uppercase">Anime | Mirai Nikki</h6></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-uppercase text-center m-0">5º Lugar</h6>
                            <span class="d-block text-uppercase text-center">3000 pedidos</span>
                            <div></div>
                        </td>
                        <td>
                            <h6 class="text-center text-uppercase m-0">The Day</h6>
                            <div class="d-flex justify-content-between border-0"><h6 class="text-uppercase">Cantor/Banda: Porno Graffiti</h6><h6 class="text-uppercase text-align-end">Anime | Boku no Hero Academia</h6></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-uppercase text-center m-0">6º Lugar</h6>
                            <span class="d-block text-uppercase text-center">3000 pedidos</span>
                            <div></div>
                        </td>
                        <td>
                            <h6 class="text-center text-uppercase m-0">SOUVENIR</h6>
                            <div class="d-flex justify-content-between border-0"><h6 class="text-uppercase">Cantor/Banda: BUMP OF CHICKEN</h6><h6 class="text-uppercase">Anime | SPY x Family</h6></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-uppercase text-center m-0">7º Lugar</h6>
                            <span class="d-block text-uppercase text-center">3000 pedidos</span>
                            <div></div>
                        </td>
                        <td>
                            <h6 class="text-center text-uppercase m-0">KICK BACK</h6>
                            <div class="d-flex justify-content-between border-0"><h6 class="text-uppercase">Cantor/Banda: Kenshi Yonezu</h6><h6 class="text-uppercase">Anime | Chainsaw Man</h6></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-uppercase text-center m-0">8º Lugar</h6>
                            <span class="d-block text-uppercase text-center">3000 pedidos</span>
                            <div></div>
                        </td>
                        <td>
                            <h6 class="text-center text-uppercase m-0">Seishun Complex</h6>
                            <div class="d-flex justify-content-between border-0"><h6 class="text-uppercase">Cantor/Banda: Kessoku Band</h6><h6 class="text-uppercase">Anime | Bocchi the Rock!</h6></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-uppercase text-center m-0">9º Lugar</h6>
                            <span class="d-block text-uppercase text-center">3000 pedidos</span>
                            <div></div>
                        </td>
                        <td>
                            <h6 class="text-center text-uppercase m-0">Scar</h6>
                            <div class="d-flex justify-content-between border-0"><h6 class="text-uppercase">Cantor/Banda: Tatsuya Kitani</h6><h6 class="text-uppercase">Anime | Bleach: Sennen Kessen-hen</h6></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-uppercase text-center m-0">10º Lugar</h6>
                            <span class="d-block text-uppercase text-center">3000 pedidos</span>
                            <div></div>
                        </td>
                        <td>
                            <h6 class="text-center text-uppercase m-0">Itsuka no Kioku</h6>
                            <div class="d-flex justify-content-between border-0"><h6 class="text-uppercase">Cantor/Banda: Azumi Waki</h6><h6 class="text-uppercase">Anime | Kuma Kuma Kuma Bear</h6></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <ul class="rankingThree m-0 p-0 mb-3 d-lg-none">
                <li class="rankingThree-item">1º Lugar | </li>
                <li class="rankingThree-item">2º Lugar | </li>
                <li class="rankingThree-item">3º Lugar | </li>
                <li class="rankingThree-item">4º Lugar | </li>
                <li class="rankingThree-item">5º Lugar | </li>
                <li class="rankingThree-item">6º Lugar | </li>
                <li class="rankingThree-item">7º Lugar | </li>
                <li class="rankingThree-item">8º Lugar | </li>
                <li class="rankingThree-item">9º Lugar | </li>
                <li class="rankingThree-item">10º Lugar | </li>
            </ul>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <div class="announcement-horizontal bg-dark">teste</div>
        </div>
    </div>

</div>

<div class="listenerMonth mb-4">

    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <section class="listenerMonth-container pt-3">
                <div class="listenerMonth-title position-relative">
                    <h6 class="text-uppercase">Ouvinte do mês</h6>
                </div>
                <div class="listenerMonth-content">
                    <div class="listenerMonth-name d-flex justify-content-center">
                        <div class="block-start">
                            <div class="block-container">
                                <h6 class="block-title text-center text-uppercase">Ellyson Santos</h6>
                            </div>
                        </div>
                    </div>
                    <p class="listenerMonth-information">
                        Conteúdo do ouvinte do mês
                    </p>
                    <img class="listenerMonth-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do ranking">
                </div>
            </section>
        </div>
    </div>
    
</div>