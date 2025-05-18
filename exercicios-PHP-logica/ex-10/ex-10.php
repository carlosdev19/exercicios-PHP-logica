<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Digite seu turno (M, V ou N)</h2>
        <form method="POST">
            <input type="text" name="turno" placeholder="M, V ou N" required><br>
            <input type="submit" value="Verificar">

            <div class="resultado">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $turno = $_POST["turno"];

                    if($turno == "M"){
                        echo "Bom dia!";
                    } elseif ($turno == "V") {
                        echo "Boa tarde!";
                    } elseif ($turno == "N") {
                        echo "Boa noite!";
                    } else {
                        echo "Valor inválido";
                    }
                }
                ?>
            </div>
        </form>
    </div>
    
</body>
</html>