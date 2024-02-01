<!DOCTYPE html>

<html>

    <head>

        <title>Verum - Lógica Proposicional</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: "Raleway", sans-serif;
            }

            body, html {
                height: 100%;
                line-height: 1.8;
                text-align: justify;
            }

            .bgimg-1 {
                background-position: center;
                background-size: cover;
                background-image: url("<?= base_url('imagens/background.jpg') ?>");
                min-height: 100%;
            }

            .w3-bar .w3-button {
                padding: 16px;
            }

            .content {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 48px;
            }

            .text {
                max-width: 35%; 
                margin-top: 20px; 
            }

        </style>

    </head>

    <body>
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card" id="myNavbar">
                <a href="#home" class="w3-bar-item w3-button w3-wide">VERUM</a>
            </div>
        </div>

        <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
            <div class="content w3-text-white">
                <div class="text">
                    <span class="w3-jumbo w3-hide-small">CONTRATA-SE DETETIVE</span><br>
                    <span class="w3-large">Ao longo de trinta anos, tenho enfrentado desafios intrigantes em minha carreira de detetive. 
                        No entanto, um caso em particular persiste em desafiar meu entendimento, levando a empresa VERUM a contratar um novo detetive. </br>
                        Talvez, após tantos anos, eu esteja ficando um pouco velho para lidar com isso sozinho. 
                        Agora, a empresa vislumbra uma última esperança para preservar o seu legado: alguém habilidoso em lógica proposicional. </br> 
                        Estará você à altura desse desafio, detetive?

                    </span>
                    <p><a href="<?= site_url('/fase1') ?>" onclick="controlarMusica()" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Juntar-me a investigação.</a></p>
                </div>
            </div>
        </header>

        <footer class="w3-center w3-black w3-padding-50">
            <p></br></br>Copyright © 2024 por Roberta Vieira</br></br></p>
        </footer>

    </body>

</html>
