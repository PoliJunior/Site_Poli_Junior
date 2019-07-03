<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	<title>Conteúdo</title>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/topo.js"></script>

    <!-- // CSS FILES // -->
    <!-- <link rel="stylesheet" href="https://maxcdn.boo;tstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
    <link rel="stylesheet" href="css/conteudo.css">

</head>
<body>

	<?php
    include 'componentes/navbar.html';
    ?>

<div class="conteudo">
	<div class="titulo-conteudo"><h2 style="color:white;text-decoration:underline; text-decoration-color: yellow;">..........<strong style="color: black;">CONTEÚDO</strong></h2>
	</div>
	<div class="texto-conteudo">
		<h3>Tenha acesso aos nossos mais novos conteúdos gratuitamente! Basta clicar em cima do seu assunto de interesse e fazer o download gratuitamente.</h3>
	</div>
</div>  
<div class="assunto-conteudo">
	<div style="width: 35%;float: left; margin-left: 3%;">
	<h3>Quais assuntos voçê gostaria de saber mais? Conte para gente!</h3>
	</div>
	<div style="float: left; width: 50%; height: 40%;">
	<form class="form-assunto">
		<input type="text" name="assunto" placeholder="Digite aqui" class="tconteudo" required>
	</form> 
	</div>
</div> 
<div class="card-conteudo">
<div class="aleatorio">
	<div class="card">
		<img class="card-img-top" src="images/icon/PC.png" alt="Card image cap" height="80" width="80">
	</div>
	<div class="texto-card">
	<h3>E-book:Como<br>E-commerce pode<br>aumentar as suas<br>vendas?</h3>	
	</div>
</div>
</div>

<div class="card-conteudo" style="margin-left:12% !important;">
<div class="aleatorio">
	<div class="card">
		<img class="card-img-top" src="images/icon/PC.png" alt="Card image cap" height="80" width="80">
	</div>
	<div class="texto-card">
	<h3>E-book:Como<br>E-commerce pode<br>aumentar as suas<br>vendas?</h3>	
	</div>
</div>
</div>

<div class="card-conteudo" style="margin-left:12% !important;">
<div class="aleatorio">
	<div class="card">
		<img class="card-img-top" src="images/icon/PC.png" alt="Card image cap" height="80" width="80">
	</div>
	<div class="texto-card">
	<h3>E-book:Como<br>E-commerce pode<br>aumentar as suas<br>vendas?</h3>	
	</div>
</div>
</div>

<div style="height: 10px; margin-bottom: 31%;">
</div>

 <?php
 include 'componentes/footer.php'
 ?>

</body>
</html>