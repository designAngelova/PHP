<?php
class Student {
    public $name;
    public $age;
    public function __construct($name = null, $age = null) {
        $this->name = $name;
        $this->age = $age;
    }
}
$peter = new Student("Peter", 21);
echo $peter->name;
$peter->age = 25;
print_r($peter); // Student Object ( [name] => Peter [age] => 25 )
$maria = new Student('Maria');
print_r($maria); // Student Object ( [name] => Peter [age] => )
