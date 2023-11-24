<?php
    try{
        $dsn = "mysql:host=localhost;dbname=ebooks";
        $user = "root";
        $password = "";

        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];

        $cartao = $_POST['cartao'];
        $validade = $_POST['validade'];
        $titular = $_POST['titular'];
        $codSeguranca = $_POST['codSeguranca'];
        $formPagamento = $_POST['formPagamento'];

        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset($cpf) && isset($rg) && isset($cartao) && isset($validade) && isset($titular) && isset($codSeguranca) && isset($formPagamento)){
                if($cpf != "" && $rg != "" && $cartao != "" && $validade != "" && $titular != "" && $codSeguranca != "" && $formPagamento != ""){
                    $insertUserQuery = "INSERT INTO compra (cpf,rg,cartao,validade,titular,codSeguranca,formPagamento) VALUES ('$cpf','$rg','$cartao','$validade','$titular','$codSeguranca','$formSeguranca')";
                    $stmt = $pdo->exec($insertUserQuery);
                }
            }
        }catch(PDOException $e){
        echo "Erro ao estabelecer conexão: " . $e->getMessage();
    }
?>