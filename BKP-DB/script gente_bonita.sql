-- Criação da base de dados, se ainda não existir
CREATE DATABASE IF NOT EXISTS whatsapp_messages;
use whatsapp_messages;

CREATE TABLE audio_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


select * from audio_messages;