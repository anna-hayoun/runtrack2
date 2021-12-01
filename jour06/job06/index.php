<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

if ($_POST["style"] === 'style1')
{
    echo "<link rel='stylesheet' href='style1.css' type='text/css'/>";
}

else if ($_POST["style"] === 'style2')
{
    echo "<link rel='stylesheet' href='style2.css' type='text/css'/>";
}

else if ($_POST["style"] === 'style3')
{
    echo "<link rel='stylesheet' href='style3.css' type='text/css'/>";
}
?>
    <title>Jour06-Job06</title>
</head>

<body>

    <form action="./index.php" method="post">

        <select name="style" id="style">
            <option value="choix" class="choix">--Choisir le Style--</option>
            <option value="style1" class="style1">Style n°1</option>
            <option value="style2" class="style2">Style n°2</option>
            <option value="style3" class="style3">Style n°3</option>
        </select>
            <input type="submit" value="Envoyer"> 
    </form>
    
</body>
</html>