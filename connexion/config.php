<?php
$host = 'localhost';
$db = 'sensomotion';
$user = 'root';  // Remplacez par votre nom d'utilisateur MySQL
$pass = '';  // Remplacez par votre mot de passe MySQL

$bdd = new PDO("mysql:host=$host;dbname=$db;charset=utf8;", $user, $pass);
?>