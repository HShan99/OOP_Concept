<?php

class Employee{
    function greet(){
        return 'Greet function is working';
    }
    function greet2(){
        return 'Greet function is working';
    }
}

$employee_1 = new Employee;

echo $employee_1->greet();
echo "<br><br><br>";
$class_method = get_class_methods('Employee');
echo "<pre>"; 
print_r($class_method);
echo "</pre>";

echo "<br><br><br>";
if(method_exists('Employee','greet')){
    echo "The method is exists";
}
else{
    echo "The method does NOT exists";
}
?>