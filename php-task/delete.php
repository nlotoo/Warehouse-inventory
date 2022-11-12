<?php
// $dbname   = 'db-php-task';
// $username = 'root';
// $password = '';


// $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $username,  $password);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $id = $_POST['id'] ?? null;


// if (!$id) {
//     header('Location:index.php');
//     exit;
// }

echo $id;


$query = "DELETE FROM product WHERE id_product='$id'";
$con = mysqli_connect("localhost", "root", "", "db-php-task");
$query_run = mysqli_query($con, $query);



// $statemnet = $pdo -> prepare('DELETE FROM product WHERE id_product=:id');


// $statemnet->bindValue(':id', $id);
// $statemnet->execute();

header('Location:index.php');
