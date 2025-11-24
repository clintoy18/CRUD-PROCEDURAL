<?php

include "Database.php";
$sql = "SELECT * FROM `categories`";
$result = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: flex; justify-content:center;">


<div >
    <h1>CATEGORIES MANAGEMENT</h1>
    <a href="Products.php">Product</a>
    <a href="Food.php">Food</a>
    <table border = "1" style="border-collapse : collapse;">
        <tr>
            <th style="padding: 30px;">ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>CREATED AT</th>
            <th>UPDATED AT</th>
            <th>ACTION</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td style="padding: 10px;"><?=$row['id'] ?></td>
                <td><?=$row['name'] ?></td>
                <td><?=$row['description'] ?></td>
                <td><?=$row['created_at'] ?></td>
                <td><?=$row['updated_at'] ?></td>
                <th><a href="Delete.php?id=<?=$row['id'] ?>">Delete</a></th>

            </tr>
          <?php endwhile;?>  
        
    </table>
</div>
    
</body>
</html>