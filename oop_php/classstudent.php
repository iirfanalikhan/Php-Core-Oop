<?php
    class student
    {
        public $id;
        public $name;
        Public $email;
        private $password;
    }
    // first object
    $std1= new student;
    $std1-> name="irfanali";
    $std1 ->id="11a";
    $std1->email="jkljl@gmail.com";
    //    second object 
    $std2= new student;
    $std2 ->name="jawad";
    $std2 ->id="12a";
    $std2->email="jkljl@gmail.com";
    // 3rd object
    $std3= new student;
    $std3 ->name="bilal";
    $std3 ->id="13a";
    $std3->email="jkljl@gmail.com";
    // 3rd object
    $students=[$std1,$std2,$std3];
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>name</th>
                <th>Id</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
    <?php
            $i=0;
            while($i<count($students)){
                $item = $students[$i];

                            // foreach ($students as $item) {
           ?>     
             
                <tr>
                    <td><?php echo $item->id;?></td>
                    <td><?php echo $item->name;?></td>
                    <td><?php echo $item->email;?></td>
                </tr>
            
         <?php  
             $i++;   
            }
    ?>



</tbody>
    </table>
 
 
  </body>
</html>