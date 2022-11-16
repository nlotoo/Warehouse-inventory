<?php
include 'create_record.php'
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
            <input class="form-container-input" id="name" type="text" name="product-name" placeholder="name of product">
            <label>Weight</label>
            <input class="form-container-input" id="weight" type="text" name="weight" placeholder="value in kg.">
            <label>Price</label>
            <input class="form-container-input" id="price" type="text" name="price" placeholder="price">

   
            <input type="submit" name="btn-act" class="add-button" value="Submit">
        </form>
    </div>






</body>

</html>