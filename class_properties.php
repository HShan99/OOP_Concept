<?php
class Employee{
    var $emp_id;
    var $first_name;
    var $last_name;
    var $is_active; 
}

$employee_1 = new Employee;
$employee_2 = new Employee;


$employee_1->emp_id = 100;
$employee_1->first_name = "Michel";
$employee_1->last_name = "Ann";

$employee_2->emp_id = 200;
$employee_2->first_name = "Victor";
$employee_2->last_name = "Almeda"; 

echo $employee_1->first_name . " " . "is undergraduate of Colombo University ";
echo "<br>";
echo $employee_2->first_name . " " . "is undergraduate of Rajarata University";
echo "<br><br><br>";

$class_vars = get_class_vars('Employee');
echo "<pre>";
print_r($class_vars) ;
echo "</pre>";

echo "<br><br><br>";

$object_vars = get_object_vars($employee_1);
echo "<pre>";
print_r($object_vars) ;
echo "</pre>";

echo "<br><br><br>";

if(property_exists('Employee','first_name')){
    echo "First name in the Employee class";
}
else{
    echo "First name not in the Employee class";
}


?>