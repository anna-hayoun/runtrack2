<?php 

$var = 0;
while ($var != 1337)
{
    $var++;
    echo '</br>';

    if ($var==26 || $var==37 || $var==88 || $var==1111 || $var==3233)
    {
        $var++;
    }

    echo $var. "<br>";
}
?>