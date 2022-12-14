
<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script async defer>
    //Altera o titulo da página no navegador
    $('title').text('Rede Akiba | Nome do Podcast');

    //Comportamento dos players na página
    $('.player-top').hide();
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'}).show();

    $('#disqus_thread').show();

     //Tema da página
     switch(Cookies.get('akiba-theme')){
        case 'light-theme':
            $('.body').css({'background': '#e6e6e6'});

            $('.akibacastShow-text, .akibacastShow-text > p, .akibacastShow-agregator > h6').css({'color': '#000000'});
            $('.akibacastShow-title > h5, .akibacastShow-title > h6').css({'color': '#ffbd7'});
            $('.akibacastShow-agregator > a > img').css({'filter': 'invert(0%) sepia(0%) saturate(7500%) hue-rotate(327deg) brightness(96%) contrast(104%)'});
        break;
        case 'dark-theme':
            $('.body').css({'background': '#1a1a1a'});

            $('.akibacastShow-text, .akibacastShow-text > p, .akibacastShow-agregator > h6').css({'color': '#ffbd7'});
            $('.akibacastShow-title > h5, .akibacastShow-title > h6').css({'color': '#ffbd7'});
            $('.akibacastShow-agregator > a > img').css({'filter': 'invert(88%) sepia(5%) saturate(1444%) hue-rotate(328deg) brightness(107%) contrast(104%)'});
        break;
        default:
            $('.body').css({'background': '#0e1139'});

            $('.akibacastShow-text, .akibacastShow-text > p, .akibacastShow-agregator > h6').css({'color': ''});
            $('.akibacastShow-title > h5, .akibacastShow-title > h6').css({'color': ''});
            $('.akibacastShow-agregator > a > img').css({'filter': ''});
        break;
     }

    //Verifica se a url está preenchida para apontar para algum episódio
    var url = window.location.href
    var split = url.split('/')
    var point_review = split[5]

    if(point_review == undefined){
        $('main').load(`http://localhost/akiba_2.0/site/page/404.php`);
    }
</script>


<div class="container">
    <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
            <article class="akibacastShow">
                <div class="akibacastShow-title mb-3">
                    <h5 class="m-0 text-uppercase">S2/EP3</h5>
                    <h6 class="m-0 text-uppercase">O episódio proibido pela onu #ovni #fbi</h6>
                </div>
                <div class="akibacastShow-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue vel metus fringilla accumsan. Sed rhoncus non turpis malesuada lacinia. Mauris tempus purus consectetur, tincidunt neque in, volutpat nisi. Nam sollicitudin enim arcu, sit amet placerat enim sollicitudin ut. Proin placerat ligula at sapien tristique, vel aliquam tortor vehicula. Etiam ultricies molestie sapien, ut elementum ante vehicula et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent sed neque hendrerit, viverra ex quis, elementum neque.
                Aliquam condimentum mattis pretium. Integer elit ipsum, pellentesque non volutpat quis, molestie id nisl. Donec a hendrerit est. Vestibulum vitae quam eu nibh scelerisque eleifend ac sit amet enim. Donec accumsan volutpat fringilla. Vestibulum auctor orci in metus rutrum, id imperdiet ante fermentum. Duis efficitur libero eget mauris sollicitudin ultrices.
                </div>
                <iframe class="mt-3" style="border-radius:12px" src="https://open.spotify.com/embed/episode/0E5cy0x9LlqZ2jRsLnG1Re?utm_source=generator&t=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <div class="akibacastShow-agregator d-flex gap-3 flex-wrap mt-3">
                    <h6 class="text-uppercase">Ouça esse akibacast em outros agregadores >></h6>
                    <a href="" target="_blank" title="Acessar no Google Podcasts"><img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/podcast/google-podcasts.svg" alt="Google Podcasts" loading="lazy"></a>
                    <a href="" target="_blank" title="Acessar no Apple Podcasts"><img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/podcast/apple-podcasts.svg" alt="Apple Podcasts" loading="lazy"></a>
                    <a href="" target="_blank" title="Acessar no Tune In"><img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/podcast/tune-in.svg" alt="Tune In" loading="lazy"></a>
                    <a href="" target="_blank" title="Acessar no Dezzer"><img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/podcast/google-podcasts.svg" alt="Dezzer" loading="lazy"></a>
                </div>
                <div id="disqus_thread" class="mt-3 mb-4"></div>
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
            </article>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <div class="announcement-horizontal bg-dark">teste</div>
        </div>
    </div>
</div>