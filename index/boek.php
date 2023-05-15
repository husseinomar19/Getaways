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
                <li><a href="over.php">Over Ons</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header> 
    <section class="boek-img-header">
            <h2>Unieke vakantie, weg van de massa</h2>       
    </section>
    <?php
include('config.php');

$ID = $_GET['id'];
$up = $con->prepare("SELECT * FROM reizen WHERE id=:id");
$up->bindParam(':id', $ID, PDO::PARAM_INT);
$up->execute();

$data = $up->fetch(PDO::FETCH_ASSOC);
?>
    <div class="boeken-form">
        <form action="" method="post">
            <label for="id">Reis nummer</label>
            <input type="text" name="id" value="<?php echo $data['id'];?>">
            <label for="bestemming"><i class="fa-solid fa-location-dot"></i></label> 
            <input type="text" name="bestemming" value="<?php echo $data['naam'];?>">
            <label for="prijs"><i class="fa-solid fa-euro-sign"></i></label>
            <input type="text" name="prijs" value="<?php echo $data['prijs'];?>">
            <input type="text" name="naam" placeholder="Naam">
            <input type="email" name="email" placeholder="E-mail">
            <input type="date" name="datum" placeholder="Kies datum">
            <input type="text" placeholder="Personen">
            <button name="Boeken">Boeken</button>
        </form>
    </div>