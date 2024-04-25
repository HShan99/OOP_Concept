<?php
$x = 100;
$y = $x;

echo "Value of X: {$x} <br>";
echo "Value of Y: {$y} <br>";

$y = 500;

echo "<hr>";
echo "Value of X: {$x} <br>";
echo "Value of Y: {$y} <br>";

class Product{
    public $description;
    public $price;

    public function __construct($desc , $price){
        $this->description = $desc;
        $this->price = $price;
    }
}

// $product_1 = new Product('Laptop','125000');
// $product_2 = $product_1;

// // this method is copy by reference
// in this method like a give new name for the instance
// echo "<hr>";
// echo "product_1 : {$product_1->description} - {$product_1->price} <br>";
// echo "product_2 : {$product_2->description} - {$product_2->price} <br>";

// $product_2->description = "Desktop";
// $product_2->price = 75000;

// echo "<hr>";
// echo "product_1 : {$product_1->description} - {$product_1->price} <br>";
// echo "product_2 : {$product_2->description} - {$product_2->price} <br>";

// copy by value
// For that we use the clone key word
// in this method no effect to the new instance value
$product_1 = new Product('Laptop','125000');
$product_2 = clone $product_1;


echo "<hr>";
echo "product_1 : {$product_1->description} - {$product_1->price} <br>";
echo "product_2 : {$product_2->description} - {$product_2->price} <br>";

$product_2->description = "Desktop";
$product_2->price = 75000;

echo "<hr>";
echo "product_1 : {$product_1->description} - {$product_1->price} <br>";
echo "product_2 : {$product_2->description} - {$product_2->price} <br>";

// copy by reference method for variables
// in that time all the variable value referel to the value
$k = 100;
$m = & $k;

echo "<hr>";
echo "Value of X: {$k} <br>";
echo "Value of Y: {$m} <br>";

$m = 500;

echo "<hr>";
echo "Value of X: {$k} <br>";
echo "Value of Y: {$m} <br>";


?>