<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script async defer>
    //Altera o titulo da página no navegador
    $('title').text('Rede Akiba | Podcasts');

    //Comportamento dos players na página
    $('.player-top').hide();
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'});
    
    //Tema da página
    switch(Cookies.get('akiba-theme')){
        case 'light-theme':
            $('.body').css({'background': '#e6e6e6'});

            $('.akibacastList-description').css({'color': '#000000'});
            $('.akibacastList-article').css({'border-bottom': ''})
        break;
        case 'dark-theme':
            $('.body').css({'background': '#1a1a1a'});

            $('.akibacastList-description').css({'color': '#ffebd7'});
            $('.akibacastList-article').css({'border-bottom': '0.1rem solid #ffebd7'})
        break;
        default:
            $('.body').css({'background': '#0e1139'});

            $('.akibacastList-description').css({'color': ''});
            $('.akibacastList-article').css({'border-bottom': ''})
        break;
    }
</script>

<!---------------------------------CONTEÚDO DA PÁGINA--------------------------------->
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="akibacastList-title position-relative">
                <h6 class="text-uppercase">Akibacasts</h6>
            </section>
        </div>
    </div>

    <div class="row mt-2 mb-4">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
            <section class="akibacastList-container mb-3">
                <article onclick="history.pushState('podcast','podcast','/akiba_2.0/podcast'); router();" class="akibacastList-article">
                    <h5 class="akibacastList-season text-uppercase">s2/ep5</h5>
                    <h6 class="akibacastList-title text-uppercase">O episódio proibido sobre lolis #onu #fbi</h6>
                    <img class="akibacastList-thumb" src="https://akiba.com.br/painel/v1/imagens/podcast/1636769287.png" loading="lazy" alt="Thumb do Akibacast">
                    <p class="akibacastList-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur, lorem consectetur luctus interdum, diam enim feugiat eros, ut condimentum libero lorem a ipsum. Integer vitae euismod nisi, at fringilla metus. Aenean vel ipsum pellentesque, faucibus augue hendrerit, viverra lorem. Sed varius commodo fringilla. Suspendisse porttitor vulputate felis, a eleifend massa feugiat id. Nunc eget molestie eros. Vestibulum varius massa quis nulla imperdiet, volutpat accumsan nisl tincidunt. Cras luctus, velit sit amet vulputate posuere, risus nibh vulputate nibh, nec imperdiet lorem felis id ex. Sed varius suscipit accumsan. Nulla sit amet odio et felis rhoncus feugiat. Etiam porta, augue vitae aliquet luctus, quam erat mollis erat, ac lobortis sem magna ut justo.
                    </p>
                </article>
                <article onclick="history.pushState('podcast','podcast','/akiba_2.0/podcast'); router();" class="akibacastList-article">
                    <h5 class="akibacastList-season text-uppercase">s2/ep5</h5>
                    <h6 class="akibacastList-title text-uppercase">O episódio proibido sobre lolis #onu #fbi</h6>
                    <img class="akibacastList-thumb" src="https://akiba.com.br/painel/v1/imagens/podcast/1636769287.png" loading="lazy" alt="Thumb do Akibacast">
                    <p class="akibacastList-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur, lorem consectetur luctus interdum, diam enim feugiat eros, ut condimentum libero lorem a ipsum. Integer vitae euismod nisi, at fringilla metus. Aenean vel ipsum pellentesque, faucibus augue hendrerit, viverra lorem. Sed varius commodo fringilla. Suspendisse porttitor vulputate felis, a eleifend massa feugiat id. Nunc eget molestie eros. Vestibulum varius massa quis nulla imperdiet, volutpat accumsan nisl tincidunt. Cras luctus, velit sit amet vulputate posuere, risus nibh vulputate nibh, nec imperdiet lorem felis id ex. Sed varius suscipit accumsan. Nulla sit amet odio et felis rhoncus feugiat. Etiam porta, augue vitae aliquet luctus, quam erat mollis erat, ac lobortis sem magna ut justo.
                    </p>
                </article>
                <article onclick="history.pushState('podcast','podcast','/akiba_2.0/podcast'); router();" class="akibacastList-article">
                    <h5 class="akibacastList-season text-uppercase">s2/ep5</h5>
                    <h6 class="akibacastList-title text-uppercase">O episódio proibido sobre lolis #onu #fbi</h6>
                    <img class="akibacastList-thumb" src="https://akiba.com.br/painel/v1/imagens/podcast/1636769287.png" loading="lazy" alt="Thumb do Akibacast">
                    <p class="akibacastList-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur, lorem consectetur luctus interdum, diam enim feugiat eros, ut condimentum libero lorem a ipsum. Integer vitae euismod nisi, at fringilla metus. Aenean vel ipsum pellentesque, faucibus augue hendrerit, viverra lorem. Sed varius commodo fringilla. Suspendisse porttitor vulputate felis, a eleifend massa feugiat id. Nunc eget molestie eros. Vestibulum varius massa quis nulla imperdiet, volutpat accumsan nisl tincidunt. Cras luctus, velit sit amet vulputate posuere, risus nibh vulputate nibh, nec imperdiet lorem felis id ex. Sed varius suscipit accumsan. Nulla sit amet odio et felis rhoncus feugiat. Etiam porta, augue vitae aliquet luctus, quam erat mollis erat, ac lobortis sem magna ut justo.
                    </p>
                </article>
            </section>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <div class="announcement-horizontal bg-dark">teste</div>
        </div>
    </div>


</div>