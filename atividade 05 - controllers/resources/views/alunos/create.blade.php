<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <h1>Novo Aluno</h1>
    
    <form action="/alunos" method="POST">
        @csrf 
        
        <div>
            <label for="nome">Nome do Aluno:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <br>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <br>
        <button type="submit">Salvar Aluno</button>
    </form>

    <br>
    <a href="/alunos">Voltar para a listagem</a>
</body>
</html>