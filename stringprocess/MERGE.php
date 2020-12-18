<?php
    $color = ["black", "green","silver","yellow"];
    $color1= ["purple ", "pink","blue","yellow"];
    $merged = array_merge($color , $color1);
    echo    var_dump($merged);
    for($i=0; $i<count($merged);$i++)
    {
        var_dump($merged[$i]);
    }
    





?>