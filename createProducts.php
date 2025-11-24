<?php
include "Database.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO products(name,price,quantity)
    VALUES('$name','$price','$quantity')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Product added!";
    }else{
        echo "Error adding product";
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
    <h1>Create Product</h1>
    <a href="Products.php">Back to products</a>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter product name" required>

        <label for="price">Price</label>
        <input type="number" name="price" placeholder="Enter product price" required>

        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" placeholder="Enter product quantity" required>

        <button type="submit">Add</button>
    </form>
    
</body>
</html>