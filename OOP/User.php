<?php

class User{
    public $name;
    public function __construct(string $ten){
        $this->name = $ten;
        echo "xin chào: ". $this->name;
    }
}

$user = new User("Hùng");
echo "<br>";


class Student{
    public static $amountOfStudent= 5 ;
    public function __construct(){
        
        self::$amountOfStudent++; 
    }
}

$hocSinh = new Student();
echo "Số lượng: " .Student :: $amountOfStudent; 

$hocSinhh2 = new Student();
echo "Số lượng: " .Student :: $amountOfStudent;


// final: dùng để ngăn chặn việc ghi đè
// final class: ngăn chặn việc kế thừa
// final function: ngăn chặn việc ghi đè

class Car{
    private string $color;
    public string $brand;

    public final function info($color, $brand){
        echo "info";
    }
    public function run(){
        echo "Hãng xe: ". $this->brand;
        echo "Màu xe: ". $this->color;
    }
}

class ToYoTa extends Car{
    public function info(){
        
    }
}

$myCar = new Car();