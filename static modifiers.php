<?php

class Employee{
    public static $employee_count = 0;
    
    public static function add_employee(){
        self::$employee_count ++;
    }
}

class PartTimeEmployee extends Employee{
    
}

Employee::$employee_count = 2;
echo "The employee count is  : ". Employee::$employee_count;
echo "<br>";

Employee::add_employee();
echo "New count is :" .Employee::$employee_count;

echo "<br>";
PartTimeEmployee:: $employee_count = 20;
echo "This is from PartTimeEmployee class : " .PartTimeEmployee::$employee_count;

//remember that using the static modifiers in the inherited class.Can all the variable values are change in anywhere  
echo "<br>";
echo "This is from Employee class : " . Employee::$employee_count; 

?>