<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Positivo ou negativo?</h2>
        <form method="POST">
            <input type="number" name="valor" placeholder="Digite um número" required>
            <input type="submit" value="Verificar">
        </form>
        <div class="resultado">
            <?php
            $valor=$_POST["valor"];
            if($valor > 0){
                echo"Valor Positivo";
            }elseif($valor < 0){
                echo "Valor Negativo";
            }else{
                echo "Zero";
            }
            ?>
        </div>

    </div>
    
</body>
</html>