<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Digite os preços dos três produtos</h2>

        <form method="POST">
            <input type="number" name="produto1" placeholder="Produto 1 (R$)" required><br>
            <input type="number" name="produto2" placeholder="Produto 2 (R$)" required><br>
            <input type="number" name="produto3" placeholder="Produto 3 (R$)" required><br>
            <input type="submit" value="Comparar">
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $produto1 = $_POST["produto1"];
                $produto2 = $_POST["produto2"];
                $produto3 = $_POST["produto3"];

                if ($produto1 < $produto2 && $produto1 < $produto3){
                    echo "Você deve comprar o Produto 1 (R$ $produto1)";
                }elseif($produto2 < $produto1 && $produto2 < $produto3){
                    echo "Você deve comprar o Produto 2 (R$ $produto2)";
                }elseif($produto3 < $produto1 && $produto3 < $produto2){
                    echo "Você deve comprar o Produto 3 (R$ $produto3)";
                }else{
                    echo "Dois ou mais produtos têm o mesmo menor preço.";
                }
            }
            ?>
        </div>
 
    </div>
    
</body>
</html>