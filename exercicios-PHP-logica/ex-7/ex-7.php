<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Digite três números</h2>
        <form method="POST">
            <input type="number" name="num1" placeholder="Número 1" required>
            <input type="number" name="num2" placeholder="Número 2" required>
            <input type="number" name="num3" placeholder="Número 3" required>
            <input type="submit" value="Verificar">

            <div class="resultado">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $num3 = $_POST["num3"];

                    //Verificar o maior
                    $maior = $num1;

                    if($num2 > $maior){
                        $maior = $num2;
                    }
                    if($num3 > $maior){
                        $maior = $num3;
                    }

                    //Verificar o menor
                    $menor = $num1;

                    if($num2 < $menor){
                        $menor = $num2;
                    }
                    if($num3 < $menor){
                        $menor = $num3;
                    }

                    echo "Maior número: $maior<br>Menor número: $menor";
                }
                ?>
            </div>

        </form>
    </div>
    
</body>
</html>