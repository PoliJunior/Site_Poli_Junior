<!DOCTYPE html>
<html>
<head>
	<title>Civil Fotovoltáico</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="js/funcoes.js"></script>
	<script type="text/javascript" src="js/MainTemplate.js"></script>
	<script type="text/javascript" src="js/map-script.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>

	<!-- // CSS FILES // -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" href="./css/portfolio.css">
	<link rel="stylesheet" href="./css/responsive.css">
	<link rel="stylesheet" href="./css/index.css">

	<link rel="stylesheet" href="./css/qualidade.css">
	<link rel="stylesheet" href="./css/atuacoes.css">
	<link rel="stylesheet" href="./css/resultados.css">
	<link rel="stylesheet" href="./css/depoimento.css">
	<link rel="stylesheet" type="text/css" href="./css/inovacao.css">
	<link rel="stylesheet" type="text/css" href="./css/contato.css">

</head>
<body>
	<?php 
	include 'componentes/navbar.html';
	?>
	<div class="projeto">
		<div class="explica">
			<div class="nome-projeto">
				<h2>Projeto Fotovoltáico</h2>
			</div>
			<div class="textinho">
				<p class="texto-projeto">Trata-se do projeto em que colocamos painéis fotovoltaicos em sua residência,
podendo ser casa ou apartamento, transformando a energia solar em energia elétrica.
Trazendo sustentabilidade e maior conforto para sua vida, pois vai gerar a energia
para sua casa sem o barulho de geradores.</p>
			</div>
		</div>
		<div class="explica2">
			<h3 style="margin: 8% 0px 9.4% 0%; text-align: center;">Fale com um consultor</h3>
			<form id="contatos">

				<div class="form-item">
					Nome:
					<br style="margin-bottom: 4%;">
					<input class="texto" type="text" required="required">
				</div>
				<div  class="form-item">
					Email:
					<br style="margin-bottom: 4%;">
					<input class="texto" type="email" required="required">
				</div> 
				<div  class="form-item">
					Telefone:
					<br style="margin-bottom: 4%;">
					<input class="texto" type="text" required="required">
				</div> 
				<div  class="form-item">
					Cidade:
					<br style="margin-bottom: 4%;">
					<input class="texto" type="email" required="required">
				</div> 
				<div class="form-item">
					Selecione o tipo de imóvel?
					<br style="margin-bottom: 4%;"> 
					<select class="texto" required="required">
						<option  value="Facebook">
							Selecione
						</option>
						<option  value="residêncial">
							Residêncial
						</option>
						<option  value="comercial">
							Comercial
						</option>
						<option  value="industria">
							Industrial
						</option>
						<option  value="outros">
							Outros
						</option>
					</select>
				</div> 
				<input type="submit" class="btn" value="ENVIAR">
			</form>
		</div>
	</div>
	<div class="pq">
		<h2>Por quê fazer um projeto de (...)</h2>
	</div>	
	<section class="container flex">
		<div class="caixa3">1<br>Personalize sua construção de acordo com todas as normas de segurança</div>
		<div class="caixa3">2<br>Personalize sua construção de acordo com todas as normas de segurança</div>
		<div class="caixa3">3<br>Personalize sua construção de acordo com todas as normas de segurança</div>
	</section>
	<?php include 'componentes/news2.php';?>

	<?php include 'componentes/footer.php';?>

</body>
</html>