<?php 

class Vehicle{
    protected string $brand;

    public function sound(){
        echo "tít tít";
    }

    public function setBrand (string $brand){
        $this->brand = $brand;
    }

    public function getBrand ($brand){
       return $this->brand;
    }
}

class Car extends Vehicle{
    public int $model;

    public function setModel($model){
        $this->model = $model;
    }

    public function getInfo(){
         echo "Hãng xe: ". $this->brand. "<br>";
         echo "Đời xe: ". $this->model. "<br>";

    }
    public function sound(){
         parent::sound(); 
        //  gọi đến phương thức class cha
        echo "bíp bíp";
    }
}

$myCar = new Car();
$myCar->setBrand("Toyota");
$myCar->setModel(2012);
$myCar->getInfo();
$myCar->sound();

// bài 9 tính đa hình

?>