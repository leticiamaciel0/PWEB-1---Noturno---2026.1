<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulaWeb1</title>
</head>
<body>

    <?php

    $boolVal = true;
    echo "bool: " . ($boolVal ? 'true' : 'false') . "<br>";
    echo "int: " . (int)$boolVal . " (" . gettype((int)$boolVal) . ")<br>";
    echo "string: '" . (string)$boolVal . "' (" . gettype((string)$boolVal) . ")<br>";
    echo "float: " . (float)$boolVal . " (" . gettype((float)$boolVal) . ")<br>";

    ?>





    
</body>
</html>