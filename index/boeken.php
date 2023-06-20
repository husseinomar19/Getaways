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
    <link rel="stylesheet" href="../CSS/boeken.css">
    <title>Getaways-boeken</title>
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

    <section class="form">
        <h2>Unieke vakantie, weg van de massa</h2>
    </section> 

    
    <section class="boeken-tit">
        <h2>Gevonden resultaten</h2>
    </section>

    <section class="boeken">  
       <div class="main-boeken">

       <?php
include('config.php');

if(isset($_GET['zoeken'])){
    $zoekterm = "%".$_GET['bestemming']."%";

    $query = $con->prepare("SELECT * FROM reizen WHERE naam LIKE :zoekterm");
    $query->bindParam(":zoekterm", $zoekterm); 
    $query->execute();

    if($query->rowCount() > 0){
        while($resultaat = $query->fetch(PDO::FETCH_ASSOC)){
            echo "
            <div class='boeken-blok1'>   
                <div class='boeken-img'>
                    <img src='../reizenimg/".$resultaat['img']."' alt='boeken'>
                </div>
                <div class='boeken-info'>
                     <h2 class='tit-boeken'>".$resultaat['naam']."</h2>
                     <h3 class='boeken-prijs'>".$resultaat['prijs']."</h3>
                     <i class='fa-solid fa-heart'></i>
                     <ul>
                      <li>Hotel</li>
                      <li>Ontbijt</li>
                      <li>Vliegticket</li>
                     </ul>
                     <a href='boek.php?id={$resultaat['id']}'>Boeken</a>              
                </div>
            </div>
            ";
        }
    } else {
        echo "<script>alert('Geen resultaten gevonden'); window.location.href='index.php';</script>";
        
    }
}
?>


       
         
       </div>
    </section>
    <script src="../index/main.js"></script>
</body>
</html>