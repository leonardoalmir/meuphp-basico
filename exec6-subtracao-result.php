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
    <style>
        p.result {
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include('../cabecalho2.php');
     
     ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
            <form action="exec6-subtracao-result" method="get">
                <fieldset>
                    <legend>Resultado - Subtração</legend>
                    <?php
                        //Criando variável para concatenar com a posição do value passado no input:
                        $n = 1;

                        //Pegando via GET o value do input quantNumeros. Caso não receba, atribua 0:
                        $quantNumeros = isset($_GET["quantNumeros"])?$_GET["quantNumeros"]:0;

                        echo "Os números informados foram: <br>";

                        //Faz o for para receber os números passados nos inputs, levando em conta a quantidade de campos passados. Também exibi na tela os números informados na tela anterior.
                        for ($i=0; $i < $quantNumeros; $i++) { 
                            $numero[] = isset($_GET["numero".$n])?$_GET["numero".$n]:"não informado";
                            echo "O $n"."o número é: $numero[$i] <br>";
                            $n++;
                        }
                        echo "<br>";
                        ?>
                        <p class='result'>
                        <?php
                        //Atribuindo o valor do primeiro input na variável resultado:
                        $resultado = $numero[0];

                        //Faz o for para fazer a subtração:
                        for ($s=1; $s < $quantNumeros; $s++) { 
                            $resultado = $resultado - $numero[$s];
                        }

                        //Faz o for para percorrer o array subtraindo os demais números e colocando o simbolo de subtração.
                        for ($j=0; $j < $quantNumeros; $j++) { 
                            echo "$numero[$j]";
                            if ($j < ($quantNumeros - 1)) {
                                echo " - ";
                            }
                        }
                        //Exibi o resultado depois do simbolo de igual:
                        echo " = $resultado ";
                    ?>
                    </p>
                </fieldset>
                    
            </form>
            <a href="exec6.php" class="btn">Voltar</a>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>
</html>