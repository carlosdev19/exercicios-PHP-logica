<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Reajuste de Salário</h2>
        <form method="POST">
            <input type="number" name="salario" placeholder="Digite o salário" required><br>
            <input type="submit" value="Calcular">

            <div class="resultado">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $salario = $_POST["salario"];

                    if ($salario <= 280){
                        $percentual = 20;
                    } elseif ($salario <= 700){
                        $percentual = 15;
                    }elseif ($salario <= 1500){
                        $percentual = 10;
                    } else {
                        $percentual = 5;
                    }

                    $aumento = ($salario * $percentual) / 100;
                    $novo = $salario + $aumento;

                    echo "Salário antigo: R$ $salario<br>";
                    echo "Percentual: $percentual%<br>";
                    echo "Aumento: R$ $aumento<br>";
                    echo "Novo salário: R$ $novo";
                }
                ?>
            </div>
        </form>
    </div>
    
</body>
</html>