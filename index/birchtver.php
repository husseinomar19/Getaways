<?php
include('config.php');
$ID = $_GET['id'];
$stmt = $con->prepare("DELETE FROM contact_form WHERE id=:id");
$stmt->bindParam(":id", $ID);
$stmt->execute();

header('location: berichten.php');

?>