<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Teste Staff</title>
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
      <form action="teste_staff_get.php" method="get">
      <fieldset>
      <legend>Calcular Raiz Quadrada</legend>
      <label for="iNome">Digite um número:</label>
      <input type="number" name="v" id="iv" required min="0" max="999">
      <input type="submit" value="Calcular Raiz">
      </fieldset>
      </form>
      
</div>
</body>
</html>
 