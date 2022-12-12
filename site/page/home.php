<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script async defer>
//Altera o título da página no navegador 
$('title').text('Rede Akiba - O Paraíso dos Otakus! | Sua Melhor Fonte de Animes (e Mangás) no Brasil!');
    
//Comportamento dos players na página
$('.player-top').show();
$('.player-footer').hide();
$('.footer').css({'margin': ''}).show();
if(window.screen.width < '992'){
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'}).show();
}

//Tema da página
switch(Cookies.get('akiba-theme')){
    case 'light-theme':
        if(window.screen.width < '992'){
            $('.body').css({'background': '#e6e6e6'});
        }else{
            $('.body').css({'background': 'linear-gradient(180deg, #e6e6e6 41rem, #f8f8f8 0%)'});
        };
        $(window).on('resize', function(){
            if(window.screen.width < '992'){
                $('.body').css({'background': '#e6e6e6'});
            }else{
                $('.body').css({'background': 'linear-gradient(180deg, #e6e6e6 41rem, #f8f8f8 0%)'});
            };
        });

        $('.highLight-title, .highlight-count, .review-title, .postList-count, .postList-creditsAuthor, .postList-creditsDate, .calendar-table > tbody > tr > td, .akibacast-title').css({'color':'#ffebd7'});
        $('.highLight-tagIcon').css({'filter': 'invert(88%) sepia(9%) saturate(801%) hue-rotate(329deg) brightness(106%) contrast(102%)'});
    break;
    case 'dark-theme':
        if(window.screen.width < '992'){
            $('.body').css({'background': '#1a1a1a'});
        }else{
            $('.body').css({'background': 'linear-gradient(180deg, #000000 41rem, #1a1a1a 0%)'});
        };
        $(window).on('resize', function(){
            if(window.screen.width < '992'){
            $('.body').css({'background': '#1a1a1a'});
            }else{
                $('.body').css({'background': 'linear-gradient(180deg, #000000 41rem, #1a1a1a 0%)'});
            };
        });

        $('.highLight-title, .highlight-count, .review-title, .postList-count, .postList-creditsAuthor, .postList-creditsDate, .calendar-table > thead > tr > th, .calendar-table > tbody > tr > td, .akibacast-title').css({'color':'#ffebd7'});
        $('.highLight-tagIcon, .postList-tagIcon').css({'filter': 'invert(88%) sepia(9%) saturate(801%) hue-rotate(329deg) brightness(106%) contrast(102%)'});

        $('.postList-article').css({'border-bottom': '0.1rem solid #ffebd7'});
    break;
    default:
        if(window.screen.width < '992'){
            $('.body').css({'background': ''});
        }else{
            $('.body').css({'background': ''});
        };
        $(window).on('resize', function(){
            if(window.screen.width < '992'){
            $('.body').css({'background': ''});
            }else{
                $('.body').css({'background': ''});
            };
        });

        $('.highLight-title, .highlight-count, .review-title, .postList-count, .postList-creditsAuthor, .postList-creditsDate, .calendar-table > thead > tr > th, .calendar-table > tbody > tr > td, .akibacast-title').css({'color':''});
        $('.highLight-tagIcon, .postList-tagIcon').css({'filter': ''});

        $('.postList-article').css({'border-bottom': ''});
    break;
}
</script>


<!---------------------------------CONTEÚDO DA PÁGINA--------------------------------->
<div class="container mt-4 mt-lg-5">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="highLight">
                <div class="highLight-title position-relative">
                    <h6 class="text-uppercase">Destaques da Akiba</h6>
                </div>
                <div class="highLight-container d-flex flex-wrap justify-content-center gap-2 mt-4">
                    <article class="highLight-article position-relative">
                        <img class="highLight-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do destaque">
                        <h6 class="highLight-title text-uppercase">Kanojo Okarishimasu – Figure sensual da Chizuru anima otakus e sei lá o que vamos fazer e isso ai é o que vamos fazer</h6>
                        <div class="highLight-tag">
                            <img class="highLight-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Notícias.svg" loading="lazy" alt="Icone da tag do destaque">
                            <img class="highLight-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Mangás.svg" loading="lazy" alt="Icone da tag do destaque">
                        </div>
                        <div class="highLight-count position-absolute"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;100%</div>
                    </article>
                    <article class="highLight-article position-relative">
                        <img class="highLight-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do destaque">
                        <h6 class="highLight-title text-uppercase">Kanojo Okarishimasu – Figure sensual da Chizuru anima otakus e sei lá o que vamos fazer e isso ai é o que vamos fazer</h6>
                        <div class="highLight-tag">
                            <img class="highLight-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Notícias.svg" loading="lazy" alt="Icone da tag do destaque">
                            <img class="highLight-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Mangás.svg" loading="lazy" alt="Icone da tag do destaque">
                        </div>
                        <div class="highLight-count position-absolute"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;100%</div>
                    </article>
                    <article class="highLight-article position-relative">
                        <img class="highLight-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do destaque">
                        <h6 class="highLight-title text-uppercase">Kanojo Okarishimasu – Figure sensual da Chizuru anima otakus e sei lá o que vamos fazer e isso ai é o que vamos fazer</h6>
                        <div class="highLight-tag">
                            <img class="highLight-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Notícias.svg" loading="lazy" alt="Icone da tag do destaque">
                            <img class="highLight-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Mangás.svg" loading="lazy" alt="Icone da tag do destaque">
                        </div>
                        <div class="highLight-count position-absolute"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;100%</div>
                    </article>
                </div>
            </section>
        </div>
    </div>

    <div class="row mt-4 mb-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <div class="announcement-vertical bg-dark">teste</div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="review">
                <div class="review-title position-relative">
                    <h6 class="text-uppercase">Review's da Akiba</h6>
                </div>
                <div class="review-container d-flex flex-wrap gap-2 justify-content-center mt-3">
                    <article class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="postList-title position-relative">
                <h6 class="text-uppercase">Últimas postagens</h6>
            </section>
        </div>
    </div>
    
    <div class="row mt-2 mb-4">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
            <section class="postList">
                <article class="postList-article position-relative">
                    <img class="postList-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb da publicação">
                    <h6 class="postList-title text-uppercase">Doraemon: Filme Anime para 2023 adiciona Marina Inoue e Inori Minase ao elenco e é isso ai vamos lá ver o que é que tem pra ver</h6>
                    <div class="postList-count position-absolute"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;100%</div>
                    <div class="postList-tag">
                        <img class="postList-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Notícias.svg" loading="lazy" alt="Icone da tag da publicação">
                        <img class="postList-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Mangás.svg" loading="lazy" alt="Icone da tag da publicação">
                    </div>
                    <div class="postList-credits d-flex gap-2 float-end">
                        <h6 class="postList-creditsAuthor text-uppercase"><i class="bi bi-vector-pen"></i>&nbsp;Antônio Medeiros Lopes</h6>
                        <h6 class="postList-creditsDate text-uppercase"><i class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</h6>
                    </div>
                </article>
                <article class="postList-article position-relative">
                    <img class="postList-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb da publicação">
                    <h6 class="postList-title text-uppercase">Doraemon: Filme Anime para 2023 adiciona Marina Inoue e Inori Minase ao elenco e é isso ai vamos lá ver o que é que tem pra ver</h6>
                    <div class="postList-count position-absolute"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;100%</div>
                    <div class="postList-tag">
                        <img class="postList-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Notícias.svg" loading="lazy" alt="Icone da tag da publicação">
                        <img class="postList-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Mangás.svg" loading="lazy" alt="Icone da tag da publicação">
                    </div>
                    <div class="postList-credits d-flex gap-2 float-end">
                        <h6 class="postList-creditsAuthor text-uppercase"><i class="bi bi-vector-pen"></i>&nbsp;Antônio Medeiros Lopes</h6>
                        <h6 class="postList-creditsDate text-uppercase"><i class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</h6>
                    </div>
                </article>
                <article class="postList-article position-relative">
                    <img class="postList-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb da publicação">
                    <h6 class="postList-title text-uppercase">Doraemon: Filme Anime para 2023 adiciona Marina Inoue e Inori Minase ao elenco e é isso ai vamos lá ver o que é que tem pra ver</h6>
                    <div class="postList-count position-absolute"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;100%</div>
                    <div class="postList-tag">
                        <img class="postList-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Notícias.svg" loading="lazy" alt="Icone da tag da publicação">
                        <img class="postList-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Mangás.svg" loading="lazy" alt="Icone da tag da publicação">
                    </div>
                    <div class="postList-credits d-flex gap-2 float-end">
                        <h6 class="postList-creditsAuthor text-uppercase"><i class="bi bi-vector-pen"></i>&nbsp;Antônio Medeiros Lopes</h6>
                        <h6 class="postList-creditsDate text-uppercase"><i class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</h6>
                    </div>
                </article>
                <article class="postList-article position-relative">
                    <img class="postList-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb da publicação">
                    <h6 class="postList-title text-uppercase">Doraemon: Filme Anime para 2023 adiciona Marina Inoue e Inori Minase ao elenco e é isso ai vamos lá ver o que é que tem pra ver</h6>
                    <div class="postList-count position-absolute"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;100%</div>
                    <div class="postList-tag">
                        <img class="postList-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Notícias.svg" loading="lazy" alt="Icone da tag da publicação">
                        <img class="postList-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Mangás.svg" loading="lazy" alt="Icone da tag da publicação">
                    </div>
                    <div class="postList-credits d-flex gap-2 float-end">
                        <h6 class="postList-creditsAuthor text-uppercase"><i class="bi bi-vector-pen"></i>&nbsp;Antônio Medeiros Lopes</h6>
                        <h6 class="postList-creditsDate text-uppercase"><i class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</h6>
                    </div>
                </article>
                <article class="postList-article position-relative">
                    <img class="postList-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb da publicação">
                    <h6 class="postList-title text-uppercase">Doraemon: Filme Anime para 2023 adiciona Marina Inoue e Inori Minase ao elenco e é isso ai vamos lá ver o que é que tem pra ver</h6>
                    <div class="postList-count position-absolute"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;100%</div>
                    <div class="postList-tag">
                        <img class="postList-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Notícias.svg" loading="lazy" alt="Icone da tag da publicação">
                        <img class="postList-tagIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Mangás.svg" loading="lazy" alt="Icone da tag da publicação">
                    </div>
                    <div class="postList-credits d-flex gap-2 float-end">
                        <h6 class="postList-creditsAuthor text-uppercase"><i class="bi bi-vector-pen"></i>&nbsp;Antônio Medeiros Lopes</h6>
                        <h6 class="postList-creditsDate text-uppercase"><i class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</h6>
                    </div>
                </article>
            </section>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <div class="announcement-horizontal bg-dark">teste</div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="category">
                <div class="category-title position-relative">
                    <h6 class="text-uppercase">+Categorias</h6>
                </div>
                <div class="category-container d-flex flex-wrap justify-content-center mt-2">
                    <button onclick="history.pushState('tag', 'tag', '/akiba_2.0/tag/animes'); router();" class="category-btn btn text-uppercase" style="border: 0.2rem solid #0d7dfd; color: #0d7dfd;" aria-label="Animes"><img style="margin-top: -0.35rem; filter: invert(39%) sepia(66%) saturate(4208%) hue-rotate(199deg) brightness(98%) contrast(101%);"class="category-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Animes.svg" loading="lazy" alt="Animes">&nbsp;Animes</button>
                    <button onclick="history.pushState('tag', 'tag', '/akiba_2.0/tag/mangas'); router();" class="category-btn btn text-uppercase" style="border: 0.2rem solid #33cc66; color: #33cc66;" aria-label="Mangás"><img style="margin-top: -0.3rem; filter: invert(57%) sepia(65%) saturate(548%) hue-rotate(87deg) brightness(106%) contrast(75%);"class="category-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Mangás.svg" loading="lazy" alt="Mangás">&nbsp;Mangás</button>
                    <button onclick="history.pushState('tag', 'tag', '/akiba_2.0/tag/tops'); router();" class="category-btn btn text-uppercase" style="border: 0.2rem solid #ff9933; color: #ff9933;" aria-label="Top's"><img style="margin-top: -0.3rem; filter: invert(68%) sepia(99%) saturate(1744%) hue-rotate(334deg) brightness(103%) contrast(102%);"class="category-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Top's.svg" loading="lazy" alt="Mangás">&nbsp;Top's</button>
                    <button onclick="history.pushState('tag', 'tag', '/akiba_2.0/tag/primeiras-impressoes'); router();" class="category-btn btn text-uppercase" style="border: 0.2rem solid #9900cc; color: #9900cc;" aria-label="Primeiras Impressões"><img style="margin-top: -0.3rem; filter: invert(21%) sepia(94%) saturate(6838%) hue-rotate(283deg) brightness(82%) contrast(118%);"class="category-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Primeiras-Impressões.svg" loading="lazy" alt="Primeiras Impressões">&nbsp;Primeiras Impressões</button>
                    <button onclick="history.pushState('tag', 'tag', '/akiba_2.0/tag/eventos'); router();" class="category-btn btn text-uppercase" style="border: 0.2rem solid #ff5bad; color: #ff5bad;" aria-label="Eventos"><img style="margin-top: -0.3rem; filter: invert(59%) sepia(19%) saturate(6596%) hue-rotate(298deg) brightness(99%) contrast(105%);" class="category-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Eventos.svg" loading="lazy" alt="Eventos">&nbsp;Eventos</button>
                    <button onclick="history.pushState('tag', 'tag', '/akiba_2.0/tag/listas'); router();" class="category-btn btn text-uppercase" style="border: 0.2rem solid #CC9933; color: #CC9933;" aria-label="Listas"><img style="margin-top: -0.3rem; filter: invert(87%) sepia(6%) saturate(5648%) hue-rotate(334deg) brightness(82%) contrast(91%);" class="category-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Listas.svg" loading="lazy" alt="Listas">&nbsp;Listas</button>
                    <button onclick="history.pushState('tag', 'tag', '/akiba_2.0/tag/curiosidades'); router();" class="category-btn btn text-uppercase" style="border: 0.2rem solid #00ccff; color: #00ccff;" aria-label="Listas"><img style="margin-top: -0.3rem; filter: invert(74%) sepia(49%) saturate(5485%) hue-rotate(152deg) brightness(102%) contrast(103%);" class="category-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Curiosidades.svg" loading="lazy" alt="Curiosidades">&nbsp;Curiosidades</button>
                    <button onclick="history.pushState('tag', 'tag', '/akiba_2.0/tag/noticias'); router();" class="category-btn btn text-uppercase" style="border: 0.2rem solid #F43E37; color: #F43E37;" aria-label="Listas"><img style="margin-top: -0.3rem; filter: invert(36%) sepia(15%) saturate(6605%) hue-rotate(335deg) brightness(95%) contrast(101%);" class="category-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Notícias.svg" loading="lazy" alt="Notícias">&nbsp;Notícias</button>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="calendar-title position-relative">
                <h6 class="text-uppercase">Calendário de Eventos</h6>
            </section>
        </div>
    </div>

    <div class="row mt-2 mb-4">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
            <section class="calendar">
                <table class="table table-borderless table-responsive calendar-table">
                    <thead> 
                        <tr>
                            <th scope="col" class="text-center text-uppercase mb-3"><i class="bi bi-star-fill"></i>&nbsp;Qual é o Evento?</th>
                            <th scope="col" class="text-center text-uppercase"><i class="bi bi-geo-alt-fill"></i>&nbsp;Quando será?</th>
                            <th scope="col" class="text-center text-uppercase"><i class="bi bi-calendar-date-fill"></i>&nbsp;Onde vai ser?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                        </tr>
                        <tr>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                        </tr>
                        <tr>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                        </tr>
                        <tr>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                        </tr>
                        <tr>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                            <td class="text-center text-uppercase">Evento da Akiba</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <div class="announcement-horizontal bg-dark">teste</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="akibacast">
                <div class="akibacast-title position-relative">
                    <h6 class="text-uppercase">Akibacasts</h6>
                </div>
                <div class="akibacast-container d-flex gap-2 flex-wrap justify-content-center mt-3 mb-3">
                    <article class="akibacast-article">
                        <img class="akibacast-thumb" src="https://akiba.com.br/painel/v1/imagens/podcast/1636768970.png" loading="lazy" alt="Thumb do Akibacast">
                        <h6 class="akibacast-title text-uppercase w-100">Titulo do akibacast boladão tipo alfeganistão vamos lá e é isso ai foda pra caralho</h6>
                    </article>
                    <article class="akibacast-article">
                        <img class="akibacast-thumb" src="https://akiba.com.br/painel/v1/imagens/podcast/1636768970.png" loading="lazy" alt="Thumb do Akibacast">
                        <h6 class="akibacast-title text-uppercase  w-100">Titulo do akibacast boladão tipo alfeganistão vamos lá e é isso ai foda pra caralho</h6>
                    </article>
                    <article class="akibacast-article">
                        <img class="akibacast-thumb" src="https://akiba.com.br/painel/v1/imagens/podcast/1636768970.png" loading="lazy" alt="Thumb do Akibacast">
                        <h6 class="akibacast-title text-uppercase  w-100">Titulo do akibacast boladão tipo alfeganistão vamos lá e é isso ai foda pra caralho</h6>
                    </article>
                    <article class="akibacast-article">
                        <img class="akibacast-thumb" src="https://akiba.com.br/painel/v1/imagens/podcast/1636768970.png" loading="lazy" alt="Thumb do Akibacast">
                        <h6 class="akibacast-title text-uppercase  w-100">Titulo do akibacast boladão tipo alfeganistão vamos lá e é isso ai foda pra caralho</h6>
                    </article>
                </div>
            </section>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="partner">
                <div class="partner-title position-relative">
                    <h6 class="text-uppercase">Parceiros</h6>
                </div>
                <div class="partner-container d-flex flex-wrap gap-2 justify-content-center mt-3">
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                    <a href="#" target="_blank" title="Título do parceiro"><img src="https://thumbs.radiojhero.com/mPs6TpXSyg0DyH1kMoKSMejKjWdS6luL0VPjqfOeeic/rs:auto:0:0:1/aHR0cHM6Ly93cC5yYWRpb2poZXJvLmNvbS93cC1jb250ZW50L3VwbG9hZHMvcGFyY2Vpcm9zL2VlZDlhNTY5LmpwZw.jpg" alt="Button do parceiro"></a>
                </div>
            </section>
        </div>
    </div>

</div>

