<?php
try {
    $dsn = "mysql:host=localhost;dbname=ebooks";
    $user = "root";
    $password = "";

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recuperar os dados do formulário
        $nome = $_POST["nome"];
        $bio = $_POST["bio"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Realizar as operações de atualização no banco de dados ou qualquer outra lógica necessária
        if (isset($nome) && isset($bio) && isset($cpf) && isset($rg) && isset($email) && isset($senha)) {
            if ($nome != "" && $bio != "" && $cpf != "" && $rg != "" && $email != "" && $senha != "") {
                // Verificar se o usuário já existe no banco de dados
                $checkUserQuery = "SELECT * FROM usuario WHERE nome = '$nome'";
                $checkUserStmt = $pdo->query($checkUserQuery);

                if ($checkUserStmt->rowCount() == 1) {
                    // Atualizar o usuário
                    $updateUserQuery = "UPDATE usuario SET nome='$nome', bio='$bio', cpf='$cpf', rg='$rg', email='$email', senha='$senha' WHERE nome = '$nome'";
                    $stmt = $pdo->exec($updateUserQuery);

                    echo "Usuário atualizado com sucesso.";
                } else {
                    echo "Usuário não encontrado.";
                }
            }
        }
    }
} catch (PDOException $e) {
    echo "Erro ao estabelecer conexão: " . $e->getMessage();
}
?>
