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
        <tr>
            <td>
                <?php foreach ($etudiants as $tabetudiants) { echo $tabetudiants['id']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($etudiants as $tabetudiants) { echo $tabetudiants['prenom']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($etudiants as $tabetudiants) { echo $tabetudiants['nom']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($etudiants as $tabetudiants) { echo $tabetudiants['naissance']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($etudiants as $tabetudiants) { echo $tabetudiants['sexe']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($etudiants as $tabetudiants) { echo $tabetudiants['email']."<br>"; } ?>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>