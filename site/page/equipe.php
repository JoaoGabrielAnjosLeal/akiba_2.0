<!---------------------------------JAVASCRIPT PRÓPRIO DA PÁGINA--------------------------------->
<script async defer>
    //Altera o titulo da página no navegador
    $('title').text('Rede Akiba | Equipe');

    //Comportamento dos players na página
    $('.player-top').hide();
    $('.player-footer').show();
    $('.footer').css({'margin': '0rem 0rem 4rem 0rem'}).show();
    
    //Tema da página
    switch(Cookies.get('akiba-theme')){
        case 'light-theme':
            if(window.screen.width < '992'){
                $('.body').css({'background': '#e6e6e6'});
            }
            else{
                $('.body').css({'background': 'linear-gradient(180deg, #e6e6e6 48.9rem, #f8f8f8 0%)'});
            };
            $(window).on('resize', function(){
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#e6e6e6'});
                }
                else{
                    $('.body').css({'background': 'linear-gradient(180deg, #e6e6e6 48.9rem, #f8f8f8 0%)'});
                };
            });

            $('.block-description').css({'color': '#000000'});

            $('.about-history, .team-description, .team-nickName').css({'color': '#000000'});
            $('.team-userListItem, .team-like > ul > li, .team-deslike > ul > li').css({'color': '#ffebd7'});
            $('.team-dice > span').css({'background-color': '#cfcfcf'});
        break;
        case 'dark-theme':
            if(window.screen.width < '992'){
                $('.body').css({'background': '#1a1a1a'});
            }
            else{
                $('.body').css({'background': 'linear-gradient(180deg, #000000 48.9rem, #1a1a1a 0%)'});
            };
            $(window).on('resize', function(){
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#1a1a1a'});
                }
                else{
                    $('.body').css({'background': 'linear-gradient(180deg, #000000 48.9rem, #1a1a1a 0%)'});
                };
            });

            $('.block-description').css({'color': '#ffebd7'});

            $('.about-history, .team-description, .team-nickName').css({'color': '#ffebd7'});
            $('.team-userListItem, .team-like > ul > li, .team-deslike > ul > li').css({'color': '#ffebd7'});
            $('.team-dice > span').css({'background-color': '#FFF6E6'});
        break;
        default:
            if(window.screen.width < '992'){
                $('.body').css({'background': '#050505'});
            }
            else{
                $('.body').css({'background': 'linear-gradient(180deg, #050505 48.9rem, #0e1139 0%)'});
            };
            $(window).on('resize', function(){
                if(window.screen.width < '992'){
                    $('.body').css({'background': '#050505'});
                }
                else{
                    $('.body').css({'background': 'linear-gradient(180deg, #050505 48.9rem, #0e1139 0%)'});
                };
            });

            $('.block-description').css({'color': ''});

            $('.about-history, .team-description, .team-nickName').css({'color': ''});
            $('.team-userListItem, .team-like > ul > li, .team-deslike > ul > li').css({'color': ''});
            $('.team-dice > span').css({'background-color': ''});
        break;
    }
</script>

<!---------------------------------CONTEÚDO DA PÁGINA--------------------------------->
<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xll-8">
            <section class="block-start">
                <div class="block-container">
                    <h6 class="block-title text-center text-uppercase">Sobre Nós</h6>
                </div>
                <p class="block-description text-center text-uppercase">Lê um pouquinho, só para entender como tudo começou e onde conseguimos chegar!</p>
            </section>
        </div>
    </div>

    <div class="row mt-2 mb-4 mb-lg-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="about">
                <div class="about-title position-relative">
                    <h6 class="text-uppercase">Sobre a Rede Akiba</h6>
                </div>
                <div class="about-container mt-4">
                    <div class="about-content">
                        <h6 class="about-title text-uppercase">O primeiro ano - 2016</h6>
                        <p class="about-history">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam felis felis, fermentum id neque id, facilisis accumsan quam. Fusce non venenatis lacus, vel scelerisque augue. Integer mattis, arcu a laoreet porta, ante nisi finibus est, et laoreet ligula libero nec tellus. In varius euismod gravida. Nullam sit amet neque justo. Pellentesque vitae purus vel diam mollis efficitur. Quisque mollis, ligula quis aliquet condimentum, ex ipsum dignissim diam, a tincidunt nibh velit sed quam. Sed consectetur dolor nisi, eu varius purus iaculis quis. Cras at est maximus, rhoncus neque non, pharetra massa. Pellentesque non leo et tortor tincidunt vulputate.
                        </p>
                    </div>
                    <div class="about-content float-end mt-4">
                        <h6 class="about-title text-uppercase">O segundo ano - 2017</h6>
                        <p class="about-history">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam felis felis, fermentum id neque id, facilisis accumsan quam. Fusce non venenatis lacus, vel scelerisque augue. Integer mattis, arcu a laoreet porta, ante nisi finibus est, et laoreet ligula libero nec tellus. In varius euismod gravida. Nullam sit amet neque justo. Pellentesque vitae purus vel diam mollis efficitur. Quisque mollis, ligula quis aliquet condimentum, ex ipsum dignissim diam, a tincidunt nibh velit sed quam. Sed consectetur dolor nisi, eu varius purus iaculis quis. Cras at est maximus, rhoncus neque non, pharetra massa. Pellentesque non leo et tortor tincidunt vulputate.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xll-9">
            <section class="block-start">
                <div class="block-container">
                    <h6 class="block-title text-center text-uppercase">Equipe Akiba</h6>
                </div>
                <p class="block-description text-center text-uppercase">Essa galerinha que faz tudo acontecer e seguir em frente! Obrigado por estarem conosco.</p>
            </section>
        </div>
    </div>

    <div class="row mt-2 mb-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="office">
                <div class="office-title position-relative">
                    <h6 class="text-uppercase">Quem são os:</h6>
                </div>
                <div class="office-container d-flex flex-wrap justify-content-center mt-2">
                <button class="office-btn btn text-uppercase" style="border: 0.2rem solid #e8e8e7; color: #e8e8e7;" aria-label="Administradores"><img style="margin-top: -0.35rem; filter: invert(100%) sepia(39%) saturate(3850%) hue-rotate(187deg) brightness(127%) contrast(82%);"class="office-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Animes.svg" loading="lazy" alt="Administradores">&nbsp;Administradores</button>
                <button class="office-btn btn text-uppercase" style="border: 0.2rem solid #cfa70a; color: #cfa70a;" aria-label="Locutores"><img style="margin-top: -0.35rem; filter: invert(81%) sepia(39%) saturate(6431%) hue-rotate(12deg) brightness(98%) contrast(92%);"class="office-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Animes.svg" loading="lazy" alt="Locutores">&nbsp;Locutores</button>
                <button class="office-btn btn text-uppercase" style="border: 0.2rem solid #2eba61; color: #2eba61;" aria-label="Podcasters"><img style="margin-top: -0.35rem; filter: invert(57%) sepia(83%) saturate(385%) hue-rotate(89deg) brightness(89%) contrast(90%);"class="office-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Animes.svg" loading="lazy" alt="Podcasters">&nbsp;Podcasters</button>
                <button class="office-btn btn text-uppercase" style="border: 0.2rem solid #ea2e58; color: #ea2e58;" aria-label="Youtubers"><img style="margin-top: -0.35rem; filter: invert(23%) sepia(65%) saturate(3832%) hue-rotate(334deg) brightness(98%) contrast(86%);"class="office-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Animes.svg" loading="lazy" alt="Youtubers">&nbsp;Youtubers</button>
                <button class="office-btn btn text-uppercase" style="border: 0.2rem solid #98377d; color: #98377d;" aria-label="Colunistas"><img style="margin-top: -0.35rem; filter: invert(28%) sepia(20%) saturate(3303%) hue-rotate(276deg) brightness(96%) contrast(89%);"class="office-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Animes.svg" loading="lazy" alt="Colunistas">&nbsp;Colunistas</button>
                <button class="office-btn btn text-uppercase" style="border: 0.2rem solid #00c0f2; color: #00c0f2;" aria-label="Web e Art"><img style="margin-top: -0.35rem; filter: invert(62%) sepia(47%) saturate(3896%) hue-rotate(151deg) brightness(99%) contrast(106%);"class="office-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Animes.svg" loading="lazy" alt="Web e art">&nbsp;Web & Art</button>
                <button class="office-btn btn text-uppercase" style="border: 0.2rem solid #b487e8; color: #b487e8;" aria-label="Streamers"><img style="margin-top: -0.35rem; filter: invert(59%) sepia(60%) saturate(649%) hue-rotate(214deg) brightness(93%) contrast(95%);"class="office-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Animes.svg" loading="lazy" alt="Streamers">&nbsp;Streamers</button>
                <button class="office-btn btn text-uppercase" style="border: 0.2rem solid #d3b65c; color: #d3b65c;" aria-label="Social Mídia"><img style="margin-top: -0.35rem; filter: invert(84%) sepia(31%) saturate(738%) hue-rotate(351deg) brightness(88%) contrast(86%);"class="office-btnIcon" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/svg/tag/Animes.svg" loading="lazy" alt="Sociais Mídia">&nbsp;Sociais Mídias</button>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="team-title position-relative">
                <h6 class="text-uppercase">Essa equipe maravilhosa</h6>
            </section>
        </div>
    </div>

    <div class="row mt-3 mb-4">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <ul class="team-userList p-0 m-0">
                <li class="team-userListItem text-uppercase">Takashi</li>
                <li class="team-userListItem text-uppercase">Neko Kirame</li>
                <li class="team-userListItem text-uppercase">Suzuh</li>
                <li class="team-userListItem text-uppercase">Jojô</li>
                <li class="team-userListItem text-uppercase">Kim</li>
                <li class="team-userListItem text-uppercase">Luh</li>
                <li class="team-userListItem text-uppercase">NHK</li>
                <li class="team-userListItem text-uppercase">Roger Ventura</li>
            </ul>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
            <section class="team-profile">
                <div class="team-identifier">
                    <h5 class="team-nickName text-center text-uppercase m-0">Neko Kirame</h5>
                    <h6 class="team-name text-center text-uppercase m-0">( Ellyson Santos )</h6>
                </div>
                <div class="team-container mt-4">
                    <div class="team-social d-flex gap-4 justify-content-center">
                        <a href="#" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" target="_blank" title="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" target="_blank" title="Github"><i class="bi bi-github"></i></a>
                    </div>
                    <img class="team-avatar float-end" src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/site/assets/img/img/ex_avatar.webp" loading="lazy" alt="Avatar do membro">
                </div>
                <div class="team-dice d-flex flex-wrap gap-2 mt-2">
                    <span class="team-office text-uppercase">
                        Administrador - Locutor - Redator - Web & Art
                    </span>
                    <span class="team-localization text-uppercase">
                        Guarabira - PR
                    </span>
                    <span class="team-age text-uppercase">
                        30 anos
                    </span>
                </div>
                <p class="team-description mt-3">
                Nunc at egestas augue. In vulputate nec nisl vel facilisis. In luctus egestas enim, nec elementum tellus pharetra pellentesque. Praesent massa lorem, interdum at dictum id, auctor vel ante. Quisque cursus ex metus, eu lobortis quam sollicitudin eget. Nam dapibus iaculis ligula, non pulvinar tellus auctor non. Proin lobortis lectus vitae eros euismod congue ut a enim. Sed mollis facilisis gravida. Suspendisse quis mi nec justo suscipit sodales. Fusce euismod, ligula vitae ultricies sodales, mauris dui luctus turpis, sit amet accumsan eros nulla eu turpis. Nunc id vehicula libero.
                Aenean venenatis nec lacus vel varius. Aliquam erat volutpat. Proin nec ultrices metus, eu efficitur dolor. Nullam id blandit nibh, sed dignissim tellus. Etiam sed sem laoreet, imperdiet nisi quis, aliquet eros. Morbi at ligula vitae elit consectetur rhoncus. Etiam bibendum sed nisi in venenatis. Aliquam non ex bibendum, tincidunt turpis id, efficitur augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum velit non ligula molestie, eget hendrerit quam ornare. Sed gravida justo at metus facilisis, eu sollicitudin erat molestie. Ut id pulvinar dolor, at dictum nisl.
                </p>
                <div class="team-like float-start">
                    <h6 class="text-uppercase">Gosta de:</h6>
                    <ul class="p-0">
                        <li class="text-uppercase">Isekai / Ecchi</li>
                        <li class="text-uppercase">Isekai / Ecchi</li>
                        <li class="text-uppercase">Isekai / Ecchi</li>
                    </ul>
                </div>
                <div class="team-deslike float-end">
                    <h6 class="text-uppercase text-end">Não gosta de:</h6>
                    <ul class="p-0">
                        <li class="text-uppercase text-end">Isekai / Ecchi</li>
                        <li class="text-uppercase text-end">Isekai / Ecchi</li>
                        <li class="text-uppercase text-end">Isekai / Ecchi</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

</div>