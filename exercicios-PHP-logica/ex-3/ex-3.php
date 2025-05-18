<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Digite F ou M</h2>
        <form method="POST">
            <input type="text" name="letra" placeholder="F ou M" required>
            <input type="submit" value="Verificar">
        </form>
        <div class="resultado">
            <?php
            $letra = $_POST["letra"];
            if ($letra == "F"){
                echo "Feminino";
            }elseif($letra == "M"){
                echo "Masculino";
            }else{
                echo "Sexo Inválido";
            }
            ?>
        </div>
    </div>
    
</body>
</html>