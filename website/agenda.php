<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/homeify-121x113.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Agenda</title>
    <link rel="stylesheet" href="assets/font-awesome-regular/../css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/font-awesome-regular/css/regular.min.css">
    <link rel="stylesheet" href="assets/font-awesome-solid/../css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/font-awesome-solid/css/solid.min.css">
    <link rel="stylesheet" href="assets/material-design/css/material-icons.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">




</head>

<body>

    <section class="menu cid-s48OLK6784" once="menu" id="menu1-t">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="index_in.php">
                            <img src="assets/images/homeify-121x113.png" alt="" style="height: 3.8rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="index_in.php">Homeify</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item dropdown open"><a class="nav-link link text-black text-primary dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="true"><span class="material material-home mbr-iconfont mbr-iconfont-btn"></span>HOME</a>
                            <div class="dropdown-menu"><a class="text-black text-primary dropdown-item display-4" href="artistas.php">ARTISTAS<br></a><a class="text-black text-primary dropdown-item display-4" href="fas.php" aria-expanded="false">FÃS</a></div>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="agenda.php"><span class="far fa-fw fa-calendar mbr-iconfont mbr-iconfont-btn"></span>AGENDA</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="quem_somos_in.php" aria-expanded="false"><span class="material material-people mbr-iconfont mbr-iconfont-btn"></span>QUEM SOMOS</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="logout.php" aria-expanded="false"><span class="fas fa-fw fa-door-open mbr-iconfont mbr-iconfont-btn"></span>LOGOUT</a></li>
                    </ul>


                </div>
            </div>
        </nav>

    </section>

    <section class="content2 cid-spVXaM3Uup" id="content2-u">


        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Próximos Concertos</strong></h4>
                <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Sabe tudo sobre o que temos na manga para os próximos meses<br></h5>
            </div>
            <div class="row mt-4">
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/product5.jpg" alt="" title="">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">Ananás Rosa</h5>
                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Eletrónica - 20/03/2021</strong></h6>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Os Ananás Rosa decidiram sair de casa e vir à Rua dos Músicos meter os sintetizadores a trabalhar - só faltas tu e o teu sofá.</p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-secondary display-7" target="_blank">Saber mais...</a></div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/product4.jpg" alt="" title="">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">Chica-Loca</h5>
                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Pop-Rock - 25/04/2021</strong></h6>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">A Chica-Loca vai estar no nosso estúdio para gravar o seu próximo álbum - e adivinha quem vai poder ouvir tudo em primeira mão?<br>
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-secondary display-7" target="_blank">Saber mais...</a></div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/product3.jpg" alt="" title="">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">Buedastyle</h5>
                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Hip-Hop - 13/05/2021</strong></h6>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Não há muito a dizer sobre os Buedastyle. Só... Têm Bué-da-Style.</p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-secondary display-7" target="_blank">Saber mais...</a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="footer1 cid-spVNvGeVDB" once="footers" id="footer1-s">



        <div class="container">
            <div class="row mbr-white">
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>Ajuda</strong>
                    </h5>
                    <ul class="list mbr-fonts-style display-4">
                        <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Contactos</span></li>
                        <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">FAQs</span></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Equipamento</strong></h5>
                    <ul class="list mbr-fonts-style display-4">

                        <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Galeria</span></li>
                        <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Preçário<br></span><br></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Agendamento</strong></h5>
                    <ul class="list mbr-fonts-style display-4">
                        <li class="mbr-text item-wrap">Estúdio</li>
                        <li class="mbr-text item-wrap">Aluguer de Equipamento</li>
                        <li class="mbr-text item-wrap"><br></li>
                        <li class="mbr-text item-wrap"><br></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"></h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-4"></p>
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                        <strong>Social</strong>
                    </h5>
                    <div class="social-row display-7">
                        <div class="soc-item">
                            <a href="http://facebook.com" target="_blank">
                                <span class="mbr-iconfont socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://twitter.com" target="_blank">
                                <span class="mbr-iconfont socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="http://instagram.com" target="_blank">
                                <span class="mbr-iconfont socicon-instagram socicon"></span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="top-1" hidden><a href="https://mobirise.site"></a></section>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>


</body>

</html>