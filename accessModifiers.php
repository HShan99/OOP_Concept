<?php

class Employee{
    public $short_name = "shan";
    protected $employee_id = 123;
    private $salary = 75000;

    function emp_1(){
        return $this->employee_id;
    }
}

$em_1 = new Employee;

echo $em_1->short_name;
// echo $em_1->employee_id;

echo $em_1->emp_1();



?>