<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/MainTemplat.js"></script>

<!-- // CSS FILES // -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/ecomp-servico.css">
<link rel="stylesheet" href="css/canva.css">

<body>

  <?php
  include 'componentes/navbar.html';
  ?>
  <div class="container">
    <div class="col-xs-8 col-sm-6 response wow slideInLeft" data-wow-delay="0.1s" style="width:40% !important;">
      <h1 class="txt-servico"><strong>Tecnologia:<br>O que o meu negócio precisa para decolar?</strong></h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages.
      </div>
    </div>
  </div>

  <div class="container" >
    <div class="card-group">
      <div class="card">
        <br>
        <img class="card-img-top" src="images/icon/PC.png" alt="Card image cap" height="80" width="80">
        <br>
        <div class="card-body">
          <h5 class="card-title"><strong>Sites</strong></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
      <div class="card">
        <br>
        <img class="card-img-top" src="images/icon/PC.png" alt="Card image cap" height="80" width="80">
        <br>
        <div class="card-body">
          <h5 class="card-title"><strong>Sistemas Web<br> Sob Demanda</strong></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
      <div class="card">
        <br>
        <img class="card-img-top" src="images/icon/PC.png" alt="Card image cap" height="80" width="80">
        <br>
        <div class="card-body">
          <h5 class="card-title"><strong>E-commerces</strong></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>
  <div  class="collapse">
    <div class="card-body">
      <div class="modal-body">
        <div class="row">
          <div class="col-3 text-center">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" alt="{{$palestrante->nome}}"
            class="img-fluid z-depth-1-half rounded-circle">
            <div style="height: 10px"></div>
            <p class="title mb-0">{{$palestrante->nome}}</p>
            <p class="text-muted " style="font-size: 13px">{{$palestrante->cargo}}</p>
          </div>
          <div class="col-9">
            <p>{!! $palestrante->apresentacao !!}</p>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-3 text-center">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" alt="IMG of Avatars"
            class="img-fluid z-depth-1-half rounded-circle">
            <div style="height: 10px"></div>
            <p class="title mb-0">{{$palestrante->nome}}</p>
            <p class="text-muted " style="font-size: 13px">{{$palestrante->cargo}}</p>
          </div>
          <div class="col-9">
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- <div class="site-header wow slideInLeft" data-wow-delay="0.6s">
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
</div> -->

<div style="height: 6vh"></div>

<!-- <div class="container">
    <div class="col-xs-8 col-sm-6 wow slideInLeft" data-wow-delay="0.1s">
        <h2 class="txt-servico">Nossa metodologia</h2>
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
  </div> -->
</div>

<div class="fluxo">
  <div class="card-fluxo1">
   <div class="fluxos-topo wow bounceInDown" data-wow-delay='0.1'>
     <img src="images/FLUXO/a1.png" height="180" width="180" style="margin-left: 1%;">
   </div> 
   <div class="fluxos-base wow bounceInUp" data-wow-delay='0.1'>
    <img src="images/FLUXO/a3.png" height="360" width="180">
   </div>
 </div>

 <div class="card-fluxo">
   <div class="fluxos-topo wow bounceInDown" data-wow-delay='0.5'>
     <img src="images/FLUXO/b1.png" height="180" width="180" style="margin-left: 1%;">
   </div> 
   <div class="fluxos-base wow bounceInUp" data-wow-delay='0.5'>
    <img src="images/FLUXO/b3.png" height="360" width="180">
   </div>
 </div>

 <div class="card-fluxo">
   <div class="fluxos-topo wow bounceInDown" data-wow-delay='0.9'>
     <img src="images/FLUXO/c1.png" height="180" width="180" style="margin-left: 1%;">
   </div> 
   <div class="fluxos-base wow bounceInUp" data-wow-delay='0.9'>
    <img src="images/FLUXO/c3.png" height="360" width="180">
   </div>
 </div>
 
 <div class="card-fluxo">
   <div class="fluxos-topo wow bounceInDown" data-wow-delay='1.3'>
     <img src="images/FLUXO/d1.png" height="180" width="180" style="margin-left: 1%;">
   </div> 
   <div class="fluxos-base wow bounceInUp" data-wow-delay='1.3'>
    <img src="images/FLUXO/d3.png" height="360" width="180">
   </div>
 </div>

</div>
<div style="height: 6vh"></div>
<div class="vocesabia">
  <div class="titulo-voce">
    <h2>VOÇÊ SABIA?</h2>
  </div>
  <div class="texto" style="height: 60%; margin-bottom: 4%; margin-top: 3%;">
    <p style="margin-left: 12.5%;">A implementação dessas plataformas otimiza em até x% o seu negócio!Saiba mais <a>clicando aqui</a>.</p>
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

<!-- <script type="text/javascript" src="js/canva.js"></script> -->
<!-- <script type="text/javascript" src="js/canva2.js"></script> -->
<!-- <script type="text/javascript" src="js/canva3.js"></script> -->
<script crossorigin= "anonymous" src="js/canva3.js"></script>
<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="js/map-script.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>

</body>
</html>