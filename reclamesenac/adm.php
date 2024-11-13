<?php
$title = "Canal administrativo";
include_once "header.php";
include_once "config/db.php";
?>
<main>
    <div class="con">
        <p class="title">Últimas reclamações</p>
        <center>
            <div class="box">
                <?php
                $sql = "SELECT nome, curso, local, reclamacao FROM reclamacao ORDER BY idReclamacao DESC LIMIT 5";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $reclamacoes = $stmt->fetchAll();

                if ($reclamacoes) {
                    foreach ($reclamacoes as $reclamacao) {
                        echo "<div class='reclamacao-item'>";
                        echo "<p><strong>Nome:</strong> {$reclamacao['nome']}</p>";
                        echo "<p><strong>Curso:</strong> {$reclamacao['curso']}</p>";
                        echo "<p><strong>Local:</strong> {$reclamacao['local']}</p>";
                        echo "<p><strong>Reclamação:</strong> {$reclamacao['reclamacao']}</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Nenhuma reclamação encontrada.</p>";
                }
                ?>
            </div>
        </center>
    </div>
</main>
<?php
include_once "footer.php";
?>