<?php

if ($_server["REQUEST_METHOD"] == "POST") {

    $conn = new mysqli ('localhost', 'root', '', 'gerenciamento_chamados');

    if ($conn->connect_error) {
        die("Falha com a conexão: " . $conn->connect_error);
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    if (empty($nome) || empty($email) || empty($telefone)) {
        echo "Todos os campos são obrigatórios!";
    } else {
        if ($conn->query($sql) === TRUE) {
            echo "Cliente cadastrado com sucesso";
        } else {
            echo "Erro no cadastro: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?> 

