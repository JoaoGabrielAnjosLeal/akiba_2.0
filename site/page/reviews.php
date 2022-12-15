<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script async defer>
    //Altera o titulo da página no navegador
    $('title').text('Rede Akiba | Reviews');

    //Comportamento dos players na página
    $('.player-top').hide();
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'}).show();
    
    //Tema da página
    switch(Cookies.get('akiba-theme')){
        case 'light-theme':
            $('.body').css({'background': '#e6e6e6'});
            $('.review-title').css({'color': '#ffebd7'});
        break;
        case 'dark-theme':
            $('.body').css({'background': '#1a1a1a'});
            $('.review-title').css({'color': '#ffebd7'});
        break;
        default:
            $('.body').css({'background': '#0e1139'});
            $('.review-title').css({'color': '#FFF6E6'});
        break;
    }
</script>

<!---------------------------------CONTEÚDO DA PÁGINA--------------------------------->
<div class="container">
    <div class="row mb-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="review">
                <div class="review-container d-flex flex-wrap gap-2">
                <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                    <article onclick="history.pushState('review','review','/akiba_2.0/review'); router();" class="review-article">
                        <img class="review-thumb" src="https://img1.ak.crunchyroll.com/i/spire1/8f3cfc8beb6901457dbe7166a14ae2271661691153_main.png" loading="lazy" alt="Thumb do review">
                        <h6 class="review-title text-uppercase text-center w-100">Spy x Family</h6>
                    </article>
                </div>
            </section>
        </div>
    </div>
</div>