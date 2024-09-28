<?php
$host = 'localhost';
$dbname = 'whatsapp_messages';
$username = 'root';
$password = '';

try{
    $conexao = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Erro na conexao: ". $e->getMessage());
}

?>