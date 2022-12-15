<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="pt-br, en-US" />
    <meta http-equiv="cache-control" content="max-age=31536000" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="João Gabriel dos Anjos Leal (Suzuh)" />
    <meta name="description" content="Sua fonte de músicas e notícias sobre animes, mangás e light novels. Tenha acesso também à recomendações, reviews e curiosidades sobre suas obras favoritas. Enquanto isso, na rádio você tem acesso à maior playlist otaku do momento com notícias e programas ao vivo." />
    <meta name="keywords" content="anime, mangá, japão, música, ásia, cosplay, evento" />
    <meta name="copyright" content="© <?php echo date("Y"); ?> Rede Akiba - O Paraíso dos Otakus" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <title>Rede Akiba - O Paraíso dos Otakus! | Sua Melhor Fonte de Animes (e Mangás) no Brasil!</title>
    <link rel="shortcut icon" href="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/favicon.ico" type="image/x-icon">
    <!--preloads-->
    <link rel="preload" href="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/css/main.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" as="style">
    <!--css--> 
    <link rel="stylesheet" href="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/css/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="manifest" href="manifest.json">
    <!--PWA-->
    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Akiba">
    <meta name="apple-mobile-web-app-title" content="Akiba">
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="./">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body class="body">

<header class="header">
    <nav class="nav">
        <div class="nav-brand">
            <img onclick="history.pushState('home','home','/akiba_2.0/'); router();" class="nav-logo" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/logo.webp" alt="Logo do site">
            <button class="nav-toggle btn float-end rounded-circle d-lg-none" aria-label="Abrir menu"><i class="bi bi-list"></i></button>
            <button class="nav-theme btn float-end rounded-circle p-1 overflow-hidden" aria-label="Temas"><img class="nav-themeIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/navbar/Theme.svg" alt="Icone do botão temas"></button>
        </div>
        <ul class="nav-list p-0">
            <button class="nav-listClose btn border-0 d-lg-none"><i class="bi bi-x"></i></button>
            <li onclick="history.pushState('tag','tag','/akiba_2.0/tag/noticias'); router();" class="nav-item text-uppercase"><img class="nav-itemIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/navbar/News.svg" alt="Icone do item news">&nbsp;News</li>
            <li onclick="history.pushState('tag','tag','/akiba_2.0/tag/listas'); router();" class="nav-item text-uppercase"><img class="nav-itemIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/navbar/Colunas.svg" alt="Icone do item colunas">&nbsp;Colunas</li>
            <li onclick="history.pushState('reviews','reviews','/akiba_2.0/reviews'); router();" class="nav-item text-uppercase"><img class="nav-itemIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/navbar/Reviews.svg" alt="Icone do item reviews">&nbsp;Reviews</li>
            <li onclick="history.pushState('radio','radio','/akiba_2.0/radio'); router();" class="nav-item text-uppercase"><img class="nav-itemIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/navbar/Rádio.svg" alt="Icone do item rádio">&nbsp;Rádio</li>
            <li onclick="history.pushState('podcasts','podcasts','/akiba_2.0/podcasts'); router();" class="nav-item text-uppercase"><img class="nav-itemIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/navbar/Podcasts.svg" alt="Icone do item podcast">Podcasts</li>
            <li onclick="history.pushState('equipe','equipe','/akiba_2.0/equipe'); router();" class="nav-item text-uppercase"><img class="nav-itemIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/navbar/Equipe.svg" alt="Icone do item equipe">&nbsp;Equipe</li>
            <li onclick="history.pushState('midias','midias','/akiba_2.0/midias'); router();" class="nav-item text-uppercase"><img class="nav-itemIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/navbar/Mídias.svg" alt="Icone do item mídias">&nbsp;Mídias</li>
            <li onclick="history.pushState('contatos','contatos','/akiba_2.0/contatos'); router();" class="nav-item text-uppercase"><img class="nav-itemIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/navbar/Contatos.svg" alt="Icone do item contatos">&nbsp;Contatos</li>
        </ul>
        <ul class="nav-themeSelector p-0 position-fixed">
            <li class="rounded-circle nav-themeItem nav-themeReset"><i class="bi bi-arrow-clockwise"></i></li>
            <li class="rounded-circle nav-themeItem nav-themeLight"><i class="bi bi-brightness-low-fill"></i></li>
            <li class="rounded-circle nav-themeItem nav-themeDark"><i class="bi bi-moon-stars-fill"></i></li>
        </ul>
    </nav>
</header>

<audio class="streaming">
    <source src="https://ssl.srvstm.com:9526/;stream.nsv" type="audio/mpeg" >
</audio>

<section class="toast align-items-center text-white border-0 position-fixed">
  <div class="d-flex">
    <div class="toast-body">
        <!--Conteúdo do alerta--> 
    </div>
  </div>
</section>

<section class="requestMusic-modal position-fixed top-0 bottom-0 start-0 end-0">
    <div class="requestMusic-body">
        <div class="requestMusic-head">
        </div>
        <div class="requestMusic-content p-4">
        <form class="requestMusic-form">
            <div class="mb-2">
                <label for="nome" class="form-label text-uppercase"><i class="bi bi-person-circle"></i>&nbsp;Nome ou apelido</label>
                <input type="text" class="form-control shadow-none" id="nome" aria-label="Nome" placeholder="Anna Beatriz - Lily Pichu" required>
                <div class="form-text">Se não quiser falar seu nome real, fale um apelido!</div>
            </div>
            <div class="mb-2">
                <label for="localização" class="form-label text-uppercase"><i class="bi bi-geo-alt-fill"></i>&nbsp;Cidade e Estado</label>
                <input type="text" class="form-control shadow-none" id="localização" aria-label="Cidade e estado" placeholder="Rio de Janeiro - RJ" required>
                <div class="form-text">Você mora onde? Fora do Brasil? Diga a cidade e o país!</div>
            </div>
            <div class="mb-2">
                <label for="música" class="form-label text-uppercase"><i class="bi bi-music-note-list"></i>&nbsp;Música desejada</label>
                <input type="text" class="form-control shadow-none" id="música" aria-label="Música desejada" placeholder="Spy x Family - Mixed Nuteds" required>
                <div class="form-text">Só animesongs! Lembre-se a Akiba é uma rádio para otakus!</div>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label text-uppercase"><i class="bi bi-envelope-heart-fill"></i>&nbsp;Mandar recadinho</label>
                <textarea class="form-control shadow-none" id="mensagem" rows="4" aria-label="Mandar recadinho" placeholder="Estou adorando seu programa, vou vim sempre acompanhar!"></textarea>
                <div class="form-text">Não é obrigatório mas seria legal mandar um recadinho.</div>
            </div>
            <button type="submit" class="btn w-100 text-uppercase border-0" aria-label="Enviar"><i class="bi bi-send-fill"></i>&nbsp;Enviar meu pedido</button>
        </form>
        </div>
    </div>
</section>

<div class="container">
   <div class="row justify-content-center mt-4 mt-md-5">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xll-10">
            <section class="player-top">
                <div class="social d-flex justify-content-center">
                    <a class="social-link" href="#" target="_blank" title="Discord"><i class="bi bi-discord"></i></a>
                    <a class="social-link" href="#" target="_blank" title="Whatsapp"><i class="bi bi-whatsapp"></i></a>
                    <a class="social-link" href="#" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a class="social-link" href="#" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a class="social-link" href="#" target="_blank" title="Twitter"><i class="bi bi-twitter"></i></a>
                    <a class="social-link" href="#" target="_blank" title="Youtube"><i class="bi bi-youtube"></i></a>
                    <a class="social-link" href="#" target="_blank" title="Twitch"><i class="bi bi-twitch"></i></a>
                </div>
                <div class="streamer-message">
                    <div class="streamer-messageContainer"><h6 class="streamer-messageText text-uppercase position-relative">Seja bem vindo(a) a Rede Akiba</h6></div>
                    <img class="streamer-messageAvatar float-end position-relative" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" alt="Icone do avatar do DJ">
                </div>
                <div class="streamer-program d-flex gap-2 mt-1 mt-sm-5">
                    <img class="streamer-programLogo" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_programa.webp" alt="Programa do DJ">
                    <span class="streamer-programChevron"><i class="bi bi-chevron-double-right"></i></span>
                </div>
                <div class="streamer">
                    <span class="streamer-genre text-uppercase">Com a DJ</span>
                    <h6 class="streamer-name text-uppercase">Aki-chan</h6>
                    <span class="streamer-status text-uppercase text-center">Robô</span>
                </div>
                <div class="playing">
                    <h6 class="playing-title text-uppercase m-0">Tocando:</h6>
                    <div class="playing-container"><h6 class="playing-text text-uppercase text-nowrap">Estamos fora do ar</h6></div>
                </div>
                <div class="streamer-avatar">
                    <img class="avatar w-100 d-block" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" alt="Avatar do DJ">
                </div>
                <div class="request-music float-end">
                    <button class="requestMusic-btn btn text-uppercase" aria-label="Faça seu Pedido">Faça seu <span class="requestMusic-btnSpan">Pedido</span></button>
                </div>
                <div class="control position-relative float-end">
                    <button class="play control-btn btn p-0 border-0" aria-label="Play"><i class="bi bi-play-fill"></i></button>
                    <button class="pause control-btn btn p-0 border-0" aria-label="Pausa"><i class="bi bi-pause-fill"></i></button>
                    <button class="volume control-btn btn p-0 border-0" aria-label="Volume"><i class="bi bi-volume-down-fill"></i></button>
                    <div class="volume-box position-absolute"><input type="range" class="volume-range form-range" min="0.0" max="1.0" step="any" id="customRange1" aria-label="Barra de volume"></div>
                </div>
                <div class="streamer-alert float-end d-flex gap-2">
                    <span class="streamer-alertIcon mt-1 ml-2"><i class="bi bi-robot"></i></span>
                    <h6 class="streamer-alertText text-uppercase text-center mt-2">Nenhum DJ ao vivo na rádio</h6>
                </div>
                <div class="player-announcement d-flex gap-2">
                    <div class="announcement-vertical bg-dark">testede anuncio foda pra caraio</div>
                    <div class="announcement-vertical bg-dark d-none d-md-block">teste</div>
                </div>
            </section>
        </div>
   </div>
</div>

<main>
    <!--Aqui irá carregar todo o conteúdo do site-->
</main>

<footer class="footer w-100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12 pt-2 pb-1">
                <section class="footer-container mt-3">
                    <img class="footer-logo d-flex mx-auto" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/logo.webp" alt="Logo do site">
                    <p class="footer-credits mt-3 w-100 text-center">
                        Copyright © 2016 - <?php echo date('Y'); ?> Rede Akiba | Versão Song Hwa.<br>
                        Planejamento por <span>Ellyson Santos</span> e <span>Antônio Medeiros Lopes</span>. Desenvolvimento por <span>João Gabriel</span>.
                    </p>
                </section>
            </div>
        </div>
    </div>
</footer>

<section class="player-footer w-100 position-fixed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section>
                    <div class="control position-relative">
                        <button class="play control-btn btn p-0 border-0" aria-label="Play"><i class="bi bi-play-fill"></i></button>
                        <button class="pause control-btn btn p-0 border-0" aria-label="Pausa"><i class="bi bi-pause-fill"></i></button>
                        <button class="volume control-btn btn p-0 border-0" aria-label="Volume"><i class="bi bi-volume-down-fill"></i></button>
                        <input type="range" class="volume-range form-range position-absolute" min="0.0" max="1.0" step="any" id="customRange1" aria-label="Barra de volume">
                    </div>
                    <div class="playing">
                        <img class="playing-cover" src="https://thumbnailer.mixcloud.com/unsafe/300x300/extaudio/c/5/5/a/a83d-5f29-4d76-a176-75f008c9eacc" alt="Capa da música" loading="lazy">
                        <h6 class="playing-title text-uppercase">Tocando:</h6>
                        <div class="playing-container"><h6 class="playing-text text-uppercase text-nowrap">Estamos fora do ar</h6></div>
                    </div>
                    <div class="request-music float-end">
                    <button class="requestMusic-btn btn text-uppercase" aria-label="Faça seu Pedido"><i class="bi bi-music-note-list"></i></button>
                </div>
                </section>
            </div>
        </div>
    </div>
</section>

<section class="cookie-alert position-fixed">
    <p class="cookie-alertText float-end">Estamos usando cookies para melhorar a funcionalidade e sua experiência em nosso site</p>
    <button class="cookie-alertBtn m-0 float-end text-uppercase shadow-none border-0">Entendi!</button>
</section>

<!--javascript-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/js/main.min.js"></script>
</body>
</html>