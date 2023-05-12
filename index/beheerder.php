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
    
    
</body>
</html>