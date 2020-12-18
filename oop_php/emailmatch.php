<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="my-input">Enter Email</label>
                    <input id="my-input" class="form-control" type="email" name="myemail">
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </div>

            </form>
        
       <h1>     

        <?php

        if(isset( $_POST['myemail'])){
            $email =  $_POST['myemail'];
            $restric = "yahoo";
            $result = explode("@",$email);
            // var_dump($result);
            $last = $result[1];
            $mailtype = explode(".",$last);
            
        if($mailtype[0] == $restric)
        {
            echo  "not allowed you enter restricted Email";
        }else
        {
            echo $email;
        }        

    }

            ?>
            
</h1>
    </div>
</body>
</html>