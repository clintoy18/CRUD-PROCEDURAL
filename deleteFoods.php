<?php
include "Database.php";

$id = $_GET['id'];
$sql = "DELETE FROM food WHERE id=$id";
mysqli_query($conn, $sql);

header("Location: Food.php");
?>
