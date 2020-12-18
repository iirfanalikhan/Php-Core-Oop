<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Grade</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php

    $p = $_POST['percent'] ;
    if($p>=80)
    {
        $Grade = 'A+';
    }
    elseif($p>=70)
    {
        $Grade = 'A';
    }
    elseif($p>=60)
    {
        $Grade = 'B';
    }
    else
    {
        $Grade = 'C';
    }


?>
<h1>
YOUR GRADE IS : <?php echo $Grade; ?> 
</h1> 
</body>
</html>