<?php
    interface Iwriter
    {
        function write($text);
    }

class Pen implements Iwriter
{
    public $_color;
    function __construct(string $color)
    {
        $this->_color = $color;
    }
    function write($text)
    {
        echo "<div style='color:$this->_color'>$text</div>";
    }
    
}

$p = new Pen("red");
$p->write('Irfanali');
$p1 = new pen ("green");
$p1 -> write("Karachi");
$p2 = new Pen("rgb(112,55,10)");
$p2 ->write('kpk');



?>