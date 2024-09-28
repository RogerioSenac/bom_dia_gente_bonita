<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Upload de Áudio</title>
</head>
<body>
    <div class="container">
        <h1>Upload de Mensagens de Áudio</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="audio[]" accept="audio/*" multiple required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
