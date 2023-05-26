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
    session_destroy();
    header('Location: index.php');
    exit();
}
?>
<header>
        <nav>
            <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="over.php">Over Ons</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="index.php#boeken">Boeken</a></li>
            </ul>
            <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            // User is logged in, display logout button
            echo '<form method="post" class="logout-form">
                    <button id="logout" type="submit" name="logout">Uitloggen</button>
                  </form>';
        }
        ?>
        </nav>
    </header>



    
</body>
</html>