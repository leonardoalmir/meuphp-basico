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
            <form action="exec6-subtracao-result.php" method="get">
                <fieldset>
                    <legend>Calculando - Subtração</legend>
                    <?php
                        $quantNumeros = isset($_GET['n1'])?$_GET['n1']:0;
                        if ($quantNumeros > 0) {
                            for ($i=1; $i <= $quantNumeros; $i++) {
                                ?>
                                 <label for="numero<?php echo $i; ?>">Digite o <?php echo $i; ?>o número:</label>
                                 <input type="number" name="numero<?php echo $i; ?>" id="iNumero" min="-999" max="999" required>
                                 <br>
                                <?php
                            }
                            echo '<input class="btn" type="submit" value="Subtrair">';
                            echo "<input type='hidden' name='quantNumeros' value='$quantNumeros'>";
                        } else {
                            echo "😕 Não recebi as informações necessárias para continuar.";
                        }
                    ?>
                </fieldset>
                    
            </form>
            <a href="exec6.php" class="btn">Voltar</a>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>