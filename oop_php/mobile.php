<?php
class mobiles
{
    public $sno;
    public $name;
    public $image;
    public $price;

}
$m1 = new mobiles;
$m1->sno = 1;
$m1->name = "Oppo F-17";
$m1->image = "OppoF17Pro-s.jpg";
$m1->price = 51999;

$m2 = new mobiles;
$m2->sno = 2;
$m2->name = "Vivo v 20";
$m2->image = "VivoV20-s.jpg";
$m2->price = 59900;

$m3 = new mobiles;
$m3->sno = 3;
$m3->name = "Realme 7 pro";
$m3->image = "Realme7Pro-s.jpg";
$m3->price = 54999;

$m4 = new mobiles;
$m4->sno = 4;
$m4->name = "Samsung Galaxy S20";
$m4->image = "SamsungGalaxyS20FE-s.jpg";
$m4->price = 60999;
$mobiles = [$m1, $m2, $m3, $m4];


// <!-- watch class -->
class watch
{
    public $sno;
    public $name;
    public $image;
    public $price;

}
$w1 = new watch;
$w1->sno = 1;
$w1->name = "Oppo F-17";
$w1->image = "w1.jpg";
$w1->price = 51999;

$w2 = new watch;
$w2->sno = 2;
$w2->name = "Vivo v 20";
$w2->image = "w2.jpg";
$w2->price = 59900;

$w3 = new watch;
$w3->sno = 3;
$w3->name = "Realme 7 pro";
$w3->image = "w3.jpg";
$w3->price = 54999;

$w4 = new watch;
$w4->sno = 4;
$w4->name = "Samsung Galaxy S20";
$w4->image = "w4.jpg";
$w4->price = 60999;
$watches = [$w1, $w2, $w3, $w4];

class cameras
{
    public $sno;
    public $name;
    public $image;
    public $price;

}
$c1 = new cameras;
$c1->sno = 1;
$c1->name = "Oppo F-17";
$c1->image = "c1.jpg";
$c1->price = 51999;

$c2 = new watch;
$c2->sno = 2;
$c2->name = "Vivo v 20";
$c2->image = "c2.jpg";
$c2->price = 59900;

$c3 = new watch;
$c3->sno = 3;
$c3->name = "Realme 7 pro";
$c3->image = "c3.jpg";
$c3->price = 54999;

$c4 = new watch;
$c4->sno = 4;
$c4->name = "Samsung Galaxy S20";
$c4->image = "c4.jpg";
$c4->price = 60999;
$cameras = [$c1, $c2, $c3, $c4];

?>





<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light ">
      <img src="images\template-for-preview-km-1-.jpg"  class=" col-md-2 col-lg-2 "alt="">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link text-dark" href="#">Products</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Catagories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="mobile.php?myid=1">Mobiles</a>
      <a class="dropdown-item" href="mobile.php?myid=2">Watches</a>
      <a class="dropdown-item" href="mobile.php?myid=3">Cameras</a>

      </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success   my-2 my-sm-0" type="submit">Search</button>
      </form>
      </div>
      </nav>
      <div class="container">
      
<div class="row">


<?php
$id = (isset($_GET['myid']) ? $_GET['myid'] : '');
if ($id == 1) {
    foreach ($mobiles as $item) {
        ?>
        
          <div class="card col-12 col-lg-2 text-center mx-auto mt-2">
            <div class="card-body">
             <img src="images/<?php echo $item->image; ?>" alt="">
             <h5 class="card-title"><?php echo $item->name; ?></h5>
             <p class="card-text"><?php echo $item->price; ?></p>
            </div>
            </div>
          
          

<?php
}



} elseif ($id == 2) {

    foreach ($watches as $item) {
        ?>



<div class="card col-12 col-lg-2 text-center mx-auto mt-2">
    <div class="card-body">
          <img class="col-12" src="images/<?php echo $item->image; ?>" alt="">
          <h5 class="card-title"><?php echo $item->name; ?></h5>
          <p class="card-text"><?php echo $item->price; ?></p>
    </div>
  </div>
  <?php

} 
}
elseif($id == 3)
{
  foreach ($cameras as $item) {
    ?>



<div class="card col-12 col-lg-2 text-center mx-auto mt-2">
<div class="card-body">
      <img class="col-12" src="images/<?php echo $item->image; ?>" alt="">
      <h5 class="card-title"><?php echo $item->name; ?></h5>
      <p class="card-text"><?php echo $item->price; ?></p>
</div>
</div>
<?php

}
}






?>




</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>