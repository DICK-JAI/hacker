<?php

class ren{
    // value
    public $name = "niko";
    private $money = 10000;
    protected $age = 60;

    // function __construct(){
    //     echo"niko start dance";
    // }

    public function __construct($name, $money, $age){
        $this->name = $name;    
        $this->money = $money;
        $this->age = $age;
    }


    // method
    public function dance(){
       return "niko can dance";
    }

    // function __destruct(){
    //     echo" end ";
    // }

}
// object
$niko = new ren();
// $ + object name -> value
// $ + object name -> method
echo $niko->name;
// echo $niko->money; //erro
// echo $niko->age; //erro
echo $niko->dance();

?>