<?php
    class vechles
    {
        private $name="vechles";
        
         function drive()
        {
            echo $this->name." can be driven";
        }  
        
    }
    class car extends vechles
    {
        public $color;
        public function drive()
         {
               echo $this->name." can be driven <br>";
              echo  $this -> color." color";
            
         }
    }

    // $v1 = new vechles;
    // echo  $v1->drive();


    $car1 = new car; 
    $car1 ->name ="toyota";
    $car1->color="red";
    echo $car1->drive();

    





?>