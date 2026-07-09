<?php
$pdo = new PDO("mysql:host=localhost;dbname=exercice_clients;charset=utf8", "root", "");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $req = $pdo->prepare("UPDATE clients SET nom = ?, email = ? WHERE id = ?");
    $req->execute([$_POST['nom'], $_POST['email'], $_GET['id']]);

    echo "Client modifié";
}
?>

<form method="post">
  <input type="text" name="nom" value="<?= $client['nom'] ?>">
  <input type="email" name="email" value="<?= $client['email'] ?>">
  <button type="submit">Modifier</button>
</form>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=gestion;charset=utf8", "root", "");

$req = $pdo->prepare("DELETE FROM clients WHERE id = ?");
$req->execute([$_GET['id']]);

header("Location: Clients.php");
exit;
?>