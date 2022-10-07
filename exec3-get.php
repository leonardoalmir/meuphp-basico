<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css"/> 
    <link rel="stylesheet" href="assets/css2/bootstrap.css">
    <link rel="stylesheet" href="assets/css2/bootstrap.min.css">
    <title>Texto Formatado</title>
    <style>
        <?php 
            $texto = isset($_GET['txt'])?$_GET['txt']:"Não recebido"; 
            $cor = isset($_GET['cor'])?$_GET['cor']:"#fff"; 
            $tamanho = isset($_GET['tam'])?$_GET['tam']:"4";
        ?>
        p.configPHP{
            color: <?php echo $cor; ?>;
            font-size: <?php echo $tamanho."px"; ?>;
        }
    </style>
</head>
<body>
    <?php include('cabecalho2.php'); ?>
    <div class="layoutBackground">
        <div class="layoutBoard">
            <fieldset>
                <legend>Texto Formatado</legend>
                <?php ?>
                <p class="configPHP"> <?php echo $texto; ?></p>
            </fieldset>
            <a href="exec3.php" class="btn">Voltar</a>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>