<?php
// Configurações de conexão
$host = "localhost"; // Nome do servidor ou IP
$usuario = "root";   // Nome de usuário do MySQL
$senha = "";         // Senha do MySQL (deixe vazio se não houver)
$banco = "aluno"; // Nome do banco de dados

// Criando a conexão
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificando se houve erro na conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Exemplo de mensagem em caso de sucesso na conexão
echo "Conexão bem-sucedida!";

?>
