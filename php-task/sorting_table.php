<?php
$con = mysqli_connect("localhost", "root", "", "db_php_task");

if (!$con) {
    header("Location: form.php");

}
$query = "SELECT * FROM product";
$query_run = mysqli_query($con, $query);

if (!$query_run) {
    header("Location:form.php");
}

$array = array();

while ($row = mysqli_fetch_array($query_run)) {

    $array[] = $row;
}


class Sorting
{
    public $sort_condition;


    function set_sort_condition($sort_condition)
    {
        $this->sort_condition = $sort_condition;

    }

    function get_sort_condition()
    {
        return $this->sort_condition;
    }
    public function build_sorter_name_A($key)
    {

        return function ($a, $b) use ($key) {
            return strnatcmp($a[$key], $b[$key]);
        };

    }
    public function build_sorter_name_D($key)
    {
        return function ($a, $b) use ($key) {
            return strnatcmp($b[$key], $a[$key]);
        };
    }

    function build_sorter_date_D($key)
    {
        return function ($a, $b) use ($key) {
            return strnatcmp($b[$key], $a[$key]);
        };
    }

    function build_sorter_date_A($key)
    {
        return function ($a, $b) use ($key) {
            return strnatcmp($a[$key], $b[$key]);
        };
    }


}

$type_of_sort = new Sorting();


if (isset($_GET['sort_condition'])) {
    if ($_GET['sort_condition'] == "a-z") {


        usort($array, $type_of_sort->build_sorter_name_A('name'));

    } elseif ($_GET['sort_condition'] == "z-a") {


        usort($array, $type_of_sort->build_sorter_name_D('name'));
    } elseif ($_GET['sort_condition'] == "byDateASC") {


        usort($array, $type_of_sort->build_sorter_date_A('date'));
    } elseif ($_GET['sort_condition'] == "byDateDESC") {


        usort($array, $type_of_sort->build_sorter_date_D('date'));
    } elseif ($_GET['sort_condition'] == "") {


        usort($array, $type_of_sort->build_sorter_name_A('name'));
    }
}

if (sizeof($array) > 0) {


    foreach ($array as $row_in_DB) {

?>
<tr>

    <td>
        <?php echo $row_in_DB['name']; ?>
    </td>
    <td>
        <?php echo $row_in_DB['price']; ?>
        <span>лв.</span>
    </td>
    <td>
        <?php echo $row_in_DB['weight']; ?>
        <span>kg.</span>
    </td>
    <td>
        <?php echo $row_in_DB['date']; ?>
    </td>
    <td>
        <form method="post" action="delete.php">
            <input type="hidden" name="id" value="<?php echo $row_in_DB['id_product'] ?>">
            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
        </form>
    </td>
</tr>
<?php
    }
} else {

?>
<tr>
    <td>NO RESULT IN DB</td>
</tr>

<?php

}



?>