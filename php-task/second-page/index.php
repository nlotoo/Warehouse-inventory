<?php
$dbname   = 'db-php-task';
$username = 'root';
$password = '';
try {
    $pdo = new \PDO("mysql:host=localhost;dbname=$dbname", $username,  $password);
} catch (Exception $e) {
    print $e->getMessage() . "\n";
}

$statement = $pdo->prepare('SELECT * FROM product ORDER BY 	name DESC');
$statement->execute();

$products = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($products);
// echo '</pre>';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>


<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name of product</th>
                <th scope="col">Price</th>
                <th scope="col">Weight</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $i => $p) : ?>

                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td><?php echo $p['name']; ?></td>
                    <td><?php echo $p['price']; ?> lv.</td>
                    <td><?php echo $p['weight']; ?> kg.</td>
                    <td><?php echo $p['date']; ?></td>
                    <td>
                        <?php echo $p['id_product'] ?>
                        <form method="post" action="delete.php">
                            <input type="hidden" name="id" value="<?php echo $p['id_product'] ?>">
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>