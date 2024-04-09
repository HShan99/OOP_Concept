<?php

class Employee{
    var $firstName;
    var $lastName;

    function full_name(){
        return $this->firstName . " " . $this->lastName;
    }
}

$employee = new Employee;
$employee->firstName = "Shan";
$employee->lastName = "Rathnayake"; 

echo $employee->full_name();



?>