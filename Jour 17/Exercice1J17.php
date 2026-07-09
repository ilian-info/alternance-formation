<?php
$pdo = new pdo("mysql:host=localhost;dbname=exercice_clients", "root", "");
$clients = $pdo->query("SELECT * FROM clients")->fetchAll();
foreach ($clients as $client) {
echo $client ['nom'] . "<br>";
}