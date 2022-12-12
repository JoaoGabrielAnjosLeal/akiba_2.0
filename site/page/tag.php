<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script async defer>
    //Altera o título da página no navegador
    var url = window.location.href;
    var urlSplit = url.split('/');
    var urlTag = urlSplit[5]; //Marcador que indica o nome da tag para o script

    switch(urlTag){
        case 'animes':
            $('title').text('Rede Akiba | Animes');
            $('.block-title').text('Animes');
        break
        case 'mangas':
            $('title').text('Rede Akiba | Mangás');
            $('.block-title').text('Mangás');
        break
        case 'tops':
            $('title').text('Rede Akiba | Tops');
            $('.block-title').text('Tops');
        break
        case 'listas':
            $('title').text('Rede Akiba | Listas');
            $('.block-title').text('Listas');
        break
        case 'primeiras-impressoes':
            $('title').text('Rede Akiba | Primeiras Impressões');
            $('.block-title').text('Primeiras Impressões');
        break
        case 'curiosidades':
            $('title').text('Rede Akiba | Curiosidades');
            $('.block-title').text('Curiosidades');
        break
        case 'eventos':
            $('title').text('Rede Akiba | Eventos');
            $('.block-title').text('Eventos');
        break
        case 'noticias':
            $('title').text('Rede Akiba | Notícias');
            $('.block-title').text('Notícias');
        break
    }

    //Comportamento dos players na página
    $('.player-top').hide();
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'}).show();
    
    //Tema da página
    switch(Cookies.get('akiba-theme')){
        case 'light-theme':
            if(window.screen.width < '992'){
                $('.body').css({'background': '#e6e6e6'});
            }else{
                $('.body').css({'background': 'linear-gradient(180deg, #e6e6e6 22.8rem, #f8f8f8 0%)'});
            };
            $(window).on('resize', function(){
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#e6e6e6'});
                }else{
                    $('.body').css({'background': 'linear-gradient(180deg, #e6e6e6 22.8rem, #f8f8f8 0%)'});
                };
            });

            $('.block-description').css({'color': '#000000'});

            $('.postList-count, .postList-creditsAuthor, .postList-creditsDate').css({'color':'#ffebd7'});
            $('.postList-article').css({'border-bottom': ''});
        break;
        case 'dark-theme':
            if(window.screen.width < '992'){
                $('.body').css({'background': '#1a1a1a'});
            }else{
                $('.body').css({'background': 'linear-gradient(180deg, #000000 22.8rem, #1a1a1a 0%)'})
            };
            $(window).on('resize', function(){
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#1a1a1a'});
                }else{
                    $('.body').css({'background': 'linear-gradient(180deg, #000000 22.8rem, #1a1a1a 0%)'});
                };
            });

            $('.block-description').css({'color': '#ffebd7'});
            
            $('.postList-count, .postList-creditsAuthor, .postList-creditsDate').css({'color':'#ffebd7'});
            $('.postList-article').css({'border-bottom': '0.1rem solid #ffebd7'});
        break;
        default: 
            if(window.screen.width < '992'){
                $('.body').css({'background': '#0e1139'});
            }else{
                $('.body').css({'background': 'linear-gradient(180deg, #050505 22.8rem, #0e1139 0%)'})
            };
            $(window).on('resize', function(){
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#0e1139'});
                }else{
                    $('.body').css({'background': 'linear-gradient(180deg, #050505 22.8rem, #0e1139 0%)'})
                };
            });

            $('.block-description').css({'color': ''});
            
            $('.postList-count, .postList-creditsAuthor, .postList-creditsDate').css({'color':''});
            $('.postList-article').css({'border-bottom': ''});
        break;
    }
</script>

<!---------------------------------CONTEÚDO DA PÁGINA--------------------------------->
<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xll-8">
            <section class="block-start">
                <div class="block-container">
                    <h6 class="block-title text-center text-uppercase"><!--Conteúdo irá carregar dinamicamente--></h6>
                </div>
                <p class="block-description text-center text-uppercase">Clique no tema de sua preferência e ache o que procura muito mais fácil!</p>
            </section>
        </div>
    </div>

    <div class="row d-flex justify-content-center mt-2">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xll-10">
            <section class="category">
                <div class="category-container d-flex flex-wrap justify-content-center">
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

    <div class="row mt-5 mb-4">
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

</div>