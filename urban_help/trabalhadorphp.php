<?php
// Dados de conexão com o banco de dados
$servername = "localhost"; // Nome do servidor
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL
$dbname = "urban"; // Nome do banco de dados

// Dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$cnpj = $_POST['cnpj'];
$serv = $_POST['serv'];
$senha = $_POST['senha'];

// Criar uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se ocorreu algum erro na conexão
if ($conn->connect_errno) {
    echo "Falha na conexão com o banco de dados: " . $conn->connect_error;
}

// Usar prepared statements para inserir os dados no banco de dados
$sql = "INSERT INTO funcionario (nome, email, cpf, telefone, cnpj, serv, senha) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Verificar se ocorreu algum erro ao preparar a consulta
if (!$stmt) {
    echo "Erro na preparação da consulta: " . $conn->error;
} else {
    // Bind dos parâmetros e execução da consulta
    $stmt->bind_param("sssssss", $nome, $email, $cpf, $telefone, $cnpj, $serv, $senha);

    if ($stmt->execute()) {
        echo "Dados salvos com sucesso!";
    } else {
        echo "Erro ao salvar os dados: " . $stmt->error;
    }

    // Fechar o statement
    $stmt->close();
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
