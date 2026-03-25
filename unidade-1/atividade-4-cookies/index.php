<?php
if (!isset($_COOKIE['nome'])) {
?>

<form method="POST">
    Digite seu nome:
    <input type="text" name="nome">
    <button type="submit">Salvar</button>
</form>

<?php
    if (isset($_POST['nome'])) {
        setcookie("nome", $_POST['nome'], time() + (86400 * 7));
        echo "Nome salvo! Atualize a página.";
    }

} else {
    echo "Bem-vindo de volta, " . $_COOKIE['nome'];
}
?>