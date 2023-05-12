<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/toevoegen.css">
    <title>Toevoegen</title>
</head>
<body>
    <div class="title">
        <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
    </div>
    <div class="terug-admin">
        <a href="beheerder.php">Terug naar Beheerder panel</a>
    </div>

    <div class="form-toevoegen">
          <form action="" method="post">
            <label for="naam">Bestemming</label>
            <input type="text" name="naam" placeholder="Bestemming">
            <label for="Prijs">Prijs</label>
            <input type="text" name="prijs" placeholder="Prijs">
            <label for="Foto">Foto</label>
            <input type="file" name="foto" id="foto">
            <button name="toevoegen">Toevoegen</button>

          </form>
    </div>
    
</body>
</html>