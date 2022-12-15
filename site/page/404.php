<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script async defer>
    //Altera o titulo da página no navegador
    $('title').text('Rede Akiba | Erro 404');

    //Comportamento dos players na página
    $('.player-top').hide();
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'}).hide();

    //Tema da página
    switch(Cookies.get('akiba-theme')){
        case 'light-theme':
            $('.body').css({'background': '#e6e6e6'});

            $('.erro404 > p').css({'color': '#000000'});
            $('.erro404 > div > button').css({'color':'#ffebd7'});
        break;
        case 'dark-theme':
            $('.body').css({'background': '#1a1a1a'});

            $('.erro404 > p').css({'color': '#ffebd7'});
            $('.erro404 > div > button').css({'color':'#ffebd7'});
        break;
        default:
            $('.body').css({'background': '#0e1139'});

            $('.erro404 > p').css({'color': ''});
            $('.erro404 > div > button').css({'color':''});
        break;
    }
</script>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xll-5">
            <section class="erro404">
                <img class="img-fluid" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_erro404.webp" loading="lazy" alt="Erro 404 Banner">
                <p class="text-center">Calma lá otaku! Está tentando adivinhar o que vem por ai sem a gente ter a ideia primeiro? Volte para a página inicial para curtir o melhor da Akiba!</p>
                <div class="d-flex justify-content-center"><button onclick="history.pushState('home','home','/akiba_2.0/'); router();" class="text-uppercase border-0" aria-label="Voltar a página inicial"><i class="bi bi-house-fill"></i>&nbsp;Voltar a página inicial</button></div>
            </section>
        </div>
    </div>
</div>