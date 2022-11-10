  <?php

    $product = $_POST["product-name"];
    $weight = $_POST["weight"];
    $date = $_POST["date"];
    $price = $_POST["price"];



    class DBT
    {
        public $productName;
        public $weight;
        public  $date;
        public $price;

        function __construct($productName, $weight, $date, $price)
        {
            $this->productName = $productName;
            $this->weight = $weight;
            $this->date = $date;
            $this->price = $price;
        }

        function get_obj()
        {
            $this->productName;
            $this->weight;
            $this->date;
            $this->price;
        }

        function get_name()
        {
            return $this->productName;
        }

        function get_weight()
        {
            return $this->weight;
        }

        function get_date()
        {
            return $this->date;
        }

        function get_price()
        {
            return $this->price;
        }
    }

    $newItem = new DBT($product, $weight, $date, $price);


    

    // echo $newItem->get_obj();
    // echo $newItem->get_name();
    echo "<pre>";
    var_dump($newItem);
    echo "</pre>";

    // echo $newItem->date


    // echo $newItem.get_obj
    // echo "<br>";
    // echo $newItem->get_weight();
    // echo "<br>";
    // echo $newItem->get_date();
    // echo "<br>";
    // echo $newItem->get_price();

    ?>