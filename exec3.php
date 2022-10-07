<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css"/> 
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Exec3</title>
</head>
<body>
    <?php include('../cabecalho2.php'); ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
            <form action="exec3-get.php" method="get">
                <fieldset>
                    <legend>Config texto</legend>
                    <label for="iTexto">Texto:</label>
                    <input type="text" name="txt" id="iTxt" size="40" required>
                    <label for="iTam">Tamanho:</label>
                    <select name="tam" id="iTam">
                        <option value="8">8</option>
                        <option value="10">10</option>
                        <option value="14">14</option>
                        <option value="20">20</option>
                        <option value="40">40</option>
                    </select>
                    <br>
                    <label for="iCor">Cor:</label>
                    <input type="color" name="cor" id="iCor">
                    <br><br>
                    <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </div>
    </div>
    <?php include('../footer.php');	?>
</body>
</html>