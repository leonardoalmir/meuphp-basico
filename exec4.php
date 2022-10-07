<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css"/> 
    <link rel="stylesheet" href="assets/css2/bootstrap.css">
    <link rel="stylesheet" href="assets/css2/bootstrap.min.css">
    <title>Votar e Dirigir</title>
</head>
<body>
    <?php include('cabecalho2.php'); ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
            <form action="exec4-get.php" method="get">
                <fieldset>
                    <legend>Validação de Maioridade</legend>
                    <label for="iNome">Nome:</label>
                    <input type="text" name="nome" id="iNome" size="40" placeholder="Digite seu nome completo" required>
                    <br><br>
                    <label for="iNasc">Data de Nascimento:</label>
                    <input type="date" name="nasc" id="iNasc" required>
                    <br><br>
                    <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </div>
    </div>
    <?php include('footer.php');	?>
</body>
</html>