<!doctype html>
<html lang="sv">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Link to my style css file -->

    <link rel="stylesheet" href="style.css">

    <title>Webbshop</title>
  </head>
  <body class="container">
    <h1>Varmt välkomna till våran Webbshop!</h1>

    <?php

        $produkter = [

            ["Geforce 1080  " , "gtx1080.jpg" , "8000:-"] ,
            ["Geforce 980" , "gtx980.jpg" , "5000:-"] ,
            ["Geforce 780" , "gtx780.jpg" , "3000:-"] ,

        ];

    ?>

    <div class="row">

        <?php

            foreach($produkter as $produkt) {

        ?>

    <!-- Start a column -->

    <div class="col-sm-4">

        <div class="card">
            <img class="card-img-top" src="images/<?=$produkt[1]?>" width=100px; height=200px; alt="<?=$produkt[0]?>">
        <div class="card-body">
            
            <h3 class="card-title"><?=$produkt[0]?></h3>
            
            <a href="order.php?id=<?=$produkt[2]?>&img=<?=$produkt[1]?>&pris=<?=$produkt[0]?>"
               class="btn btn-primary">Köp nu</a>
               
        </div>   
    
    </div>

    </div> <!-- Avsluta en kolumn -->

    <?php

        }       

    ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
