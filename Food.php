<?php

include "Database.php";
$sql = "SELECT * FROM `food`";
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
    <h1>FOODS MANAGEMENT</h1>
    <a href="createFoods.php">Create a Food</a>
    <a href="Products.php">Product</a>
    <a href="category.php">Category</a>
    <table border = "1" style="border-collapse : collapse;">
        <tr>
            <th style="padding: 30px;">ID</th>
            <th>FOOD NAME</th>
            <th>DRINKS</th>
            <th>DESSERT</th>
            <th>ACTION</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td style="padding: 10px;"><?=$row['id'] ?></td>
                <td><?=$row['foodname'] ?></td>
                <td><?=$row['drinks'] ?></td>
                <td><?=$row['dessert'] ?></td>
                <th><a href="Delete.php?id=<?=$row['id'] ?>">Delete</a></th>

            </tr>
          <?php endwhile;?>  
        
    </table>
</div>
    
</body>
</html>