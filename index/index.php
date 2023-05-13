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
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/inlog.css">
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
            <div class="inloggenptn">
            <i class="fa-solid fa-user"></i>
            <button id="inlog">Inloggen</button>
            </div>
        </nav>
        <form class="admininlog" id="admininlog" action="" method="post">
        <i class="fa-solid fa-user"></i>
        <h2>Inloggen</h2>
        <label for="Email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
        <label for="password">wachtwoord</label>
        <input type="password" name="wachtwoord" id="wachtwoord" placeholder="wachtwoord">
        <button name="inloggen">Inloggen</button>
        <ul>
            <li><a href="account.php">Registreren</a></li>
            <li><a href="#">Wachtwoord vergeten</a></li>
           </ul>
        </form>
    </header> 
    <section class="form">
        <h2>Unieke vakantie, weg van de massa</h2>
         <form action="boeken.php" method="GET">
           <label for="bestemming"><i class="fa-solid fa-location-dot"></i></label> 
           <input type="text" name="bestemming" placeholder="Bestemming">
           <label for="ver"><i class="fa-solid fa-calendar-days"></i></label>
           <input type="text" name="ver" placeholder="Vertrekdatum">
           <label for="kamer"><i class="fa-solid fa-person"></i></label>
           <input type="text" name="kamer" placeholder="Personen">
           <label for="lucht"><i class="fa-solid fa-plane"></i></label>
           <input type="text" name="lucht" placeholder="Luchthaven">
           <button type="submit" name="zoeken">Zoeken</button>
         </form>
    </section>  

    <section class="ontdeken">
        <div class="ontdek">
        <img src="../IMG/ontdek.jpg" alt="ontdeken">
         <h2 class="ontdektit">Verleidelijke last minutes</h2>
         <button class="ptn-ontdek">Ontdek</button>
        </div>
        <div class="ontdek1">
        <img src="../IMG/ontdek1.jpg" alt="ontdeken">
        <h2 class="ontdektit">Rustige zomervakantie</h2>
        <button class="ptn-ontdek">Ontdek</button>
        </div>
        <div class="ontdek2">
        <img src="../IMG/ontdek2.jpg" alt="ontdeken">
        <h2 class="ontdektit">Beste prijzen</h2>
         <button class="ptn-ontdek">Ontdek</button>
        </div>
    </section>

    <section class="iconmain">
        <div class="icon">
           <i class="fa-solid fa-plane"></i>
           <h2>Eenvoedig Boeken</h2>
        </div>
        <div class="icon">
           <i class="fa-solid fa-thumbs-up"></i>
           <h2>Hand Picked</h2>
        </div>
        <div class="icon">
        <i class="fa-solid fa-money-check-dollar"></i>
        <h2>Financiële Zekerheid</h2>
        </div>
    </section>

    <section class="inspiratie">
      <div class="insp">
<img src="../IMG/inspiratie4jpg.jpg" alt="inspiratie">
<h2 class="in-tit">Op vakantie met het gezin</h2>
<button class="in-ptn">Ontdek</button>
      </div>
      <div class="insp">
<img src="../IMG/inspiratie4jpg.jpg" alt="inspiratie">
<h2 class="in-tit">Op vakantie met het gezin</h2>
<button class="in-ptn">Ontdek</button>
      </div>
      <div class="insp">
<img src="../IMG/inspiratie4jpg.jpg" alt="inspiratie">
<h2 class="in-tit">Op vakantie met het gezin</h2>
<button class="in-ptn">Ontdek</button>
      </div>
      <div class="insp">
<img src="../IMG/inspiratie4jpg.jpg" alt="inspiratie">
<h2 class="in-tit">Op vakantie met het gezin</h2>
<button class="in-ptn">Ontdek</button>
      </div>
    </section>

    <section class="boeken-tit">
        <h2>Top favoriete ontdekkingen</h2>
    </section>

    <section class="boeken">  
     <div class="main-boeken">

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
         <a href=''>Boeken</a>               
    </div>
</div>

    ";
}

?>
       


        

          
     </div>
    </section>

    <section class="footerinmg">
        <img src="../IMG/footer2.jpg" alt="footer">
        <h2>Unieke vakantie weg van de massa</h2>
    </section>
    <footer>
        <ul>
            <li><a href="">Voorwaarden</a></li>
            <li><a href="">Zekerheden</a></li>
            <li><a href="">Cookies</a></li>
            <li><a href="">Privacy policy</a></li>
            <li><a href="">Sitemap</a></li>
        </ul>
        <ul>
            <li><i class="fa-brands fa-facebook"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-twitter"></i></li>
        </ul>
        <a id="adminpage" href="admin.php">Als admin inloggen</a>
    </footer>

    <script src="../index/main.js"></script>
</body>
</html>