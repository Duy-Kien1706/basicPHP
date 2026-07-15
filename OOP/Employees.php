<?php


// Trait: giải quyết việc đa kế thừa
abstract class Employees {
    // Phương thức và thuộc tính <trừu tượng hoặc bình thường>
    public function goToWork(){
        echo "Việc đang làm: ";
    }
    // Phương thức trừu tượng
    abstract public function Working();
}

class Engineer extends Employees{
    public function Working(){
        echo "Kỹ sư đang ở công trình <br>";
    }
}

trait  Worker{
    public function index(){
        echo "đây là trait";
    }
}

class Leader extends Employees{
    use Worker;
    public function Working(){
        $this->goToWork();
        echo "Đang quản lí nhân viên <br>";
    }
}



$engineer = new Engineer();
$leader = new Leader();

$engineer->Working();
$leader -> Working();

interface ThanhToan{
    public function chuyenTien(float $soTien);
    public function nguoiChuyen(string $name);
}

class ViMoMo implements ThanhToan{
    public function chuyenTien(float $soTien){
        echo "Đã chuyển ".$soTien . " qua ví momo <br>";
    }
    public function nguoiChuyen(string $name){
        echo "Số tiền được chuyển từ người: ".$name . "<br>";
    }
}

$people1 = new ViMoMo();
$people2 = new ViMoMo();
$people1->chuyenTien(100);
$people1->nguoiChuyen("ahihi");