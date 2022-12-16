<?php
    if(isset($_GET['a'])){
        $alert = $_GET['a'];
    }else{
        $alert = "none";
    }
?>
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
    <title>Rede Akiba | Song Hwa Panel</title>
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
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xll-4">
            <section class="login">
                <img class="login-logo" src="<?php $_SERVER['HTTP_HOST']; ?>/akiba_2.0/admin/assets/img/img/logo.webp">
                <div class="login-form p-4">
                    <form>
                        <div class="mb-3">
                            <label for="login" class="form-label text-uppercase"><i class="bi bi-person-circle"></i>&nbsp;Login</label>
                            <input type="email" class="form-control shadow-none border-dark" id="login" aria-label="Login" placeholder="Fuslie" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label text-uppercase"><i class="bi bi-key-fill"></i>&nbsp;Senha</label>
                            <input type="password" class="form-control shadow-none border-dark" id="senha" aria-label="Senha" placeholder="••••••••••" required>
                        </div>
                        <button type="submit" class="btn border-0 text-uppercase" aria-label="Entrar"><i class="bi bi-box-arrow-in-right"></i>&nbsp;&nbsp;Entrar</button>
                    </form>
                    <?php if($alert == "erro"){ ?>
                        <div class="alert alert-dark text-center text-uppercase mt-3 m-0" role="alert">
                            <i class="bi bi-hand-thumbs-down-fill"></i>&nbsp;Seus dados de login estão errados
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>

</div>

<p class="credits position-absolute w-100 bottom-0 text-center">
    Song Hwa Panel | Rede Akiba - O Paraíso do Otakus.<br>
    Designer e planejamento por Ellyson Santos | Desenvolvido por João Gabriel.
</p>

<!--javascript-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php $_SERVER['HTTP_HOST'];?>/akiba_2.0/admin/assets/js/main.js"></script>
</body>
</html>

<script async defer>
    $('.body').css({
        "background-image": "url('https://wallpaperaccess.com/full/1567784.jpg')",
        "background-size": "cover"
    });
    if(window.screen.width < '992'){
        $('.body').css({
            "background-image": "none",
            "background-color": "#0e1139"
        });
    }else{
        $('.body').css({
            "background-image": "url('https://wallpaperaccess.com/full/1567784.jpg')",
            "background-size": "cover"
        });
    };
    $(window).on('resize', function(){
        if(window.screen.width < '992'){
            $('.body').css({
                "background-image": "none",
                "background-color": "#0e1139"
            });
        }else{
            $('.body').css({
                "background-image": "url('https://wallpaperaccess.com/full/1567784.jpg')",
                "background-size": "cover"
            });
        };
    });
</script>