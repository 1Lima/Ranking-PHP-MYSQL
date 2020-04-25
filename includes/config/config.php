<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
date_default_timezone_set('America/Sao_Paulo');
header('Content-Type: text/html; charset=utf-8');
header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
header('Cache-Control: no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

$config = new stdClass();

$config->instDir = dirname($_SERVER["SCRIPT_NAME"]);
if ($config->instDir == "/") unset($config->instDir);

$config->patch = "ranking";
//$config->urlLocal = "https://". $_SERVER["HTTP_HOST"];
//$config->urlLocal = "http://". $_SERVER["HTTP_HOST"];
//$config->urlLocal = "https://". $_SERVER["HTTP_HOST"]."/".$config->patch;
$config->urlLocal = "http://". $_SERVER["HTTP_HOST"]."/".$config->patch;

$config->getYears = date('Y');
?>