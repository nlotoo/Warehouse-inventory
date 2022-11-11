<?php 


$dbname   = 'db-php-task';
$username = 'root';
$password = '';


$pdo = new PDO("mysql:host=localhost;dbname=$dbname", $username,  $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$id =$_POST['id'] ?? null;


if(!$id){
    header('Location:index.php');
    exit;
}


$statemnet = $pdo -> prepare('DELETE FROM product WHERE id_product=:id');


$statemnet->bindValue(':id', $id);
$statemnet->execute();

header('Location:index.php');

