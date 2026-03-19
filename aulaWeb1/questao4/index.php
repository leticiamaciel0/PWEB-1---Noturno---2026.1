<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulaWeb1</title>
</head>
<body>

    <?php

    $strNum = "123";
    $toInt = (int)$strNum;
    $toFloat = (float)$strNum;
    $toBool = (bool)$strNum;
    echo "String original: '$strNum' (" . gettype($strNum) . ")<br>";
    echo "Para int: $toInt (" . gettype($toInt) . ")<br>";
    echo "Para float: $toFloat (" . gettype($toFloat) . ")<br>";
    echo "Para bool: " . ($toBool ? 'true' : 'false') . " (" . gettype($toBool) . ")<br>";

    ?>





    
</body>
</html>