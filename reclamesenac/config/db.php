<?php


$host = "localhost";
$dbname = "reclamesenac";
$dbuser = "root";
$dbpass = "";

// use PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    exit("Terminei a execução do script porque deu erro de conexão com o banco de dados.");
}
