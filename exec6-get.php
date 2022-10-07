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
</head>
<body>
    <?php include('../cabecalho2.php');
     
     ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
        <fieldset>
            <legend>Cacluladora Simples</legend>
            <label for="iOperacao">Escolha uma operação:</label>
            <select class="form-select" aria-label="Operação Matemática" name="operacao" id="iOperacao"  required disabled>
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
            <br><br>
            <Form action="<?php 
            switch ($escolha) {
                case 'soma':
                    echo "exec6-soma.php";
                    break;
                
                case 'subtracao':
                    echo "exec6-subtracao.php";
                    break;
                
                case 'multiplicacao':
                    echo "exec6-multiplicacao.php";
                
                default:
                    # code...
                    break;
            }
            
            ?>" method="get">
                <fieldset>
                    <?php
                        switch ($escolha) {
                            case 'soma':
                                echo '
                                    <label for="iN1">Gostaria de somar quantos números?  </label>
                                    <input type="number" name="n1" id="iN1" min="2" max="10" required>
                                    <input class="btn" type="submit" value="Iniciar">
                                    ';
                            break;
                            
                            case 'subtracao':
                                echo '
                                    <label for="iN1">Gostaria de subtrair quantos números?  </label>
                                    <input type="number" name="n1" id="iN1" min="2" max="10" required>
                                    <input class="btn" type="submit" value="Iniciar">
                                    ';
                            break;

                            case 'multiplicacao':
                                echo '
                                    <label for="iN1">Multiplicar esse número:  </label>
                                    <input type="number" name="n1" id="iN1" min="-999" max="999" required>
                                    <label for="iN2">Por esse número:  </label>
                                    <input type="number" name="n2" id="iN2" min="-999" max="999" required>
                                    <br>
                                    <input class="btn" type="submit" value="Multiplicar">
                                ';
                            break;
                            
                            default:
                                # code...
                                break;
                        }
                    ?>
                </fieldset>
            </Form>
            <br>
            <a href="exec6.php" class="btn">Menu Principal</a>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>
</html>