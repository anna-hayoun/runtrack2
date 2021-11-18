<?php

$sq = mysqli_connect("localhost", "root", "", "jour08");

mysqli_set_charset($sq, "utf8");

$selct = mysqli_query($sq, "SELECT * FROM etudiants");

$etudiants = mysqli_fetch_all($selct, MYSQLI_ASSOC);

mysqli_close($sq)


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour09-job01</title>
</head>
<body>

<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <td>
                <?php foreach ($etudiants as $tabetudiant) { echo $tabetudiant['id']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($etudiants as $tabetudiant) { echo $tabetudiant['prenom']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($etudiants as $tabetudiant) { echo $tabetudiant['nom']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($etudiants as $tabetudiant) { echo $tabetudiant['naissance']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($etudiants as $tabetudiant) { echo $tabetudiant['sexe']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($etudiants as $tabetudiant) { echo $tabetudiant['email']."<br>"; } ?>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>