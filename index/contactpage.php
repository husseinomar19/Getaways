<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="../CSS/test.css" rel="stylesheet" type="text/css" />
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
    <div class="container">
        <div class="forum-box">
            <h1>Contact Us</h1>
            <form>
                <div class="form-group">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" placeholder="Uw naam">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Uw email">
                </div>
                <div class="form-group">
                    <label for="subject">Onderwerp:</label>
                    <input type="text" id="subject" name="subject" placeholder="Onderwerp">
                </div>
                <div class="form-group">
                    <label for="message">Bericht:</label>
                    <textarea id="message" name="message" placeholder="Bericht"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Verzenden</button>
                </div>
            </form>
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