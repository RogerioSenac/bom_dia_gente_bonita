<?php
// Configurações do banco de dados
$host = 'localhost';
$db = 'whatsapp_messages';
$user = 'root';
$pass = '';

try {
    // Conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se arquivos foram enviados
    if (isset($_FILES['audio'])) {
        $files = $_FILES['audio'];

        // Diretório para armazenar os arquivos de áudio
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Itera sobre os arquivos
        foreach ($files['name'] as $key => $filename) {
            if ($files['error'][$key] == 0) {
                $targetFilePath = $uploadDir . basename($filename);
                
                // Move o arquivo para o diretório de uploads
                if (move_uploaded_file($files['tmp_name'][$key], $targetFilePath)) {
                    // Insere o nome do arquivo no banco de dados
                    $stmt = $pdo->prepare("INSERT INTO audio_messages (filename) VALUES (:filename)");
                    $stmt->execute(['filename' => $filename]);
                }
            }
        }

        echo "Arquivos enviados com sucesso!";
    } else {
        echo "Erro no upload dos arquivos.";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
