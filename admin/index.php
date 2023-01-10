<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="pt-br, en-US" />
    <meta http-equiv="cache-control" content="max-age=31536000" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="João Gabriel dos Anjos Leal (Suzuh)" />
    <meta name="description" content="Painel administrativo do site da Rede Akiba" />
    <meta name="keywords" content="painel, administração, rádio, site" />
    <meta name="copyright" content="© <?php echo date("Y"); ?> Rede Akiba - O Paraíso dos Otakus" />
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <title>Rede Akiba | Song Ga-Kyeong Panel</title>
    <link rel="shortcut icon" href="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/admin/assets/img/img/favicon.ico" type="image/x-icon">
    <!--preloads-->
    <link rel="preload" href="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/admin/assets/css/main.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" as="style">
    <!--css--> 
    <link rel="stylesheet" href="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/admin/assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body class="body">

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xll-10">
            <section class="login d-flex flex-wrap">
                <div class="login-area">
                    <img src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/admin/assets/img/img/logo.webp">
                    <form class="mt-3">
                        <div class="mb-3">
                            <label for="login" class="form-label text-uppercase"><i class="bi bi-person-circle"></i>&nbsp;Login</label>
                            <input type="text" class="form-control shadow-none" id="login" aria-label="Login" placeholder="Fuslie" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label text-uppercase"><i class="bi bi-key-fill"></i>&nbsp;Senha</label>
                            <input type="password" class="form-control shadow-none" id="senha" aria-label="Senha" placeholder="••••••••••" required>
                        </div>
                        <button type="submit" class="btn text-uppercase border-0 w-100"><i class="bi bi-box-arrow-in-right"></i>&nbsp;&nbsp;Entrar</button>
                    </form>
                    <button class="btn text-uppercase border-0 w-100 mt-2"><i class="bi bi-x"></i>&nbsp;Esqueci meus dados de acesso</button>
                </div>
                <div class="login-rest">
                    <!--PODE SER COLOCADO QUALQUER COISA AQUI, É ONDE TA A IMAGEM DA MENINA EM UMA ESTAÇÃO DE RÁDIO-->
                </div>                
            </section>
        </div>
    </div>
</div>

<p class="credits w-100 position-absolute bottom-0 text-center">
    Song Hwa Panel | Rede Akiba - O Paraíso dos Otakus<br>
    Planejamento e designer por Ellyson Santos. Desenvolvimento por João Gabriel.
</p>

<div class="toast position-absolute text-bg-primary" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      <!--O TEXO SERÁ INJETADO VIA JS-->
    </div>
  </div>
</div>

<!--javascript-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/admin/assets/js/main.js"></script>
</body>
</html>

<script aync defer>
    $('.toast').css({
        'bottom': '1rem',
        'right': '1rem',
        'border-radius': '0.5rem'
    });

    $('.login-area > button').click(function(){
        $('.toast').fadeIn();
        $('.toast-body').text('Procure a administração da Rede Akiba para recuperar seu login e senha de acesso!');
        setTimeout(function(){ $('.toast').fadeOut(); }, 5*1000);
    });
</script>