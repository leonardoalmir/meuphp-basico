<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/estilo.css"/>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Trás font do Google (link) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
  <meta charset="UTF-8"/>
  <title>Teste Staff</title>
</head>
<body>
<?php  include('../cabecalho2.php'); ?>
    <div class="layoutBackground">
        <?php
        /*
        $preco = $_GET['preco'];
        $desconto = $_GET['desconto'];
        echo "O valor do produto é R$". number_format($preco, 2) .". Com desconto de $desconto%, o valor atualizado é R$" . number_format($preco-=$preco*$desconto/100, 2)  . ".";
        */
        /*
        $ano = $_GET['an'];
        $idade = 2022-$ano;
        $situacao = ($ano>=18 or $ano<65)?"obrigatório":"Não Obrigatório";
        echo "A idade é $idade e o voto nessa eleição é <strong> $situacao </strong>.";
        */
        ?>
        <div class="layoutBoard">
            <fieldset>
                <legend>Resultado</legend>
                <?php
                $anoAtual = date('Y');
        
                $nome = isset($_GET['nome'])?$_GET['nome']:"Não recebido";
                $nasc = isset($_GET['nasc'])?$_GET['nasc']:0;
                $sexo = isset($_GET['sexo'])?$_GET['sexo']:"Não recebido";
                $pais = isset($_GET['pais'])?$_GET['pais']:"Não recebido";
                $anoNasc = substr($nasc, -10, 4);
                
                ?>
                <label class="form-label" for="iNome"><strong>Nome Completo: </strong> </label> <?php echo $nome; ?><br>
                <label class="form-label" for="inasc"><strong>Data de Nascimento: </strong> </label> <?php if ($nasc == 0) {
                echo "Não recebido";
                } else {
                echo implode('/',array_reverse(explode('-',$nasc)));
                } ?><br>
                <label class="form-label" for="iSexo"><strong>Sexo: </strong> </label> <?php echo $sexo; ?><br>
                <label class="form-label" for="iPais"><strong>País: </strong> </label> <?php echo $pais; ?><br>
                    
                    <label class="form-label" for=""><strong>Sua idade é: </strong> </label> <?php if ($nasc == 0) {
                    echo "Não recebido";
                    } else {
                    echo $anoAtual-$anoNasc;
                    } ?><br>
                        </fieldset>
                    
                        <a class="btn" href="dadospessoais.php">Voltar</a>
            </div>
    </div>
    <div class="footer">
        <?php include('../footer.php'); ?>
    </div>
</body>
</html>
 