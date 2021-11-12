<?php
  function bonjour($jour = true)
  {
    if ($jour == true)
    {
        echo "Bonjour";
    }

    elseif ($jour == false)
    {
        echo "Bonsoir";
    }
  }  
  
  bonjour();
?>