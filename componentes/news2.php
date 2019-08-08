<style type="text/css">

	.new{
		background-image: url('images/PARTE_SITE.png');
		background-size: 1600px;
		background-position: 0% -1%;
		background-repeat: no-repeat;
		height: 429px;
		width: 100%;
	}	

	.dados1{
		float: right;
		height: 60%;
		width: 19%;
		margin:1.5% 7.3% 0% 0%;
		font-size: 20px;
	}
	.texto12{
		width: 100%;
		height: 14.5%;
		border-radius: 3px;
		border: 1px solid transparent;
		color: #1b1b1e;
		box-sizing: border-box;
		background-color: white;
		margin-bottom: 12%;
	}
	.btn2{
	font-weight: 400;
	text-align: center;
	box-sizing: border-box;
	background: black;
	border: 3px solid black;
	border-radius: 3px;
	color: white;
	display: inline-block;
	width: 65%;
	margin-left: 18%;
	margin-top: 9%;
	height: 18%;
}

.btn2:hover{
	cursor: pointer;
	text-decoration: none;
}
.nome1{
	width: 100%;
    height: 14.5%;
    border-radius: 3px;
    border: 1px solid white;
    color: #1b1b1e;
    box-sizing: border-box;
    margin-bottom: 11%;
}

::-webkit-input-placeholder{
	text-align: center;
	font-size: 75%;
}

::-moz-placeholder {
	text-align: center;
}

@media only screen and (max-width: 450px){
	.texto0{
		padding: 0px 0px 0px 0px !important;
	}
	.dados1{
		/*float: left !important;*/
	}
	#new{
		display: flex;
		flex-direction: column;
		/*justify-content: flex-start;*/
	}
	.formes{
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: space-around;
	}
	.dados1{
		width: 100%;
		margin-left: 3vh !important;
	}
	.btn2{
		width: 100%;
		margin:9% 0px 0px 0px;
	}
}

</style>


<div class="new" id="new">
	<p class="texto0" style="text-align: justify; font-size: 32px; padding-top: 4.5%; padding-left:25%; margin-bottom: 0px !important;"><strong>Inscreva-se e receba conteúdos exclusivos da Poli Junior Engenharia!</strong></p>
	<div class="formes">
	<div class="dados1">
		<p>Seu assunto de interesse:</p>
		<select class="texto12" required="required">
			<option  value="Construção Civil">
				Construção Civil
			</option>
			<option  value="Industria">
				Industria
			</option>
			<option  value="Inovação">
				Inovação
			</option>
			<option  value="Tecnologia">
				Tecnologia
			</option>
		</select>
		<input type="submit" class="btn2" value="INSCREVA-SE">
	</div>	
	<div class="dados1" style="margin-right: 10% !important;">
		<p>Nome:</p>
		<form>
		<input class="nome1" type="text" required="required" placeholder="Digite seu nome">
		</form>
		<p>E-mail:</p>
		<form>
			<input class="nome1" type="text" required="required" placeholder="Digite seu e-mail" >
		</form>

	</div>
</div>
</div>