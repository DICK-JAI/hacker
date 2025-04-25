<?php
class Person {
    public $name; 
    public $age;  

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello() {
        echo "我的名字是 {$this->name}；我今年 {$this->age} 岁了。";
    }
}

$person = new Person("hacker", 1010);

$person->sayHello();