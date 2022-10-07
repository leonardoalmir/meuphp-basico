<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css"/> 
    <link rel="stylesheet" href="assets/css2/bootstrap.css">
    <link rel="stylesheet" href="assets/css2/bootstrap.min.css">
    <title>Calculadora Simples</title>
</head>
<body>
    <?php include('cabecalho2.php');
     ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
                <fieldset>
                    <legend>Resultado - Multiplicação:</legend>
                    <?php
                    $n1 = isset($_GET['n1'])?$_GET['n1']:"Não recebido";
                    $n2 = isset($_GET['n2'])?$_GET['n2']:"Não recebido";
                    echo "Esse é o resultado. <br><br><p class='result'> $n1 x $n2 = ".$n1*$n2."</p>";
                    ?>
                </fieldset>
            <br>
            <a href="exec6.php" class="btn">Menu Principal</a>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
