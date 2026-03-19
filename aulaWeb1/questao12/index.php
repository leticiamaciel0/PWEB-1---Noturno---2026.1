<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulaWeb1</title>
</head>
<body>

    <?php

    $texto = "Olá PHP!";
    echo "Maiúsculas: " . strtoupper($texto) . "<br>";
    echo "Minúsculas: " . strtolower($texto) . "<br>";
    echo "Tamanho: " . strlen($texto) . "<br>";
    echo "Replace (PHP -> Mundo): " . str_replace("PHP", "Mundo", $texto) . "<br>";


    ?>





    
</body>
</html>