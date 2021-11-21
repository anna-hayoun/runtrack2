<?php

$sq = mysqli_connect("localhost", "root", "", "jour08");

mysqli_set_charset($sq, "utf8");

$selct = mysqli_query($sq, "SELECT `nom` FROM `etage`");
$selct2 = mysqli_query($sq, "SELECT `nom` FROM `salles`");

$salles = mysqli_fetch_all($selct, MYSQLI_ASSOC);
$salles2 = mysqli_fetch_all($selct2, MYSQLI_ASSOC);

mysqli_close($sq)

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour09-job13</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Etage</th>
                <th>Nom</th>
            </tr>
        </thead>
<tbody>
        <tr>
            <td> <?php foreach ($salles as $sqt) { echo $sqt['nom']; };?> </td>
            <td> <?php foreach ($salles2 as $sqt2) { echo $sqt2['nom']; };?> </td>
        </tr>
</tbody>
    </table>
</body>
</html>