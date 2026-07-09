<?php
$pdo = new PDO("mysql:host=localhost;dbname=exercice_clients;charset=utf8", "root", "");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $req = $pdo->prepare("INSERT INTO interventions (titre, description) VALUES (?, ?)");
    $req->execute([$_POST['titre'], $_POST['description']]);
    echo "Intervention ajoutée";
}
?>
<form>
  <input type="text" name="titre">
  <input type="text" name="description">
  <button type="submit">Ajouter</button>
</form>