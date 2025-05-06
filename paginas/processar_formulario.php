
<?php
$hostname = "localhost";
$bancodedados = "cadastro";
$usuario = "root";
$senha = "MYnaho3090%";

$mysqli = new mysqli($hostname,$usuario,$senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//2.verificar se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//3. Receber os dados do formulário
    $nome_completo = $_POST["nome_completo"];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["data_nascimento"];
    $email = $_POST["email"];
    $tel_celular = $_POST["tel_celular"];   
    $endereco = $_POST["endereco"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST ["confirmar_senha"];
}

?>

