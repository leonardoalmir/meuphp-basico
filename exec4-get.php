<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css"/> 
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Validando Maioridade Resultado</title>
</head>
<body>
    <?php include('../cabecalho2.php');
     
            $nome = isset($_GET['nome'])?$_GET['nome']:'Não enviado';
            $dataNasc = isset($_GET['nasc'])?$_GET['nasc']:'1900-01-01';
            $anoNasc = substr($dataNasc, -10, 4);
            $anoAtual = date('Y');
            $idade = $anoAtual - $anoNasc;
     ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
            <fieldset>
                <legend>Resultado</legend>  
                <?php ?>
                <p> <?php if ($dataNasc == 0) {
                echo "Nome Completo: ". $nome;
                echo "Não recebido";
                } else {
                echo "<strong>Nome Completo: </strong> ". $nome;
                echo "<br>";
                echo "<strong>Data de Nascimento: </strong>" . implode('/',array_reverse(explode('-',$dataNasc)));
                echo "<br>";
                echo  ($idade > 1) ? "<strong>Sua idade é: </strong> $idade anos." : "<strong>Sua idade é: </strong> $idade ano." ;
                echo "<br>";
                if ($idade >= 18 && $idade <= 65) {
                    echo "<strong>Pode votar: </strong>SIM (Voto Obrigatório)<br>";
                    echo "<strong>Pode dirigir: </strong>SIM";
                } elseif ($idade < 18 && $idade >= 16) {
                        echo "<strong>Pode votar: </strong>SIM (Voto Opcional)<br>";
                        echo "<strong>Pode dirigir: </strong>NÃO";
                    } elseif ($idade >= 65) {
                            echo "<strong>Pode votar: </strong>SIM (Voto Opcional)<br>";
                            echo "<strong>Pode dirigir: </strong>SIM";
                        } else {
                            echo "<strong>Pode votar: </strong>NÃO<br>";
                            echo "<strong>Pode dirigir: </strong>NÃO";
                        }
                }
                ?></p>
            </fieldset>
            <a href="exec4.php" class="btn">Voltar</a>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>
</html>