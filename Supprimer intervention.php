<?php
$pdo = new PDO("mysql:host=localhost;dbname=gestialt;charset=utf8", "root", "");
$req = $pdo->prepare("DELETE FROM intervention WHERE id = ?");
$req->execute([$_GET['id']]);
header('Location: index.php');
?>