<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulaWeb1</title>
</head>
<body>

    <?php

    $globalVar = "Eu sou global";
    function mostraEscopo() {
        // variável local
        $localVar = "Eu sou local";
        echo "Dentro da função: $localVar<br>";
        // acessar global usando global
        global $globalVar;
        echo "Dentro da função (global): $globalVar<br>";
    }
    mostraEscopo();
    echo "Fora da função (global): $globalVar<br>";

    ?>





    
</body>
</html>