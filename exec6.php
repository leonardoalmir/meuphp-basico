<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css"/> 
    <link rel="stylesheet" href="assets/css2/bootstrap.css">
    <link rel="stylesheet" href="assets/css2/bootstrap.min.css">
    <title>Média</title>
</head>
<body>
    <?php include('cabecalho2.php'); ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
            <form action="exec6-get.php" method="get">
                <fieldset>
                    <legend>Calculadora Marromeno</legend>
                    <label for="iOperacao">Escolha uma operação:</label>
                    <select class="form-select" aria-label="Operação Matemática" name="operacao" id="iOperacao"  required>
                        <?php $escolha = isset($_GET['operacao']) ? $_GET['operacao']: "";  ?>
                        <option>Escolha uma opção</option>
                        <option <?php  echo $escolha == "soma"? "selected":""; ?> value="soma">Soma</option>
                        <option <?php  echo $escolha == "subtracao"? "selected":""; ?> value="subtracao">Subtração</option>
                        <option <?php  echo $escolha == "multiplicacao"? "selected":""; ?> value="multiplicacao">Multiplicação</option>
                        <option <?php  echo $escolha == "divisao"? "selected":""; ?> value="divisao">Divisão</option>
                        <option <?php  echo $escolha == "dobro"? "selected":""; ?> value="dobro">Dobro</option>
                        <option <?php  echo $escolha == "cubo"? "selected":""; ?> value="cubo">Cubo</option>
                        <option <?php  echo $escolha == "raiz"? "selected":""; ?> value="raiz">Raiz quadrada</option>
                        <option <?php  echo $escolha == "media"? "selected":""; ?> value="media">Média</option>
                        <option <?php  echo $escolha == "resto"? "selected":""; ?> value="resto">Resto da Divisão</option>
                        <option <?php  echo $escolha == "parouimpar"? "selected":""; ?> value="parouimpar">Par ou impar</option>
                        <option <?php  echo $escolha == "fatorial"? "selected":""; ?> value="fatorial">Fatorial</option>
                    </select>
                    <br>
                    <input class="btn" type="submit" value="Escolher">
                    <br><br>
                </fieldset>
            </form>
        </div>
    </div>
    <?php include('footer.php');	?>
</body>
</html>