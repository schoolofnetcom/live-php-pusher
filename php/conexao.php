<?php

try {
	$conn = new PDO("mysql:host=localhost;dbname=live_pusher", "developer", "dev123");
	$conn->exec("set names utf8");
} catch(PDOExeception $e) {
	echo "Erro ao conectar com o MySQL: " . $e->getMessage();
	exit; 
}