<?php
session_start();
if($_SESSION['logged_in'] == true)
{

}
else
{
     header('location: admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/beheerder.css">
    <title>Document</title>
</head>
<body>
    <div class="title">
    <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
    </div>
<div class="beheerder">
    <div class="mogelijkheden">
        <a href="toevoegen.php">Reis Toevoegen</a>
    </div>
    <div class="mogelijkheden">
        <a href="aanpassen.php">Reis aanpassen</a>
    </div>
    <div class="mogelijkheden">
        <a href="verwijderen.php">Reis verwijderen</a>
    </div>
</div>
<section class="boeken-title">
    <h2>Geboekte reizen</h2>
</section>

<section class="geboekt-reizen">
    <div class="geboekt-main">


    
        <?php
include('config.php');

$vragen = $con->query("SELECT * FROM geboekt");
while($row = $vragen->fetch(PDO::FETCH_ASSOC)){
    echo"
    <div class='geboekt'>
          <h3>$row[id]</h3>
          <h3>$row[bestemming]</h3>
          <h3>$row[prijs]</h3>
          <h3>$row[naam]</h3>
          <h3>$row[email]</h3>
          <h3>$row[datum]</h3>
          <h3>$row[personen]</h3>
          <a href='geboektverwijderen.php? boekid= $row[id]'>Verwijderen</a>
        </div>
    ";
}

?>




    </div>

</section>
    
    
</body>
</html>