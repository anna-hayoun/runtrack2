<?php

$sq = mysqli_connect("localhost","root","","jour08");

mysqli_set_charset($sq,"utf8");

$selct = mysqli_query($sq, "SELECT COUNT(*) FROM `etudiants`");
$selct2 = mysqli_query($sq, "SELECT * FROM `etudiants`");

$etudiants = mysqli_fetch_all($selct, MYSQLI_ASSOC);

$etudiants2 = mysqli_fetch_all($selct2, MYSQLI_ASSOC);

mysqli_close($sq)

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour09-Job06</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
                <th>sexe</th>
                <th>email</th>
                <th>nb_etudiants</th>
            </tr>
        </thead>
<tbody>
        <?php foreach ($etudiants2 as $sqt) {  ?>
            <tr>
                <td> <?= $sqt['id']; ?> </td>
                <td> <?= $sqt['prenom']; ?> </td>
                <td> <?= $sqt['nom']; ?> </td>
                <td> <?= $sqt['naissance']; ?> </td>
                <td> <?= $sqt['sexe']; ?> </td>
                <td> <?= $sqt['email']; ?> </td>
                <td>
                    <?php  if ($sqt['id'] == 1){ foreach ($etudiants as $tabetudiant2) { echo $tabetudiant2['COUNT(*)']."<br>"; }} ?>
                </td>
            </tr>
        <?php }; ?>
</tbody>
    </table>
</body>
</html>