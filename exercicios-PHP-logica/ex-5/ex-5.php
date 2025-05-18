<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Cálculo Média</h2>
        <form method="POST">
            <input type="number" name="num1" placeholder="Nota 1" required>
            <input type="number" name="num2" placeholder="Nota 2" required>
            <input type="submit" value="Calcular">
        </form>
        <div class="resultado">
            <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $media = ($num1 + $num2) / 2;

            if($media == 10){
                echo "Aprovado com Distinção. Média = $media";
            }elseif($media >= 7){
                echo "Aprovado. Média = $media";
            }else{
                echo "Reprovado. Média = $media";
            }
            ?>
        </div>
    </div>
    
</body>
</html>