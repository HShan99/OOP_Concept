<?php
class Employee{
    
}
$classes = get_declared_classes();
echo "<pre>";
    print_r($classes);
echo "</pre>";

$class_name = 'mployee';
if(class_exists($class_name)){
    echo ("The class is available");
}
else{
    echo("The class is not available");
}

?>