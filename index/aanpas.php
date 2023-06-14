<?php
include('config.php');

if(isset($_POST['aanpassen'])){
    $ID = $_POST['id'];
    $NAME = $_POST['naam'];
    $PRIJS = $_POST['prijs'];
    $IMG = $_FILES['foto'];
    $IMGLOCATION = $_FILES['foto']['tmp_name'];
    $IMGNAAM = $_FILES['foto']['name'];
    $IMGUP = $IMGNAAM;

    $update = "UPDATE reizen SET naam = :naam, prijs = :prijs, img = :foto WHERE id = :id";
    $stmt = $con->prepare($update);
    $stmt->bindParam(':naam', $NAME);
    $stmt->bindParam(':prijs', $PRIJS);
    $stmt->bindParam(':foto', $IMGUP);
    $stmt->bindParam(':id', $ID);

    if ($stmt->execute() && move_uploaded_file($IMGLOCATION, 'C:\xampp\htdocs\Getaways\reizenimg/'.$IMGNAAM)) {
        echo "<script>alert('succesvolle update'); window.location.href='aanpassen.php';</script>";
    } else {
        echo"<script type='text/javascript'>alert('update is misgelukt');</script>";
    }
}
?>




<?php
include('config.php');

$ID = $_GET['id'];
$up = $con->prepare("SELECT * FROM reizen WHERE id=:id");
$up->bindParam(':id', $ID, PDO::PARAM_INT);
$up->execute();

$data = $up->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/toevoegen.css">
    <title>aanpassen</title>
</head>
<body>
    <div class="title">
        <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
    </div>
    <div class="terug-admin">
        <a href="aanpassen.php">Terug naar aanpassen panel</a>
    </div>

    <div class="form-toevoegen">
          <form action="" method="post" enctype="multipart/form-data"> 
            <input type="text" name="id" placeholder="Bestemming"  value="<?php echo $data['id'];?>"> 
            <input type="text" name="naam" placeholder="Bestemming"  value="<?php echo $data['naam'];?>" required>
            <input type="text" name="prijs" placeholder="Prijs"  value="<?php echo $data['prijs'];?>" required>
            <label for="Foto">Foto</label>
            <input type="file" name="foto" id="foto" value="<?php echo $data['img'];?>" required>
            <button name="aanpassen">Aanpassen</button>
          </form>
    </div>
    
</body>
</html>
