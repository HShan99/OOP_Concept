<?php

class Product{
    var $product_name;
    var $cost_price;
    var $sales_price;
    var $category = "General";

    function display(){
        echo "<b>Product infor</b><br>";
        echo "<b>Name of Product: </b>" . $this->product_name."<br>";
        echo "<b>Sales price of Product: </b>" . $this->sales_price . "<br>";
        echo "<b>Category: </b>" . $this->category . "<br><br><br>";
        
        
    }
}

class Computer extends Product{
    var $hard_disk;
    var $ram;
    var $processor;
    var $category = "Computer";

    function display(){
        echo "<b>Product infor</b><br>";
        echo "<b>Name of Product: </b>" . $this->product_name."<br>";
        echo "<b>Sales price of Product: </b>" . $this->sales_price . "<br>";
        echo "<b>Hard Disk: </b>" . $this->hard_disk . "<br>";
        echo "<b>RAM: </b>" . $this->ram . "<br>";
        echo "<b>Processor: </b>" . $this->processor . "<br>";
        echo "<b>Category: </b>" . $this->category . "<br><br><br>";
        
        
    }
}

$general_product = new Product;
$general_product->product_name = "Acer laptop";
$general_product->sales_price = 290000.00;

$general_product->display();

$computer = new Computer;
$computer->product_name = "Samsung";
$computer->sales_price = 500000;
$computer->hard_disk = "250GB";
$computer->ram = "4GB";
$computer->processor = "Intel core i3 ";

$computer->display();
?>