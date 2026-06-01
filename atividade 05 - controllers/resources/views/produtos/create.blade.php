<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
</head>
<body>
    <h1>Formulário de Produto</h1>
    <form action="/produtos" method="POST">
        @csrf
        <label>Nome do Produto:</label>
        <input type="text" name="nome_produto" required>
        <button type="submit">Enviar Produto</button>
    </form>
</body>
</html>