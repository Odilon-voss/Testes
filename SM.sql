-- Criação do banco de dados
CREATE DATABASE avaliacao_hospital;

-- Conectando ao banco
\c avaliacao_hospital;

-- Criação da tabela de perguntas
CREATE TABLE perguntas (
    id SERIAL PRIMARY KEY,
    pergunta TEXT NOT NULL
);

-- Criação da tabela de respostas
CREATE TABLE respostas (
    id SERIAL PRIMARY KEY,
    pergunta_id INT REFERENCES perguntas(id),
    nota INT CHECK (nota >= 0 AND nota <= 10),
    data_resposta TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Inserindo perguntas iniciais
INSERT INTO perguntas (pergunta) VALUES
('Qual a sua satisfação com o atendimento médico?'),
('Qual a sua satisfação com a estrutura do hospital?'),
('Você recomendaria o hospital a um amigo/familiar?');
