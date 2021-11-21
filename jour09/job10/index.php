<?php

$sq = mysqli_connect("localhost","root","","jour08");

mysqli_set_charset($sq,"utf8");

$selct = mysqli_query($sq, "SELECT * FROM `salles` order by `capacite` ASC");

$salles = mysqli_fetch_all($selct, MYSQLI_ASSOC);

mysqli_close($sq)

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour09-Job10</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>etage</th>
                <th>capacité</th>
            </tr>
        </thead>
<tbody>
    <?php foreach ($salles as $sqt) {  ?>
            <tr>
                <td> <?= $sqt['id']; ?> </td>
                <td> <?= $sqt['nom']; ?> </td>
                <td> <?= $sqt['id_etage']; ?> </td>
                <td> <?= $sqt['capacite']; ?> </td>
            </tr>
    <?php }; ?>
</tbody>
    </table>
</body>
</html>