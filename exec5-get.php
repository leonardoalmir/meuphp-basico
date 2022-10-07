<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css"/> 
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        span.aprovado{
            color: green;
            font-weight: 900;
        }
        span.reprovado{
            color: red;
            font-weight: 900;
        }
        span.recuperacao{
            color: blue;
            font-weight: 900;
        }
    </style>
    <title>Validando Maioridade Resultado</title>
</head>
<body>
    <?php include('../cabecalho2.php');
     
            $nome = isset($_GET['nome'])?$_GET['nome']:'Não enviado';
            $dataNasc = isset($_GET['nasc'])?$_GET['nasc']:'1900-01-01';
            $anoNasc = substr($dataNasc, -10, 4);
            $anoAtual = date('Y');
            $idade = $anoAtual - $anoNasc;
            $reprovado = '<span class="reprovado">Reprovado</span>';
            $recuperacao = '<span class="recuperacao">Recuperação</span>';
            $aprovado = '<span class="aprovado">Aprovado</span>';

     ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
            <fieldset>
                <legend>Resultado</legend>  
                <?php
                $nota1 = isset($_GET["nota1"])?$_GET['nota1']:"Não recebido";
                $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:"Não recebido";
                $media = ($nota1+$nota2)/2;
                echo "A primeira nota é: ".$nota1;
                echo "<br>A segunda nota é: ".$nota2;
                echo "<br><strong>A média do aluno é</strong>: $media";

                if ($media < 5) {
                    echo "<br><strong>A situação do aluno é:</strong> ".$reprovado;
                }
                elseif ($media >= 5 AND $media < 7) {
                    echo "<br><strong>A situação do aluno é:</strong> ".$recuperacao;
                }
                else {
                    echo "<br><strong>A situação do aluno é:</strong> ".$aprovado;
                }
                ?></p>
            </fieldset>
            <a href="exec5.php" class="btn">Voltar</a>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>
</html>