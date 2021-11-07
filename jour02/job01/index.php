<?php 

$var = 0;
while ($var != 1337)
{
    $var++;
    echo '</br>';
    if ($var == 42)
    {
        echo "<b><u>".$var."</b></u>";
    }
    else 
    {
        echo $var;
    }
}
?>

