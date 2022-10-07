<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css"/> 
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Calculadora Simples</title>
</head>
<body>
    <?php include('../cabecalho2.php');
     
     ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
            <form action="exec6-soma-result.php" method="get">
                <fieldset>
                    <legend>Calculando - Soma:</legend>
                    <?php
                        $quantNumeros = isset($_GET["n1"])?$_GET["n1"]:0;
        
                        for ($i=1; $i <= $quantNumeros; $i++) { 
                            echo "<label>Digite o ".$i."o número:</label>
                            <input type='number' name='numero$i' id='iNumero$i' min='1' max='9999'><br>";
                        }
                    ?>
                    <input type="hidden" name="quantNumeros" value="<?php echo $quantNumeros; ?>">
                </fieldset>
                <input class="btn" type="submit" value="Somar">
            </form>
            <br>
            <a href="exec6.php" class="btn">Menu Principal</a>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>
</html>
