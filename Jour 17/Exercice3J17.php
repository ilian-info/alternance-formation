$pdo= new PDO("mysql: host= localhost; dbname=exercice_clients", "charset= utf8", "root", "");
$interventions = $pdo->query("SELECT * FROM interventions") ->fetchAll();
?>


<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Liste des Interventions</title>
<style>
        body {
            font-family: Arial;
            background: white;
            padding: 20px;
        }

        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background: white;
        }

        th {
            background: black;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
            }

        tr:hover {
            background: white;
        }
    </style>
</head>
<body>
    <h1>Liste des Interventions</h1>
    <table>
        <tr>
            <th>Nom</th>
           <th>Date</th>
            <th>Durée</th>
        </tr>

        <?php foreach ($interventions as $intervention): ?>
            <tr>
                <td><?= htmlspecialchars($intervention['nom']) ?></td>
                <td><?= htmlspecialchars($intervention['date']) ?></td>
                <td><?= htmlspecialchars($intervention['duree']) ?></td>
            </tr>
        <?php endforeach; ?>
