<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Serviços Civil</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- // CSS FILES // -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/ecomp-servico.css">
<link rel="stylesheet" href="css/civil-servicos.css">

<body>
    <?php
    include 'componentes/navbar.html';
    ?>

    <div id="card" style="z-index: -1;">
  <div class="view overlay zoom">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn">Saiba mais</a>
  </div>
</div>
<section>
    
</section>

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