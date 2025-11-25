<?php
include "Database.php";

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id=$id";
mysqli_query($conn, $sql);

header("Location: Products.php");
?>
