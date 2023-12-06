<?php
    try{
        $dsn = "mysql:host=localhost;dbname=ebooks";
        $user = "root";
        $password = "";

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($nome) && isset($senha) && isset($email)){
            if($nome != "" && $senha != "" && $email != ""){
                // Verificar se o usuário já existe no banco de dados
                $checkUserQuery = "SELECT * FROM usuario WHERE email = '$email'";
                $checkUserStmt = $pdo->query($checkUserQuery);

                if($checkUserStmt->rowCount() > 0){
                    // Usuário já existe, redirecionar para alguma página de erro ou exibir uma mensagem
                    header('Location: ../HTML/homepage.html');
                }else{
                    // Inserir novo usuário
                    $insertUserQuery = "INSERT INTO usuario (nome, senha, email) VALUES ('$nome', '$senha', '$email')";
                    $stmt = $pdo->exec($insertUserQuery);

                    header('Location: ../HTML/homepage.html');
                    exit;
                }
            }
        }
    }catch(PDOException $e){
        echo "Erro ao estabelecer conexão: " . $e->getMessage();
    }
?>