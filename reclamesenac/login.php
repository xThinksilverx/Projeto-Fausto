<?php
$title = "Login";
include_once "header.php";
include_once "config/db.php";
?>

<main>
    <center>
        <div class="cont">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Senac_logo.svg/653px-Senac_logo.svg.png"
                    alt="Logo Senac" class="logologin">
            </div>

            <p class="subtitle">SEU CANAL DE RECLAMAÇÕES COM O SENAC JOINVILLE</p>

            <form action="" method="POST">
                <input type="text" name="login" class="input-field" placeholder="Login" required>
                <input type="password" name="senha" class="input-field" placeholder="Senha" required>
                <div>
                    <button type="submit" class="btn-login">LOGIN</button>
                    <button type="button" class="btn-register"><a href="cadastro.php">Cadastro</a></button>
                </div>
            </form>

            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </center>
</main>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE login = :login AND senha = :senha";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['login' => $login, 'senha' => $senha]);

    if ($stmt->rowCount() > 0) {
        header("Location: adm.php");
        exit();
    } else {
        echo "<p style='text-align:center; color:red;'>Login ou senha incorretos!</p>";
    }
}

include_once "footer.php";
?>