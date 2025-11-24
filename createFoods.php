<?php
include "Database.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $foodname = $_POST['foodname'];
    $drinks = $_POST['drinks'];
    $dessert = $_POST['dessert'];

    $sql = "INSERT INTO food(foodname,drinks,dessert)
    VALUES('$foodname','$drinks','$dessert')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "food added!";
    }else{
        echo "Error adding food";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create food</h1>
    <a href="Food.php">Back to foods</a>
    <form action="" method="post">
        <label for="foodname">Food name</label>
        <input type="text" name="foodname" placeholder="Enter food name" required>

        <label for="drinks">drinks</label>
        <input type="text" name="drinks" placeholder="Enter food drinks" required>

        <label for="dessert">dessert</label>
        <input type="text" name="dessert" placeholder="Enter food dessert" required>

        <button type="submit">Add</button>
    </form>
    
</body>
</html>