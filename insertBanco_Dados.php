<?php
    $nome_cliente = $_POST["nome"];
    $email_cliente = $_POST["email"];
    $senha_cliente = $_POST["senha"];
    $primeironome_cliente = $_POST["primeironome"];
    $segundonome_cliente = $_POST["segundonome"];
    $cidadeestado_cliente = $_POST["cidadeestado"];

    $nome_servidor = "localhost";
    $nome_usuario = "root";
    $senha_usuario = "";
    $nome_data_base = "base_dados_php";

    $conexao = new mysqli($nome_servidor, $nome_usuario, $senha_usuario, $nome_data_base);

    if($conexao->connect_error){
        die("Falha na conexão: ". $conexao->connect_error);
    }
    else{
        $sql = "INSERT INTO clientes (nome_cliente, senha_cliente, email_cliente, primeironome_cliente, segundonome_cliente, cidadeestado_cliente)
        VALUES ('$nome_cliente', '$senha_cliente', '$email_cliente', '$primeironome_cliente', '$segundonome_cliente', '$cidadeestado_cliente')";
        
        if($conexao->query($sql) == true){
            echo "Dado inserido com sucesso!";
        }
        else{
            echo "Erro na inserção dos dados!" . $sql . "<br>" . $conexao->error;
        }
        
        $conexao->close();
    }
?>