<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $product = $_POST["product-name"];
    $price = $_POST["price"];
    $weight = $_POST["weight"];
    $date = date('Y-m-d H:i:s');

    $sql = "CREATE DATABASE IF NOT EXISTS db_php_task;";
    $con = mysqli_connect("localhost", "root", "");


    if ($con->query($sql) !== true) {
        echo "Error creating database: " . $con->error;
    }
    $con = mysqli_connect("localhost", "root", "", "db_php_task");

    $sql = "CREATE TABLE IF NOT EXISTS product(
            id_product INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(20),
            price DECIMAL,
            weight DECIMAL,
            date DATETIME
        );";

    if ($con->query($sql) !== true) {
        echo "Error creating table: " . $con->error;
    }

    $sql = "INSERT INTO product (name, price, weight, date) VALUES ('$product','$price','$weight','$date')";
    if ($con->query($sql) !== true) {
        echo "Error inserting into table: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style-create.css">
    <title>Warehouse app</title>
</head>

<body>
    <div class="div-form-container">

        <div class="btn-container">
            <a class="create-btn" href="index.php"> Go to table </a>
        </div>


        <form action="" method="post" class="form-container">
            <label>Name</label>
            <input id="name" type="text" name="product-name" placeholder="name of product">
            <label>Weight</label>
            <input id="weight" type="text" name="weight" placeholder="weight">
            <label>Price</label>
            <input id="price" type="text" name="price" placeholder="price">


            <input type="submit" name="btn-act" class="add-button" value="Submit">
        </form>
    </div>






</body>

</html>