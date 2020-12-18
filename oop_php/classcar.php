<?php

class car{
    public $color;
    public $name;

    function drive()
    {
        echo "driving ..... ";
    }
    function accelate()
    {
        echo"accelarate .....";
    }
    function breaks ()
    {
        echo"breaks";
    }


}
$mycar = new car;
$mycar ->drive(); 
$mycar ->name ="Audi";
echo "<br>";
$youcar= new car;
$mycar-> accelate();





?>