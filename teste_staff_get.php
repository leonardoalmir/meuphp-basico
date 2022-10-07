<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Teste Raiz</title>
</head>
<body>
<div>
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
      
      <fieldset>
        <legend>Resultado</legend>
        <?php
        $v = $_GET['v']?$_GET['v']:"Não recebido";
        $raiz = sqrt($v);
        ?>
        <label for="">A raiz quadrada de <?php echo $v; ?> é: </label>
        <?php
        echo number_format($raiz,2);
        ?>
      </fieldset>

      <a href="teste_raiz.php">Voltar</a>
     
</div>
</body>
</html>
 