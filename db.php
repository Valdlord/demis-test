<?php
$user = "root";
$pass = "";
$db = new PDO('mysql:host=localhost;dbname=demis', $user, $pass, [
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);
$db->query("SET NAMES 'utf8'");
