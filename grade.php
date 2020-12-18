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
    <form action="showgrade.php" method="post">
        <div class="form-group">
            <label for="my-input">Enter Your Grade</label>
            <input id="my-input" class="form-control" type="text" name="percent">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>  
    </form>
    </div>
</body>