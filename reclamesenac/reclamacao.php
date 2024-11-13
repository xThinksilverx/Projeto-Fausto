<?php
$title = "Reclamações";
include_once "header.php";
include_once "config/db.php";
?>

<main>
    <center>

        <div class="container">
            <h1>Seja Bem Vindo ao<br>Reporte Senac!</h1>

            <form action="" method="POST">
                <label for="nome">Qual seu nome?</label>
                <input type="text" id="nome" name="nome" required>

                <label for="cpf">Informe seu CPF?</label>
                <input type="text" id="cpf" name="cpf" required>

                <label for="curso">Qual seu curso?</label>
                <input type="text" id="curso" name="curso" required>

                <label>Local do problema</label>
                <input type="text" id="local" name="local" required>

                <center>
                    <div class="co">
                        <h2>Qual sua reclamação?</h2>
                        <textarea name="reclamacao" placeholder="Reclamação" required></textarea>
                        <div class="buttons">
                            <button class="cancel"><a href="index.php">Cancelar</a></button>
                            <button type="submit" class="submit">Enviar</button>
                        </div>
                </center>
            </form>
        </div>

    </center>
</main>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $curso = $_POST['curso'];
    $local = $_POST['local'];
    $reclamacao = $_POST['reclamacao'];

    $sql = "INSERT INTO reclamacao (nome, cpf, curso, local, reclamacao) VALUES (:nome, :cpf, :curso, :local, :reclamacao)";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute(['nome' => $nome, 'cpf' => $cpf, 'curso' => $curso, 'local' => $local, 'reclamacao' => $reclamacao])) {
        echo "<p style='text-align:center; color:green;'>Reclamação enviada com sucesso!</p>";
    } else {
        echo "<p style='text-align:center; color:red;'>Erro ao enviar a reclamação. Tente novamente.</p>";
    }
}

include_once "footer.php";
?>