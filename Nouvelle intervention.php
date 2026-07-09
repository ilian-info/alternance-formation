<?php
$pdo = new PDO("mysql:host=localhost;dbname=gestialt;charset=utf8", "root", "");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $req = $pdo->prepare("INSERT INTO intervention (titre, description, technicien, date_intervention, statut) VALUES (?, ?, ?, ?, ?)");
    $req->execute([$_POST['titre'], $_POST['description'], $_POST['technicien'], $_POST['date_intervention'], $_POST['statut']]);
    header('Location: index.php');
    ?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="utf-8"><link rel="stylesheet" href="style.css"><title>Nouvelle intervention</title></head>
<body>
<h1>Nouvelle intervention</h1>
<form method="post">
  <input type="text" name="titre">
  <textarea name="description"></textarea>
  <input type="text" name="technicien">
  <input type="date" name="date_intervention">
  <input type="text" name="statut">
  <button type="submit">Enregistrer</button>
</form>
<a href="index.php">Retour</a>
</body>
</html>