<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/boek.css">
    <title>Getaways</title>
</head>
<body>
    <header>
        <nav>
            <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="overons.php">Over Ons</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header> 
    <section class="boek-img-header">
            <h2>Unieke vakantie, weg van de massa</h2>       
    </section>
    <?php
include('config.php');
session_start();
$userinfoemail = $_SESSION['username'];
$ID = $_GET['id'];
$up = $con->prepare("SELECT * FROM reizen WHERE id=:id");
$upuser = $con->prepare("SELECT * FROM userstabel WHERE id = :id");
$upuser->execute(['id' => $userinfoemail]);
$up->bindParam(':id', $ID, PDO::PARAM_INT);
$up->execute();
$upuser->execute();
$userinfo = $upuser->fetch(PDO::FETCH_ASSOC);
$data = $up->fetch(PDO::FETCH_ASSOC);
?>
    <div class="boeken-form">
        <form action="" method="post">
            <label for="id">Reis nummer</label>
            <input type="text" name="idreis" value="<?php echo $data['id'];?>">
            <input type="text" name="bestemming" value="<?php echo $data['naam'];?>" required>
            <input type="text" name="prijs" value="<?php echo $data['prijs'];?>" required>
            <input type="date" name="datum" placeholder="Kies datum" required>
            <span id="boeken-span">Persoons gegevens</span>
            <input type="text" name="iduser" placeholder="ID" value="<?php echo $userinfo['id'];?>" required>
            <input type="text" name="naam" placeholder="Naam" value="<?php echo $userinfo['naam'];?>" required>
            <input type="email" name="email" placeholder="E-mail" value="<?php echo $userinfo['email'];?>" required>
            <input type="text" name="personen" placeholder="Personen" required>
            <button name="boeken">Boeken</button>
        </form>
    </div>
    <?php
    include('config.php');
    
    if(isset($_POST['boeken'])){
        if(empty($_POST['naam']) && empty($_POST['email'])&& empty($_POST['personen']))
    {
        echo"<script>alert('Vul uw gegevens in ')</script>";
    }
      else{
        $idreis = $_POST['idreis'];
        $iduser = $_POST['iduser'];
        $datum = $_POST['datum'];
        $personen = $_POST['personen'];
        
        $stmt = $con->prepare("INSERT INTO geboekt (reizen_id, user_id, datum, personen) VALUES (:idreis, :iduser, :datum, :personen)");
        $stmt->bindParam(':idreis', $idreis);
        $stmt->bindParam(':iduser', $iduser);
        $stmt->bindParam(':datum',  $datum);
        $stmt->bindParam(':personen',  $personen);
        $success = $stmt->execute();

       
        if ($success) {
            echo "<script>alert('Bedankt voor het boeken u ontvangd een E-mail binnen twee werkdagen'); window.location.href='index.php';</script>";
        } else {
            echo '<script>alert("Insertion failed.");</script>';
        }
      }
    


    }
    
    ?>

</body>
</html>