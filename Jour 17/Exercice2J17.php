<?php
$pdo= new PDO("mysql: host= localhost; dbname=exercice_clients", "charset= utf8", "root", "");
$clients = $pdo->query("SELECT * FROM clients") ->fetchAll();
?>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: white;
    margin: 0;
    padding: 20px;
}
table {
    border-collapse: collapse;
    width: 70%;
    margin: 0 auto;
    }
th {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
}
td {
    padding: 12px;
    text-align: center;
    }
</style>
<table>
  <tr>
    <th>Nom</th>
    <th>Email</th>
  </tr>

  <?php foreach ($clients as $c): ?>
    <tr>
      <td><?= htmlspecialchars($c['nom']) ?></td>
      <td><?= htmlspecialchars($c['email']) ?></td>
    </tr>
  <?php endforeach; ?>
</table>