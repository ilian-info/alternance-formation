<?php
$pdo = new PDO("mysql:host=localhost;dbname=gestialt;charset=utf8", "root", "");
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="utf-8"><link rel="stylesheet" href="style.css"><title>gestialt</title></head>
<body>
<h1>Interventions</h1>
<a href="ajouter.php">Nouvelle intervention</a>
<table>
  <tr><th>Titre</th><th>Technicien</th><th>Date</th><th>Statut</th><th>Changement</th></tr>
   <?php foreach ($liste as $i): ?>
    <tr>
      <td><?= htmlspecialchars($i['titre']) ?></td>
      <td><?= htmlspecialchars($i['technicien']) ?></td>
      <td><?= htmlspecialchars($i['date_intervention']) ?></td>
      <td><?= htmlspecialchars($i['statut']) ?></td>
      <td>
        <a href="modifier.php?id=<?= $i['id'] ?>">Modifier</a>
        <a href="supprimer.php?id=<?= $i['id'] ?>" onclick="return confirm('Supprimer ?')">Supprimer</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
</body>
</html>