<?php
$host = "localhost";     // Endereço do servidor do banco de dados
$dbname = "bd_restaurante";   // Nome do banco de dados
$user = "root";   // Usuário do banco de dados
$password = ""; // Senha do banco de dados
$base = 'http://localhost/trabalho_restaurante';
try {
    // Cria uma nova instância da classe PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Você está conectado!";
} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem
    echo "Falha na conexão: " . $e->getMessage();
}
?>