<?php
class Employee {
    public const EPF_RATE = 0.08;
    public $basic_salary = 40000;

    public function calculate(){
        return $this->basic_salary * self::EPF_RATE;
    }
}

$employee_1 = new Employee;

echo "The EPF count is : ". $employee_1->calculate();


?>