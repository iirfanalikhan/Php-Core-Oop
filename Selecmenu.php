<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Grades</title>
</head>
<body>
<div class="container">
    <form action="selecMenu.php" method="post">
        <div class="form-group">
            <label for="my-input">Seclect a day</label>
                    <select name="day" id="">
                        <option>Mon</option>
                        <option>Tue</option>
                        <option>Wed</option>
                        <option>Thur</option>
                        <option>Fri</option>
                        <option>Sat</option>
                        <option>Sun</option>
                        </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
<?php
if (isset($_POST['day'])) {
    $dayname = $_POST['day'];

    if ($dayname == 'Mon') {
        $meals = 'dalChana';
    } elseif ($dayname == 'Tue') {
        $meals = 'qeema';
    } elseif ($dayname == 'Wed') {
        $meals = 'sabzi';
    } elseif ($dayname == 'Thur') {
        $meals = 'kabab';
    } elseif ($dayname == 'Fri') {
        $meals = 'zinger';
    } elseif ($dayname == 'Sat') {
        $meals = 'Fish';
    } else {
        $meals = 'Biryani';
    }
 
}

echo "today is $meals";

?>

    </div>

</body>