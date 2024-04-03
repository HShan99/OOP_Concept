<?php

class Employee{
    
}
class Customer{
    
}

$mike = new Employee;
$david = new Employee;
$vilsan = new Customer;

echo get_class($mike);
echo "</br>";
echo get_class($vilsan);

echo "</br>";

if(is_a($vilsan,'Employee')){
    echo "Mike blongs to the class : Employee ";
}
else{
    echo "Mike does not blongs to the class: Employee";
}
?>