<?php
// Simulação de dados de usuários com um array
$usuarios = [
    [
        'nome' => 'João',
        'endereco' => 'Rua A, 123',
        'cidade' => 'São Paulo',
        'telefone' => '1234-5678',
        'email' => 'joao@email.com',
        'foto' => 'img/joao.png' // Exemplo de imagem
    ],
    [
        'nome' => 'Maria',
        'endereco' => 'Rua B, 456',
        'cidade' => 'Rio de Janeiro',
        'telefone' => '9876-5432',
        'email' => 'maria@email.com',
        'foto' => 'img/maria.png' // Exemplo de imagem
    ]
];

// Selecionar um usuário com ID fixo (exemplo: 0 para João)
$id = 0; // Mude para 1 para visualizar Maria
$user = $usuarios[$id];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="perfil-styles.css">
</head>
<body>
    <header>
        <img src="img/imperf.png" alt="Imagem de Cabeçalho">
    </header>
    <div class="container">
        <div id="profile-page" class="profile-container">
            <h1>Perfil do Usuário</h1>
            <button onclick="logout()">Sair</button>
            <a href="inicio.html"><button onclick="inicio()">Voltar a página inicial</button></a>

            <div class="profile-details">
                <div class="profile-item">
                    <h2>Foto de Perfil</h2>
                    <img id="user-photo" src="<?php echo $user['foto']; ?>" alt="Foto de Perfil" class="profile-photo">
                </div>
                <div class="profile-item">
                    <h2>Nome</h2>
                    <p id="user-name"><?php echo $user['nome']; ?></p>
                </div>
                <div class="profile-item">
                    <h2>Endereço</h2>
                    <p id="user-address"><?php echo $user['endereco']; ?></p>
                </div>
                <div class="profile-item">
                    <h2>Cidade</h2>
                    <p id="user-city"><?php echo $user['cidade']; ?></p>
                </div>
                <div class="profile-item">
                    <h2>Telefone</h2>
                    <p id="user-phone"><?php echo $user['telefone']; ?></p>
                </div>
                <div class="profile-item">
                    <h2>Email</h2>
                    <p id="user-email"><?php echo $user['email']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Throw Burger Company. Todos os direitos reservados.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
