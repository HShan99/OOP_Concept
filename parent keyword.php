<?php
class Employee{
    public function calc_salary(){
        echo "Calculate salary" ;   
    }
}

class SeniorEmployee extends Employee{
    public function calc_salary(){
        echo "Add additional Allowances...... <br>";
        // echo "Rewrite salary calculation process";

        // in that point parent class function is called
        // using that method we can call original parent class to after overriding also
        parent::calc_salary();
    }
}

$employee = new SeniorEmployee;

$employee->calc_salary();

?>