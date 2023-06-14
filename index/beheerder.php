<?php
session_start();
?>
<?php

if ($_SESSION['admin_logged_in'] == true) {

} else {
    header('location: admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/beheerder.css">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['out'])) {
        $_SESSION['admin_logged_in'] = false;
        header('Location: index.php');
        exit();
    }
    ?>

    <div class="uitloggenform">
        <form method="post">
            <button type="submit" name="out">Uitloggen</button>
        </form>
    </div>
    <div class="title">
        <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
    </div>
    <div class="beheerder">
        <div class="mogelijkheden">
            <a href="toevoegen.php">Reis Toevoegen</a>
        </div>
        <div class="mogelijkheden">
            <a href="aanpassen.php">Reis aanpassen</a>
        </div>
        <div class="mogelijkheden">
            <a href="verwijderen.php">Reis verwijderen</a>
        </div>
        <div class="mogelijkheden">
            <a href="berichten.php">Berichten</a>
        </div>
    </div>
    <section class="boeken-title">
        <h2>Geboekte reizen</h2>
    </section>

    <section class="geboekt-reizen">
        <div class="geboekt-main">



            <?php
            include('config.php');

            $vragen = $con->query("SELECT reizen.naam, reizen.prijs, geboekt.datum, geboekt.personen, geboekt.id, userstabel.naam AS gebruiker, userstabel.email
FROM reizen
INNER JOIN geboekt ON reizen.id = geboekt.reizen_id
INNER JOIN userstabel ON geboekt.user_id = userstabel.id");
            while ($row = $vragen->fetch(PDO::FETCH_ASSOC)) {
                echo "
    <div class='geboekt'>
          <h3>$row[id]</h3>
          <h3>$row[naam]</h3>
          <h3>$row[prijs]</h3>
          <h3>$row[gebruiker]</h3>
          <h3>$row[email]</h3>
          <h3>$row[datum]</h3>
          <h3>$row[personen]</h3>
          <a href='geboektverwijderen.php? boekid= $row[id]'>Verwijderen</a>
        </div>
    ";
            }

            ?>




        </div>

    </section>


</body>

</html>