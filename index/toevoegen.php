<?php
include('config.php');
if(isset($_POST['toevoegen'])){
    $NAME = $_POST['naam'];
    $PRIJS = $_POST['prijs'];
    $IMG = $_FILES['foto'];
    $IMGLOCATION = $_FILES['foto']['tmp_name'];
    $IMGNAAM = $_FILES['foto']['name'];
    $IMGUP = $IMGNAAM;
    $stmt = $con->prepare("INSERT INTO reizen (naam, prijs, img) VALUES (:naam, :prijs, :foto)");

    // Bind the parameters
    $stmt->bindParam(':naam', $NAME);
    $stmt->bindParam(':prijs', $PRIJS);
    $stmt->bindParam(':foto', $IMGUP);

    // Execute the statement
    $stmt->execute();
    if(move_uploaded_file($IMGLOCATION,'C:\xampp\htdocs\Getaways\reizenimg/'.$IMGNAAM )){
        echo"<script>alert('succesvolle update')</script>";
    }else{
        echo"<script type='text/javascript'>alert('update is misgelukt');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/toevoegen.css">
    <title>Toevoegen</title>
</head>
<body>
    <div class="title">
        <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
    </div>
    <div class="terug-admin">
        <a href="beheerder.php">Terug naar Beheerder panel</a>
    </div>

    <div class="form-toevoegen">
          <form action="" method="post" enctype="multipart/form-data">  
            <input type="text" name="naam" placeholder="Bestemming" required>
            <input type="text" name="prijs" placeholder="Prijs" required>
            <label for="Foto">Foto</label>
            <input type="file" name="foto" id="foto" required>
            <button name="toevoegen">Toevoegen</button>
          </form>
    </div>
    
</body>
</html>
