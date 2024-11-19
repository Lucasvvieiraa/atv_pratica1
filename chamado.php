<?php

$conn = new mysqli ('localhost', 'root', '', 'gerenciamento_chamados');
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$status_filter = isset($_GET['status']) ? $_GET['status'] : '';
$criticidade_filter = isset($_GET['criticidade']) ? $_GET['criticidade'] : '';

$sql = "SELECT id_chamado, nomeCliente AS cliente, descricaoProblema, criticidade, statusChamados, dataAbertura
        FROM chamados
        INNER JOIN cliente ON chamados.id_cliente = id_cliente
        WHERE (statusChamado LIKE '%$status_filter%' AND criticidade LIKE '%$criticidade_filter%')";

$result = $conn->query($sql);
?>
