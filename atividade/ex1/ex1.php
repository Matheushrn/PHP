<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>
</head>
<body>
    <?php
    $n1 = $_POST ['n1'];
    $n2 = $_POST ['n2'];
    $n3 = $_POST ['n3'];
    $soma = $n2 + $n3;

    if($n1 > $soma){
        echo "O número é maior";
    }else {
        echo "soma é maior";
    }
    ?>
</body>
</html>