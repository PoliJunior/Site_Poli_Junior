<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- // CSS FILES // -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/ecomp-servico.css">

<body>
<?php
include 'componentes/navbar.html';
?>

<div class="container">
    <div class="col-xs-8 col-sm-6 response wow slideInLeft" data-wow-delay="0.1s">
        <h2 class="txt-servico"> Setor de computação</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages.
        </p>
        <br>
        <li>Sites institucionais</li>
        <li>Sistemas sob demanda</li>
    </div>
    <div class="col-xs-8 col-sm-6 txt-setor wow slideInRight" data-wow-delay="0.1s">
        <img src="images/servico/pc_POLIJUNIOR.png">

    </div>
</div>
</div>


<div class="site-header wow slideInLeft" data-wow-delay="0.6s">
    <p>DESENVOLVIMENTO DE SITES</p>
</div>

<div class="color">
    <div class="container">
        <div class="col-xs-8 col-sm-6 wow slideInLeft" data-wow-delay="0.9s">
            <img src="images/servico/clouds_POLIJUNIOR.png" style="width: 80%">
        </div>
        <div class="col-xs-8 col-sm-6">

            <div class=" wow slideInRight" data-wow-delay="0.9s">
                <h2 class="txt-servico">INSTITUCIONAIS</h2>
                <br>
                <P><b>QUAL A IMPORTÂNCIA DA CRIAÇÃO DE SITES PARA SUA EMPRESA?</b></P>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                </p>
                <br>
                <P><b>PORQUE VOCÊ PRECISA DE UM SITE PROFISSIONAL?</b></P>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                </p>
            </div>
        </div>
    </div>
</div>
</div>

<div style="height: 6vh"></div>

<div class="container">
    <div class="col-xs-8 col-sm-6 wow slideInLeft" data-wow-delay="0.1s">
        <h2 class="txt-servico">Sistemas sob demanda</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages.
        </p>
        <br>
        <li>Sites institucionais</li>
        <li>Sistemas sob demanda</li>
    </div>
    <div class="col-xs-8 col-sm-6 txt-setor wow slideInRight" data-wow-delay="0.1s">
        <img src="images/servico/pc_POLIJUNIOR.png">

    </div>
</div>
</div>

<div style="height: 6vh"></div>


<?php
include 'componentes/news.php';
?>

<?php
include 'componentes/footer.php';
?>


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

</body>
</html>