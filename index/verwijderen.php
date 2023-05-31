<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/verwijderen.css">
    <title>verwijderen</title>
</head>
<body>
    <div class="title">
        <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
    </div>
    <div class="terug-admin">
        <a href="beheerder.php">Terug naar Beheerder panel</a>
    </div>
    <div class="aanpassen-container">
        <div class="annpas-grid">


<?php
include('config.php');

$vragen = $con->query("SELECT * FROM reizen ");
while($row = $vragen->fetch(PDO::FETCH_ASSOC)){
    echo"
    <div class='boeken-blok'>   
    <div class='boeken-img'>
        <img src='../reizenimg/$row[img]' alt='boeken'>
    </div>
    <div class='boeken-info'>
         <h2 class='tit-boeken'>$row[naam]</h2>
         <h3 class='boeken-prijs'>$row[prijs]</h3>
         <a href='verwijderendb.php?id={$row['id']}'>verwijderen</a>               
    </div>
</div>

    ";
}

?>
            

        </div>
    </div>
    
</body>
</html>