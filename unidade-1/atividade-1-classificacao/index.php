<!DOCTYPE html>
<html>
<head>
    <title>Classificação</title>
</head>
<body>

<form method="POST">
    Digite a nota: <input type="number" step="0.1" name="nota">
    <button type="submit">Verificar</button>
</form>

<?php
function classificar($nota) {
    if ($nota >= 7) return "Aprovado";
    elseif ($nota >= 5) return "Recuperação";
    else return "Reprovado";
}

if (isset($_POST['nota'])) {
    $nota = $_POST['nota'];

    echo "<h2>Resultado: " . classificar($nota) . "</h2>";

    echo "<h3>Notas até $nota:</h3>";
    for ($i = 0; $i <= $nota; $i++) {
        echo "$i <br>";
    }
}
?>

</body>
</html>