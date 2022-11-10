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
    <?php
    include './conection.php'

    ?>

    <!-- 1/ Страница/форма, чрез която се добавя продукт (име, тегло, стойност в лв., дата на добавяне)
 -->


    <form action="d-colector.php" method="post" class="form-container">
        <label>Name</label>
        <input id="name" type="text" name="product-name" placeholder="name of product">
        <label>Weight</label>
        <input id="weight" type="text" name="weight" placeholder="weight">
        <label>Price</label>
        <input id="price" type="text" name="price" placeholder="price">
        <label>Date</label>
        <input id="date" type="date" name="date">

        <input type="submit" name="btn-act" class="add-button" value="Submit">
    </form>



    <!-- 2/ Страница, която показва всички продукти със странициране и филтри.
     Филтрите да бъдат по име и дата на добавяне. Да има възможност за изтриване на продуктите.
 -->
    <div class="products-container">
        <h1>Products</h1>
        <ul>
            <li>product1</li>
        </ul>

    </div>




</body>

</html>