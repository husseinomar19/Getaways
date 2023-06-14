<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/berichten.css">
    <title>aanpassen</title>
</head>
<body>
    <div class="title">
        <a id="logo" href="index.php"> <span id="logospan">G</span>eta<span id="logospan">W</span>ays.nl</a>
    </div>
    <div class="terug-admin">
        <a href="beheerder.php">Terug naar Beheerder panel</a>
    </div>
    <?php
// Connect to database
$con = mysqli_connect("localhost", "root", "root", "vakantie");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Query database
$result = mysqli_query($con, "SELECT * FROM contact_form");

// Display results
while ($row = mysqli_fetch_array($result)) {
    echo $row['name'] . "<br>";
    echo $row['email'] . "<br>";
    echo $row['message'] . "<br>";
}

// Close connection
mysqli_close($con);
?>
    
    
</body>
</html>