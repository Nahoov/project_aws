<?php
// Incluir conexão
require_once 'conexao.php'; // Isso importa $conn

// Criar a tabela se não existir
$tabela_sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(100) NOT NULL,
    cpf VARCHAR(20),
    data_nascimento DATE,
    email VARCHAR(100),
    tel_celular VARCHAR(20),
    endereco TEXT,
    login VARCHAR(50),
    senha VARCHAR(255)
)";

if (!$conn->query($tabela_sql)) {
    echo "Erro ao verificar/criar tabela: (" . $conn->errno . ") " . $conn->error;
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_completo = $_POST["nome_completo"];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["data_nascimento"];
    $email = $_POST["email"];
    $tel_celular = $_POST["tel_celular"];
    $endereco = $_POST["endereco"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];

    if ($senha === $confirmar_senha) {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO usuarios 
            (nome_completo, cpf, data_nascimento, email, tel_celular, endereco, login, senha)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("ssssssss", $nome_completo, $cpf, $data_nascimento, $email, $tel_celular, $endereco, $login, $senha_hash);
            $stmt->execute();
            echo "Usuário cadastrado com sucesso!";
            $stmt->close();
        } else {
            echo "Erro ao preparar statement: " . $conn->error;
        }
    } else {
        echo "As senhas não coincidem.";
    }
}

$conn->close();
?>