<?php
    try{
        $dsn = "mysql:host=localhost;dbname=ebooks";
        $user = "root";
        $password = "";

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
                    $insertUserQuery = "UPDATE usuario set cpf='$cpf' rg='$rg' WHERE email = '$email'";
                    $insertCompQuery = "INSERT INTO compra (numCartao,validade,titular,codSeguranca,formPagamento) VALUES ('$numCartao','$validade','$titular','$codSeguranca','$formPagamento')";
                    $stmt = $pdo->exec($insertUserQuery);
                    $tsmt = $pdo->exec($insertCompQuery);

                    header('Location: ../HTML/homepage.html');
                    exit;
                }
            }
        }catch(PDOException $e){
        echo "Erro ao estabelecer conexão: " . $e->getMessage();
    }
?>