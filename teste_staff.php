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
      <form action="teste_staff_post.php" method="post">
      <fieldset>
      <legend>Acesso STAFF Professor</legend>
      <label for="iNome">Nome Professor:</label>
      <input type="text" name="Nome" id="iNome" required size="50">
      <input type="submit" value="Enviar">
      </fieldset>
      </form>
      
</div>
</body>
</html>
 