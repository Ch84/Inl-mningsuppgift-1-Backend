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

    <title>Orderformulär</title>
  </head>

    <body class="container">

    <h1>Din beställning</h1>
    
    <?php
        print_r($_GET);
        $id = $_GET['id'];
        $img = $_GET['img'];
        $pris = $_GET['pris'];

        echo "<h2>Produkt: $pris</h2>";
        echo "<h2>Pris: $id </h2>";
        echo "<img src='images/' alt='' width=300px; height:300px;>";

    ?>

    <p>För att slutföra din beställning vänligen fyll i nedan formulär. <br>
       När du fyllt i dina uppgifter trycker du bara på Skicka och du kommer att
       få en mailbekräftelse på ditt köp.
    </p>

    
    <form action="./mail.php" name=<?=$name?> & mail=<?=$Email?> method="post">

      <h6> Förnamn: </h6>

      <input type="text" name="name" placeholder="Ditt förnamn och efternamn">

      <h6> Leveransadress: </h6> 

      <input type="text" name="Leveransadress" placeholder="Din leveransadress"> 

      <h6> Övrigt: </h6>

      <input type="text" name="mytextbox" class="box" placeholder="Skriv gärna övriga synpunkter här">

      <h6> E-mail: </h6>

      <input type="text" name="Email" class="Email" placeholder="Din E-Mail adress" required>
      <input type="hidden" name="produkt" value="<?=$img?>">
      <input type="hidden" name="ordernr" value="<?=$id?>">
      <input type="hidden" name="pris" value="<?=$pris?>">

      <input type="submit" value="Skicka" class="btn btn-outline-primary">

    </form>
        
    </body>


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>