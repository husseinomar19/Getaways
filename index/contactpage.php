<?php
session_start();
include('config.php');
if(isset($_POST['send'])){
    $naam = $_POST['name'];
    $email = $_POST['email'];
    $sms = $_POST['message'];
    $stem = $con->prepare(" INSERT INTO contact_form (name, email, message) VALUE (:naam, :email, :sms)");
    $stem->bindParam(':naam', $naam);
    $stem->bindParam(':email', $email);
    $stem->bindParam(':sms', $sms);

    if($stem->execute()){
        echo"<script>alert('Bedankt voor u message')</script>";
    }
    else{
        echo"<script>alert('Er is iets fout gegaan')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Pacifico&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="../CSS/home.css">
    <title>contactformulier</title>
</head>

<body>
    <header>
        <nav>
            <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="overons.php">Over Ons</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="index.php#boeken">Boeken</a></li>
            </ul>
        </nav>
    </header>
    <span class="animationspan3"></span>
    <span class="animationspan4"></span>
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>CONTACT</span>
                            <span>ONS</span>
                        </div>
                    </div>
                    <div class="screen-body-item">
                        <div class="app-form">
                            <form method="POST">
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="NAAM" name="name">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="EMAIL" name="email">
                                </div>
                                <div class="app-form-group message">
                                    <textarea class="app-form-control" name="message" id="" cols="30" rows="5" placeholder="BERICHT"></textarea>
                                </div>
                                <div class="app-form-group buttons">
                                    <button class="app-form-button">CANCEL</button>
                                    <button type="submit" class="app-form-button" name="send">VERSTUREN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <ul>
            <li><a href="">Voorwaarden</a></li>
            <li><a href="">Cookies</a></li>
            <li><a href="">Privacy policy</a></li>
            <li><a href="">Sitemap</a></li>
        </ul>
        <ul>
            <li><i class="fa-brands fa-facebook"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-twitter"></i></li>
        </ul>
    </footer>
</body>

</html>