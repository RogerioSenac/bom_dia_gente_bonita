<?php
include("../conexao.php");


    // Número de registros por pagina
    $limit = 10;

    //Obtenha o número da página atual a partir da URL ou defina como 1 se não tiver definido
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    //Calcule o offset
    $offset = ($page - 1) * $limit;

    // Conta o total de áudios
    $totalStmt = $pdo->query("SELECT COUNT(*) as total FROM audio_messages");
    $total = $totalStmt->fetch(PDO::FETCH_ASSOC)['total'];
    $totalPages = ceil($total / $limit);

    // Busca os áudios
    $stmt = $pdo->prepare("SELECT * FROM audio_messages LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    //Exibir os registros de audios
    $audios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $audio = $_POST["nomeAudio"];
    
        $novoAudio = $conexao->prepare("INSERT INTO audio_messages (nomeAudio) VALUE (?)");
        $novoAluno->execute([$audio]);
    
        header('Location: index.php');
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
