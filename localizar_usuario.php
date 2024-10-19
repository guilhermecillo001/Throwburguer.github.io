<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localizar Usuário</title>
    <link rel="stylesheet" href="perfil-styles.css">
</head>
<body>
    <header>
        <img src="img/imperf.png" alt="Imagem de Cabeçalho">
    </header>

    <div class="container">
        <div id="search-page" class="search-container">
            <h1>Localizar Usuário</h1>

            <form method="POST" action="">
                <label for="search-term">Nome ou Email:</label>
                <input type="text" id="search-term" name="search-term" required>
                <button type="submit">Buscar</button>
            </form>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Conectar ao banco de dados
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "perfil_usuario";

                    // Criando a conexão
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Verificar a conexão
                    if ($conn->connect_error) {
                        die("Falha na conexão: " . $conn->connect_error);
                    }

                    // Receber o termo de busca
                    $searchTerm = $_POST['search-term'];

                    // Consultar o banco de dados
                    $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$searchTerm%' OR email LIKE '%$searchTerm%'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Exibir os resultados da busca
                        echo "<h2>Resultados da busca:</h2>";
                        while($user = $result->fetch_assoc()) {
                            echo "<div class='profile-item'>";
                            echo "<h3>" . $user['nome'] . "</h3>";
                            echo "<p>Email: " . $user['email'] . "</p>";
                            echo "<p>Endereço: " . $user['endereco'] . "</p>";
                            echo "<p>Cidade: " . $user['cidade'] . "</p>";
                            echo "<p>Telefone: " . $user['telefone'] . "</p>";
                            echo "<img src='" . $user['foto_perfil'] . "' alt='Foto de Perfil' class='profile-photo'>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p>Nenhum usuário encontrado.</p>";
                    }

                    // Fechar a conexão
                    $conn->close();
                }
            ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Throw Burger Company. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
