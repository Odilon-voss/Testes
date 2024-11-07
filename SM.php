<?php
// Conexão com o banco de dados
$conn = new PDO("pgsql:host=localhost;dbname=avaliacao_hospital", "usuario", "senha");

// Loop através das perguntas recebidas e inserção das respostas
foreach ($_POST as $chave => $valor) {
    if (strpos($chave, 'nota_') === 0) {
        $pergunta_id = str_replace('nota_', '', $chave);
        $nota = (int)$valor;
        $stmt = $conn->prepare("INSERT INTO respostas (pergunta_id, nota) VALUES (:pergunta_id, :nota)");
        $stmt->execute(['pergunta_id' => $pergunta_id, 'nota' => $nota]);
    }
}

// Redireciona o usuário após enviar
header("Location: obrigado.html");
exit();
?>
