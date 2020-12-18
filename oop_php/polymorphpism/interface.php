<?php
    interface IShape
    {
        function draw();
    }
    class rectange implements IShape
    {
        function draw()
        {
            echo "can be drawn";
        }
        function __construct()
        {
            echo  "kuch bhie";
        }

    }







?>