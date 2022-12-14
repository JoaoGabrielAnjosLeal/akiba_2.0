if ("serviceWorker" in navigator) {
    if (navigator.serviceWorker.controller) {
        console.log("[AKIBA PWA] ServiceWorker encontrado e ativo, não há necessidade de registrar e ativar um novo");
    } else {
        navigator.serviceWorker
            .register("./akiba_2.0/sw.js", {
                scope: "/"
            })
            .then(function(reg) {
                console.log("[AKIBA PWA] ServiceWorder foi regristado e esta ativado! " + reg.scope);
            });
    }
}
//********** NAVBAR **********
$('.nav-toggle, .nav-listClose').click(function(){
    $('.nav-list').animate({'width': 'toggle'}, 500);
});

if(window.screen.width < '992'){
    $('.nav-item').click(function(){
        $('.nav-list').animate({'width': 'toggle'}, 500);
    });
}

//********** SELETOR DE TEMAS **********
$('.nav-theme').click(function(){
    $('.nav-themeSelector').animate({'width': 'toggle'}, 500);
});

$('.nav-themeItem').click(function(){
    $('.nav-themeSelector').animate({'width': 'toggle'}, 500);
});

$('.nav-themeReset').click(function(){
    Cookies.remove('akiba-theme');
    indexTheme();
    router();
})

$('.nav-themeLight').click(function(){
    Cookies.remove('akiba-theme');
    Cookies.set('akiba-theme', 'light-theme', {expires: 365});
    indexTheme();
    router();
});

$('.nav-themeDark').click(function(){
    Cookies.remove('akiba-theme');
    Cookies.set('akiba-theme', 'dark-theme', {expires: 365});
    indexTheme();
    router();
});

function indexTheme(){
    switch(Cookies.get('akiba-theme')){
        case 'light-theme':
            $('.nav-item').hover(
                function(){
                    $(this).css({'color': '#ff9d17'});
                    $(this).children('img').css({'filter': 'invert(69%) sepia(15%) saturate(5861%) hue-rotate(346deg) brightness(105%) contrast(103%)'});
                },
                function(){
                    $(this).css({'color': ''});
                    $(this).children('img').css({'filter': ''});
                }
            );
            $('.nav-listClose').css({'background-color': '#ff9d17', 'color': '#ffebd7'});

            $('.cookie-alert').css({'background-color': '#e6e6e6'});
            $('.cookie-alertText').css({'color': ''})
            $('.cookie-alertBtn').css({'background-color': '#ff9d17', 'color': '#ffebd7'})

            $('.requestMusic-body').css({'background-color': '#e6e6e6'});
            $('.requestMusic-close, .requestMusic-form > button').css({'color': '#ffebd7'});

            $('.streamer-messageText, .streamer-name').css({'color': '#000000'});
            $('.playing-text').eq(0).css({'color': '#000000'});
            $('.streamer-status, .streamer-alert > span, .streamer-text').css({'color': '#ffebd7'});

            $('.player-footer').css({'background-color': '#f8f8f8', 'border-top': '0.2rem solid #ff9d17'});
            $('.playing-title').css({'color': '#ff9d17'})
            $('.playing-text').eq(1).css({'color': '#ff9d17'});
            $('.play').eq(1).css({'color': '#ff9d17'});
            $('.pause').eq(1).css({'color': '#ff9d17'});
            $('.volume').eq(1).css({'color': '#ff9d17'});
            $('.requestMusic-btn').eq(1).css({'background-color': '#ff9d17', 'color': '#ffebd7'});

            $('.footer').css({'background-color': '#ff9d17'});
            $('.footer-cotnainer > p').css({'color': '#ffebd7'})
            $('.footer-container > p > span').css({'color': '#000000'});

        break;
        case 'dark-theme':
            $('.nav-item').hover(
                function(){
                    $(this).css({'color': ''});
                    $(this).children('img').css({'filter': ''});
                },
                function(){
                    $(this).css({'color': ''});
                    $(this).children('img').css({'filter': ''});
                }
            );
            $('.nav-listClose').css({'background-color': '', 'color': '#ffebd7'});

            $('.cookie-alert').css({'background-color': '#1a1a1a'});
            $('.cookie-alertText').css({'color': '#ffebd7'})
            $('.cookie-alertBtn').css({'background-color': '#000000', 'color': '#ffebd7'})

            $('.requestMusic-body').css({'background-color': '#1a1a1a'});
            $('.requestMusic-close, .requestMusic-form > div > label, .requestMusic-form > div > div, .requestMusic-form > button').css({'color': '#ffebd7'});

            $('.streamer-messageText, .streamer-name').css({'color': '#ffebd7'});
            $('.playing-text').eq(0).css({'color': '#ffebd7'});
            $('.streamer-status, .streamer-alert > span, .streamer-text').css({'color': '#ffebd7'});

            $('.player-footer').css({'background-color': '#1a1a1a', 'border-top': ''});
            $('.playing-title').css({'color': ''})
            $('.playing-text').eq(1).css({'color': ''});
            $('.play').eq(1).css({'color': ''});
            $('.pause').eq(1).css({'color': ''});
            $('.volume').eq(1).css({'color': ''});
            $('.requestMusic-btn').eq(1).css({'background-color': '', 'color': '#ffebd7'});

            $('.footer').css({'background-color': '#000000'});
            $('.footer-cotnainer > p').css({'color': '#ffebd7'})
            $('.footer-container > p > span').css({'color': ''});
        break;
        default:
            $('.nav-item').hover(
                function(){
                    $(this).css({'color': ''});
                    $(this).children('img').css({'filter': ''});
                },
                function(){
                    $(this).css({'color': ''});
                    $(this).children('img').css({'filter': ''});
                }
            );
            $('.nav-listClose').css({'background-color': '', 'color': ''});

            $('.cookie-alert').css({'background-color': ''});
            $('.cookie-alertText').css({'color': ''})
            $('.cookie-alertBtn').css({'background-color': '', 'color': ''})

            $('.requestMusic-body').css({'background-color': ''});
            $('.requestMusic-close, .requestMusic-form > div > label, .requestMusic-form > div > div, .requestMusic-form > button').css({'color': ''});

            $('.streamer-messageText, .streamer-name').css({'color': ''});
            $('.playing-text').eq(0).css({'color': ''});
            $('.streamer-status, .streamer-alert > span, .streamer-text').css({'color': ''});

            $('.player-footer').css({'background-color': '', 'border-top': ''});
            $('.playing-title').css({'color': ''})
            $('.playing-text').eq(1).css({'color': ''});
            $('.play').eq(1).css({'color': ''});
            $('.pause').eq(1).css({'color': ''});
            $('.volume').eq(1).css({'color': ''});
            $('.requestMusic-btn').eq(1).css({'background-color': '', 'color': ''});

            $('.footer').css({'background-color': ''});
            $('.footer-container > p > span').css({'color': ''});
        break;
    }
}
indexTheme();

//********** CAIXA DE PEDIDOS **********
$('.requestMusic-btn').click(function(){
    $.ajax({
        url: 'http://localhost/akiba_2.0/site/player/streaming-data.php',
        dataType: 'json',
        type: 'get',
        success: function(response){
            switch(response['request-music'].status){
                case 'open':
                    $('.requestMusic-modal').fadeIn();
                break;
                case 'close':
                    $('.toast-body').html('<i class="bi bi-mic-mute-fill"></i>&nbsp;Nenhum DJ está ao vivo na rádio agora!');
                    $('.toast').addClass('bg-danger').fadeIn();
                    setTimeout(function(){ $('.toast').removeClass('bg-danger').fadeOut(); }, 5*1000);
                break;
                case 'rerun':
                    $('.toast-body').html('<i class="bi bi-arrow-counterclockwise"></i>&nbsp;Você está ouvindo uma reprise agora na rádio!');
                    $('.toast').addClass('bg-info').fadeIn();
                    setTimeout(function(){ $('.toast').removeClass('bg-info').fadeOut(); }, 5*1000);
                break;
            }
        }
    });
});

$('.requestMusic-modal').click(function(e){
    const requestMusic_modal = document.querySelector('.requestMusic-modal');
    if(e.target == requestMusic_modal){
        $('.requestMusic-modal').fadeOut();
    }
});

//********** PLAYER **********
setInterval(function(){
    $.ajax({
        url: 'http://localhost/akiba_2.0/site/player/streaming-data.php',
        dataType: 'json',
        type: 'get',
        success: function(response){

            $('.streamer-messageText').text(response['streaming'].message);
            $('.streamer-messageAvatar').attr('src', response['streaming'].messageAvatar);
            $('.streamer-programLogo').attr('src', response['streaming'].programLogo).attr('alt', response['streaming'].program);
            $('.streamer-name').text(response['streaming'].streamer);
            $('.playing-text').text(response['streaming'].music);

            switch(response['streaming'].status){
                case 'live':
                    $('.streamer-status').css({'background-color': '#008000'}).text('Humano');
                    $('.streamer-alert').css({'background-color': '#ff2e2e'}).children('span').html('<i class="bi bi-broadcast"></i>');
                    $('.streamer-alert').children('h6').text('Estamos ao vivo na rádio');
                break;
                case 'rerun':
                    $('.streamer-status').css({'background-color': '#614e40'}).text('Reapresentação');
                    $('.streamer-alert').css({'background-color': '#a15a28'}).children('span').html('<i class="bi bi-rewind-fill"></i>');
                    $('.streamer-alert').children('h6').text('Uma reprise está no ar');
                break;
            }

            switch(response['streaming'].genre){
                case 'male':
                    $('.streamer-genre').text('Com o DJ');
                break;
                case 'female':
                    $('.streamer-genre').text('Com a DJ');
                break;
                case 'neutral':
                    $('.streamer-genre').text('Com @ DJ');
                break;
            }

            if ('mediaSession' in navigator) {
                navigator.mediaSession.metadata = new MediaMetadata({
                    title: response['streaming'].program+' com DJ '+response['streaming'].streamer,
                    artist: response['streaming'].music,
                    album: 'Rede Akiba - O Paraíso dos Otakus',
                    artwork:[
                        { src: 'https://i.imgur.com/JL8ur1L.png', sizes: '96x96',   type: 'image/png' },
                        { src: 'https://i.imgur.com/Zcn3a34.png', sizes: '128x128', type: 'image/png' },
                        { src: 'https://i.imgur.com/tQ0OZRh.png', sizes: '256x256', type: 'image/png' },
                        { src: 'https://i.imgur.com/9ye5288.png', sizes: '384x384', type: 'image/png' },
                        { src: 'https://i.imgur.com/IUu1K0l.png', sizes: '512x512', type: 'image/png' },
                    ]
                })
            }
        }
    });
}, 10*1000);

var audio = document.querySelector('.streaming');
$('.play').click(function(){
    $('.play').hide();
    $('.pause').show();
    audio.play();
});
$('.pause').click(function(){
    $('.pause').hide();
    $('.play').show();
    audio.pause();
});

$('.volume').click(function(){
    $('.volume-box').fadeToggle();
})

$('.volume-range').eq(0).click(function(){
    setTimeout(function(){ $('.volume-box').fadeToggle(); }, 5*1000); 
})

$('.volume-range').eq(0).on('change', function(){
    audio.volume = $('.volume-range').eq(0).val();
});

$('.volume-range').eq(1).on('change', function(){
    audio.volume = $('.volume-range').eq(1).val();
});

$('.cookie-alertBtn').click(function(){
    $('.play').hide();
    $('.pause').show();
    $('.cookie-alert').fadeOut();
    audio.play();
});

//********** ROTAS **********
function router(){
    const url = window.location.href;
    const urlSplit = url.split('/');
    const urlPage = urlSplit[4]; //Marcador da página
    const urlParameter01 = urlSplit[5]; // Parametro 01
    const urlParameter02 = urlSplit[6]; // Parametro 02
    const urlParameter03 = urlSplit[7]; // Parametro 03
    console.log(urlSplit);

    switch(urlPage){
        case '':
            $('main').load(`http://localhost/akiba_2.0/site/page/home.php`);
        break;
        case 'tag':
            $('main').load(`http://localhost/akiba_2.0/site/page/tag.php/${urlParameter01}/${urlParameter02}/${urlParameter03}`);
        break;
        case 'reviews':
            $('main').load(`http://localhost/akiba_2.0/site/page/reviews.php`);
        break;
        case 'radio':
            $('main').load(`http://localhost/akiba_2.0/site/page/radio.php`);
        break;
        case 'podcasts':
            $('main').load(`http://localhost/akiba_2.0/site/page/podcasts.php`);
        break;
        case 'equipe':
            $('main').load(`http://localhost/akiba_2.0/site/page/equipe.php/${urlParameter01}/${urlParameter02}/${urlParameter03}`);
        break;
        case 'midias':
            $('main').load(`http://localhost/akiba_2.0/site/page/midias.php`);
        break;
        case 'contatos':
            $('main').load(`http://localhost/akiba_2.0/site/page/contatos.php`);
        break;
        case 'animes': case 'mangas': case 'tops': case 'listas': case 'listas': case 'primeiras-impressoes': case 'curiosidades': case 'eventos': case 'noticias':
            $('main').load(`http://localhost/akiba_2.0/site/page/post.php/${urlParameter01}/${urlParameter02}/${urlParameter03}`);
        break
        case 'review':
            $('main').load(`http://localhost/akiba_2.0/site/page/review.php/${urlParameter01}/${urlParameter02}/${urlParameter03}`);
        break;
        case 'podcast':
            $('main').load(`http://localhost/akiba_2.0/site/page/podcast.php/${urlParameter01}/${urlParameter02}/${urlParameter03}`);
        break;
        default: 
            $('main').load(`http://localhost/akiba_2.0/site/page/404.php`);
        break;
    };

    window.addEventListener('popstate', e =>{
        switch(e.state){
            case null: case 'home':
                $('main').load(`http://localhost/akiba_2.0/site/page/home.php`);
            break;
            case 'tag':
                $('main').load(`http://localhost/akiba_2.0/site/page/tag.php/${urlParameter01}/${urlParameter02}/${urlParameter03}`);
            break;
            case 'reviews':
                $('main').load(`http://localhost/akiba_2.0/site/page/reviews.php`);
            break;
            case 'radio':
                $('main').load(`http://localhost/akiba_2.0/site/page/radio.php`);
            break;
            case 'podcasts':
                $('main').load(`http://localhost/akiba_2.0/site/page/podcasts.php`);
            break;
            case 'equipe':
                $('main').load(`http://localhost/akiba_2.0/site/page/equipe.php/${urlParameter01}/${urlParameter02}/${urlParameter03}`);
            break;
            case 'midias':
                $('main').load(`http://localhost/akiba_2.0/site/page/midias.php`);
            break;
            case 'contatos':
                $('main').load(`http://localhost/akiba_2.0/site/page/contatos.php`);
            break;
            case 'post':
                $('main').load(`http://localhost/akiba_2.0/site/page/post.php/${urlParameter01}/${urlParameter02}/${urlParameter03}`);
            break;
            case 'review':
                $('main').load(`http://localhost/akiba_2.0/site/page/review.php/${urlParameter01}/${urlParameter02}/${urlParameter03}`);
            break;
            case 'podcast':
                $('main').load(`http://localhost/akiba_2.0/site/page/podcast.php/${urlParameter01}/${urlParameter02}/${urlParameter03}`);
            break;
            default: 
                $('main').load(`http://localhost/akiba_2.0/site/page/404.php`);
            break;
        };
    });
    
}

router();