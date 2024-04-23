<?php
class Employee{
    private $basic_salary = 50000;
    
    //Geter method
    public function get_basic_salary(){
        return "Basic salary Rs." .$this->basic_salary."<br>";
    }

    //setter method
    public function set_basic_salary($newValue){
        $this->basic_salary = $newValue;
    }
    
}

class FullTimeEmployee extends Employee{
    
}

$employee_1 = new FullTimeEmployee;
$employee_1->basic_salary = 7100000;
echo $employee_1->basic_salary;

echo "<br>";

echo $employee_1->get_basic_salary();
echo "<br>";

$employee_1->set_basic_salary(250000);
echo $employee_1->get_basic_salary();
?>