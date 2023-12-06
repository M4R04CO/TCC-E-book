<?php
    try{
        $dsn = "mysql:host=localhost;dbname=ebooks";
        $user = "root";
        $password = "";

        $email = $_GET['email'];

        $cpf = $_GET['cpf'];
        $rg = $_GET['rg'];

        $numCartao = $_GET['numCartao'];
        $validade = $_GET['validade'];
        $titular = $_GET['titular'];
        $codSeguranca = $_GET['codSeguranca'];
        $formPagamento = $_GET['formPagamento'];

        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset($cpf) && isset($rg) && isset($numCartao) && isset($validade) && isset($titular) && isset($codSeguranca) && isset($formPagamento)){
                if($cpf != "" && $rg != "" && $numCartao != "" && $validade != "" && $titular != "" && $codSeguranca != "" && $formPagamento != ""){
                    $insertUserQuery = "UPDATE usuario SET cpf='$cpf', rg='$rg' WHERE email = '$email'";
                    $insertCompQuery = "INSERT INTO compra (numCartao,validade,titular,codSeguranca,formPagamento) VALUES ('$numCartao','$validade','$titular','$codSeguranca','$formPagamento')";
                    $stmt = $pdo->exec($insertUserQuery);
                    $tsmt = $pdo->exec($insertCompQuery);

                    // ... (seu código para processar a compra)

                    // Dados do comprador e do livro
                    $nome = "Nome do Comprador"; // Substitua pelo nome real do comprador
                    $email = "exemplo@email.com"; // Substitua pelo e-mail real do comprador
                    $titulo = "Título do Livro"; // Substitua pelo título real do livro
                    // ... (mais dados relevantes)

                    // Construa a mensagem de e-mail
                    $assunto = "Confirmação de Compra - $titulo";
                    $mensagem = "Olá $nome,\n\n";
                    $mensagem .= "Obrigado por comprar o livro '$titulo'.\n";
                    $mensagem .= "Livro: $titulo\n";
                    $mensagem .= "...\n"; // Adicione mais detalhes conforme necessário

                    // Envie o e-mail de confirmação
                    $headers = "From: ebooksalfa@livros.com"; // Substitua pelo seu endereço de e-mail
                    mail($email, $assunto, $mensagem, $headers);

                    // Exibição de uma mensagem de confirmação na tela (opcional)
                    echo "Compra concluída! Um e-mail de confirmação foi enviado para $email.";
                }
            }
        }catch(PDOException $e){
        echo "Erro ao estabelecer conexão: " . $e->getMessage();
    }
?>