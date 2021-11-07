<?php 

$var = 0;
while ($var != 100)
{
    $var++;
    echo '<br>';

    if ($var == 42)
    {
        echo 'La Plateforme_';
    }

    elseif ($var < 21)
    {
        echo "<i>".$var."</i>";
    }

    elseif ($var >= 25 && $var < 51)
    {
        echo "<u>".$var."</u>";
    }

    else 
    {
        echo $var;
    }

}
?>