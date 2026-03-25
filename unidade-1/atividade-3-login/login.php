<?php session_start(); ?>

<form method="POST">
    Usuário: <input type="text" name="user"><br>
    Senha: <input type="password" name="senha"><br>
    <button type="submit">Entrar</button>
</form>

<?php
if (isset($_POST['user'])) {
    if ($_POST['user'] == "admin" && $_POST['senha'] == "1234") {
        $_SESSION['logado'] = true;
        header("Location: painel.php");
    } else {
        echo "Login inválido";
    }
}
?>