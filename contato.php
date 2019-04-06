<DOCTYPE html>
    <html>
    <head>
        <title>Contato</title>
    </head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contato.css">


    <body>
        <?php
        include 'componentes/navbar.html';
        ?>
        <div class="dados">
            <div class="form-contato" id="form-contato">
                <div>
                    <h1 id="titulo">Contato</h1>
                </div>
                <div id="formulario" style="padding-top: 4%;">
                    <h5>Entre em contato conosco! Faremos o retorno o mais rápido possivel!</h5>
                </div>
                <div class="form-item" style="padding-top: 7%;">
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
                <div class="form-item">
                    Como você nos conheceu?
                    <br style="margin-bottom: 4%;"> 
                    <select class="texto" required="required">
                        <option  value="Facebook">
                            Facebook
                        </option>
                        <option  value="Instagram">
                            Instagram
                        </option>
                        <option  value="LinkedIn">
                            LinkedIn
                        </option>
                        <option  value="Busca no Google">
                            Busca no Google
                        </option>
                        <option  value="Evento">
                            Evento
                        </option>
                        <option  value="Material Impresso">
                            Material Impresso
                        </option>
                        <option  value="Indicação">
                            Indicação
                        </option>
                        <option  value="Outro">
                            Outro
                        </option>
                    </select>
                </div> 
                <div  class="form-item">
                    Sua mensagem:
                    <br style="margin-bottom: 4%;">
                    <textarea class="texto1" required="required" rows="10"
                    ></textarea>
                </div>
                <input type="submit" class="btn" value="ENVIAR">
            </form>
        </div>
        <div class="container-map">
            <div class="redes">
                <h3 style="color: white; margin-left: 5%;">Cotinue conectado</h3> 
                <div>
               <img src="./images/fac.png" style="height: 5%;float: left; margin-left: 7%; margin-bottom: 3%;"><a href="#" style="margin-top: 5%;"><h5 style="width: 40%; margin-left: 15%; margin-top: 4%;">/PoliJuniorEngenharia</h5></a> 
           </div>
                <div style="width: 100%;">
               <img src="./images/lin.png" style="height: 9%;float: left; margin-left: 7%; margin-bottom: 3%;"><a href="#" style="margin-top: 5%;"><h5 style="width: 40%; margin-left: 15%; margin-top: 4%;">/PoliJuniorEngenharia</h5></a> 
           </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.4114979734304!2d-34.90554918600694!3d-8.059440294196992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18ded1bc6309%3A0x4d4114cf475dc1bb!2sPoli+J%C3%BAnior+Engenharia!5e0!3m2!1spt-BR!2sbr!4v1520051271726" allowfullscreen="allowfullscreen" class="map" style="border: 0px none;" frameborder="0"></iframe>
        </div> 
        <div class="faq">
          <div class="question-group">
            <div> 
            </div>
        </div>
    </div>
</div>


<?php
include 'componentes/footer.php';
?>

<!-- j Query -->

<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="js/map-script.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
</body>
</html>
</DOCTYPE>