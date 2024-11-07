<?php
header('Content-Type: application/json');

// Conexão com o banco de dados
$conn = new PDO("pgsql:host=localhost;dbname=avaliacao_hospital", "usuario", "senha");

// Consulta dos resultados (média de notas por pergunta)
$stmt = $conn->query("SELECT p.pergunta, AVG(r.nota) as media_nota
                      FROM respostas r
                      JOIN perguntas p ON r.pergunta_id = p.id
                      GROUP BY p.pergunta");
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Retornando os resultados como JSON
echo json_encode($resultados);
?>
