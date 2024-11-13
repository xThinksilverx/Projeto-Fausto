<?php
$title = "Cadastro";
include_once "header.php";
include_once "config/db.php";
?>

<main>
    <center>
        <div class="logocadas">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Senac_logo.svg/653px-Senac_logo.svg.png"
                alt="Logo Senac" class="logocadas">
        </div>

        <div class="conta">
            <p class="title">Faça seu cadastro!</p>
            <p class="subtitle">SEU CANAL DE RECLAMAÇÕES COM O SENAC JOINVILLE</p>

            <form action="" method="POST">
                <input type="text" name="login" class="input-field" placeholder="Login" required>
                <input type="text" name="cpf" class="input-field" placeholder="Cpf" required>
                <input type="password" name="senha" class="input-field" placeholder="Crie uma senha" required>
                <input type="password" name="confirma_senha" class="input-field" placeholder="Confirme sua senha"
                    required>
                <button type="submit" class="btn-login">CADASTRAR</button>
            </form>
        </div>
    </center>
</main>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    if ($senha === $confirma_senha) {
        $sql = "INSERT INTO usuario (login, cpf, senha) VALUES (:login, :cpf, :senha)";
        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute(['login' => $login, 'cpf' => $cpf, 'senha' => $senha]);
            echo "<p style='text-align:center;'>Cadastro realizado com sucesso!</p>";
        } catch (PDOException $e) {
            echo "<p style='text-align:center;'>Erro ao cadastrar: " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p style='text-align:center; color:red;'>As senhas não coincidem!</p>";
    }
}

include_once "footer.php";
?>