<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Poli Junior Engenharia</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- // CSS FILES // -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="css/qualidade.css">
    <link rel="stylesheet" href="css/atuacoes.css">
    <link rel="stylesheet" href="css/resultados.css">
    <link rel="stylesheet" href="css/depoimento.css">

    <style type="text/css">
        h2 {
            text-align: center;
            padding-bottom: 25px;
            font-family: lato black;
        }

        .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus {
            color: #fff;
            background-color: transparent;
        }

        .dropdown-menu > li > a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.7;
            color: white;
            white-space: nowrap;
        }

        .nav.navbar-nav.pull-right .dropdown a:after {
            background: none repeat scroll 0 0 transparent;
            bottom: 0;
            content: "";
            display: block;
            height: 2px;
            left: 50%;
            position: absolute;
            background: #fed116;
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
            width: 0;
            background-color: transparent;
        }

        .container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse, .container-fluid > .navbar-collapse {
            padding-bottom: 10px;
        }

        .col-sm-12{
            padding-bottom: 5%;
            padding-top: 4%;
        }

    </style>

</head>
<body>

    <?php
    include 'componentes/navbar.html';
    ?>

    <section class="banner">
        <div class="container">
            <div class="row" id="row1" style="height: 100%;">
                <div class="texto2"></div>
                <div id="log" class="bannertext"></div>
            </div>
            <button class="reuniao tran3s hvr-bounce-to-right" data-wow-delay="0.2s" style="font-size: 18px">Solicite
                uma reunião gratuita
            </button>
        </div>
    </div>
</section>

<div class="porque">

    <section class="section--blue wow slideInLeft" data-wow-delay="0.1s">

        <div class="card">
            <div class="cardimgqualidade"></div>
            <div class="card-title1"><h3>Qualidade</h3></div>
            <div class="card-text"><p>Revisão feita por consultores e especialistas</p></div>
        </div>
    </section>

    <section class="section--blue wow slideInLeft" data-wow-delay="0.5s">

        <div class="card" style="margin-right: 18%;">
            <div class="cardimgpreco"></div>
            <div class="card-title1"><h3 style="text-align: center">Preços Competitivos</h3></div>
            <div class="card-text"><p style="text-align: center">O melhor custo-benefício em serviços de engenharia</p>
            </div>
        </div>
    </section>

    <section class="section--blue wow slideInLeft" data-wow-delay="0.9s">

        <div class="card31">
            <div id="cardimginovacao1" class="cardimginovacao"></div>
            <div class="card-title1"><h3 style="text-align: center; margin-top:10%;" class="titulocard">Inovação</h3></div>
            <div class="card-text"><p style="text-align: center;" class="textocard">Trabalhamos junto à sua necessidade
                para trazer
                soluções práticas e inovadoras
            </p></div>
        </div>
    </section>
</div>

<section id="atuacao">
    <h1 id="atuacoesres" style="font-family: 'Montserrat'; float: left; margin-left: 7%;"> Nossa Atuação </h1>
    <div class="atuacoes">
        <div class="atuacoes1">
            <div class="op1">
                <img src="images/atuacao/ino.png" style="margin-left: 0.5%;"><a
                style="text-transform: uppercase; font-weight: 400; font-size: 50%;" href="">AUTOMAÇÃO </a>
            </div>
            <div class="op1">
                <img src="images/atuacao/industria.png"><a
                style="text-transform: uppercase; font-weight: 400; font-size: 50%; margin-left: 0.3%;" href="">MECÂNICA </a>
            </div>
            <div class="op2">
                <img src="images/atuacao/cc.png"><a
                style="text-transform: uppercase; font-weight: 400; font-size: 50%; margin-left: 0.3%;" href="">CIVIL</a>
            </div>
        </div>
        <div class="atuacoes1">
            <div class="op1">
                <img src="images/atuacao/inst.png"> <a
                style="text-transform: uppercase; font-weight: 400; font-size: 50%; margin-left: 0.3%;" href="">WEB</a>
            </div>
            <div class="op1">
                <img src="images/atuacao/eletricaPOLIJUNIOR.png"><a
                style="text-transform: uppercase; font-weight: 400; font-size: 50%; margin-left: 0.3%;" href="">ELÉTRICA</a>
            </div>
            <div class="op2">
                <img src="images/atuacao/ino.png"><a
                style="text-transform: uppercase; font-weight: 400; font-size: 50%; margin-left: 0.3%;" href="">SISTEMAS</a>
            </div>
        </div>
    </section>
    <div id="resultado" src="images/Novas/n.jpg" style="background-image: url(images/Novas/n.jpg); 
    background-attachment: fixed; filter:brightness(100%);">
    <div class="row-resultado" style="width: 100%; height: 100%;">
        <div class="col-xs-12" style="width: 70%; height: 60%;">
            <h2 style="text-transform: uppercase;font-weight: bold;font-family:'Montserrat'; padding-top:2%; font-size: 31px;float: left; margin-left: 7%;">OS NOSSOS
            RESULTADOS</h2>
            <div class="row" style="text-align: center; width: 100%; margin-top:33%; margin-left: 25%;  ">

                <div class="col-xs-6"
                "><h2 id="numero" style="padding-top: 5%; float:right; width: 100%;margin-top: 33%;">390</h2></div>
                <div class="col-xs-6"><h2 id="numero">100%</h2></div>
            </div>
            <div class="row" style="text-align: center; margin-left: 30%;">
                <div class="col-xs-6"><h2>Consultorias realizadas</h2></div>
                <div class="col-xs-6" style="margin-left:;"><h2>Clientes satisfeitos</h2></div>
            </div>
        </div>
    </div>
</div>

<div id="project-section">
    <div class="container">
        <div class="theme-title">
            <h2 class="projetos-title">Nossos melhores projetos</h2>
            <p class="textoP">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has
                been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
            of type.</p>
        </div> <!-- /.theme-title -->

        <div class="project-menu">
            <ul id="projetos">
                <li class="filter tran3s" data-filter=".web">Cívil</li>
                <li class="filter tran3s" data-filter=".photo">Elétrica</li>
                <li class="filter tran3s" data-filter=".webd">Web</li>
                <li class="filter tran3s" data-filter=".om">Automação</li>
                <li class="filter tran3s" data-filter=".dmedia">Mecanica</li>
                <li class="filter tran3s" data-filter=".support">Sistemas</li>
            </ul>
        </div>

        <div class="project-gallery clear-fix">
            <div class="mix grid-item web webd dmedia support">
                <div class="single-img">
                    <img src="images/project/1.jpg" alt="Image">
                    <div class="opacity">
                        <div class="border-shape">
                            <div>
                                <div>
                                    <h6><a href="#">Ferrazcon</a></h6>
                                    <ul>
                                        <li>Site /</li>
                                        <li>Institucional /</li>
                                        <li>Desenvolvimento /</li>
                                        <li>Template</li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.border-shape -->
                    </div> <!-- /.opacity -->
                </div> <!-- /.single-img -->
            </div> <!-- /.grid-item -->

            <div class="mix grid-item web webd dmedia support">
                <div class="single-img">
                    <img src="images/project/2.jpg" alt="Image">
                    <div class="opacity">
                        <div class="border-shape">
                            <div>
                                <div>
                                    <h6><a href="#">Poli Junior</a></h6>
                                    <ul>
                                        <li>Site /</li>
                                        <li>Institucional /</li>
                                        <li>Produto /</li>
                                        <li>Template</li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.border-shape -->
                    </div> <!-- /.opacity -->
                </div> <!-- /.single-img -->
            </div> <!-- /.grid-item -->

            <div class="mix grid-item photo webd support">
                <div class="single-img">
                    <img src="images/project/3.jpg" alt="Image">
                    <div class="opacity">
                        <div class="border-shape">
                            <div>
                                <div>
                                    <h6><a href="#">Sweet Photo</a></h6>
                                    <ul>
                                        <li>Business /</li>
                                        <li>Service /</li>
                                        <li>Product /</li>
                                        <li>Template</li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.border-shape -->
                    </div> <!-- /.opacity -->
                </div> <!-- /.single-img -->
            </div> <!-- /.grid-item -->

            <div class="mix grid-item web om">
                <div class="single-img">
                    <img src="images/project/4.jpg" alt="Image">
                    <div class="opacity">
                        <div class="border-shape">
                            <div>
                                <div>
                                    <h6><a href="#">Sweet Photo</a></h6>
                                    <ul>
                                        <li>Business /</li>
                                        <li>Service /</li>
                                        <li>Product /</li>
                                        <li>Template</li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.border-shape -->
                    </div> <!-- /.opacity -->
                </div> <!-- /.single-img -->
            </div> <!-- /.grid-item -->

            <div class="mix grid-item photo webd dmedia om">
                <div class="single-img">
                    <img src="images/project/5.jpg" alt="Image">
                    <div class="opacity">
                        <div class="border-shape">
                            <div>
                                <div>
                                    <h6><a href="#">Sweet Photo</a></h6>
                                    <ul>
                                        <li>Business /</li>
                                        <li>Service /</li>
                                        <li>Product /</li>
                                        <li>Template</li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.border-shape -->
                    </div> <!-- /.opacity -->
                </div> <!-- /.single-img -->
            </div> <!-- /.grid-item -->

            <div class="mix grid-item web webd dmedia om">
                <div class="single-img">
                    <img src="images/project/6.jpg" alt="Image">
                    <div class="opacity">
                        <div class="border-shape">
                            <div>
                                <div>
                                    <h6><a href="#">Sweet Photo</a></h6>
                                    <ul>
                                        <li>Business /</li>
                                        <li>Service /</li>
                                        <li>Product /</li>
                                        <li>Template</li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.border-shape -->
                    </div> <!-- /.opacity -->
                </div> <!-- /.single-img -->
            </div> <!-- /.grid-item -->

            <div class="mix grid-item photo om support">
                <div class="single-img">
                    <img src="images/project/7.jpg" alt="Image">
                    <div class="opacity">
                        <div class="border-shape">
                            <div>
                                <div>
                                    <h6><a href="#">Sweet Photo</a></h6>
                                    <ul>
                                        <li>Business /</li>
                                        <li>Service /</li>
                                        <li>Product /</li>
                                        <li>Template</li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.border-shape -->
                    </div> <!-- /.opacity -->
                </div> <!-- /.single-img -->
            </div> <!-- /.grid-item -->

            <div class="mix grid-item web support">
                <div class="single-img">
                    <img src="images/project/8.jpg" alt="Image">
                    <div class="opacity">
                        <div class="border-shape">
                            <div>
                                <div>
                                    <h6><a href="#">Sweet Photo</a></h6>
                                    <ul>
                                        <li>Business /</li>
                                        <li>Service /</li>
                                        <li>Product /</li>
                                        <li>Template</li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.border-shape -->
                    </div> <!-- /.opacity -->
                </div> <!-- /.single-img -->
            </div> <!-- /.grid-item -->

            <div class="mix grid-item photo webd dmedia support">
                <div class="single-img">
                    <img src="images/project/9.jpg" alt="Image">
                    <div class="opacity">
                        <div class="border-shape">
                            <div>
                                <div>
                                    <h6><a href="#">Sweet Photo</a></h6>
                                    <ul>
                                        <li>Business /</li>
                                        <li>Service /</li>
                                        <li>Product /</li>
                                        <li>Template</li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.border-shape -->
                    </div> <!-- /.opacity -->
                </div> <!-- /.single-img -->
            </div> <!-- /.grid-item -->

        </div> <!-- /.project-gallery -->
    </div> <!-- /.container -->
</div> <!-- /#project-section -->

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 style="float: left;font-family: 'Montserrat';">DEPOIMENTO CLIENTES</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="media">
                                    <div class="media-left d-flex mr-3">
                                        <a href="#">
                                            <img src="images/primeiro.png" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="testimonial">
                                            <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque
                                            tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                                            <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="media">
                                    <div class="media-left d-flex mr-3">
                                        <a href="#">
                                            <img src="images/primeiro.png" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="testimonial">
                                            <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque
                                            tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                                            <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="media">
                                    <div class="media-left d-flex mr-3">
                                        <a href="#">
                                            <img src="images/primeiro.png" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="testimonial">
                                            <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque
                                            tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                                            <p class="overview"><b>Martin Sommer</b>, UX Analyst</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /#depoimento-section -->

<?php
include 'componentes/news.php';
?>

<?php
include 'componentes/footer.php';
?>

<!-- Js File_________________________________ -->

</div>
<script src="js/wow.js"></script>
<script>
    wow = new WOW(
    {
        animateClass: 'animated',
        offset: 100,
        callback: function (box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    }
    );
    wow.init();
    document.getElementById('moar').onclick = function () {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script>
<!-- j Query -->

<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="js/map-script.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script>

</body>
</html>

