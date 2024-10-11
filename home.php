<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gente Bonita - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Academia Maverick</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="cursosDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="cursosDropdown">
                            <?php foreach ($mostra as $curso): ?>
                                <li>
                                    <a class="dropdown-item"
                                        href="#"><?php echo htmlspecialchars($curso["nomeFormacao"]); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                    <li class="nav-item login-item">
                        <a class="nav-link btn btn-primary text-white" href="./senha/DashAcesso.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção Home -->
    <div class="home" style="margin-top: 56px;">
        <!-- Ajuste para evitar sobreposição do menu fixo -->
        <!-- Banner Principal -->
        <div class="container-fluid text-white text-center py-5">
            <div class="back">
                <h1>Bem-vindo à Academia Maverick!!</h1>
                <p class="lead"><b>Venha explorar os céus conosco! Oferecemos aulas de pilotagem, eventos e muito
                        mais!</b></p>
                <!-- <a href="#" class="btn btn-dark btn-lg">Saiba Mais</a> -->
            </div>
        </div>

        <!-- Seção de Destaques -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://plus.unsplash.com/premium_photo-1661964062531-dcbd3b63d1bd?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Aulas de Pilotagem">
                        <div class="card-body">
                            <h5 class="card-title">Aulas de Pilotagem</h5>
                            <p class="card-text">Aprenda a voar com os melhores instrutores do país. Cursos para
                                iniciantes e avançados.</p>
                            <a href="#" class="btn btn-primary">Ver Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1589042445387-f9099ff05f8e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Eventos">
                        <div class="card-body">
                            <h5 class="card-title">Eventos</h5>
                            <p class="card-text">Participe dos nossos eventos exclusivos para membros e visitantes, com
                                voos panorâmicos e mais.</p>
                            <a href="#" class="btn btn-primary">Ver Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1563540340459-16201ef69a8d?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Associe-se">
                        <div class="card-body">
                            <h5 class="card-title">Associe-se</h5>
                            <p class="card-text">Torne-se um membro do nosso aeroclube e aproveite benefícios exclusivos
                                e descontos.</p>
                            <a href="./senha/DashAcesso.php" class="btn btn-primary">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção Sobre -->
    <div id="sobre" class="center">
        <h2> Sobre Nós </h2>
        <div class="sobre d-flex align-items-center my-5">
            <img src="https://images.unsplash.com/photo-1683971336619-d445cbec0276?q=80&w=2089&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Sobre Nós" style="max-width: 300px;">
            <div>
                <h5>Nossa Missão</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>

                <h5>Nossa Visão</h5>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                    dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                    tempora
                    incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis
                    nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                </p>

                <h5>Nossos Valores</h5>
                <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti
                    atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                    similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et
                    harum
                    quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi
                    optio
                    cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est,
                    omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                </p>

                <h5>Nosso Compromisso</h5>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </p>
            </div>
        </div>
    </div>

    <!-- Seção Contato -->
    <div id="contato" class="contato my-5">
        <h2 class="text-center">Fale Conosco!</h2>
        <h3 class="mt-5">Nossos Contatos</h3>
        <ul class="contato-list mt-3">
            <li>Email: contato@academiamaverick.com.br</li>
            <li>Telefone: (11) 1234-5678</li>
            <li>WhatsApp: (11) 98765-4321</li>
            <li>Endereço: Rua da Aviação, 123 - São Paulo, SP</li>
        </ul>
        <form method="#" action="#" class="mt-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem:</label>
                <textarea name="mensagem" id="mensagem" class="form-control" placeholder="Envie-nos sua mensagem:"
                    rows="5" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Academia de Aviação Maverick. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>