<?php

class calculation
{
    // function add($a , $b)
    // {
    //     return ($a+$b);
    // }
    // // function add($a,$b,$c)
    // {
    //     return ($a+$b+$c);
    // }
    function __call($mymethod, $args)
    {
        if($mymethod=="add");
        {
            if(count($args) == 2)
            {
                return ($args[0]+$args[1]);
            }
            if(count($args) == 3)
            {
                return ($args[0]+ $args[1]+$args[2]);
            }
        }
        
    }

}



$cal1 = new calculation;
echo "Addition of two numbers "       . $cal1 -> add(2,10);
echo "<br> Addition of three numbers "  . $cal1 -> add(2,10,12);
?>
