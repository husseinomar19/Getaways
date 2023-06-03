<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Mijn gegevens</title>
</head>
<body>
<?php
session_start();


if(isset($_POST['logout'])) {
    $_SESSION['logged_in'] = false;
    header('Location: index.php');
    exit();
}
?>
<header>
        <nav>
            <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="overons.php">Over Ons</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="index.php#boeken">Boeken</a></li>
            </ul>
            <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            echo '<form method="post" class="logout-form">
                    <button id="logout" type="submit" name="logout">Uitloggen</button>
                  </form>';
        }
        ?>
        </nav>
    </header>
<section class="user-gegevens">
        <div class="user-info">
        <?php

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {

    include('config.php');


    $userEmailId = $_SESSION['username'];
    $stmt = $con->prepare('SELECT * FROM userstabel WHERE id = :id');
    $stmt->execute(['id' => $userEmailId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($user) {
        echo '<h1>User Account</h1>';
        echo '<h3>Naam: '.$user['naam'].'</h3>';
        echo '<h3>Achternaam: ' . $user['anaam'] . '</h3>';
        echo '<h3>Geboortedatum: ' . $user['geboorte'] . '</h3>';
        echo '<h3>Email: ' . $user['email'] . '</h3>';
        echo '<h3>wachtwoord: **********</3>';
        echo'';
        echo '<form class="form-ver" action="" method="POST">';
        echo '<button type="submit" name="delete">Account verwijderen</button>';
        echo '</form>';
    } else {
        echo ' Kan Gebruiker account niet vinden.';
    }
} else {
    echo 'Gebruiker in nog niet ingelogd.';
}
?>
        </div>
        <div class="uersboeken">
            <h2>Mijn Reizen!</h2>
            <?php
            $usernaamId = $_SESSION['username'];
            $stmt = $con->prepare('SELECT reizen.naam, reizen.prijs, geboekt.datum FROM reizen INNER JOIN geboekt ON reizen.id= geboekt.reizen_id WHERE geboekt.user_id = :id');
            $stmt->execute(['id' => $usernaamId]);
            while($usergeboekt = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo"<div class='usergeboekt-info'>
                         <h3>$usergeboekt[naam]</h3>
                         <h3>$usergeboekt[prijs]</h3>
                         <h3>$usergeboekt[datum]</h3>
                         <a href=''>Boeken annuleren</a>
                   </div>";
                

            }
            ?>
        </div>
        

</section>

    


  
</body>
</html>
