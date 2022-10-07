<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css"/> 
    <link rel="stylesheet" href="assets/css2/bootstrap.css">
    <link rel="stylesheet" href="assets/css2/bootstrap.min.css">
    <title>Média</title>
</head>
<body>
    <?php include('cabecalho2.php'); ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
            <form action="exec5-get.php" method="get">
                <fieldset>
                    <legend>Média</legend>
                    <label for="iNota1">Primeira nota:</label>
                    <input type="number" name="nota1" id="iNota1" min="1" max="10" required>
                    <br><br>
                    <label for="iNota2">Segunda nota:</label>
                    <input type="number" name="nota2" id="iNota2" min="1" max="10" required>
                    <br><br>
                    <input type="submit" value="Calcular Média">
                </fieldset>
            </form>
        </div>
    </div>
    <?php include('footer.php');	?>
</body>
</html>