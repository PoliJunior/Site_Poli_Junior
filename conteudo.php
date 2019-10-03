<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Conteúdo</title>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>
<body>

	<?php
	include 'componentes/navbar.html';
	?>

	<div class="conteudo">
		<div class="titulo-conteudo"><h2 style="color:white;text-decoration:underline; text-decoration-color: #ffd100;">..........<strong style="color: black;">CONTEÚDO</strong></h2>
		</div>
		<div class="texto-conteudo">
			<h3>Tenha acesso aos nossos mais novos conteúdos gratuitamente! Basta clicar em cima do seu assunto de interesse e fazer o download gratuitamente.</h3>
		</div>
	</div>  
	<div class="assunto-conteudo">
		<div class="amarelo">
			<h3>Quais assuntos voçê gostaria de saber mais? Conte para gente!</h3>
		</div>
		<div style="float: left; width: 50%; height: 40%;">
			<form class="form-assunto">
				<input type="text" name="assunto" placeholder="Digite aqui" class="tconteudo" required>
			</form> 
		</div>
	</div> 
	<div id="cardtodo">

		<div class="card-conteudo">
			<div class="aleatorio">
				<div class="card">
					<a href="">
						<img class="card-img-top" src="images/civi.jpg" alt="Card image cap" height="200" width="150">
					</a>
				</div>
				<div class="texto-card">
					<h3>E-book:Como<br>E-commerce pode<br>aumentar as suas<br>vendas?</h3>	
				</div>
			</div>
		</div>

		<div class="card-conteudo">
			<div class="aleatorio">
				<div class="card">
					<a href="">
						<img class="card-img-top" src="images/ecom.jpg" alt="Card image cap" height="200" width="150">
					</a>
				</div>
				<div class="texto-card">
					<h3>E-book:Como<br>E-commerce pode<br>aumentar as suas<br>vendas?</h3>	
				</div>
			</div>
		</div>

		<div class="card-conteudo">
			<div class="aleatorio">
				<div class="card">
					<a href=""><img class="card-img-top" src="images/ecom.jpg" alt="Card image cap" height="200" width="150"></a>
				</div>
				<div class="texto-card">
					<h3>E-book:Como<br>E-commerce pode<br>aumentar as suas<br>vendas?</h3>	
				</div>
			</div>
		</div>
	</div>

	<!-- <div style="height: 8vh; margin-bottom: 31%;"> -->
		<!-- </div> -->

		<?php
		include 'componentes/footer.php'
		?>

		<script>
			$('.filtering').slick({
				slidesToShow: 1,
				slidesToScroll: 1
			});

			var filtered = true;

			$('.js-filter').on('click', function(){
				if (filtered === true) {
					$('.filtering').slick('slickFilter',':even');
					$(this).text('Unfilter Slides');
					filtered = true;
				} else {
					$('.filtering').slick('slickUnfilter');
					$(this).text('Filter Slides');
					filtered = false;
				}
			});
		</script>

		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
		<script type="text/javascript" src="js/funcoes.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
		<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
		<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script>

	</body>
	</html>