<?php

$cookie = time() + 365*24*3600;

    setcookie('nbvisites', $_COOKIE['nbvisites'] + 1, $cookie);

    echo $_COOKIE['nbvisites'];

    if (isset($_POST["reset"]))
    {
        setcookie('nbvisites');
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07-Job02</title>
</head>
<body>

<form action="index.php" method="POST">
    <input type="submit" value="reset" name="reset">
</form>

</body>
</html>


