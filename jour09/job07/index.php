<?php

$sq = mysqli_connect("localhost","root","","jour08");

mysqli_set_charset($sq,"utf8");

$selct = mysqli_query($sq, "SELECT SUM(superficie) FROM `etage`");
$selct2 = mysqli_query($sq, "SELECT * FROM `etage`");

$etage = mysqli_fetch_all($selct, MYSQLI_ASSOC);

$etage2 = mysqli_fetch_all($selct2, MYSQLI_ASSOC);

mysqli_close($sq)

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour09-Job07</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>numero</th>
                <th>superficie</th>
                <th>superficie_totale</th>
            </tr>
        </thead>
<tbody>
        <?php foreach ($etage2 as $sqt) {  ?>
            <tr>
                <td> <?= $sqt['id']; ?> </td>
                <td> <?= $sqt['nom']; ?> </td>
                <td> <?= $sqt['numero']; ?> </td>
                <td> <?= $sqt['superficie']; ?> </td>
                <td>
                    <?php if ($sqt['id'] == 1){ foreach ($etage as $tabetage2) { echo $tabetage2['SUM(superficie)']."<br>"; }} ?>
                </td>
            </tr>
        <?php }; ?>
</tbody>
    </table>
</body>
</html>