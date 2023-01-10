<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script async defer>
    //Altera o titulo da página no navegador
    $('title').text('Rede Akiba | Nome do post');

    //Comportamento dos players na página
    $('.player-top').hide();
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'});

    //Caixa de Comentários
    $('#disqus_thread').hide();
    $('.postShow-commentsBtn').click(function(){
        $('#disqus_thread').fadeToggle();
    });
    
    //Tema da página
    switch(Cookies.get('akiba-theme')){
        case 'light-theme':
            $('.body').css({'background': '#e6e6e6'});

            $('.postShow-text, .postShow-text > p, .recommend-article > h6').css({'color': '#000000'});
            $('.postShow-title, .postShow-name, .postShow-font, .postShow-date, .tag-name, .tag-description').css({'color': '#ffbd7'});
        break;
        case 'dark-theme':
            $('.body').css({'background': '#1a1a1a'});

            $('.postShow-text, .postShow-text > p, .recommend-article > h6').css({'color': '#ffbd7'});
            $('.postShow-title, .postShow-name, .postShow-font, .postShow-date, .tag-name, .tag-description').css({'color': '#ffbd7'});
        break;
        default:
            $('.body').css({'background': '#0e1139'});

            $('.postShow-text, .postShow-text > p, .recommend-article > h6').css({'color': ''});
            $('.postShow-title, .postShow-name, .postShow-font, .postShow-date, .tag-name, .tag-description').css({'color': ''});
        break;
    }

    //Verifica se a url está preenchida para apontar para alguma postagem
    var url = window.location.href
    var split = url.split('/')
    var point_tag = split[4]
    var point_post = split[5]

    if(point_post == undefined){
        $('main').load(`http://localhost/akiba_2.0/site/page/404.php`);
    }

    switch(point_tag){
        case 'animes':
            $('.tag-name').text('Animes')
            $('.tag-description').text('Explore as mais diversas informações sobre o mundo otaku na nossa seção de animes')
        break
        case 'mangas':
            $('.tag-name').text('Mangás')
            $('.tag-description').text('Explore as mais diversas informações sobre o mundo otaku na nossa seção de mangás')
        break
        case 'tops':
            $('.tag-name').text('Tops')
            $('.tag-description').text('Explore as mais diversas informações sobre o mundo otaku na nossa seção de tops')
        break
        case 'listas':
            $('.tag-name').text('Listas')
            $('.tag-description').text('Explore as mais diversas informações sobre o mundo otaku na nossa seção de listas')
        break
        case 'primeiras-impressoes':
            $('.tag-name').text('Primeiras Impressões')
            $('.tag-description').text('Explore as mais diversas informações sobre o mundo otaku na nossa seção de primeiras impressões')
        break
        case 'curiosidades':
            $('.tag-name').text('Curiosidades')
            $('.tag-description').text('Explore as mais diversas informações sobre o mundo otaku na nossa seção de curiosidades')
        break
        case 'eventos':
            $('.tag-name').text('Eventos')
            $('.tag-description').text('Explore as mais diversas informações sobre o mundo otaku na nossa seção de eventos')
        break
        case 'noticias':
            $('.tag-name').text('Notícias')
            $('.tag-description').text('Explore as mais diversas informações sobre o mundo otaku na nossa seção de notícias')
        break
        default:
            $('main').load(`http://localhost/akiba_2.0/site/page/404.php`);
        break;
    }
</script>

<!---------------------------------CONTEÚDO DA PÁGINA--------------------------------->
<div class="container">

     <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
            <article class="postShow">
                <h6 class="postShow-title m-0 text-uppercase">Kanojo Okarishimasu – Figure sensual da Chizuru anima otakus e sei lá o que mais tem</h6>
                <img class="postShow-thumb mt-3" src="https://i0.wp.com/boteco.fansubs.com.br/wp-content/uploads/2020/09/HorribleSubs-Kanojo-Okarishimasu-12-1080p_001_34310.png?fit=1920%2C1080&ssl=1" alt="Thumb da Postagem" loading="lazy">
                <div class="postShow-text mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et velit maximus, fermentum nisi accumsan, tincidunt lacus. In lobortis odio vel nunc scelerisque pellentesque. Maecenas eu tristique nisi. Mauris vel tellus dui. Suspendisse potenti. Donec non ante vitae dolor gravida mollis quis molestie purus. Vivamus laoreet, nunc in gravida ullamcorper, massa leo accumsan ipsum, et facilisis elit justo maximus erat. Sed consectetur ipsum et aliquam dictum.

                Pellentesque ac placerat tellus. Vestibulum hendrerit metus ut volutpat feugiat. Sed finibus, neque eget fermentum dignissim, eros eros egestas elit, vel malesuada eros nunc ut ex. Ut at commodo ex. Pellentesque sed nisl quis enim tempor convallis ut ut augue. Vestibulum commodo risus nisi, vel ultricies velit posuere sit amet. Nunc et maximus dui. Duis at tristique nunc, vitae euismod magna. Donec aliquet non neque quis congue.

                Vivamus consequat, nunc in lobortis posuere, mi mi eleifend turpis, et finibus neque augue at eros. Etiam eu justo vitae ante convallis viverra. Sed sem mi, bibendum gravida mauris quis, aliquam blandit purus. Donec ut rhoncus sem. Phasellus iaculis odio convallis dolor mattis, a elementum leo varius. Duis accumsan dictum ultricies. In in justo ut lacus faucibus aliquet et nec nisi. Proin in varius massa, nec mattis neque. Donec ullamcorper, ipsum a volutpat faucibus, nibh ex finibus risus, tempor porta odio purus id dolor. Nam tristique eros et efficitur ultrices. Aliquam nibh turpis, viverra facilisis arcu non, commodo dignissim sapien.

                Donec egestas nunc in enim congue, sit amet luctus diam placerat. Donec non erat nisi. Etiam massa nulla, tempor quis nunc et, aliquam tincidunt odio. Curabitur sed nibh sit amet lacus pulvinar iaculis. Sed luctus a libero sed eleifend. Pellentesque et nunc nunc. Cras sagittis purus sed arcu pellentesque, a bibendum dui accumsan. Vestibulum rutrum mi arcu, ut scelerisque purus feugiat eget.

                Quisque consectetur vel nibh nec lacinia. Fusce volutpat ipsum vitae nisl egestas bibendum eu at est. Nullam faucibus ornare erat, pulvinar tincidunt ipsum. Vestibulum quis neque purus. Aenean commodo leo vel nibh mattis, ac placerat nisl maximus. Nullam tortor magna, tristique vel dignissim at, laoreet a nisi. Quisque molestie sed justo vel cursus. Vivamus posuere efficitur hendrerit. Aliquam nec lacinia nisi.
                </div>
            </article>
            <section class="postShow-reaction d-flex flex-wrap justify-content-center gap-2 mt-4">
                <h6 class="postShow-reactionDescription text-uppercase text-center m-0 p-0">O que você achou dessa matéria?</h6>
                <img class="postShow-reactionIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/humor/INCRIVEL.svg" loading="lazy" alt="Incrivel" title="Incrivel">
                <img class="postShow-reactionIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/humor/MUITO_BOA.svg" loading="lazy" alt="Muito Boa" title="Muito Boa">
                <img class="postShow-reactionIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/humor/BOA.svg" loading="lazy" alt="Boa" title="Boa">
                <img class="postShow-reactionIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/humor/MEIA_BOCA.svg" loading="lazy" alt="Meia Boca" title="Meia Boca">
                <img class="postShow-reactionIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/humor/BEM_RUIM.svg" loading="lazy" alt="Bem Ruim" title="Bem Ruim">
            </section>
            <section class="postShow-comments mt-4">
                <div class="postShow-commentsContainer d-flex justify-content-center"><button class="postShow-commentsBtn w-75 text-uppercase text-center" aria-label="Deixe seu comentário">DEIXE SEU COMENTÁRIO</button></div>
                <div id="disqus_thread" class="mt-4"></div>
                <script async defer>
                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://redeakiba.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                </script>
            </section>
            <section class="postShow-credits mt-5 d-flex flex-wrap justify-content-center gap-2">
                <div class="postShow-author position-relative">
                    <h6 class="postShow-title text-uppercase position-absolute">Autor:</h6>
                    <h6 class="postShow-name text-uppercase">Neko Kirame e seu la o que é mais</h6>
                    <img class="postShow-authorAvatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" alt="Avatar do redator" loading="lazy">
                </div>
                <div class="postShow-fontDate mb-4">
                    <div class="postShow-fontContainer">
                        <h6 class="postShow-fontTitle text-center text-uppercase">Fontes de Pesquisa</h6>
                        <h6 class="postShow-font text-center text-uppercase">AnimeXis</h6>
                        <h6 class="postShow-font text-center text-uppercase">AnimeXis</h6>
                    </div>
                    <div class="postShow-dateContainer d-flex gap-2">
                        <h6 class="postShow-dateTitle text-uppercase">Data de Publicação:</h6>
                        <h6 class="postShow-date text-center text-uppercase">00/00/0000</h6>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <section class="tag">
                <h6 class="tag-title text-uppercase text-center ">Veja mais de:</h6>
                <div class="tag-container">
                    <h6 class="tag-name text-center text-uppercase">Primeiras Impressões</h6>
                    <p class="tag-description text-uppercase m-0">Explore as mais diversas informações sobre o mundo otaku na nossa seção de primeiras impressões</p>
                </div>
            </section>
            <section class="recommend">
                <h6 class="recommend-title text-center mt-3 mb-3">+Matérias da Akiba</h6>
                <article class="recommend-article d-flex gap-2 mb-3">
                    <img class="recommend-thumb" src="https://i0.wp.com/portalaltadefinicao.com/wp-content/uploads/2022/02/desencanto-bean.jpg?fit=1200%2C675&ssl=1" loading="lazy" alt="Thumb da Postagem">
                    <h6 class="recommend-title">Kanojo Okarishimasu - Figure sensual da Chizuru anima otakus e sei lá o que mais tem</h6>
                </article>
                <article class="recommend-article d-flex gap-2 mb-3">
                    <img class="recommend-thumb" src="https://i0.wp.com/portalaltadefinicao.com/wp-content/uploads/2022/02/desencanto-bean.jpg?fit=1200%2C675&ssl=1" loading="lazy" alt="Thumb da Postagem">
                    <h6 class="recommend-title">Kanojo Okarishimasu - Figure sensual da Chizuru anima otakus e sei lá o que mais tem</h6>
                </article>
                <article class="recommend-article d-flex gap-2 mb-3">
                    <img class="recommend-thumb" src="https://i0.wp.com/portalaltadefinicao.com/wp-content/uploads/2022/02/desencanto-bean.jpg?fit=1200%2C675&ssl=1" loading="lazy" alt="Thumb da Postagem">
                    <h6 class="recommend-title">Kanojo Okarishimasu - Figure sensual da Chizuru anima otakus e sei lá o que mais tem</h6>
                </article>
                <article class="recommend-article d-flex gap-2 mb-3">
                    <img class="recommend-thumb" src="https://i0.wp.com/portalaltadefinicao.com/wp-content/uploads/2022/02/desencanto-bean.jpg?fit=1200%2C675&ssl=1" loading="lazy" alt="Thumb da Postagem">
                    <h6 class="recommend-title">Kanojo Okarishimasu - Figure sensual da Chizuru anima otakus e sei lá o que mais tem</h6>
                </article>
                <article class="recommend-article d-flex gap-2 mb-3">
                    <img class="recommend-thumb" src="https://i0.wp.com/portalaltadefinicao.com/wp-content/uploads/2022/02/desencanto-bean.jpg?fit=1200%2C675&ssl=1" loading="lazy" alt="Thumb da Postagem">
                    <h6 class="recommend-title">Kanojo Okarishimasu - Figure sensual da Chizuru anima otakus e sei lá o que mais tem</h6>
                </article>
                <article class="recommend-article d-flex gap-2 mb-3">
                    <img class="recommend-thumb" src="https://i0.wp.com/portalaltadefinicao.com/wp-content/uploads/2022/02/desencanto-bean.jpg?fit=1200%2C675&ssl=1" loading="lazy" alt="Thumb da Postagem">
                    <h6 class="recommend-title">Kanojo Okarishimasu - Figure sensual da Chizuru anima otakus e sei lá o que mais tem</h6>
                </article>
            </section>
        </div>
     </div>

</div>