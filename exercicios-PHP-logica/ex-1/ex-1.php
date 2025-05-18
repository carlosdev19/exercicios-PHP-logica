<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Digite dois números para comparar</h2>
    
    <form method="POST">
        Número 1: <input type="number" name="num1"><br><br>
        Número 2: <input type="number" name="num2"><br><br>
        <input type="submit" value="Comparar">
    </form>
        <div class="resultado">
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

if ($num1 > $num2) {
    echo "O maior número é: $num1";
}elseif($num2 > $num1){
    echo "O maior número é: $num2";
}else{
    echo "Os dois números são iguais.";
}
?>
    </div>
</div>

</body>
</html>

