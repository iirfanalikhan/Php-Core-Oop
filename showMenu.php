<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $dayname = $_POST['day'];

    if($dayname == 'Mon')
    {
        $meals = 'dalChana';
    }elseif($dayname =='Tue')
    {
        $meals = 'qeema';
    }elseif($dayname =='Wed')
    {
        $meals = 'sabzi';
    }elseif($dayname =='Thur')
    {
        $meals = 'kabab';
    }elseif($dayname =='Fri')
    {
        $meals = 'zinger';
    }elseif($dayname =='Sat')
    {
        $meals = 'Fish';
    }
    else
    {
        $meals = 'Biryani';
    }








?>
        <h1>Today Menu is : <?php echo $meals?></h1>
</body>
</html>