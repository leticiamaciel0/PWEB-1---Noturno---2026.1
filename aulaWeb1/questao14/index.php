<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulaWeb1</title>
</head>
<body>

    <?php

    function contador() {
         static $count = 0;
        $count++;
        echo "Contador vale: $count<br>";
    }
    contador();
    contador();
    contador();

    ?>





    
</body>
</html>