<?php

$sq = mysqli_connect("localhost", "root", "", "jour08");

mysqli_set_charset($sq, "utf8");

$selct = mysqli_query($sq, "SELECT * FROM `etudiants` WHERE naissance > '2006-11-18' ");

$etudiants = mysqli_fetch_all($selct, MYSQLI_ASSOC);

mysqli_close($sq)

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour09-job05</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Prénoms</th>
                <th>Noms</th>
                <th>Date de naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
<tbody>
    <?php foreach ($etudiants as $tabetudiants) { ?>
        <tr>
            <td> <?= $tabetudiants['id']; ?> </td>
            <td> <?= $tabetudiants['prenom']; ?> </td>
            <td> <?= $tabetudiants['nom']; ?> </td>
            <td> <?= $tabetudiants['naissance']; ?> </td>
            <td> <?= $tabetudiants['sexe']; ?></td>
            <td> <?= $tabetudiants['email']; ?></td>
        </tr>
    <?php }; ?>
</tbody>
    </table>
</body>
</html>