<?php
    class telephone
    {
        public $number;
        public $color;
        public $buttons;
        
        function talk()
        {
            echo "talking to poeple...";

        }
        function lesten()
        {
            echo "lestion poeople..";
        }
        
    }
    $office = new telephone;
    $office -> talk();
    $office ->color ="black";


    class book{

            public $price;
            public $color;
            public $numofpages;
            public $chapter;

            function read()
            {
                echo "book can be read....";
            }
            function sell()
            {
                echo "my book price is" ; 
            }
    }
    $english = new book;
    $english -> numofpages = 300; 
    $islamyat = new book;
    $islamyat ->price = 250;
   echo $islamyat-> sell(); 
    

   class personality
   {

        
        public $name;
        public $age;
        public $mbnumber;
        public $proffesion;

        function speech()
        {

            echo "can speech well";

        }
    


   }
    



?>