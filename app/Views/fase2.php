<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Verum - Lógica Proposicional</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif;
        }

        body,
        html {
            height: 100%;
            margin: 0;
            line-height: 1.8;
            background-color: #f4f4f4;
            color: #333;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            max-width: 1200px;
            margin: 80px auto 0;
        }

        .questoes-container,
        .caderno {
            flex: 1;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            background-color: #fff;
            margin: 0 10px;
            margin-top: 0px;
        }

        .questoes p {
            margin-bottom: 20px;
            text-align: justify;
        }

        .questoes button {
            background-color: #fff;
            color: #000;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px;
            width: 100%;
            display: block;
            text-align: justify;
            padding-left: 0px; 
        }

        .caderno {
            background-color: #000;
            color: #fff;
            width: 50%;
            box-sizing: border-box;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }

        .caderno h2 {
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .caderno-container {
            background-color: #000;
            color: #fff;
            width: 100%;
            box-sizing: border-box;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .caderno-buttons {
            display: flex;
            justify-content: space-between;
            align-items: justify;
            margin-bottom: 10px;
        }

        .caderno-navigation {
            position: absolute;
            top: 50%;
            transform: translateY(-50%); 
            width: 100%; 
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .caderno-buttons button,
        .caderno-navigation button {
            background-color: #000;
            color: #fff;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 48%;
            display: inline-block; 
        }

        .caderno-buttons button:hover,
        .caderno-navigation button:hover {
            background-color: #ddd;
        }

        .questoes button.alternativa:not(.active):hover {
            background-color: #ddd;
        }

        .questoes button.alternativa.active {
            background-color: #ddd;
        }

        .prosseguir-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .prosseguir-button button {
            background-color: #fff;
            color: #000;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px;
            width: 20%;
            display: block;
            margin-left: auto; 
            margin-top: 10px; 
        }

        .prosseguir-button button:hover {
            background-color: #ddd;
        }

        #btnProsseguir {
            display: none;
        }

        #feedbackMensagem {
            margin-top: 20px;
        }

        .form-criar-anotacao,
        .form-editar-anotacao {
            max-width: 400px;
            margin: auto;
            display: none;
        }

        .form-criar-anotacao label,
        .form-criar-anotacao input,
        .form-criar-anotacao textarea,
        .form-criar-anotacao button,
        .form-editar-anotacao label,
        .form-editar-anotacao input,
        .form-editar-anotacao textarea,
        .form-editar-anotacao button {
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }

        #musica {
            margin-top: 20px;
            float: right;
        }
        
    </style>

</head>

<body>
    
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card" id="myNavbar">
            <a href="http://localhost/verum/public/" class="w3-bar-item w3-button w3-wide">VERUM</a>
        </div>
    </div>

    <audio id="musica" controls autoplay loop>
        <source src="<?= base_url('audios/theme.mp3') ?>" type="audio/mp3">
    </audio>

    <div class="content">
        <div class="questoes-container">
            <div class="questoes questao-atual">
                <form id="formRespostas" action="<?= base_url('/fase3') ?>" method="get">
                    <div class="questao" data-id="1" style="display: block;">
                        <p> O detetive Slughorn repete sua resposta anterior vagarosamente, como se estivesse analisando cada palavra dita. 
                            Após esse breve eco, ele finalmente pergunta: “Contudo, o que é uma proposição?”
                        </p>

                        <input type="hidden" name="id_questao" value="1">
                        <input type="hidden" name="opcao_correta" value="“Proposição é uma frase que pode ser apenas verdadeira ou falsa. Se contiver apenas uma afirmação é simples e se possuir duas ou mais afirmações é composta.”">

                        <button type="button" class="alternativa" onclick="verificarResposta('“Proposição é uma frase que expressa uma dúvida surgida durante a investigação, como ‘será que estava chovendo na hora do crime?’”', this)">
                            "Proposição é uma frase que expressa uma dúvida surgida durante a investigação, como 'será que estava chovendo na hora do crime?'"
                        </button>

                        <button type="button" class="alternativa" onclick="verificarResposta('“Proposição é uma frase que pode ser verdadeira, falsa ou interrogativa. Se contiver apenas uma afirmação é composta e se possuir duas ou mais afirmações é simples”', this)">
                            “Proposição é uma frase que pode ser verdadeira, falsa ou interrogativa. Se contiver apenas uma afirmação é composta e se possuir duas ou mais afirmações é simples”
                        </button>

                        <button type="button" class="alternativa" onclick="verificarResposta('“Proposição é uma frase que pode ser apenas verdadeira ou falsa. Se contiver apenas uma afirmação é simples e se possuir duas ou mais afirmações é composta.”', this)">
                            “Proposição é uma frase que pode ser apenas verdadeira ou falsa. Se contiver apenas uma afirmação é simples e se possuir duas ou mais afirmações é composta.”
                        </button>

                        <div id="feedbackMensagem"></div>

                        <div class="prosseguir-button">
                            <button type="submit" id="btnProsseguir">Prosseguir</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="caderno">

            <h2>Caderno de Anotações</h2>

            <div class="caderno-container" id="caderno-container"> </div>

                <div class="folha">

                    <div class="form-criar-anotacao" id="formCriarAnotacao">
                        <form action="<?= base_url('/anotacoes/create') ?>" method="post" name="formAnotacao" id="formAnotacao">
                            <label for="titulo">Título:</label>
                            <input type="text" name="titulo" id="titulo" required>

                            <label for="conteudo">Conteúdo:</label>
                            <textarea name="conteudo" rows="4" cols="50" required></textarea>
                
                            <button type="submit" class="caderno-buttons">Guardar</button>
                        </form>
                    </div>
                    
                    <div class="form-editar-anotacao" id="formEditarAnotacao">
                        <form action="<?= base_url('/anotacoes/update') ?>" method="post" onsubmit="return editarAnotacao()">
                            <label for="tituloEditar">Título:</label>
                            <input type="text" name="tituloEditar" id="tituloEditar" required>

                            <label for="conteudoEditar">Conteúdo:</label>
                            <textarea name="conteudoEditar" id="conteudoEditar" required></textarea>

                            <input type="hidden" name="id" id="idEditarAnotacao">

                            <button type="submit" class="caderno-buttons" id="btnGuardar">Guardar</button>
                        </form>
                    </div>

                    
                </div>

                <div class="caderno-buttons">
                    <button onclick="paginaAnterior()"><</button>

                    <button onclick="mostrarFormCriarAnotacao()">Escrever</button>

                    <?php if (isset($anotacao) && is_array($anotacao)): ?>
                        <button onclick="mostrarFormEditarAnotacao(<?= isset($anotacao['id']) && is_array($anotacao) ? $anotacao['id'] : '' ?>)">Corrigir</button>
                    <?php else: ?>
                        <button onclick="mostrarFormEditarAnotacao()">Corrigir</button>
                    <?php endif; ?>

                    <button onclick="excluirAnotacao()">Apagar</button>

                    <button onclick="proximaPagina()">></button>
                </div>

            </div>

        </div>

    </div>

    <footer class="w3-center w3-black w3-padding-50">
        <p></br></br>Copyright © 2024 por Roberta Vieira</br></br></p>  
    </footer>

    <script>

        var paginaAtual = 0;
        var anotacoes = <?= json_encode($anotacoes) ?>;

        function proximaPagina() {
            if (paginaAtual < anotacoes.length - 1) {
                paginaAtual++;
                exibirAnotacao();
            }
        }

        function paginaAnterior() {
            if (paginaAtual > 0) {
                paginaAtual--;
                exibirAnotacao();
            }
        }

        function verificarResposta(respostaUsuario) {
            var feedbackMensagem = document.getElementById('feedbackMensagem');
            var btnProsseguir = document.getElementById('btnProsseguir');
            if (respostaUsuario === '“Proposição é uma frase que pode ser apenas verdadeira ou falsa. Se contiver apenas uma afirmação é simples e se possuir duas ou mais afirmações é composta.”') {
                feedbackMensagem.innerHTML = 'Slughorn assente com a cabeça, demonstrando compreender a explicação.';
                btnProsseguir.style.display = 'block';
            } else {
                feedbackMensagem.innerHTML = 'Após sua resposta, Slughorn franze a testa, indicando ceticismo em relação à sua explicação.';
            }
        }

        function exibirAnotacao() {
            var cadernoContainer = document.getElementById('caderno-container');
            cadernoContainer.innerHTML = '';

            if (anotacoes.length > 0) {
                var titulo = document.createElement('p');
                titulo.innerHTML = '<strong>' + anotacoes[paginaAtual]['titulo'] + '</strong>';

                var conteudo = document.createElement('p');
                conteudo.innerHTML = anotacoes[paginaAtual]['conteudo'];

                cadernoContainer.appendChild(titulo);
                cadernoContainer.appendChild(conteudo);
            } else {
                var mensagemSemAnotacoes = document.createElement('p');
                mensagemSemAnotacoes.innerHTML = 'Escreva as evidências encontradas durante a investigação...';
                cadernoContainer.appendChild(mensagemSemAnotacoes);
            }
        }

        function mostrarFormCriarAnotacao() {
            var formCriarAnotacao = document.getElementById('formCriarAnotacao');
            var formEditarAnotacao = document.getElementById('formEditarAnotacao');
            var formRespostas = document.getElementById('formRespostas');

            formCriarAnotacao.style.display = 'block';
            formRespostas.style.display = 'block';

            document.querySelector('.questoes-container').style.display = 'flex';
        }

        function mostrarFormEditarAnotacao() {
            var formCriarAnotacao = document.getElementById('formCriarAnotacao');
            var formEditarAnotacao = document.getElementById('formEditarAnotacao');
            var formRespostas = document.getElementById('formRespostas');

            formCriarAnotacao.style.display = 'none';
            formEditarAnotacao.style.display = 'block';
            formRespostas.style.display = 'block';

            document.querySelector('.questoes-container').style.display = 'flex';

            var idAnotacaoAtual = anotacoes[paginaAtual] ? anotacoes[paginaAtual]['id'] : null;

            if (idAnotacaoAtual !== null) {
                var anotacaoAtual = anotacoes.find(a => a.id === idAnotacaoAtual);

                var tituloEditar = document.getElementById('tituloEditar');
                var conteudoEditar = document.getElementById('conteudoEditar');
                var idEditarAnotacao = document.getElementById('idEditarAnotacao');

                tituloEditar.value = anotacaoAtual.titulo;
                conteudoEditar.value = anotacaoAtual.conteudo;
                idEditarAnotacao.value = idAnotacaoAtual; 
            } else {
                console.error('ID da anotação não encontrado para a página atual');
            }
        }

        function editarAnotacao() {
            var idAnotacaoAtual = anotacoes[paginaAtual] ? anotacoes[paginaAtual]['id'] : null;

            if (idAnotacaoAtual !== null) {
                var formEditarAnotacao = document.getElementById('formEditarAnotacao');
                var tituloEditar = document.getElementById('tituloEditar');
                var conteudoEditar = document.getElementById('conteudoEditar');
                var idEditarAnotacao = document.getElementById('idEditarAnotacao');

                idEditarAnotacao.value = idAnotacaoAtual;

                formEditarAnotacao.action = '<?= base_url('/anotacoes/update/') ?>' + idAnotacaoAtual;

                return true;
            } else {
                console.error('ID da anotação não encontrado para a página atual');
                return false;
            }
        }
        
        function excluirAnotacao() {
            if (confirm('Tem certeza que deseja excluir esta anotação?')) {
                var idAnotacaoAtual = anotacoes[paginaAtual]['id'];

                fetch('<?= base_url('/anotacoes/delete/') ?>' + idAnotacaoAtual, {
                    method: 'POST',
                })
                .then(response => response.json())
                .then(data => {
                    if (data && data.mensagem) {
                        alert(data.mensagem);
                    } else {
                        console.error('Resposta inesperada do servidor:', data);
                    }
                    window.location.reload();
                })
                .catch(error => console.error('Erro:', error));
            }
        }

        exibirAnotacao();

    </script>

</body>

</html>
