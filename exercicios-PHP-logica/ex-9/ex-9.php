<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">

        <h2>Ordenar três números em ordem decrescente</h2>

        <form method="POST">
            <input type="number" name="num1" placeholder="Número 1" required><br>
            <input type="number" name="num2" placeholder="Número 2" required><br>
            <input type="number" name="num3" placeholder="Número 3" required><br>
            <input type="submit" value="Ordenar">
        </form>

        <div class="resultado">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];
                if($num1 >= $num2 && $num1 >= $num3){
                    if($num2 >= $num3){
                        echo "$num1, $num2, $num3";
                    } else {
                        echo "$num1, $num2, $num3";
                    }
                } elseif($num2 >= $num1 && $num2 >= $num3) {
                    if ($num1 >= $num3){
                        echo "$num2, $num1, $num3";
                    } else {
                        echo "$num2, $num3, $num1";
                    }
                } else {
                    if ($num1 >= $num2) {
                        echo "$num3, $num1, $num2";
                    } else {
                        echo "$num3, $num2, $num1";
                    }
                }
            }
            ?>
        </div>

    </div>

</body>
</html>