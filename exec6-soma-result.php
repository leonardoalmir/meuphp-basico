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
                <legend>Calculando - Soma:</legend>
                <?php
                $quantNumeros = isset($_GET["quantNumeros"])? $_GET["quantNumeros"]: 0;
                                
                 if ($quantNumeros != 0) {
                    $nomeCampo = "numero";
                    $soma = 0;
                    $n = 1;
                    echo "$quantNumeros campos foram preenchidos: <br><br>";
                    for ($i=0; $i < $quantNumeros; $i++) { 
                        $camposNumeros[] = isset($_GET["$nomeCampo".$n])?$_GET["$nomeCampo".$n]:"Não recebido";
                        echo "Campo ".$n." : $camposNumeros[$i]<br>";
                        $soma += $camposNumeros[$i];
                        $n++;
                    }
                 }
                     echo "<br>O resultado da soma dos números é <strong>$soma</strong>.";
                ?>
                </fieldset>
            <br><br><br>
            <a href="exec6.php" class="btn">Voltar</a>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>