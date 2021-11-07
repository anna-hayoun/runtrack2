<?php
$nbs = array(200, 204, 173, 98, 171, 404, 459);
foreach($nbs as $odd)
{
    if ($odd % 2 == 0)
    {
        echo "$odd est paire<br>";
    }
    else
    {
        echo "$odd est impaire<br>";
    }
}
?>