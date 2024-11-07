<?php
header('Content-Type: application/json');

// Conexão com o banco de dados
$conn = new PDO("pgsql:host=localhost;dbname=avaliacao_hospital", "usuario", "senha");

// Consulta das perguntas
$stmt = $conn->query("SELECT id, pergunta FROM perguntas");
$perguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Retornando perguntas como JSON
echo json_encode($perguntas);
?>
