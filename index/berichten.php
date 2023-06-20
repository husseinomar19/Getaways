<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/berichten.css">
    <title>Berichten</title>
</head>
<body>
    <div class="title">
        <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
    </div>
    <div class="terug-admin">
        <a href="beheerder.php">Terug naar Beheerder panel</a>
    </div>
    <?php
include('config.php');

$sms = $con->query("SELECT * FROM contact_form");
while($row = $sms->fetch(PDO::FETCH_ASSOC)){
    echo "<section class='sms'>
        <div class='briecht'>
            <p>".$row['name']."</p>
        </div>
        <div class='briecht'>
            <p>".$row['email']."</p>
        </div>
        <div class='briecht'>
            <p>".$row['message']."</p>
        </div>
        <div class='briecht'>
            <a href='birchtver.php?id={$row['id']}'>Verwijderen</a>
        </div>
    </section>";
}
?>
  
    
    
</body>
</html>
