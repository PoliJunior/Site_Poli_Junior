<DOCTYPE html>
    <html>
    <head>
        <title>Contato</title>
    </head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <!-- <div class="dados"> -->
            <div class="tudo">
            <h1 id="titulo">Contato</h1>
            <div class="redes-mapa">
                <div class="redes">
                    <h3 style="color:white; margin-left: 4%;">Continue conectado</h3>
                    <img class="imagem-rede" src="./images/fac.png">
                    /PoliJuniorEngenharia<p>
                    <br>
                    <img class="imagem-rede" src="./images/lin.png">
                    Poli Junior Engenharia
                    <br>
                    <br>
                    <img class="imagem-rede" src="./images/inst.png">
                    @polijunioreng.
                    <br>
                    <h3 style="color:white; margin-left: 4%;">Informações de contato</h3>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5586.730891005537!2d-34.9043179512288!3d-8.059051085524704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18ded1bc6309%3A0x4d4114cf475dc1bb!2sPoli+J%C3%BAnior+Engenharia!5e0!3m2!1spt-BR!2sbr!4v1556180802420!5m2!1spt-BR!2sbr" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div id="formulario" style="padding-top: 3%; width: 40%; padding-left: 5%;">
                <h5>Entre em contato conosco! Faremos o retorno o mais rápido possivel!</h5>
            </div>
            <form id="contato" style="width: 40%; padding-left: 5%;">
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

            <div style="height: 18vh;"></div>

            <?php
            include 'componentes/footer.php';
            ?>
        </body>
        <!-- j Query -->
        <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>
        <script type="text/javascript" src="js/map-script.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/funcoes.js"></script>
        <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
        <script src='http://code.jquery.com/jquery-1.11.1.min.js'></script>
        <script  src="js/index.js"></script>

        </html>
    </DOCTYPE>