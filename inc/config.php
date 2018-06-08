<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

$config = new stdClass();

$config->instDir = dirname($_SERVER["SCRIPT_NAME"]);
if ($config->instDir == "/") unset($config->instDir);

//$config->urlLocal = "https://". $_SERVER["HTTP_HOST"];
//$config->urlLocal = "http://". $_SERVER["HTTP_HOST"];
$config->urlLocal = "http://". $_SERVER["HTTP_HOST"]."/social";

$config->siteName = "Ranking";
$config->created = "Acacio De Lima";
?>