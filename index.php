<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Poli Junior Engenharia</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/topo.js"></script>

    <!-- // CSS FILES // -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.boo;tstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="css/animate.min.css">

    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="css/qualidade.css">
    <link rel="stylesheet" href="css/atuacoes.css">
    <link rel="stylesheet" href="css/resultados.css">
    <link rel="stylesheet" href="css/depoimento.css">
    <link rel="stylesheet" href="css/nossaatuacao.css">


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
            <!-- <button id="reuniao" class="reuniao tran3s hvr-bounce-to-right" onclick="contato()" data-wow-delay="0.2s" style="font-size: 18px">Solicite
                uma reunião gratuita
            </button> -->
            <div class="btns">
            <button type="button" class="efeito efeito-1">Solicite
                uma reunião gratuita</button>
            </div>
        </div>
    </div>
</section>

<div class="porque">

    <section class="section--blue wow slideInLeft" data-wow-delay="0.1s">

        <div class="card">
            <div class="cardimgqualidade"></div>
            <div class="card-title1"><h3 style="margin-bottom: 0px;">Qualidade</h3></div>
            <div class="card-text"><p>Revisão feita por consultores e especialistas</p></div>
        </div>
    </section>

    <section class="section--blue wow slideInLeft" data-wow-delay="0.5s">

        <div class="card" style="margin-right: 18%;">
            <div class="cardimgpreco"></div>
            <div class="card-title1"><h3 style="text-align: center; margin-bottom:0px !important;">Preços Competitivos</h3></div>
            <div class="card-text"><p style="text-align: center">O melhor custo-benefício em serviços de engenharia</p>
            </div>
        </div>
    </section>

    <section class="section--blue wow slideInLeft" data-wow-delay="0.9s">

        <div class="card31">
            <div id="cardimginovacao1" class="" style="height:128px; width:130px; margin:0px;">
                <img src="images/icon/I.png" class="imagem" width="130" height="128" style="margin-left: 140%;">
            </div>
            <div class="card-title1"><h3 style="text-align: center; margin-top:9%;" class="titulocard">Inovação</h3></div>
            <div class="card-text"><p style="text-align: center; margin-left: 33%;" class="textocard">Trabalhamos junto à sua necessidade
                para trazer
                soluções práticas e inovadoras
            </p></div>
        </div>
    </section>
</div>

<h1 style="text-align:center;" >Nossa Atuação</h1>
<div id="nossaatuacao"> <!-- nossa atuação -->
        <div class="boxatuacao">
            <div class="boxdivatuacao">
                 <img src="images/atuacao/ino.png" width="150px">
                  <button class="boxbtnatuacao"> <a href=""> Saiba Mais </a>  </button>  
            </div>

            <div class="boxtextatuacao">
                <h1>Inovação</h1>
                <p> Nossas inovações, alinhadas com os conhecimentos de eletrônica e programação, buscam solucionar os seus problemas. Trabalhamos totalmente de acordo com as ideias e as necessidades que vocês nos trazem, buscando sempre uma forma mais simples e tecnológica de solucionar problemas do nosso cotidiano. </p>
                <p> Incluindo IOT, Inteligência das Coisas, entre outros projetos que buscam inovar e automatizar processos, prepare-se para facilitar ainda mais sua rotina. </p>    
            </div>

        </div>
        <div class="boxatuacao"> 

        </div>
        <div class="boxatuacao"> 

        </div>
        <div class="boxatuacao"> 

        </div>



   
 </div> <!-- final nossa atuação -->


</div>
</div>
<div class="espaco" style="width: 100%; height: 25px"></div>
</div>

<div class="desejo">
    <p id="cliqueaqui" style="color: white; margin-left: 2%;padding-top: 0.7%; width: 75%; float: left;">Deseja saber mais sobre nossos serviços, curiosidades,entre outros?</p>
    <button class="btn btn-warning" id="button9">Clique aqui</button>
</div>

<div class="resu">
    <div class="titi">OS NOSSOS RESULTADOS</div>
    <div class="asso"> 
        <div class="boxes">
        <div class="titi1">ASSOCIADOS</div>
        <div class="dados">80</div>
        </div>
        <div class="boxes">
            <div class="titi1">PROJETOS</div>
            <div class="dados">273</div>      
        </div>
    </div>
</div>


<!-- <div id="resultado" src="images/Novas/n.jpg" style="background-image: url(images/Novas/n.jpg); 
background-attachment: fixed; filter:brightness(100%);">
<div class="row-resultado" style="width: 100%; height: 100%;">
    <div class="col-xs-12" style="width: 70%; height: 60%;">
        <h2 style="text-transform: uppercase;font-weight: bold;font-family:'Montserrat'; padding-top:2%; font-size: 31px;float: left; margin-left: 7%;">OS NOSSOS
        RESULTADOS</h2>
        <div id="flex1">
            
             <div class="col-xs-6" id="consultoria"><h2>Associados</h2></div>
              <div class="col-xs-6" style="margin-left: 23%; margin-bottom: 2%;width: 30%;"><h2>Clientes satisfeitos</h2></div>
        </div>
        <div id="flex2">
            <div class="col-xs-60" style="  
            "><h2 id="numero" style="float:right; width: 100%;margin-top: 0%; font-size: 600%;">86</h2></div>
            <div class="col-xs-61"><h2 id="numero" style="font-size: 600%">274</h2></div>
        </div>


    </div>
</div>
</div> -->


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 style="float: left;font-family: 'Montserrat';">DEPOIMENTO CLIENTES</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousitel indicators -->
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
                                            <p>O trabalho da equipe da Poli Junior foi muito bem executado, sempre bastante atenciosos
                                            comigo e com o projeto. A solução encontrada por eles foi fundamental para a regularizaçãoda construção da minha casa na prefeitura. Recomendo-os com olhos fechados.</p>
                                            <p class="overview"><b>Victor Matheus Santos</b>,cliente de nosso Projeto de Arquitetônico (Construção Civil).</p>
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
                                            <p>Sobre o projeto, eu gostei e aprovo. Fiquei satisfeito e recomendo a Poli Junior Engenharia.</p>
                                            <p class="overview"><b>José Carlos da Silva</b>,cliente de nosso Projeto arquitetônico(Construção Civil).</p>
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
                                            <p>“Nunca tive dúvidas em contratar o serviço. Conheço a cultura de trabalho das empresas
                                                juniores, por isso sempre confiei que teria o que esperava. E as expectativas foram superadas.
                                                Além do atendimento excelente e da flexibilidade que tivemos em todos os momentos, o
                                                principal, a qualidade do serviço foi extremamente satisfatória. Aprovei o resultado final e
                                                indiquei até para o meu professor da faculdade que também adorou. Já faço planos para novas
                                                formas de expansão dos meus serviços através do modelo que me foi desenvolvido e devo isso
                                            graças a Poli Jr.”</p>
                                            <p class="overview"><b>Rodrigo Rodrigues</b>,cliente de nosso Projeto de Sistema de condicionamento físico e saúde
                                            (Tecnologia).</p>
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
    <a id="#top" style="z-index:999 !important;">
     <img src="images/up.png" height="20" width="25">
 </a>
</div> <!-- /#depoimento-section -->

<?php
include 'componentes/news2.php';
?>

<?php
include 'componentes/footer.php';
?>

<!-- Js File_________________________________ -->

</div>
<script src="js/wow.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('a[href="#top"]').fadeIn();
            } else {
                $('a[href="#top"]').fadeOut();
            }
        });

        $('a[href="#top"]').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    });
</script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
    function contato(){
        location.href=" contato.php"
    }
</script>
<!-- Rolar tela para o final da tela -->
<script type="text/javascript">
  const btn = document.getElementById('button9');

btn.addEventListener('click', () => window.scrollTo({
  top: 4900,
  behavior: 'smooth',
}));
</script>
<!-- j Query -->

<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="js/map-script.js"></script>
<script type="text/javascript" src="js/topo.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script>

</body>
</html>

