<?php
include('config.php');
$ID = $_GET['boekid'];
$stmt = $con->prepare("DELETE FROM geboekt WHERE id=:id");
$stmt->bindParam(":id", $ID);
$stmt->execute();

header('location: beheerder.php');

?>