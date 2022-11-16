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
            price DECIMAL(5,2),
            weight DECIMAL(5,3),
            date DATETIME
        );";

    if ($con->query($sql) !== true) {
        echo "Error creating table: " . $con->error;
    }


        if ($product == '' || $price == '' || $weight == '' ){
            echo 'all fields are required';
            return;
        }



        $sql = "INSERT INTO product (name, price, weight, date) VALUES ('$product','$price','$weight','$date')";
    if ($con->query($sql) !== true) {
        echo "Error inserting into table: " . $con->error;
    }else{
        echo 'You create one record';
    }
}
?>