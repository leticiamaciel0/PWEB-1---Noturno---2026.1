<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    Curso: <input type="text" name="curso"><br>
    Turno: <input type="text" name="turno"><br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];
    $turno = $_POST['turno'];

    if (empty($nome) || empty($email) || empty($curso) || empty($turno)) {
        echo "Erro: Preencha todos os campos!";
    } else {
        echo "<h2>Cadastro realizado!</h2>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Curso: $curso <br>";
        echo "Turno: $turno <br>";
    }
}
?>

</body>
</html>