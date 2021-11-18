<?php

$sq = mysqli_connect("localhost", "root", "", "jour08");

mysqli_set_charset($sq, "utf8");

$selct = mysqli_query($sq, "SELECT nom, capacite FROM salles");

$salles = mysqli_fetch_all($selct, MYSQLI_ASSOC);

mysqli_close($sq)

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour09-job02</title>
</head>
<body>

<table>
        <thead>
            <tr>
                <th>Noms</th>
                <th>Capacités</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <td>
                <?php foreach ($salles as $tabsalles) { echo $tabsalles['nom']."<br>"; } ?>
            </td>
            <td>
                <?php foreach ($salles as $tabsalles) { echo $tabsalles['capacite']."<br>"; } ?>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>