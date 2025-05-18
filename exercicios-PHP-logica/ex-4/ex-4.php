<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Digite uma letra</h2>
        <form method="POST">
            <input type="text" name="letra" placeholder="Letra" required>
            <input type="submit" value="Verificar">

            <div class="resultado">
                <div class="resultado">
                    <?php
                        $letra = $_POST["letra"];
                        $vogais = ['a', 'e', 'i', 'o', 'u'];
                        if ($letra) {
                            if (in_array($letra, $vogais)) {
                                echo "Vogal";
                            } else {
                                echo "Consoante";
                            }
                        } else {
                            echo "Entrada inválida";
                        }
                    
                    ?>
</div>
            </div>

        </form>
    </div>
    
</body>
</html>