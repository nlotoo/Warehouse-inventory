<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/style-table.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Warehouse app</title>
</head>


<body>

    <div class="navigate">
        <a class="create-btn" href="form.php"> Create new record</a>
    </div>

    <div class="table-container">
        <form class="form" action="" method="GET">
            <select name="sort_condition" class="form-control">
                <option value="a-z" <?php if (isset($_GET['sort_condition']) && $_GET['sort_condition'] == "a-z") {
                    echo
                        "selected";
                } ?>> A-Z(Ascending Order)</option>
                <option value="z-a" <?php if (isset($_GET['sort_condition']) && $_GET['sort_condition'] == "z-a") {
                    echo
                        "selected";
                } ?>> Z-A(Descending Order)</option>
                <option value="byDateASC" <?php if (
                    isset($_GET['sort_condition']) &&
                    $_GET['sort_condition'] == "byDateASC"
                ) {
                    echo "selected";
                } ?>> A-Z(Ascending Order by Date)
                </option>
                <option value="byDateDESC" <?php if (
                    isset($_GET['sort_condition']) &&
                    $_GET['sort_condition'] == "byDateDESC"
                ) {
                    echo "selected";
                } ?>> Z-A(Descending Order by Date)
                </option>
            </select>
            <button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
                Sort
            </button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name of product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>


            <tbody>
                <?php
                include 'sorting_table.php';
                ?>
               
            </tbody>
        </table>
    </div>
</body>

</html>