<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<table class="table border" >

    <?php
for ($i = 0; $i < 10; $i++) {
    $n = $i + 1;

    ?>
            <tr>
                <td scope="row">2</td>
                <td>x</td>
                <td><?php echo $n; ?></td>
                <td>=</td>
                <td><?php echo $n * 2; ?></td>
            </tr>


            <?php

}

?>





    </table>




<?php
// for($i=0; $i <10; $i++)
// {
//     echo "<h1>Irfanaali $i<br><h1>\n";
// }

?>
    <?php
    for ($x=1; $x < 10; $x++)
    {
       
  ?>  
    <tbody>
   <tr>
        <td><?php echo $x;?> </td>
        
   </tr>
   <tbody>
<?php
    }

?>
<?php
for($number = 2; $number < 7; $number++)
{
    ?>
    <ul>
        <li> <?php echo $number*$number;?> </li>
    </ul>
<?php    
}

?>
</body>
</html>