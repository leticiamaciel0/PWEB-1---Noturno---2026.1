<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulaWeb1</title>
</head>
<body>

    <?php

    / Função simples para sanitizar
function s($v) {
    return htmlspecialchars(trim($v));
}

// Se o formulário foi enviado, processa e mostra
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeForm = s($_POST['nome'] ?? '');
    $emailForm = s($_POST['email'] ?? '');
    $idadeForm = (int)($_POST['idade'] ?? 0);
    $compromissos = s($_POST['compromissos'] ?? '');

    echo "<h3>Dados recebidos</h3>";
    echo "Nome: $nomeForm<br>";
    echo "Email: $emailForm<br>";
    echo "Idade: $idadeForm<br>";
    echo "Compromissos do dia:<br>";
    echo "<pre>$compromissos</pre>";
    echo "<hr>";
}

// Exibe o formulário
?>
<form method="post" action="">
    <label>Nome:<br><input type="text" name="nome" required></label><br><br>
    <label>E-mail:<br><input type="email" name="email" required></label><br><br>
    <label>Idade:<br><input type="number" name="idade" min="0"></label><br><br>
    <label>Compromissos do dia (uma tarefa por linha):<br>
        <textarea name="compromissos" rows="6" cols="50" placeholder="8:00 - Aula de PO; 10:00 - Reunião"></textarea>
    </label><br><br>
    <button type="submit">Salvar (Enviar)</button>
</form>

    ?>





    
</body>
</html>