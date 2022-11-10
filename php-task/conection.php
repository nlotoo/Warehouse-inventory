<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "db-php-task";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$mysqltime = date('Y-m-d');
$sql = "INSERT INTO product (name, weight, price, date)
VALUES ('masa2', 10, 10.50, $mysqltime)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
// echo "Connected successfully";
