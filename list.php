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

    // Paginação
    $limit = 10;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    // Busca os áudios
    $stmt = $pdo->prepare("SELECT * FROM audio_messages LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $audios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Conta o total de áudios
    $totalStmt = $pdo->query("SELECT COUNT(*) FROM audio_messages");
    $total = $totalStmt->fetchColumn();
    $totalPages = ceil($total / $limit);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Áudios</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Mensagens de Áudio</h1>
        <?php if ($audios): ?>
            <ul>
                <?php foreach ($audios as $audio): ?>
                    <li>
                        <?= htmlspecialchars($audio['filename']) ?> 
                        <audio controls>
                            <source src="uploads/<?= htmlspecialchars($audio['filename']) ?>" type="audio/mpeg">
                            Seu navegador não suporta o elemento de áudio.
                        </audio>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?page=<?= $page - 1 ?>">Anterior</a>
                <?php endif; ?>

                <span>Página <?= $page ?> de <?= $totalPages ?></span>

                <?php if ($page < $totalPages): ?>
                    <a href="?page=<?= $page + 1 ?>">Próximo</a>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <p>Nenhum áudio encontrado.</p>
        <?php endif; ?>
    </div>
</body>
</html>
