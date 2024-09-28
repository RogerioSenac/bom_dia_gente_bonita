<?php
// Configurações do banco de dados
$host = 'localhost';
$db = 'whatsapp_messages';
$user = 'seu_usuario';
$pass = 'sua_senha';

try {
    // Conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se o arquivo foi enviado
    if (isset($_FILES['audio']) && $_FILES['audio']['error'] == 0) {
        $file = $_FILES['audio'];
        
        // Diretório para armazenar os arquivos de áudio
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        $filename = basename($file['name']);
        $targetFilePath = $uploadDir . $filename;
        
        // Move o arquivo para o diretório de uploads
        if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
            // Insere o nome do arquivo no banco de dados
            $stmt = $pdo->prepare("INSERT INTO audio_messages (filename) VALUES (:filename)");
            $stmt->execute(['filename' => $filename]);

            echo "Arquivo enviado com sucesso!";
        } else {
            echo "Erro ao mover o arquivo.";
        }
    } else {
        echo "Erro no upload do arquivo.";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
