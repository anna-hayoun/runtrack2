<?php

if (isset($_GET["largeur"]) && isset($_GET["hauteur"]))
{
   if ($_GET["largeur"] == 10 && $_GET["hauteur"] == 5)
   {

   }
    
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04-Job07</title>
</head>
<body>

    <form action="#" method="get">

        <label for="case">Largeur</label>
    <input type="text" name="largeur">
        <label for="case">Hauteur</label>
    <input type="text" name="hauteur">

    <input type="submit" value="Envoyer">

    </form>
</body>
</html>