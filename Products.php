<?php
include "Database.php";
$sql = "SELECT * FROM `products`";
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
    <h1>PRODUCTS MANAGEMENT</h1>    

    <a href="createProducts.php">Create Product</a>
    <a href="Food.php">Food</a>
    <a href="category.php">Category</a>
    <table border = "1" style="border-collapse : collapse;">
        <tr>
            <th style="padding: 30px;">ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>ACTION</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td style="padding: 10px;"><?=$row['id'] ?></td>
                <td><?=$row['name'] ?></td>
                <td><?=$row['price'] ?></td>
                <td><?=$row['quantity'] ?></td>
                <th><a href="Delete.php?id=<?=$row['id'] ?>">Delete</a></th>

            </tr>
          <?php endwhile;?>  
        
    </table>
</div>
    
</body>
</html>