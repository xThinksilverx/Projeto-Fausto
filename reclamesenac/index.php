<?php
$title = "Página Inicial";
include_once "headerVazio.php";
?>

<main>

    <center>
        <div class="containe">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Senac_logo.svg/653px-Senac_logo.svg.png"
                alt="Logo Senac" class="logoindex">
            <p class="subtitle">SEU CANAL DE RECLAMAÇÕES COM O<br>SENAC JOINVILLE</p>

            <div class="butt">
                <p><a href="login.php">Canal administrativo</a></p>
                <p><a href="reclamacao.php">Reclamações</a></p>
                <p><a href="sobre.php">Sobre</a></p>
                <p><a href="https://portal.sc.senac.br/portal/site/institucional/unidades">Outros contatos</a></p>
            </div>
        </div>
    </center>
</main>

<?php
include_once "footer.php";
?>