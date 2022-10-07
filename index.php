<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Atalho: CTRL + Espaço pra localizar arquivo/imagem dentro do diretorio -->
    <!-- Atalho: Seleciona o texto > CTRL + SHIFT + P > ENTER(Emmet: Wrap with abbreviation) -->
    <!-- Permite exibiçáo correta de caracteres -->
    <meta charset="UTF-8">
    <!-- Faz renderizar com o modo mais alto suportado pelo navegador, por exemplo se usa o IE10 ele vai forçar renderizar como IE10 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Especifica o tempo em segundos para que o browser atualize a página de forma automática, pode-se também redirecionar para uma outra URL após esse tempo. -->
    <meta http-equiv="refresh" content="300"> 
    <!-- <meta http-equiv="refresh" content="15;url=https://www.chromos.com.br" /> --> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Trás o arquivo CSS -->
    <link rel="stylesheet" type="text/css" href="../meuhtml/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- Trás o arquivo JavaScript -->
    <script type="text/javascript" src="script.js"></script>
    <!-- Trás a descrição que é exibida nos navegadores -->
    <meta name="description" content="Este é um texto que aparece nos buscadores">
    <!-- Trás font do Google (link) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
    <!-- Impede a página de aparecer em resultado de buscas. -->
    <meta name="robots" content="noindex"> 
    <!-- Impede especificamente que o buscador do Google indexe a página -->
    <meta name="googlebot" content="noarchive">
    <!-- Impede que o buscador associe os links à nossa página-->
    <meta name="robots" content="nofollow"> 
    <meta name="robots" content="noindex, nofollow"> 
    <!-- Elimina no I.E (Internet Explorer) a barra de opções que aparece ao passar o mouse por cima de uma imagem -->
    <meta http-equiv="imagetoolbar" content="no" />
    <!-- Utilizado para comunicar-se com os servidores de proxy afim de dizer de quanto em quanto tempo a página deve ser revisitada para refazer o cache. -->
    <meta name="revisit-after" content="15 days" />
    <!-- Ajusta a largura do conteúdo para a mesma largura da tela -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Adiciona Favicon -->
    <link rel="shortcut icon" href="assets/img/dev.ico" type="image/x-icon">
    <!-- Titulo da página que aparece na aba do navegador -->
    <title>Dev Tools - PHP</title>
</head>
<body>
    <?php 
        include('../cabecalho.php');
    ?>
    <div class="nav-logo">
        <!-- LOGO BACANA TAMBÉM
        <div class="nav-logo-img">
            <img class="center" width="100" src="assets/img/dev.png" alt="Dev" title="Dev">
        </div>
        -->
        <div class="nav-logo-texto">
            <h1 class="titulo">DEV Tools - PHP</h1>
        </div>
    </div>
        <!-- Trás imagens apontando local. O alt="" exibe o nome da imagem caso o navegador não consiga carregar a imagem. O title="" aparece ao passar o mouse sobre a imagem.
     -->
     <img class="center" src="assets/img/dev-icon-6.jpg" alt="Dev" title="Dev" width="100" height="100" />
     <br>
    <div class="center">
        <!-- Menu Principal -->
        <ul class="lista-menu" type="none">
            <li><a class="link-menu" href="dadospessoais.php">Forms Dados Pessoais HTML + PHP</a></li>
            <li><a class="link-menu" href="exec3.php">Formatando texto com HTML + PHP</a></li>
            <li><a class="link-menu" href="exec4.php">Validando Maioridade com HTML + PHP</a></li>
            <li><a class="link-menu" href="exec5.php">Calculando Média com HTML + PHP</a></li>
            <li><a class="link-menu" href="exec6.php">Calculadora Simples com HTML + PHP</a></li>



        </ul>
    </div>

    <div class="box-center">
        <!-- Imagem com um contador
        <img class="cronometro" data-imagetype="External" src="https://dfimage.com/email-image/129668/0Art8l/?em=[email]" width="80%">
        -->
    </div>
    <div class="footer">
        <?php include('../footer.php'); ?>
    </div>
    
</body>
</html>

