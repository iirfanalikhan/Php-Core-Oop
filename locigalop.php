<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>  <?php
        $age = 30;
        $salary = 12220;
        $status = "arried";

        $loan = $age >= 30 && ($salary >= 25000 || $status="married") ;
        var_dump($loan);


        $number = 60;
        $status = $number > 60  ? "pass" : "Fail";
        echo ($status);


    
    ?>
    </h1>
    
</body>
</html>