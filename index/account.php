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
    <link rel="stylesheet" href="../CSS/registreren.css">
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
                <li><a href="index.php#boeken">Boeken</a></li>
            </ul>
        </nav>
    </header> 

<section class="account-user">
<form class="form-account" method="post">
            <i class="fa-solid fa-user"></i>
            <h2>Registreren</h2>
         <input class="in-put" type="text" name="naam" id="naam" placeholder="Naam" required>
         <input class="in-put" type="text" name="anaam" id="anaam" placeholder="Achter naam" required>
         <label for="gebootedatum"></label>
         <input class="in-put" type="date" name="gebootedatum" placeholder="Geboortedatum" required>
         <input class="in-put" type="email" name="email" id="email" placeholder="Email" required>
         <input class="in-put" type="password" name="wachtwoord" id="wachtwoord" placeholder="wachtwoord" required>
         <button id="registreren" name="registreren">Registreren</button>
    </form>
</section>