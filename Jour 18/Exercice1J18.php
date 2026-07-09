<?php
$pdo = new PDO("mysql:host=localhost;dbname=exercice_clients;charset=utf8", "root", "");
    $req = $pdo->prepare("INSERT INTO clients (nom, email) VALUES (?, ?)");
    $req->execute([$_POST['nom'], $_POST['email']]);
    echo "Client ajouté";
?>
<form>
  <input type="text" name="nom">
  <input type="email" name="email">
  <button type="submit">Ajouter</button>
</form>