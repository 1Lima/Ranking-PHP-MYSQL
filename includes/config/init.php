<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'ranking');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($mysqli, "utf8");
$mysqli->query("SET NAMES 'utf8'");
$mysqli->query('SET character_set_connection=utf8');
$mysqli->query('SET character_set_client=utf8');
$mysqli->query('SET character_set_results=utf8');
setlocale(LC_MONETARY, 'pt_BR');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>