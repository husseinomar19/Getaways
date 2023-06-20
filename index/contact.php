<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="../CSS/kaarten.css" rel="stylesheet" type="text/css" />
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
    <link rel="stylesheet" href="../CSS/review.css">

    <title> Contact</title>
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
    <section>
        <article>
            <section class="card">
                <div class="text-content">
                    <h3>Contact Ons</h3>
                    <p>Contact ons voor vragen, opmerkingen en ondersteuning. We staan klaar om je te helpen en jouw
                        feedback te ontvangen. Neem contact met ons op en we reageren zo snel mogelijk!</p>
                    <a href="contactpage.php">Contact Us</a>
                </div>
                <div class="visual">
                    <img src="../IMG/contact-foto.webp" alt="" />
                </div>
            </section>
        </article>
        <article>
            <section class="card">
                <div class="text-content">
                    <h3>Laat een review achter!</h3>
                    <p>"Laat een review achter! Jouw mening is belangrijk voor ons. Deel jouw ervaring en help ons om
                        onze
                        producten/diensten te verbeteren. Laat een review achter en we waarderen jouw feedback enorm!"
                    </p>
                    <form>
                        <div class="rating">
                            <input type='radio' hidden name='rate' id='rating_5' data-idx='0'>
                            <label for='rating_5'></label>

                            <input type='radio' hidden name='rate' id='rating_4' data-idx='1'>
                            <label for='rating_4'></label>

                            <input type='radio' hidden name='rate' id='rating_3' data-idx='2'>
                            <label for='rating_3'></label>

                            <input type='radio' hidden name='rate' id='rating_2' data-idx='3'>
                            <label for='rating_2'></label>

                            <input type='radio' hidden name='rate' id='rating_1' data-idx='4'>
                            <label for='rating_1'></label>
                        </div>
                    </form>
                </div>
                <div class="visual">
                    <img src="../IMG/review-foto.jpeg" alt="foto" />
                </div>
            </section>
        </article>
    </section>
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