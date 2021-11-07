<?php

$varb = 0 ;
while ($var < 100)
{
    $varb++;
    if (($var % 3 == 0) && ($var % 5 == 0))
    {
        echo "FizzBuzz".'<br>';
    }
    elseif ($var % 3 == 0 )
    {
        echo "Fizz".'<br>';
    }
    elseif ($var % 5 == 0)
    {
        echo "Buzz".'<br>';
    }
    else
    {
        echo $var.'<br>';
    }
}

?>
