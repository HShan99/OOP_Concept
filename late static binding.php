<?php

class Product{
    public static $category = 'General product';
    
    public static function show_category(){
        // echo "The category is : " . self::$category ."<br>";
        // Use the static key word in this 
        echo "The category is : " . static::$category ."<br>";
    }
    
}

class Computer extends Product{
    public static $category = 'Computers';
}
class Keyboard extends Computer{
    public static $category = 'Keyboard';
}

Product::show_category();
Keyboard::show_category();
Computer::show_category();

// $product_1  = new product;

// $product_1->show_category();





?>