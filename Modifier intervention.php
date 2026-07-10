<?php
$pdo = new PDO("mysql:host=localhost;dbname=gestialt;charset=utf8", "root", "");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$req = $pdo->prepare("UPDATE intervention SET titre = ?, description = ?, technicien = ?, date_intervention = ?, statut = ? WHERE id = ?");
$req->execute([$_POST['titre'], $_POST['description'], $_POST['technicien'], $_POST['date_intervention'], $_POST['statut'], $_GET['id']]);
header('Location: index.php');
}
$req = $pdo->prepare("SELECT * FROM interventions WHERE id = ?");
$req->execute([$id]);
$i = $req->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="utf-8"><link rel="stylesheet" href="style.css"><title>Modifier</title></head>
<body>
<h1>Modifier l'intervention</h1>
<form method="post">
  <input type="text" name="titre" value="<?= htmlspecialchars($i['titre']) ?>" >
  <textarea name="description"><?= htmlspecialchars($i['description']) ?></textarea>
  <input type="text" name="technicien" value="<?= htmlspecialchars($i['technicien']) ?>">
  <input type="date" name="date_intervention" value="<?= htmlspecialchars($i['date_intervention']) ?>">
  <input type="text" name="statut" value="<?= htmlspecialchars($i['statut']) ?>">
  <button type="submit">Enregistrer</button>
</form>
<a href="index.php">Retour</a>
</body>
</html>