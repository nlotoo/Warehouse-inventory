<?php

$dbname   = 'db-php-task';
$username = 'root';
$password = '';


$pdo = new PDO("mysql:host=localhost;dbname=$dbname", $username,  $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


echo $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $product = $_POST["product-name"];
    $price = $_POST["price"];
    $weight = $_POST["weight"];
    $date = date('Y-m-d H:i:s');

    $statement = $pdo->prepare("INSERT INTO product (name, price,weight, date)
                                VALUES (:name,:price, :weight, :date)");
    $statement->bindValue(':name', $product);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':weight', $weight);
    $statement->bindValue(':date', $date);
    $statement->execute();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Warehouse</title>
</head>

<body>


    <!-- 1/ Страница/форма, чрез която се добавя продукт (име, тегло, стойност в лв., дата на добавяне)
 -->


    <form action="" method="post" class="form-container">
        <label>Name</label>
        <input id="name" type="text" name="product-name" placeholder="name of product">
        <label>Weight</label>
        <input id="weight" type="text" name="weight" placeholder="weight">
        <label>Price</label>
        <input id="price" type="text" name="price" placeholder="price">


        <input type="submit" name="btn-act" class="add-button" value="Submit">
    </form>






</body>

</html>