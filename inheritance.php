<?php

class Product{
    var $product_name;
    var $cost_price;
    var $sales_price;

    function calculate_sales_price(){
        $this->sales_price = round($this->cost_price * 1.2,2);
    }
}

class Computer extends Product{
    var $processor;
    var $hard_disk;
    var $ram;
}

class Garment extends Product{
    
}
class MobilePhone extends Computer{
    
}

$my_product = new Computer;
$my_garment = new Garment;

$my_product->product_name = "Apple mac book";
$my_product->cost_price = 20000.00;
$my_product->calculate_sales_price();
$my_product->ram = "4GB";


$my_array = get_object_vars($my_product);

echo "Object variable of My product";
echo "<pre>";
print_r($my_array);
echo "</pre>";

echo "<br>";
echo "what is the parent object of my_garment";
echo "<br>";
echo get_parent_class($my_garment);

echo "<br>";echo "<br>";

if(is_subclass_of('Garment','Product')){
    echo "Garment is subclass of Product";
}
else{
    echo "Garment is NOT subclass of Product";
}


echo"<br><br>";
echo "Getting parent class of Computer";

$parent = class_parents('MobilePhone');
echo"<pre>";
print_r($parent);
echo"</pre>";

?>