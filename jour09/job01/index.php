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
    <?php foreach ($etudiants as $tabetudiant) { ?>
        <tr>
            <td> <?= $tabetudiant['id']; ?> </td>
            <td> <?= $tabetudiant['prenom']; ?> </td>
            <td> <?= $tabetudiant['nom']; ?> </td>
            <td> <?= $tabetudiant['naissance']; ?> </td>
            <td> <?= $tabetudiant['sexe']; ?> </td>
            <td> <?= $tabetudiant['email']; ?> </td>
        </tr>
    <?php }; ?>
</tbody>
    </table>
</body>
</html>