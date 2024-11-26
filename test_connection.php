<?php
$host = '127.0.0.1';
$db   = 'database_hugo';
$user = 'hugo';
$pass = '1234';
$port = 3306;

$mysqli = new mysqli($host, $user, $pass, $db, $port);

if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}
echo "Conexão bem-sucedida!";
?>
