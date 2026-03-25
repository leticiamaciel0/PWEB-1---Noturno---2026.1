<?php session_start(); ?>

<?php
function validar($nome) {
    return !empty($nome);
}

if (!isset($_SESSION['dados'])) {
    $_SESSION['dados'] = [];
}

if (isset($_POST['nome'])) {
    if (validar($_POST['nome'])) {
        $_SESSION['dados'][] = $_POST['nome'];
    } else {
        echo "Nome inválido!";
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="nome">
    <button type="submit">Cadastrar</button>
</form>

<h2>Registros:</h2>

<?php
foreach ($_SESSION['dados'] as $dado) {
    echo $dado . "<br>";
}
?>