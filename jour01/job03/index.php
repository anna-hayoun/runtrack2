<?php
$bolee = True;
$chiffre = 6;
$phrase = "Salut les gars!";
$flottante = 2.966;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tableau</title>
</head>
<body>
    <table>
        <tr>
            <td>Type</td>
            <td>Nom</td>
            <td>Valeur</td>
        </tr>
        <tr>
            <td>Booléen</td>
            <td>bolee</td>
            <td><?php echo $bolee ?></td>
        </tr>
        <tr>
            <td>Chiffre Entier</td>
            <td>chiffre</td>
            <td><?php echo $chiffre ?></td>
        </tr>
        <tr>
            <td>chaine de caracteres</td>
            <td>phrase</td>
            <td><?php echo $phrase ?></td>
        </tr>
        <tr>
            <td>nombre à virgules</td>
            <td>flottante</td>
            <td><?php echo $flottante ?></td>
        </tr>
    </table>
    
</body>
</html>