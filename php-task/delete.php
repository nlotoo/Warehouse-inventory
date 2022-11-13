<?php
$id = $_POST['id'] ?? null;

if (!$id) {
    header('Location:index.php');
    exit;
}

$query = "DELETE FROM product WHERE id_product='$id'";
$con = mysqli_connect("localhost", "root", "", "db-php-task");
$query_run = mysqli_query($con, $query);


header('Location:index.php');
