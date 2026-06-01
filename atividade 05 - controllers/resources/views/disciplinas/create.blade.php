<h1>Cadastrar Nova Disciplina</h1>
<form action="/disciplinas" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome da Disciplina">
    <button type="submit">Salvar</button>
</form>